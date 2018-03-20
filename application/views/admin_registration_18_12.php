<?php
include('header1.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>       
                    


<div id="page-content-wrapper">
            <div id="page-content" style="margin:0">
                
                    <div class="container">
<div id="page-title">
      <h2>Create Vendor</h2> 
    <div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
    <div id="theme-switcher-wrapper">
        <div class="scroll-switcher">
            <h5 class="header">Layout options</h5>
            <ul class="reset-ul">
                <li>
                    <label for="boxed-layout">Boxed layout</label>
                    <input type="checkbox" data-toggletarget="boxed-layout" id="boxed-layout" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-header">Fixed header</label>
                    <input type="checkbox" data-toggletarget="fixed-header" id="fixed-header" class="input-switch-alt">
                </li>
                <li>
                    <label for="fixed-sidebar">Fixed sidebar</label>
                    <input type="checkbox" data-toggletarget="fixed-sidebar" id="fixed-sidebar" class="input-switch-alt">
                </li>
                <li>
                    <label for="closed-sidebar">Closed sidebar</label>
                    <input type="checkbox" data-toggletarget="closed-sidebar" id="closed-sidebar" class="input-switch-alt">
                </li>
            </ul>
            <div class="boxed-bg-wrapper hide">
                <h5 class="header">
                    Boxed Page Background
                    <a class="set-background-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
                </h5>
                <div class="theme-color-wrapper clearfix">
                    <h5>Patterns</h5>
                    <a class="tooltip-button set-background-style pattern-bg-3" data-header-bg="pattern-bg-3" title="Pattern 3" href="javascript:void(0);">Pattern 3</a>
                    <a class="tooltip-button set-background-style pattern-bg-4" data-header-bg="pattern-bg-4" title="Pattern 4" href="javascript:void(0);">Pattern 4</a>
                    <a class="tooltip-button set-background-style pattern-bg-5" data-header-bg="pattern-bg-5" title="Pattern 5" href="javascript:void(0);">Pattern 5</a>
                    <a class="tooltip-button set-background-style pattern-bg-6" data-header-bg="pattern-bg-6" title="Pattern 6" href="javascript:void(0);">Pattern 6</a>
                    <a class="tooltip-button set-background-style pattern-bg-7" data-header-bg="pattern-bg-7" title="Pattern 7" href="javascript:void(0);">Pattern 7</a>
                    <a class="tooltip-button set-background-style pattern-bg-8" data-header-bg="pattern-bg-8" title="Pattern 8" href="javascript:void(0);">Pattern 8</a>
                    <a class="tooltip-button set-background-style pattern-bg-9" data-header-bg="pattern-bg-9" title="Pattern 9" href="javascript:void(0);">Pattern 9</a>
                    <a class="tooltip-button set-background-style pattern-bg-10" data-header-bg="pattern-bg-10" title="Pattern 10" href="javascript:void(0);">Pattern 10</a>

                    <div class="clear"></div>

                    <h5 class="mrg15T">Solids &amp;Images</h5>
                    <a class="tooltip-button set-background-style bg-black" data-header-bg="bg-black" title="Black" href="javascript:void(0);">Black</a>
                    <a class="tooltip-button set-background-style bg-gray mrg10R" data-header-bg="bg-gray" title="Gray" href="javascript:void(0);">Gray</a>

                    <a class="tooltip-button set-background-style full-bg-1" data-header-bg="full-bg-1 fixed-bg" title="Image 1" href="javascript:void(0);">Image 1</a>
                    <a class="tooltip-button set-background-style full-bg-2" data-header-bg="full-bg-2 fixed-bg" title="Image 2" href="javascript:void(0);">Image 2</a>
                    <a class="tooltip-button set-background-style full-bg-3" data-header-bg="full-bg-3 fixed-bg" title="Image 3" href="javascript:void(0);">Image 3</a>
                    <a class="tooltip-button set-background-style full-bg-4" data-header-bg="full-bg-4 fixed-bg" title="Image 4" href="javascript:void(0);">Image 4</a>
                    <a class="tooltip-button set-background-style full-bg-5" data-header-bg="full-bg-5 fixed-bg" title="Image 5" href="javascript:void(0);">Image 5</a>
                    <a class="tooltip-button set-background-style full-bg-6" data-header-bg="full-bg-6 fixed-bg" title="Image 6" href="javascript:void(0);">Image 6</a>

                </div>
            </div>
            <h5 class="header">
                Header Style
                <a class="set-adminheader-style" data-header-bg="bg-gradient-9" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-adminheader-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-adminheader-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-adminheader-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-adminheader-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-adminheader-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-adminheader-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-adminheader-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-adminheader-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-adminheader-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
            <h5 class="header">
                Sidebar Style
                <a class="set-sidebar-style" data-header-bg="" title="Remove all styles" href="javascript:void(0);">Clear</a>
            </h5>
            <div class="theme-color-wrapper clearfix">
                <h5>Solids</h5>
                <a class="tooltip-button set-sidebar-style bg-primary" data-header-bg="bg-primary font-inverse" title="Primary" href="javascript:void(0);">Primary</a>
                <a class="tooltip-button set-sidebar-style bg-green" data-header-bg="bg-green font-inverse" title="Green" href="javascript:void(0);">Green</a>
                <a class="tooltip-button set-sidebar-style bg-red" data-header-bg="bg-red font-inverse" title="Red" href="javascript:void(0);">Red</a>
                <a class="tooltip-button set-sidebar-style bg-blue" data-header-bg="bg-blue font-inverse" title="Blue" href="javascript:void(0);">Blue</a>
                <a class="tooltip-button set-sidebar-style bg-warning" data-header-bg="bg-warning font-inverse" title="Warning" href="javascript:void(0);">Warning</a>
                <a class="tooltip-button set-sidebar-style bg-purple" data-header-bg="bg-purple font-inverse" title="Purple" href="javascript:void(0);">Purple</a>
                <a class="tooltip-button set-sidebar-style bg-black" data-header-bg="bg-black font-inverse" title="Black" href="javascript:void(0);">Black</a>

                <div class="clear"></div>

                <h5 class="mrg15T">Gradients</h5>
                <a class="tooltip-button set-sidebar-style bg-gradient-1" data-header-bg="bg-gradient-1 font-inverse" title="Gradient 1" href="javascript:void(0);">Gradient 1</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-2" data-header-bg="bg-gradient-2 font-inverse" title="Gradient 2" href="javascript:void(0);">Gradient 2</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-3" data-header-bg="bg-gradient-3 font-inverse" title="Gradient 3" href="javascript:void(0);">Gradient 3</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-4" data-header-bg="bg-gradient-4 font-inverse" title="Gradient 4" href="javascript:void(0);">Gradient 4</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-5" data-header-bg="bg-gradient-5 font-inverse" title="Gradient 5" href="javascript:void(0);">Gradient 5</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-6" data-header-bg="bg-gradient-6 font-inverse" title="Gradient 6" href="javascript:void(0);">Gradient 6</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-7" data-header-bg="bg-gradient-7 font-inverse" title="Gradient 7" href="javascript:void(0);">Gradient 7</a>
                <a class="tooltip-button set-sidebar-style bg-gradient-8" data-header-bg="bg-gradient-8 font-inverse" title="Gradient 8" href="javascript:void(0);">Gradient 8</a>
            </div>
        </div>
    </div>
</div>
</div>


				<div class="panel">
					<div class="panel-body">
						<h3 class="title-hero">
						   FILL YOUR DETAILS
						</h3>
						<div class="example-box-wrapper">
							<form class="form-horizontal bordered-row"  id="btnCustLogin" name="btnCustLogin" method="post">
								<div class="form-group">
									<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="Enter Name..." onblur="Validate_name()">
                                                                                <div id="verify"></div>
                                                                                 <input type="hidden" name="role_id" id="role_id" value="2">
									</div>
								</div>
                                                            <div class="form-group">
									<label class="col-sm-3 control-label">Address</label>
									<div class="col-sm-6">
										<textarea name="txt_address" id="txt_address" rows="3" class="form-control textarea-counter"></textarea>
										
									</div>
								</div>   
								<!-- <div class="form-group">
									<label class="col-sm-3 control-label">Address</label>
									<div class="col-sm-6">
										<textarea  name="txt_address" id="txt_address" rows="3" class="form-control textarea-counter"></textarea>
										<div class="character-remaining clear input-description">125 characters left</div>
									</div>
								</div> -->
                                                              <!--  <div class="control-group"> 
                                                        <input type="hidden" class="form-control" placeholder=""  name="h_id1" id="h_id1">
                                                           <label for="username" class="col-sm-3 control-label">Business Category</label>
                                                           <div class="form-group">
                                                             <div class="col-sm-6">
                                                               <input type="text" class="form-control" placeholder=""  name="txt_hsn1" id="txt_hsn1">
                                                                </div>
                                                           </div>
                                                         </div>-->
                                                            
								<div class="form-group">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="txt_email" id="txt_email" onblur="Validate_email()"   placeholder="Enter Email...">
										<div id="email_id"></div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="txt_phone" id="txt_phone" onblur="ValidatePhone()"  maxlength="10">
										   <div id="email1"></div>
									</div>
								</div>
								  <div class="form-group">
                                                                        <label class="col-sm-3 control-label">Image</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="file" class="upload" name="image[]" id="image"> 
                                                                            <input type="hidden" id="img_txt[]" name="img_txt[]">
                                                                        </div>                                                                                                                                            
                                                                    </div>
                                                                     <div class="form-group">
                                                                <label class="col-sm-3 control-label">Country</label>
                                                                <div class="col-sm-6">
                                                                    <select id="country" class="form-control required " name="country" >
                                                                    </select>
                                                                </div>
                                                            </div>
								<div class="form-group">
									<label class="col-sm-3 control-label">State</label>
										<div class="col-sm-6">
											<select class="form-control" name="state" id="state">     
											</select>
										</div>
								</div>
                                                              <div class="form-group">
									<label class="col-sm-3 control-label">City</label>
										<div class="col-sm-6">
											<select class="form-control" name="city" id="city">     
											</select>
										</div>
								</div>
                                                          <!--  <div class="form-group">
									<label class="col-sm-3 control-label">Business</label>
										<div class="col-sm-6">
											<select class="form-control" name="business" id="business">     
											</select>
										</div>
								</div>-->
                                                             <div class="form-group">
									<label class="col-sm-3 control-label">Business</label>
										<div class="col-sm-6">
											<select class="form-control" name="business11" id="business11">     
											</select>
										</div>
								</div>
                                                           <div class="form-group"  id="abc" style="display:none">
									<label class="col-sm-3 control-label">Business Name</label>
										<div class="col-sm-6">
											 <input type="text" class="form-control" placeholder=""  name="business_name" id="business_name">
										</div>
								</div>
                                                              
                                                          <!--   <div class="form-group">
									<label class="col-sm-3 control-label">Business SubCategory</label>
										<div class="col-sm-6">
											<select class="form-control" name="business_sub" id="business_sub">     
											</select>
										</div>
								</div>-->
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-6">
										<input type="password" class="form-control" name="pass1" id="pass1" placeholder="Enter Password...">
									</div>
								</div>	
                                                            <div class="form-group">
									<label class="col-sm-3 control-label">Pincode</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode..." onkeypress="return isNumber(event);" maxlength="6">
									</div>
								</div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Addhar Card No. </label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control required "  onkeypress="return ValidateAlphanum(event);" name="aadhar" id="aadhar">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Pan Card</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control required "  onkeypress="return ValidateAlphanum(event);"name="pan" id="pan">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-sm-3 control-label">Gstin</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control required "  maxlength="14" name="gstin" id="gstin">
																	<div id="gstin_div"></div>

                                                                </div>
                                                            </div>
								
								<div>
									 <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px"  type="submit" id="btnCustLogin_bn">
										<span>Submit</span>
											<i class="glyph-icon icon-arrow-right"></i>
									</button>									
								</div> 
							</form>
						</div>
					</div>
				</div>
       </div>
    </div>
 </div>
<link href="<?php echo base_url(); ?>css/jquery-ui.css" rel="Stylesheet"></link>

<script src="<?php echo base_url(); ?>js/jquery-ui.js" ></script>
<script>
    $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#image").on("change", function(e) {
         // $('#image').val('');
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) { 
          //$('#image').val('');
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $('#image_display').empty();
          $("<span id='image_display' class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + files[0].name+ "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#image");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
            document.getElementById("image").disabled = false;
             $('#image').val('');
          });    
          
        });
        fileReader.readAsDataURL(f);
        
        //
      //   document.getElementById("image").readOnly = true;
      }
     //  $("#image").attr('disabled','disabled');
    });
   
  } else {
    alert("Your browser doesn't support to File API")
  }
});
   $(window).load(function() {
     display_country();
     display_business();
       $(".add").click(function() {
                    $('<div><input class="files" name="image[]" type="file" ><input type="text" id="img_txt[]" name="img_txt[]"><span class="rem" ><a href="javascript:void(0);" >Remove</span></div>').appendTo(".contents");
                });
                $('.contents').on('click','.rem', function() {
                    $(this).parent("div").remove();
                });
   });
   
         /*   $(document).ready(function() {
             //  console.log( "ready!" );
              

            });*/
             $("#txt_hsn1").autocomplete({
        source: "<?php echo base_url(); ?>Welcome/get_hsn1",
        minLength: 1,
        select: function (event, ui) { 
            $('#h_id1').val(ui.item.id);
        },
		success:function(resp){
			},
			error:function(){
				alert("no data match");
			}
    });
      function Validate_email()
            {
                 var mail=document.getElementById("txt_email").value;	
                 var helpemail=document.getElementById("email_id");
                 var mailformat =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

          

                    if(mail=="")
                    {
                 helpemail.style.color = 'red';
                  helpemail.innerHTML = "Please Enter Email";
                  mail.value=""; 
                  document.getElementById("btnCustLogin_bn").disabled = true; 
                    }
                    else
                    {
              

                            
                                            if(mail!="" && mail.match(mailformat))
                                            {  
                                               
                                                  
                                                $.ajax({	
                                                          url: "<?php echo base_url(); ?>Welcome/check_email_customer/",                                                                     
                                                          method:"POST",
                                                          data: "email="+mail,
                                                          success: function(data)  
                                                             {
                                                                if(data==0){

                                                                              $("#email_id").html("<span style='color:red;'>Please enter another Email its already in use</span>");
                                                                              document.getElementById("btnCustLogin_bn").disabled = true;
                                                                         }
                                                                         else{
                                                                                 $("#email_id").html("<span style='color:green;'>Email Valid</span>");
                                                                                 document.getElementById("btnCustLogin_bn").disabled = false;                                                                                             
                                                                              }
                                                             }
                                                     });
                                            }
                                            else{
                                                 helpemail.style.color = 'red';
                                                 helpemail.innerHTML = "Please Enter  Valid Email";
                                                 mail.value=""; 
                                                 document.getElementById("btnCustLogin_bn").disabled = true; 
                                            }
                                            }
                                    return false;
                                    
                                    }
 function Validate_name()
            {
                 var mail=document.getElementById("txt_name").value;	
                 var helpemail=document.getElementById("verify");
                 var mailformat = /^[a-zA-Z\s]+$/;

          

                    if(mail=="")
                    {
                 helpemail.style.color = 'red';
                  helpemail.innerHTML = "Please Enter Name";
                  mail.value=""; 
                  document.getElementById("btnCustLogin_bn").disabled = true; 
                    }
                    else
                    {
              

                            
                                            if(mail!="" && mail.match(mailformat))
                                            {  
                                               
                                                  
                                                $.ajax({	
                                                          url: "<?php echo base_url(); ?>Welcome/check_name_customer/",                                                                     
                                                          method:"POST",
                                                          data: "email="+mail,
                                                          success: function(data)  
                                                             {
                                                                if(data==0){

                                                                              $("#verify").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                              document.getElementById("btnCustLogin_bn").disabled = true;
                                                                         }
                                                                         else{
                                                                                 $("#verify").html("<span style='color:green;'>Name Valid</span>");
                                                                                 document.getElementById("btnCustLogin_bn").disabled = false;                                                                                             
                                                                              }
                                                             }
                                                     });
                                            }
                                            else{
                                                 helpemail.style.color = 'red';
                                                 helpemail.innerHTML = "Please Enter  Valid Email";
                                                 mail.value=""; 
                                                 document.getElementById("btnCustLogin_bn").disabled = true; 
                                            }
                                            }
                                    return false;
                                    
                                    }

            
    	function ValidatePhone()
{
	
	 var mail=document.getElementById("txt_phone").value;
	//alert(mail);
     var helpemail=document.getElementById("email1");
	 var mailformat = /^\+?\d{1,3}(-|)?\d{3,5}(-|)?\d{1,10}$/;;
	if(mail.value=="" || mail.length!=10)
	{
     helpemail.style.color = 'red';
      helpemail.innerHTML = "Please Enter Phone Number";
      mail.value="";
	  document.getElementById("btnCustLogin_bn").disabled = true;
     
	}
	else
	{

  



				if(mail!="" && mail.match(mailformat))

				{   
						$.ajax({	
                                                  url: "<?php echo base_url(); ?>"+"Welcome/check_mobile_number",
 						 // url: "../welcome/check_mobile_number/", 
						  method:"POST",
						  data: "email="+mail,
						 // processData: false,
						 // contentType: false,
						 // type:"JSON",
						  success: function(data)  
					             {	
								
								if(data==0){

                                                                              $("#email1").html("<span style='color:red;'>Please enter another Phone No its already in use</span>");
                                                                              document.getElementById("btnCustLogin_bn").disabled = true;
                                                                         }
                                                                         else{
                                                                                 $("#email1").html("<span style='color:green;'>PhoneNo. Valid</span>");
                                                                                 document.getElementById("btnCustLogin_bn").disabled = false;                                                                                             
                                                                              }
							     }		
							   
                             });
				}
				else{
					 helpemail.style.color = 'red';
					helpemail.innerHTML = "Please Enter  Valid Phone Number";
					mail.value="";
					document.getElementById("btnCustLogin_bn").disabled = true;
				}
	}
			return false;
			
	
}
 $("form[name='btnCustLogin']").submit(function (e) {

       e.preventDefault();
        var name=$("#txt_name").val();
         var txt_email=$("#txt_email").val();
          var txt_phone=$("#txt_phone").val();
         var password=$("#pass1").val();
	var business_category=$("#business11").val();
          var country=$("#country").val();
         
         if(name == "" || txt_email == "" || txt_phone == "" || password == "" || business_category == "")
         {
             alert("Please insert required fields");
         }
          if (!name == "" && !txt_email == "" && !txt_phone == "" && !password == ""&& !business_category == "") {
                                                                        //  var formData = new FormData(this);
                                                                        var formData = new FormData($(this)[0]);
                                                                      //  alert("madhu");
                                                                        $.ajax({
                                                                            url: "<?php echo base_url(); ?>" + "Welcome/save_data",
                                                                            type: "POST",
                                                                            data: formData,
                                                                            async: false,
                                                                            dataType: 'JSON',
                                                                            success: function (msg) {
                                                                              
                                                                      
                                                                                if (msg==0){
                                                                                     alert(" please enter another business category");
                                                                                     
                                                                                }
                                                                                else{
                                                                                    alert("Congrats registrated sucessfully.");
                                                                                  url = msg.redirect_path;
                                                                                   window.location = url;
                                                                                }
                                                                                                                                                    
                                                                            },
                                                                            cache: false,
                                                                            contentType: false,
                                                                            processData: false
                                                                        });
		  }
                                                                        //e.preventDefault();
                                                                    });
                                                                    function display_country()
                                                                    {
                                                                        $.ajax
                                                                                ({
                                                                                    type: "POST",
                                                                                    url: "<?php echo base_url(); ?>" + "Welcome/get_country",
                                                                                    dataType: 'json',
                                                                                    //data: {name: user_name, pwd: password},
                                                                                    success: function (data)
                                                                                    {
                                                                                      //  alert(data);
                                                                                      //  alert(JSON.stringify(data));

                                                                                        $("<option />").val("0")
                                                                                                .text("Select Country")
                                                                                                .appendTo($('select#country'));
                                                                                        for (var i = 0; i < data.length; i++)
                                                                                        {

                                                                                            //  var id=$(this).attr("name");

                                                                                            //alert(data[i].Department_Name);
                                                                                            $("<option />").val(data[i].id)
                                                                                                    .text(data[i].name)
                                                                                                    .appendTo($('select#country'));

                                                                                        }

                                                                                    }

                                                                                });
                                                                    }
                                                                               
                                             $('#state').on('change', function () {
                                                                            var city = $(this).val();
                                                                            //alert(countryID)
                                                                            if (city) {
                                                                                $.ajax({
                                                                                    type: 'POST',
                                                                                    url: "<?php echo base_url(); ?>" + "Welcome/get_city",
                                                                                    data: 'city=' + city,
                                                                                    dataType: 'json',
                                                                                    success: function (res) {
                                                                                        //alert(res);



                                                                                        if (res) {
                                                                                            $("#city").empty();
                                                                                            $("#city").append('<option>Select</option>');
                                                                                            // $.each(res,function(key,value){
                                                                                            //alert(key);
                                                                                            for (var i = 0; i < res.length; i++)
                                                                                            {
                                                                                                //alert(JSON.stringify(res[i].name));
                                                                                                $("#city").append('<option value="' + (res[i].id) + '">' + (res[i].name) + '</option>');
                                                                                            }
                                                                                            //  $("#state").append('<option value="'+(key)+'">'+(value)+'</option>');
                                                                                            // });

                                                                                        } else {
                                                                                            $("#city").empty();
                                                                                        }

                                                                                    }
                                                                                });
                                                                            }
                                                                        });
                                                                           $('#country').on('change', function () {
                                                                            var countryID = $(this).val();
                                                                            //alert(countryID)
                                                                            if (countryID) {
                                                                                $.ajax({
                                                                                    type: 'POST',
                                                                                    url: "<?php echo base_url(); ?>" + "Welcome/get_state",
                                                                                    data: 'country_id=' + countryID,
                                                                                    dataType: 'json',
                                                                                    success: function (res) {
                                                                                        //alert(res);
                                                                                        //alert(JSON.stringify(res));


                                                                                        if (res) {
                                                                                            $("#state").empty();
                                                                                            $("#state").append('<option>Select</option>');
                                                                                            // $.each(res,function(key,value){
                                                                                            //alert(key);
                                                                                            for (var i = 0; i < res.length; i++)
                                                                                            {

                                                                                                $("#state").append('<option value="' + (res[i].id) + '">' + (res[i].name) + '</option>');
                                                                                            }
                                                                                            //  $("#state").append('<option value="'+(key)+'">'+(value)+'</option>');
                                                                                            // });

                                                                                        } else {
                                                                                            $("#state").empty();
                                                                                        }

                                                                                    }
                                                                                });
                                                                            }
                                                                        });
                                                                        function display_business()
                                                                                {
                                                                                    $.ajax
                                                                                        ({
                                                                                            type: "POST",
                                                                                            url: "<?php echo base_url(); ?>"+"Welcome/get_business",
                                                                                            dataType: 'json',                                   
                                                                                            success: function (data)
                                                                                              {                     
                                                                                                $("<option />").val("0")
                                                                                                            .text("Select business")
                                                                                                            .appendTo($('select#business11'));
                                                                                                for(var i=0;i<data.length;i++)
                                                                                                    { 
                                                                                                        $("<option />").val(data[i].id)
                                                                                                                      .text(data[i].name)
                                                                                                                      .appendTo($('select#business11'));
                                                                                                    }

                                                                                              }

                                                                                        });
                                                                                }
     $('#business11').on('change',function()
        {
           
        $("#business_sub").empty();  
       // $("#"+maa+"").remove();  
        var business = $(this).val();
if(business!="" && business!=null){
        if(business=="34"){
         document.getElementById('abc').style.display = "block";
        }
        else{
            document.getElementById('abc').style.display = "none";
            $.ajax({
               type:'POST',
               url: "<?php echo base_url(); ?>"+"Welcome/get_business_data",
               data:'business='+business,
                dataType: 'json',        
                success:function(res)
                   {
                    
                     if(res)
                     {    
                $("#business_sub").empty();
                $("#business_sub").append('<option>Select</option>');
                        for(var i=0;i<res.length;i++)
                         { 						
                             $("#business_sub").append('<option value="'+(res[i].id)+'">'+(res[i].name)+'</option>');
                         }              
                     }
                 else
                    {
                        $("#business_sub").empty();
                    }				
                   }
            }); 
            }
        }
    });
                                                                        

</script>
<style>
     input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 95px;
  border: 2px solid black;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #000;
  border: 1px solid red;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
.thumb {
    width: 50px;
    height: 50px;
    margin: 0.2em -0.7em 0 0;
}
.remove_img_preview {
    position:relative;
    top:-25px;
    right:5px;
    background:black;
    color:white;
    border-radius:50px;
    font-size:0.9em;
    padding: 0 0.3em 0;
    text-align:center;
    cursor:pointer;
}
.remove_img_preview:before {
    content:"×";
}
     </style>
