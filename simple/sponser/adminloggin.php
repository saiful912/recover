<?php
session_start();
$message=null;
$type='success';
if (isset($_POST['loggin'])){
    $email=strtolower(trim($_POST['email']));
    $password=trim($_POST['password']);

    require_once 'database/connection.php';
    $query='SELECT id,adminname,email,password,photo FROM admin WHERE email=:email';
    $stmt=$connection->prepare($query);
    $stmt->bindParam(':email',$email);
    $stmt->execute();
    $user=$stmt->fetch();
    if ($user){
        if (password_verify($password,$user['password'])===true){
            $_SESSION['id']=$user['id'];
            $_SESSION['email']=$user['email'];
            $message='Admin logged in';
            header('Location: index.php');
        }else{
            $message='Invailed credentials. ';
            $type='danger .';
        }
    }else{
        $message='user not found';
        $type='danger';
    }

}
?>




<?php require_once '_header.php'; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Admiin Loggin From</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php if (isset($message)):?>
        <div class="alert alert-<?php echo $type;?>">
            <?php echo $message ?>
        </div>
    <?php endif; ?>
    <form class="form-signin" action="" method="post" enctype="multipart/form-data">
        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Admin Logg In</h1>
        <label for="inputEmail" class="sr-only ">Email address</label>
        <input type="email" id="inputEmail" class="form-control w-75" name="email" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mt-3  w-75 " name="password" placeholder="Password" required >
        <button class="btn btn-lg btn-primary btn-block mt-5  w-75 " type="submit" name="loggin">Loggin</button>
        <p class="mt-5 mb-3 text-muted">@2019-2021</p>
    </form>
</div>
<?php require_once '_footer.php'; ?>
</body>
</html>