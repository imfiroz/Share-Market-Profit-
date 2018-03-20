 <?php
include('header.php');
?>

<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>       
                    

<!-- jQueryUI Spinner -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/spinner/spinner.js"></script>
<script type="text/javascript">
    /* jQuery UI Spinner */

    $(function() { "use strict";
        $(".spinner-input").spinner();
    });
</script>

<!-- jQueryUI Autocomplete -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/autocomplete/autocomplete.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/autocomplete/menu.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/autocomplete/autocomplete-demo.js"></script>

<!-- Touchspin -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/touchspin/touchspin.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/touchspin/touchspin-demo.js"></script>

<!-- Input switch -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/input-switch/inputswitch.js"></script>
<script type="text/javascript">
    /* Input switch */

    $(function() { "use strict";
        $('.input-switch').bootstrapSwitch();
    });
</script>

<!-- Textarea -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/textarea/textarea.js"></script>
<script type="text/javascript">
    /* Textarea autoresize */

    $(function() { "use strict";
        $('.textarea-autosize').autosize();
    });
</script>

<!-- Multi select -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/multi-select/multiselect.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/multi-select/multiselect.js"></script>
<script type="text/javascript">
    /* Multiselect inputs */

    $(function() { "use strict";
        $(".multi-select").multiSelect();
        $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
    });
</script>

<!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/uniform/uniform-demo.js"></script>

<!-- Chosen -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/chosen/chosen.css">-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/widgets/chosen/chosen-demo.js"></script>
 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
