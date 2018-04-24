/*!
 * template parser client js for morningtrain
 * Copyright(c) 2018 Lijo E John
 * MIT Licensed
 */
 $(document).ready(function(){
	 
	$.ajax({
		url: "api.php",
		type: 'POST',
		data: {"method":"get_template"},
		cache: false,
		dataType: 'json',
		success: function(data) 
		{ 
			//Update the DOM.
			if (data.status == 1)
			{
				$("#content_section").html(data.data);
			}
		}
	});
	
	$("#parse").click(function(){
		$.ajax({
			url: "api.php",
			type: 'POST',
			data: {"method":"set_template","employee_name":$("#employee_name").val(),"company_name":$("#company_name").val(),"date":$("#date").val(),"department_name":$("#department_name").val()},
			cache: false,
			dataType: 'json',
			success: function(data) 
			{ 
				//Update the DOM.
				if (data.status == 1)
				{
					$("#content_section").html(data.data);
				}
			}
		});
	});
	
});