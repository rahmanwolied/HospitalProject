<?php include('templates/header.php'); 
$username = $_SESSION['username'];
?>

<script src='js/orders.js'></script>
<link rel="stylesheet" href="templates/cart.css">

<main>
    <div class='cart' id="orders" <?php echo "data-username='{$username}'"?>>
        <h1 id="message">your orders</h1>
    </div>
</main>
