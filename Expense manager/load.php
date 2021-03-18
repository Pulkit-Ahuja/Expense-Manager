<?php 
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "expense");

    $month = isset($_POST['month']) ? $_POST['month'] : '';
    $income = 0;
    $savings = 0;
    $expenditure = 0;

    $strSql = "SELECT SUM(amount),details FROM expense where month(date) = $month group by details";
    echo "<div class='alert alert-success' role='alert'>Transaction retrieved successfully!!</div>";
    echo "<h3>Transactions for the month $month</h3>";
    echo "<table class='table'><thead class='thead-dark'><tr><th scope='col'>Amount</th><th scope='col'>Details</th></tr></thead>";
    if ($data = mysqli_query($con, $strSql)) {
        while($row = mysqli_fetch_array($data)){
            echo "<tr><td>";
            echo $row['SUM(amount)'];
            echo "</td><td>$row[details]</td>";
            if ($row['details'] == "Salary" || $row['details'] == "Bonus")
            {
                $income = $income + (int)$row['SUM(amount)'];
            }
            else{
                $expenditure = $expenditure + (int)$row['SUM(amount)'];
            }
        }
        echo "</table>";
        $savings = $income + $expenditure;
        echo "<h3>Cumulative data:</h3>";
        echo "<table class='table'><thead class='thead-dark'><tr><th scope='col'>Income</th><th scope='col'>Expenditure</th><th scope='col'>Savings</th></tr></thead>";
        echo "<tr><td>$income</td><td>$expenditure</td><td>$savings</td></table>";
    }
    else{
        echo mysqli_error($con);
    }
?>