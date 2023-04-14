<?php 
    include('config/dbconnect.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PharmAir</title>
        <!-- stylesheet -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="templates/style.css">
    </head>

    <body>
        <header>
            <nav>
                <div class="logo">
                    <img src="assets/Group 1.svg" alt="icon">
                    <a href="index.php">PharmAir</a>
                </div>
                <ul>
                    <?php
                        if(isset($_SESSION['username'])){
                            echo "<li><a href='index.php'><button>{$_SESSION['username']}</button></a></li>
                                <form action='logout.php'>
                                    <li><button type='submit'>Logout</button></li>
                                </form>";
                        }
                        else{
                            echo '<li><button data-modal-target="#login-modal">Login</button></li>
                            <li>
                                <a href="reg_ask.html">
                                    <button href="reg_register.php" >Register</button>
                                </a>
                            </li>';
                        }
                    ?>

                </ul>

            </nav>
        </header>
            
