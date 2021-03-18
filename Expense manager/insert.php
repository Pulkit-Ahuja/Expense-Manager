<?php 
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "expense");

    $amount = isset($_POST['amount']) ? $_POST['amount'] : '';
    $details = isset($_POST['details']) ? $_POST['details'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';
    
    if ($details != "Salary" && $details != "Bonus")
    {
        $amount = -1 * (int)$amount;
    }
    
    $strSql = "INSERT INTO expense VALUES(null,'$amount', '$details', '$date')";

    if (mysqli_query($con, $strSql)) {
        echo "<div class='alert alert-success' role='alert'>Transaction stored successfully!!</div>";
    }
    else{
        echo mysqli_error($con);
    }
?>