<div id="page-title">
      <h2>Edit Your Profile</h2> 
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
						   Edit Profile
						</h3>
						<div class="example-box-wrapper">
							<form class="form-horizontal bordered-row"  id="button_submit" name="button_submit" method="post">
								<div class="form-group">
									<label class="col-sm-3 control-label">Name</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="name" name="name" >
                                                                                 <input type="hidden" name="role_id" id="role_id" value="2">
                                                                                 <input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id; ?>">
									</div>
								</div>
								 
								<div class="form-group">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="txt_email" id="txt_email"  onblur="ValidateEmail()" >
										<div id="email_verification"></div>
									</div>
                                                                </div>	
                                                             
								<div class="form-group">
									<label class="col-sm-3 control-label">Phone</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="phn" id="phn"  onblur="ValidatePhone()" maxlength="10" >
										<div id="phone_verification"></div>
									</div>
                                                                </div>	
								<div>
									 <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px"  type="submit" id="btnCustLogin_bn_p" onclick="update_customer_customer()">
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
<script>
var verification; var phn_verification;
                 $(document).ready(function ()
                {
                  get_customer_details();  
                 // var pathname = window.location.pathname; // Returns path only
                 // var url= window.location.href;   
               //   alert(url);
                  
                });
                 function get_customer_details()
                                    {
                                        var u_id = $("#v_id").val();
                                        
                                        $.ajax({
                                            url: "<?php echo base_url(); ?>Edit_Profile/fetch_customer_details/",
                                            method: "POST",
                                            data: "u_id=" + u_id,
                                            dataType: "json",
                                            success: function (data)
                                            {
                                              
                                                verification =(JSON.stringify(data[0].Email));
                                                phn_verification =(JSON.stringify(data[0].Mobile));
                                                       $('[name="name"]').val(data[0].Name);
                                                       $('[name="txt_email"]').val(data[0].Email);
                                                       $('[name="phn"]').val(data[0].Mobile);
                                                      
                                                }
                                                
                                                    });

                                             		
                                            }
         function ValidateEmail()
            {
                
                 var mail=document.getElementById("txt_email").value;
               //alert(mail);
                 var helpemail=document.getElementById("email_verification");
                 var mailformat =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if(mail.match(mailformat))
                            {
                   helpemail.innerHTML = "";
                   document.getElementById("btnCustLogin_bn_p").disabled = false;
                    }

                    else if(mail.value=="")
                    {
                 helpemail.style.color = 'red';
                  helpemail.innerHTML = "Please Enter Email";
                  mail.value="";    
                    }
                    else
                    {
                helpemail.style.color = 'red';
                helpemail.innerHTML = "Please Enter valid Email";
                       mail.value="";
                  document.getElementById("btnCustLogin_bn_p").disabled = true; 

                    }

            if(mail.value=="")
                    {
                    }
                                            if(mail!="" && mail.match(mailformat))
                                            {   var desired = verification.replace(/^"(.+)"$/,'$1');
                                                 if(mail==desired)
                                                 {$("#email_verification").html("<span style='color:green;'>Email Updated</span>");
                                                      document.getElementById("btnCustLogin_bn_p").disabled = false;}
                                                  else{
                                                          $.ajax({	
                                                                    url: "<?php echo base_url(); ?>Edit_Profile/check_email_customer/",                                                                     
                                                                    method:"POST",
                                                                    data: "email="+mail,
                                                                    success: function(data)  
                                                                       {
                                                                          if(data==0){

                                                                                        $("#email_verification").html("<span style='color:red;'>Please enter another Email its already in use</span>");
                                                                                        document.getElementById("btnCustLogin_bn_p").disabled = true;
                                                                                   }
                                                                                   else{
                                                                                           $("#email_verification").html("<span style='color:green;'>Email Valid</span>");
                                                                                           document.getElementById("btnCustLogin_bn_p").disabled = false;                                                                                             
                                                                                        }
                                                                       }
                                                               });
                                            }

                                    return false;
                                    }

            
         }
           function update_customer_customer() {

                                                var cust_id = $("#v_id").val();
                                             //   alert(cust_id);
                                                var customer_name = $("#name").val();
                                                var txt_mail = $("#txt_email").val();
                                                var phn = $("#phn").val();
                                                var str = "customer_name=" + customer_name + "&txt_mail=" + txt_mail+ "&phn=" + phn;                                        
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>Edit_Profile/save_update_cust/" + cust_id,
                                                    method: "POST",
                                                    data: str,                                                
                                                    success: function (data)
                                                    {
                                                       if(data) {
                                                      window.location = "<?php echo base_url()?>Dashboard";
                                                  }
                                                    }});
                                                 

                                            }
                                              function ValidatePhone()
            {
                        var phone=document.getElementById("phn").value;
                       // alert(mail);
                        var helpemail=document.getElementById("phone_verification");
                        var phoneformat =/^\+?\d{1,3}(-|)?\d{3,5}(-|)?\d{1,10}$/;                    
                        var length=phone.length;    
                                   if(length<10 || phone.value=="")
                                                   { 
                                                     //alert("gg");
                                                     helpemail.style.color = 'red';
                                                     helpemail.innerHTML = "Please Enter Proper Mobile No";
                                                     document.getElementById("btnCustLogin_bn_p").disabled = true;                                
                                                   }
                                    else           
                                                   {
                                                     helpemail.innerHTML = "";
                                                     document.getElementById("btnCustLogin_bn_p").disabled = false;
                                                   
                                   if(phone.match(phoneformat))
                                                   {
                                                     helpemail.innerHTML = "";
                                                     document.getElementById("btnCustLogin_bn_p").disabled = false;
                                                   }		  

                                           if(phone!="" && phone.match(phoneformat))
                                                            { 
                                                                var desired = phn_verification.replace(/^"(.+)"$/,'$1');
                                                                  if(phone==desired)
                                                                       {$("#phone_verification").html("<span style='color:green;'>Mobile No Updated</span>");
                                                                         document.getElementById("btnCustLogin_bn_p").disabled = false;}
                                                                     else
                                                                     {
                                                                            $.ajax
                                                                            ({	
                                                                              url: "<?php echo base_url(); ?>"+"Edit_Profile/check_phone",                                                     
                                                                              method:"POST",
                                                                              data: "phone_data="+phone,
                                                                              success: function(data)  
                                                                                 {	

                                                                                    if(data==0){								
                                                                                                            $("#phone_verification").html("<span style='color:red;'>Please enter another Mobile No its already in use</span>");
                                                                                                            document.getElementById("btnCustLogin_bn_p").disabled = true;							
                                                                                                            }
                                                                                             else	{
                                                                                                             $("#phone_verification").html("<span style='color:green;'>Mobile No Valid</span>");
                                                                                                             document.getElementById("btnCustLogin_bn_p").disabled = false;
                                                                                                            }
                                                                                             }
                                                                             });
                                                                     }
                                                           }
                                           return false;
                                           }
                    }

                                       
                                    
</script>
<?php
include('footer.php');
?>
