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

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
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

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
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

	</style>
</head>
<body>

<div id="container">
	<h1>New Transaction</h1>
	<?php echo validation_errors(); ?>  
	<form id="formAddTransaction" name="formAddTransaction" method="POST">
		<table>
	  <tr>
	    <td>Transaction Type</td>
	    <td>
					<select style="width:8.75em" name="transaction_type" id="transaction_type" >
						<option value="credit">Credit</option>
						<option value="debit">Debit</option>
					</select>
			</td>
	  </tr>
	  <tr>
	    <td>Amount</td>
	    <td><input type="text" id="amount" name="amount" id="amount"></td>
	  </tr>
	  <tr>
	    <td>Description</td>
	    <td><input type="text" id="description" name="description" id="description"></td>
	  </tr>
	  <tr>
	  	<td>
	  		<button class="btn btn-primary" type="button" id="btn-save"> Save</button>
	  		<button class="btn btn-primary" type="button" onclick="location.href='<?php echo base_url();?>'"> Cancel</button></td>
	  </tr>
	</table>
	</form>	
</div>
	
	<div class="common_data" data-base_url="<?php echo base_url(); ?>"></div>

	<script src="<?php echo base_url();?>assets/js/jquery-3.4.1.min"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.min"></script>
	<script src="<?php echo base_url();?>assets/js/validate.min"></script>
	<script src="<?php echo base_url();?>assets/js/common.js"></script>
</body>
</html>