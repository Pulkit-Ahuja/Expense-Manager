<?php 
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "expense");

    $strSql = "SELECT * FROM expense order by sno desc";
    echo "<div class='alert alert-success' role='alert'>Transactions retrieved successfully!!</div>";
    echo "<h3>All Transactions</h3>";
    echo "<table class='table'><thead class='thead-dark'><tr><th scope='col'>Sno</th><th scope='col'>Amount</th><th scope='col'>Details</th><th scope='col'>Date</th></tr></thead>";
    if ($data = mysqli_query($con, $strSql)) {
        while($row = mysqli_fetch_array($data)){
            echo "<tr><td>$row[sno]</td><td>$row[amount]</td><td>$row[details]</td><td>$row[date]</td></tr>";
        }
        echo "</table>";
    }
    else{
        echo mysqli_error($con);
    }
?>