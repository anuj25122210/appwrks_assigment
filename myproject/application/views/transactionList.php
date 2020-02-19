<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

		<style type="text/css">

		::selection { background-color: #E13300; color: white; }
		::-moz-selection { background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		#body {
			margin: 0 15px 0 15px;
		}

		#container {
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}

		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		.btn-add{
			float: right;
			padding: 5px;
			margin: 5px;
		}

	</style>
</head>
<body>

<div id="container">
	<h1>Office Transactions</h1>
	<div><button class="btn-add" type="button" onclick="location.href='<?php echo base_url();?>addtransaction'"> Add Transaction</button></div>
	<table>
  <tr>
    <th>Date</th>
    <th>Description</th>
    <th>Credit</th>
    <th>Debit</th>
    <th>Running Balance</th>
  </tr>
  <?php
	if(isset($transaction_list) && !empty($transaction_list))
	{
		foreach($transaction_list as $transaction){
    	$trxDate = date("m-d-Y", strtotime($transaction->date));  
	?>
	  <tr>
	    <td><?php echo $trxDate; ?></td>
	    <td><?php echo $transaction->description; ?></td>
	    <td><?php echo $transaction->credit; ?></td>
	    <td><?php echo $transaction->debit; ?></td>
	    <td><?php echo $transaction->running_balance; ?></td>
	  </tr>
	<?php
		}
	}
	?>
</table>
	
</div>

</body>
</html>