<?php 
    include('config/dbconnect.php');
    session_start();
    $username = $_SESSION['username'];

    if(isset($_POST['prID'])){
        $prID = $_POST['prID'];
        $sql = "DELETE FROM cart WHERE pr_id = '$prID' AND c_id = '$username'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 1;
        }
    }
?>