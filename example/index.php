

<?php $title = 'Home';
require_once '_header.php';
require_once 'database/connection.php';
$query='SELECT id,name,slug,image,price FROM products';
$stmt=$connection->prepare($query);
$stmt->execute();
$products =$stmt->fetchAll();



?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Welcome to our store!</h1>
            <p class="lead text-muted">Browse our products and buy easily.</p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?php foreach($products as $product): ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 src="<?php echo $product['image']; ?>" alt="">

                            <div class="card-body">
                                <p class="card-text"><?php echo $product['name']; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <form action="cart.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                                            <button type="submit" class="btn btn-success btn-block" name="add">
                                                Add to Cart
                                            </button>
                                        </form>
                                    </div>
                                    <span class="text-muted">BTD <?php echo $product['price'];?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

</main>
<?php require_once '_footer.php'; ?>