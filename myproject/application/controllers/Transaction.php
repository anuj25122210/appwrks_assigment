<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("transaction_model");
    }
	
	public function index()
	{
		$data = array();
		$data["transaction_list"] = $this->transaction_model->getAllTransactions();
		$this->load->view('transactionList',$data);
	}
	
	public function fnGotoAddTransaction()
	{
		$this->load->view('addTransaction');
	}
	
	public function fnAddTransaction()
	{
		$data = $insertArr = array();
		
		$transactionType = $this->input->post("transaction_type");
		$amount = $this->input->post("amount");
		$description = $this->input->post("description");
		
		$transaction_list = $this->transaction_model->getAllTransactions(1);
		
		if($transactionType == "credit"){
			if(isset($transaction_list) && !empty($transaction_list)){
				$finalAmount = $transaction_list->running_balance + $amount;
				$insertArr = array(
					"description" => $description,
					"credit" => $amount,
					"running_balance" => $finalAmount
				);
			}else{
				$insertArr = array(
					"description" => $description,
					"credit" => $amount,
					"running_balance" => $amount
				);
			}
		}else if($transactionType == "debit"){
			if(isset($transaction_list) && !empty($transaction_list)){
				if($transaction_list->running_balance >= $amount){
					$finalAmount = $transaction_list->running_balance - $amount;
				}else{
					$finalAmount = 0;
					echo 1;
					die();
				}
				$insertArr = array(
					"description" => $description,
					"debit" => $amount,
					"running_balance" => $finalAmount
				);
			}else{
				echo 1;
				die();
			}
		}
		$result=$this->transaction_model->addTransaction($insertArr);
		if($result){
			echo 2;
		}
	}	
}
