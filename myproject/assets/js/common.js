var base_url = $(".common_data").data("base_url");

jQuery(document).on("click","#btn-save",function() {

	var transaction_type = 	jQuery("#transaction_type").val()
	var amount = 	jQuery("#amount").val()
	var description =	jQuery("#description").val()
	jQuery("#formAddTransaction").validate({
    rules: {
      amount: "required",
      description: "required"
    },
    messages: {
      amount: "Please enter amount",
      description: "Please enter description"
    }
  });
  if(!jQuery("#formAddTransaction").valid()){
		return false;
  }

	 jQuery.ajax({
			url: base_url + "transaction/fnAddTransaction",
			type: "POST",
			data: {transaction_type:transaction_type, amount:amount, description:description},
			success: function (data) {
				if(data == 1){
					alert("The entered amount is greater than the running balance");
				}else if(data == 2){
					window.location.replace(base_url);
				}
			}
		});	
});