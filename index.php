<?php 
    include('templates/header.php'); 

    $sql = 'SELECT * FROM products';
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
?>

<main>
    <img src="assets/img-city 1.svg" alt="hero-image">

    <div class="hero-text">
        <h1>
            PharmAir
        </h1>
        <p>
            Experience fast and innovative delivery with 
            our cutting-edge drone technology.
        </p>
    </div>

    <div>
        <a href="reg_register.php" class="btn btn-full">
            <span class="btn-text">Get Started</span>
        </a>
    </div>
</main>

<div class="search-section">
    <div class="search-text">
        <h1>
            See if we have your medication.
        </h1>
        <p>
            We have a wide variety of medications available for delivery.
        </p>
    </div>

    <div class="search-form">
        <div class="nav-wrapper">
            <form>
                <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </div>
</div >

<div class="products-div">
    <h1>
        Shop Common Medicines
    </h1>
    <div class="products">
        <?php foreach($products as $product): ?>
            <div class="col s12 m7">
                <div class="card">
                    <div class="card-image">
                        <?php echo '<img src="'.$product['img'].'">';?>
                    </div>
                    <div class="card-content">
                        <p><?php echo $product['name']?></p>
                        <p>৳<?php echo $product['price']?></p>
                        <p><?php if($product['stock_quantity'] == 0){
                            $in_stock = false;
                        }else{
                            $in_stock = true;
                        }?></p>
                    </div>
                    <div class="card-action">
                        <?php if($in_stock){
                            echo '<a href="#">Add to Cart</a>';
                        }
                        else{
                            echo '<p style="color:red">Out of Stock</p>';
                        }
                            ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
</div>

</html>

