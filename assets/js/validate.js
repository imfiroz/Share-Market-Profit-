
function ValidateAlpha(event)
    {
		//alert(event);
	var keyCode = (event.which) ? event.which : event.keyCode;
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 122 && keyCode != 32))
	{
         
        return false;
    }
        return true;
}
	

function ValidateAlphanum(event)
    {
		
	var keyCode = (event.which) ? event.which : event.keyCode;
    if ((keyCode < 48 || keyCode > 57) && (keyCode < 65 || keyCode > 122 && keyCode != 32))
	{
         
        return false;
    }
        return true;
}
function isNumber(event) 
{ 

  

	var keyCode = (event.which) ? event.which : event.keyCode;

	 var a = [];
                var k = event.which;
		//alert(event.which);

     if ((keyCode < 48 || keyCode > 57 && keyCode != 32))
	{
         
        return false;
    }
	
        return true;
		
}





function show()
{
	var keyCode = (event.which) ? event.which : event.keyCode;
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123 && keyCode != 32))
	{
         
        return false;
    }
        return true;
}


function ValidateEmailAdd()
{
	
	 var mail=document.getElementById("txt_email").value;
	
	
   
    //alert(mail);
    var helpemail=document.getElementById("email");
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(mail.match(mailformat))
		{


      helpemail.innerHTML = "";
	  //$("#disp").html("");
	document.getElementById("btnCustLogin_bn").disabled = false;
        }
  
	else if(mail.value=="")
	{
     helpemail.style.color = 'red';
      helpemail.innerHTML = "Please Enter valid email";
      mail.value="";
     
	}
	else
	{
	//$("#disp").html("");
    helpemail.style.color = 'red';
      helpemail.innerHTML = "Please Enter valid email";
      //$("#mail").val("");
      //mail.focus();
      document.getElementById("btnCustLogin_bn").disabled = true; 
  
	}

if(mail.value=="")
	{
//$("#disp").html("");
	}
	//alert(mail);
     //   var url="<?php echo base_url();?>welcome/check_email/";
				if(mail!="" && mail.match(mailformat))

				{   
						$.ajax({	
              			 
 						  url: "../welcome/check_email/", 
						  method:"POST",
						  data: "email="+mail,
						 // processData: false,
						 // contentType: false,
						 // type:"JSON",
						  success: function(data)  
					             {	
								//alert(data);
								$("#email").html(data);
							     }		
							   
                             });
				}
			return false;
			
	
}
function ValidateEmailAdd_tax_payer()
{
	
	 var mail=document.getElementById("txt_email").value;
	
	
   
    //alert(mail);
    var helpemail=document.getElementById("email");
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(mail.match(mailformat))
		{


      helpemail.innerHTML = "";
	  //$("#disp").html("");
	document.getElementById("btnSave").disabled = false;
        }
  
	else if(mail.value=="")
	{
     helpemail.style.color = 'red';
      helpemail.innerHTML = "Please Enter valid email";
      mail.value="";
     
	}
	else
	{
	//$("#disp").html("");
    helpemail.style.color = 'red';
      helpemail.innerHTML = "Please Enter valid email";
      //$("#mail").val("");
      //mail.focus();
      document.getElementById("btnSave").disabled = true; 
  
	}

if(mail.value=="")
	{
//$("#disp").html("");
	}
	//alert(mail);
     //   var url="<?php echo base_url();?>welcome/check_email/";
				if(mail!="" && mail.match(mailformat))

				{   
						$.ajax({	
              			 
 						  url: "welcome/check_email/", 
						  method:"POST",
						  data: "email="+mail,
						 // processData: false,
						 // contentType: false,
						 // type:"JSON",
						  success: function(data)  
					             {	
								//alert(data);
								$("#email").html(data);
							     }		
							   
                             });
				}
			return false;
			
	
}
function validateEmail(emailField)
{
        var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if (reg.test(emailField.value) == false) 
        { 
	        document.getElementById('errfn').innerHTML="Invalid Email Address";
          //alert('Invalid Email Address');
            return false;
        }
       else
	    {
	 document.getElementById('errfn').innerHTML="";
        return true;
        }
}
function checkLength(el) 
   {
	//alert("hii");
 if (el.value.length < 6 ) 
   {
    document.getElementById('error_trade_name').innerHTML="Length Must be Exactly 6 Characters ";
    
	}
	else{
		 document.getElementById('error_trade_name').innerHTML="";
	}
  }

function checpasskLength(e2) {
	//alert("hii");
 if (e2.value.length < 11) {
    alert("length must be exactly 10 characters")
  }
}


/*function validatespace(event)
{
	
	var key = (event.which) ? event.which : event.key;
    
	{
         
        return false;
    }
        return true;

}*/







