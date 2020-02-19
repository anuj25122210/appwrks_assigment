<?php 
	class Transaction_model extends CI_model {

		public function getAllTransactions($limit = Null)
		{
			$this->db->select("*");
			$this->db->from("`company_transactions`");
			$this->db->order_by("date", "DESC");
			$query_result = $this->db->get();
			if($limit){
				$this->db->limit($limit);
				return $query_result->row();
			}else{
				return $query_result->result();
			}
		}
		
		function addTransaction($data)
		{
			$this->db->insert("`company_transactions`",$data);
			$insert_id = $this->db->insert_id();
			return  $insert_id;
		}
	}
?>