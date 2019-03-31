<?php
$message=null;
if (isset($_POST['register'])){
    $username=trim($_POST['username']);

    $email=strtolower(trim($_POST['email']));

    $password=trim($_POST['password']);

    $password=password_hash($password,PASSWORD_BCRYPT);

    if (!empty($_FILES['photo']['tmp_name'])){

        $name=$_FILES['photo']['name'];

        $filename_parts=explode('.',$name);

        $extension=end($filename_parts);
        $new_filename=uniqid('pp_', true).time(). '.' . $extension;

        move_uploaded_file($_FILES['photo']['tmp_name'], 'database/uploads/profile_photo/'.$new_filename );
        $message='File uploaded ';
    }

    $photo=$new_filename;


    require_once 'database/connection.php';
$query='INSERT INTO users(`username`,`email`,`password`,`photo`) VALUES (:username,:email,:password,:photo)';

$stmt=$connection->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password );
$stmt->bindParam(':photo', $photo );
$response=$stmt->execute();

if ($response){
    $message='Registration Successful .';

}else{
    $message='Registration unsuccessfull .';

}
}
?>
<?php require_once '_header.php'; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Hello From</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php if (isset($message)):?>
        <div class="alert alert-success">
            <?php echo $message ?>
        </div>
    <?php endif; ?>
    <form class="form-signin" action="" method="post" enctype="multipart/form-data">
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Register</h1>

        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control mb-3 w-50" name="username" placeholder="Username" required>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control mb-3  w-50" name="email" placeholder="Email address" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-3  w-50" name="password" placeholder="Password" required >

        <label for="inputPhoto" class="sr-only">Photo</label>
        <input type="file" name="photo" class="form-control mb-3  w-50" required>

        <button class="btn btn-lg btn-primary btn-block mt-5  w-50" type="submit" name="register">Register</button>
        <p class="mt-5 mb-3 text-muted">@2019-2021</p>

    </form>
</div>
</body>
<?php require_once '_footer.php'; ?>
</html>
