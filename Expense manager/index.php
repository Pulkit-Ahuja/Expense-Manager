<!DOCTYPE html>
<head>
	<title>Expense Manager</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<link href='https://fonts.googleapis.com/css?family=Fauna One' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Charmonman' rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Cherry Swash' rel='stylesheet'>
	<script src="script.js"></script>
	<script src="jquery-3.5.1.js"></script>
	<script>
		$(document).ready(function(){
			$('#insert').click(function(event){
				event.preventDefault();
				$.ajax({
					url : "insert.php",
					method : "post",
					data : $('#trans').serialize(),
					dataType : "html",
					success: function(strMessage) {
						$('#message').html(strMessage)
					}
				})
			})
			$('#load').click(function(event){
				event.preventDefault();
				$.ajax({
					url : "load.php",
					method : "post",
					data : $('#tracker').serialize(),
					dataType : "html",
					success: function(strMessage) {
						$('#output').html(strMessage)
					}
				})
			})
			$('#all').click(function(event){
				event.preventDefault();
				$.ajax({
					url : "alltrans.php",
					dataType : "html",
					success: function(strMessage) {
						$('#output').html(strMessage)
					}
				})
			})
		})
	</script>
</head>
<body>
	<h1>Expense Manager</h1>
	<span class="slogan">Your digital assistant</span>
	<div class = nav>
		<button type="button" onclick = "home();">Home</button>
		<button type=button onclick="disptrans();">Add a Transaction</button>
		<button type="button" onclick="disptracker();">Monthly Tracker</button>
		<button type="button" name = "all" id="all" onclick="alltrans();">All Transactions</button>
	</div>
		<p id = "message">

		</p>
	<div class = "msg">
		<span class = "hello">Hello User</span>
		<p>This is a sample expense manager to monitor your monthly income, your savings and your
			expenditure. The program facilitates you to track your expenses on food, healthcare, travel and
			many more.<br/>
			The whole idea was to provide:
		</p>
		<ol>
			<li>An app to track your monthly savings, expenditure and income(bonus included)</li>
			<li>To fetch your entire expense and savings history in a glance
		</ol>
		<p class="end">
			We hope to receive positive feedback from you.
		</p>
	</div>
	<div id="form1">
		<p><strong>
			Please fill the required details for the transaction</strong>
		</p>
		<form action="" method="post" id="trans" name="trans">
		<table>
			<tr><td><label for="amount">Amount</label></td>
			<td><input id="amount" type="number" name="amount" value="1000"></td></tr>
			<tr><td><label for="details">Details</label></td>
			<td><select name="details" id="details">
				<option value="Salary">Salary</option>
				<option value="Bonus">Bonus</option>
				<option value="Healthcare">Healthcare</option>
				<option value="Travel">Travel</option>
				<option value="Food">Food</option>
				<option value="Entertainment">Entertainment</option>
				<option value="Others">Others</option>
			</select></td></tr>
			<tr>
			<td><label for="date">Date</label></td>
			<td><input type="date" name="date" id="date">
			</tr>
		</table>
		<input type="submit" name="insert" id="insert"></td>
		</form>
	</div>
	<div id="form2">
		<p>
			<strong>Please select a month to proceed.</strong>
		</p>
	<form id="tracker" method="post" name="tracker">
		<label for="month">Month</label>
		<select name="month" id="month">
			<option value=01>January</option>
			<option value=02>February</option>
			<option value=03>March</option>
			<option value=04>April</option>
			<option value=05>May</option>
			<option value=06>June</option>
			<option value=07>July</option>
			<option value=08>August</option>
			<option value=09>September</option>
			<option value=10>October</option>
			<option value=11>November</option>
			<option value=12>December</option>
		</select>
		<input type = "submit" id = "load" name = "load">
		<p>
			<strong>Note: Empty tables will be returned in case no data found</strong>
		</p>
	</form>
	</div>
	<div id="output">
	</div>
</body>
</html>
