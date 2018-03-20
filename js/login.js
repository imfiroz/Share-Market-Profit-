/**
 * 
 */
$(document).ready(function() {
	
		"use strict";
	
        var form_register_2 = $('#login-form');
        var error_register_2 = $('.alert-danger', form_register_2);
        var success_register_2 = $('.alert-success', form_register_2);

        form_register_2.validate({
            errorElement: 'div', //default input error message container
            errorClass: 'vd_red', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
				
                email: {
                    required: true,
                    email: true
                },				
                password: {
                    required: true,
					minlength: 6
                },
				
            },
			
			errorPlacement: function(error, element) {
				if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")){
					element.parent().append(error);
				} else if (element.parent().hasClass("vd_input-wrapper")){
					error.insertAfter(element.parent());
				}else {
					error.insertAfter(element);
				}
			}, 
			
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success_register_2.hide();
                error_register_2.show();


            },

            highlight: function (element) { // hightlight error inputs
		
				$(element).addClass('vd_bd-red');
				$(element).parent().siblings('.help-inline').removeClass('help-inline hidden');
				if ($(element).parent().hasClass("vd_checkbox") || $(element).parent().hasClass("vd_radio")) {
					$(element).siblings('.help-inline').removeClass('help-inline hidden');
				}

            },

            unhighlight: function (element) { // revert the change dony by hightlight
                $(element)
                    .closest('.control-group').removeClass('error'); // set error class to the control group
            },

            success: function (label, element) {
                label
                    .addClass('valid').addClass('help-inline hidden') // mark the current input as valid and display OK icon
                	.closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
				$(element).removeClass('vd_bd-red');

					
            },

            submitHandler: function (form) {
            	$(form).find('#login-submit').text('loading...').addClass('disabled').attr('disabled');					
                
				var username=document.getElementById("email").value;
				var password=document.getElementById("password").value;
			  var xhttp;    
			  if (username == "" || password == "") {
				  notification("topright","error","fa fa-exclamation-circle vd_red","Oops","Invalid Login.");
			    return;
			  }
			  xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
			    if (xhttp.readyState == 4 && xhttp.status == 200) {
			    	var creditials=xhttp.responseText;
			    	var creditials1=creditials.split(",");
			    	var email=creditials1[0];
			    	var pass=creditials1[1];
			    	var access=creditials1[2];
			    	var first_time_flag=creditials1[3];
			    	if(username == email && password == pass && first_time_flag==0)
		    		{
		    		location.href="home_company_details";
		    		}else
			    	if(username == email && password == pass &&(access == "Admin" || access == "Business Manager"))
			    		{
			    		location.href="erp_home";
			    		}
			    	else if(username == email && password == pass &&(access == "Accountants" || access == "Sales" || access == "Purchase") || access == "Inventory"){
			    			location.href="home_workplace";
			    		}
			    		else if(email == "Expired" && pass == "Expired"){
			    			document.getElementById("password").value="";
				    		/*notification("topright","error","fa fa-exclamation-circle vd_red","Sorry","Subscription Expired");
				    		$(form).find('#login-submit').text('Login').removeClass('disabled').attr('disabled');*/
			    			location.href="home_change_plan_exp";
			    		}
			    		else
				    		if(email == "" && pass == ""){
				    			document.getElementById("password").value="";
					    		notification("topright","error","fa fa-exclamation-circle vd_red","Sorry","User Doest Not Exist");
					    		$(form).find('#login-submit').text('Login').removeClass('disabled').attr('disabled');
				    		}
			    	else 
			    		{
			    		document.getElementById("password").value="";
			    		notification("topright","error","fa fa-exclamation-circle vd_red","Sorry","Wrong Creditials.");
			    		$(form).find('#login-submit').text('Login').removeClass('disabled').attr('disabled');	
			    		}
			    }
			  };
			  xhttp.open("GET", "erp_login?email="+username+"&password="+password, true);
			  xhttp.send();
            }
        });	
	
	
});