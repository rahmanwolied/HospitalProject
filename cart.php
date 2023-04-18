<?php
    include('config/dbconnect.php');
    include('templates/header.php');
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM orders WHERE c_id = '$username'";
    $result = mysqli_query($conn, $sql);
    $cart_id = mysqli_num_rows($result) + 1;

    $sql = "SELECT * FROM cart WHERE c_id = '$username' AND cart_id = '$cart_id'";
    $result = mysqli_query($conn, $sql);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="js/cart.js"></script>
<link rel="stylesheet" href="templates/cart.css">
<link rel="stylesheet" href="templates/style.css">

<main>

    <div class="cart">
        <?php 
        if(count($items) == 0){
            echo "<h1>Your cart is empty</h1>";
        }
        else{
            ?>

<table>
    <div id="message"></div>
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $item): 
            $sql = "SELECT * FROM product WHERE ID = {$item['pr_id']}";
            $result = mysqli_query($conn, $sql);
            $product = mysqli_fetch_assoc($result);
            ?>
        <tr>
            <td class="image">
                <?php echo "<img src='{$product['Img']}' alt='Product Image'>"?>    
                <?php echo "<p>{$product['Name']}</p>" ?>
            </td>
            <td class="price">
                <?php echo "<p>৳ {$product['Price']}</p>" ?>
            </td>
            <td class="quantity">
                <div class="number-counter">
                    <button class="minus">-</button>
                    <input class="quantity_field" type="number" <?php echo "value='{$item['quantity']}' min='1' data-prod-id='{$product['ID']}' max = '{$product['Stock_Quantity']}'"?> >
                    <button class="plus">+</button>
                </div>
            </td>
            <td class="subtotal">
                <?php $subtotal = $product['Price'] * $item['quantity']; 
                echo "<p>৳ {$subtotal}</p>"; ?>
            </td>
            <td class="actions">
                <button class='trash-btn' <?php echo "data-pr-id='{$product['ID']}'"?> ><i class="fas fa-trash"></i></button>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td class="totals" id="subtotal"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td class="totals" id="discount" style="color:red"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td class="totals" id="total"></td>
        </tr>
    </tbody>

</table>


<button id="checkout">Proceed to checkout</button>

<?php } ?>
</div>

<div class="login-card" id='payment-modal'>

    <div class="pay_methods" data-method='Cash on Delivery'> <img src="https://cdn-icons-png.flaticon.com/512/1554/1554401.png" alt="cod"></div>
    <div class="pay_methods" data-method='Bkash'> <img src="https://seeklogo.com/images/B/bkash-logo-0C1572FBB4-seeklogo.com.png" alt="bkash"></div>
    <div class="pay_methods" data-method='Nagad'> <img src="https://play-lh.googleusercontent.com/OaoUA4XEfyeGaPPnO8Rioaa0m1Mf4300F-qRPXcTfNTPSjKxwUX-QNyy06nYreg88PrY" alt="nagad"></div>

    <button id='close-modal' class="close-button">&times;</button>
</div>

<div class="overlay" id="overlay"></div>

</main>