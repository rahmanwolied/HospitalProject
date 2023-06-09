<?php 
    include('templates/header.php'); 
    include('login.php');
    
    $sql = 'SELECT * FROM product';
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>


<script src="js/login.js"></script>
<script src="js/cart.js"></script>

<main>
    <section class="hero">
        <div class="hero-text">
            <h1>PharmAir</h1>
            <p>
                Experience fast and innovative delivery with 
                our cutting-edge drone technology.
            </p>
        </div>
        
        <a class="get-started" href="reg_ask.html">
            Get Started
        </a>
    </section>
    
    <section class="search-section">
        <div class="search-text">
            <h1>
                See if we have your medication.
            </h1>
            <p>
                Just search for your medication to find low prices.
            </p>
        </div>
        
        
        <form>
            <input id="search" type="search" class='search-input'>
            <input type="submit" value="Search" class="btn">
        </form>
        
        
    </section>
    
    <section class="products-section">
        <h1>
            Shop Common Medicines
        </h1>
        <div class="products">
            <?php foreach($products as $product): ?>
                <div class="card">
                    <div class="card-image">
                        <?php echo '<img src="'.$product['Img'].'">';?>
                    </div>
                    <div class="card-content">
                        <div class="message" <?php echo "id = '{$product['ID']}'"?>></div>
                        <p><?php echo $product['Name']?></p>
                        <p>৳<?php echo $product['Price']?></p>
                        <?php if($product['Stock_Quantity'] == 0){
                            echo "<button disabled>Out of Stock</button>";
                        }else{
                            echo "<button class='cart-btn' data-product-id ='{$product['ID']}'>Add to Cart</button>";
                        }?>
                    
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </section>
    </main>
    
    <div class="login-card" id='login-modal'>
        <div class="login-img">
            <img src="assets/img1.jpeg" alt="">
        </div>
        
        <div class="login-content">
            <h1>Login</h1>
        <div class="form-content">
            <form action="index.php" method="POST" id="login-form">
                <div id="error"></div>
                <div>
                    <input type="text" class="input-field" id="username" name="username" placeholder="Username">
                </div>
                <div>
                    <input type="password" class="input-field" id="password" name="password" placeholder="Password">
                </div>
                <input type="submit" class="submit-btn" name="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="reg_register.php">Register</a></p>
        </div>
    </div>
    <button data-close-button class="close-button">&times;</button>
</div>

<div class="overlay" id="overlay"></div>

<?php include('templates/footer.php') ?>

<script src="js/scripts.js"></script>

</html>