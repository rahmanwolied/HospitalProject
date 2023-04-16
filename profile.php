<?php
    include('config/dbconnect.php');
    include('templates/header.php');
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM customers WHERE C_ID = '$username'";
    $result = mysqli_query($conn, $sql);
    $customer = mysqli_fetch_assoc($result);
    $sql = "SELECT * FROM cart WHERE c_id = '$username'";
    $result = mysqli_query($conn, $sql);
    $cart_items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<link rel="stylesheet" href="style.css">
<main>
    <div class="sidebar">
        <div class="logo-details">
            <span class="logo_name"> <?php echo $username?></span>
        </div>
        <ul class="nav-links">
            <li>
            <a href="#">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">View Cart</span>
            </a>
            </li>
            <li>
            <a href="#">
                <i class='bx bx-list-ul' ></i>
                <span class="links_name">Order list</span>
            </a>
            </li>

        </ul>
    </div>

</main>