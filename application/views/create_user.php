<?php
include('header.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>       
                    

<!-- jQueryUI Spinner -->

<script type="text/javascript" src="assets/widgets/spinner/spinner.js"></script>
<script type="text/javascript">
    /* jQuery UI Spinner */

    $(function() { "use strict";
        $(".spinner-input").spinner();
    });
</script>

<!-- jQueryUI Autocomplete -->

<script type="text/javascript" src="assets/widgets/autocomplete/autocomplete.js"></script>
<script type="text/javascript" src="assets/widgets/autocomplete/menu.js"></script>
<script type="text/javascript" src="assets/widgets/autocomplete/autocomplete-demo.js"></script>

<!-- Touchspin -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/touchspin/touchspin.css">-->
<script type="text/javascript" src="assets/widgets/touchspin/touchspin.js"></script>
<script type="text/javascript" src="assets/widgets/touchspin/touchspin-demo.js"></script>

<!-- Input switch -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch.css">-->
<script type="text/javascript" src="assets/widgets/input-switch/inputswitch.js"></script>
<script type="text/javascript">
    /* Input switch */

    $(function() { "use strict";
        $('.input-switch').bootstrapSwitch();
    });
</script>

<!-- Textarea -->

<script type="text/javascript" src="assets/widgets/textarea/textarea.js"></script>
<script type="text/javascript">
    /* Textarea autoresize */

    $(function() { "use strict";
        $('.textarea-autosize').autosize();
    });
</script>

<!-- Multi select -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/multi-select/multiselect.css">-->
<script type="text/javascript" src="assets/widgets/multi-select/multiselect.js"></script>
<script type="text/javascript">
    /* Multiselect inputs */

    $(function() { "use strict";
        $(".multi-select").multiSelect();
        $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
    });
</script>

<!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="assets/widgets/uniform/uniform-demo.js"></script>

<!-- Chosen -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/chosen/chosen.css">-->
<script type="text/javascript" src="assets/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="assets/widgets/chosen/chosen-demo.js"></script>
 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
<div id="page-title">
      <h2>Create User</h2> 
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
						   FILL USER DETAILS
						</h3>
						<div class="example-box-wrapper">
							<form class="form-horizontal bordered-row"  id="button_submit" name="button_submit" method="post">
								
                            <!-- Username -->
					   <div class="form-group">		
                            <label for="product_name" class="col-sm-3 control-label">GSTIN No</label>
                            <div class="form-group">
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" onkeypress="return ValidateAlphanum(event);" maxlength="14" placeholder="Enter Gstin no" name="txt_gstin_no" id="txt_gstin_no">
                               </div>
                            </div>
                          
								
                            <!-- Username -->
				   <div class="form-group">			
                            <label for="product_name" class="col-sm-3 control-label">Business Category</label>
                         
                              <div class="col-sm-6">
							  <input type="hidden" class="form-control"  placeholder="" name="business_cat_id" id="business_cat_id" readonly>
                                <input type="text" class="form-control"  placeholder="" name="txt_gstin_no1" id="txt_gstin_no1" readonly>
                               </div>
                            </div>
                             <div class="form-group">
                                                <label class="col-sm-3 control-label">Business Sub Category</label>
                                                <div class="col-sm-6">
                                                <input type="hidden" class="form-control"  placeholder="" name="business_sub_cat_id" id="business_sub_cat_id" readonly>
                                                <input type="text" class="form-control"  placeholder="" name="txt_gstin_no2" id="txt_gstin_no2" readonly>
                                                </div>
								</div> 
                        
							
                            <!-- Username -->
                             <div class="form-group">
							<input type="hidden" name="role_id" id="role_id" value="4">
                            <label for="product_name" class="col-sm-3 control-label">User Name</label>
                           
                              <div class="col-sm-6">
                                <input type="text" class="form-control" onkeypress="return ValidateAlphanum(event);" onblur="ValidateName()"placeholder="Enter Username" name="txt_user_name" id="txt_user_name">
                                 <div id="name_verify"></div>
                               </div>
                            </div>
                         
								  <div class="form-group">
                                                                        <label class="col-sm-3 control-label">Image</label>
                                                                        <div class="col-sm-6">
                                                                           <!-- <input type="file" class="upload" name="image[]" id="image">-->
                                                                            <input type="hidden" id="img_txt[]" name="img_txt[]">
                                                                            <input type="file" id="image" name="image[]"  />
                                                                        </div>                                                                                                                                            
                                                                    </div>
								   <div class="form-group">
                                                            <label for="address" class="col-sm-3 control-label">Phone</label>
                                                           
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" maxlength="10" placeholder="Enter Phone" onblur="phone_number()"
                                                                           name="txt_phone" id="txt_phone">
                                                                    <div id="email111"></div>
                                                            </div>
                                                            </div>
                               <div class="form-group">
                                                            <label for="address" class="col-sm-3 control-label">Branch</label>
                                                         
                                                               <div class="col-sm-6">
											<select class="form-control" name="branch11" id="branch11">     
											</select>
										</div>
                                                           
                                                     
														</div>
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Password</label>
									<div class="col-sm-6">
									<input type="password" class="form-control" name="txt_password" id="txt_password" placeholder="Enter Password...">
									</div>
								</div>								
								
								<div>
									 <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px"  type="submit" id="btn">
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
<?php
include('footer.php');
?>
<script>
$("form[name='button_submit']").submit(function(e) {
    //alert("Hii");
		 e.preventDefault();
        var name=$("#txt_user_name").val();
        var txt_email=$("#txt_gstin_no").val();
        var txt_phone=$("#txt_phone").val();
        var txt_street=$("#txt_password").val();
           var txt_street1=$("#branch11").val();
           
         if(name == "" || txt_email == "" || txt_phone == "" || txt_street == "")
         {
             alert("Please insert required fields");
                //document.getElementById("button_submit").disabled = true;
         }
          if (!name == "" && !txt_email == "" && !txt_phone == "" && !txt_street == "") {
      //  var formData = new FormData(this);
        var formData = new FormData($(this)[0]);
//alert(formData);
        $.ajax({
             url: "<?php echo base_url(); ?>"+"Create_User/product_user_data",
            type: "POST",
            data: formData,
            async: false,
	//dataType:'JSON',
            success: function (msg) {
	//alert(msg);
			  if(msg){
                alert("Information successfully loaded");
                 window.location ="<?php echo base_url();?>"+"View_User";
			// location.reload();				
			  }
				
            },
            cache: false,
            contentType: false,
            processData: false
        });
		  }
    });
    function get_b_cat()
        {

        //alert(11);
                 $.ajax({
                     url: "<?php echo base_url(); ?>"+"Create_User/get_b_cat",
                    type: "POST",

                    async: false,
                    dataType:'JSON',
                    success: function (msg) {
              //  alert(JSON.stringify(msg));
        //alert(msg);
                                  if(msg){	
          $("#txt_gstin_no1").val(msg[0].name);
         $("#business_cat_id").val(msg[0].id);  	  

                                  }

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
        }
    function get_b_cat_old()
        {

        //alert(11);
                 $.ajax({
                     url: "<?php echo base_url(); ?>"+"Create_User/get_b_cat",
                    type: "POST",

                    async: false,
                    dataType:'JSON',
                    success: function (msg) {
                //alert(JSON.stringify(msg));
        //alert(msg);
                                  if(msg){	
          $("#txt_gstin_no1").val(msg[0].Name);
         $("#business_cat_id").val(msg[0].business_category_id);  	  

                                  }

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
        }
         $(document).ready(function () {
			 	//alert("ss");
				 display_Branch();
                get_b_cat();
                get_b_subcat();
               
			
                 });
                  function get_b_subcat()
        {

        //alert(11);
                 $.ajax({
                     url: "<?php echo base_url(); ?>"+"Create_User/get_sub_cat",
                    type: "POST",

                    async: false,
                    dataType:'JSON',
                    success: function (msg) {
               // alert(JSON.stringify(msg));
        //alert(msg);
                                  if(msg){	
          $("#txt_gstin_no2").val(msg[0].name);
         $("#business_sub_cat_id").val(msg[0].id);  	  

                                  }

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
        }
                   function phone_number()
                {

                         var mail=document.getElementById("txt_phone").value;
                         var length=mail.length;
                     var helpemail=document.getElementById("email111");
                         var mailformat = /^\+?\d{1,3}(-|)?\d{3,5}(-|)?\d{1,10}$/;;
              


                                if(mail=="" || length!=10)
                        {
                         helpemail.style.color = 'red';
                         helpemail.innerHTML = "Please Enter Phone Number";
                        mail.value="";
                        document.getElementById("btn").disabled = true; 
                        }
                        else
                        {
                       
                  

                      

           
                                                if(mail!="" && mail.match(mailformat))

                                                {   
                                                                $.ajax({	
                                                                  url: "<?php echo base_url(); ?>"+"Create_User/check_mobile_number",
                                                              //    url: "../welcome/check_mobile_number/", 
                                                                  method:"POST",
                                                                  data: "email="+mail,
                                                                 // processData: false,
                                                                 // contentType: false,
                                                                 // type:"JSON",
                                                                  success: function(data)  
                                                                     {	
                                                                           if(data==0){								
										$("#email111").html("<span style='color:red;'>Please enter another Phoneno its already in use</span>");
										document.getElementById("btn").disabled = true;							
										}
								 else	{
										 $("#email111").html("<span style='color:green;'>Phoneno Valid</span>");
										 document.getElementById("btn").disabled = false;
										}
								 }     //alert(data);
                                                                              
                                                                             	

                                             });
                                                }
                                                else{
                                                helpemail.style.color = 'red';
                                                 helpemail.innerHTML = "Please Enter Valid Phone Number";
                                                mail.value="";
                                                document.getElementById("btn").disabled = true; 
                                                }
                                                }
                                        return false;


                }
                function display_Branch()
        {
			
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_User/get_branch",
                    dataType: 'json',                                   
                    success: function (data)
                      { 
                     //     alert(data);
                 //   alert(JSON.stringify(data));
                        $("<option />").val("0")
                                    .text("Select branch")
                                    .appendTo($('select#branch11'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].branch_id)
                                              .text(data[i].Name)
                                              .appendTo($('select#branch11'));
                            }
                          
                      }

                });
        }
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
function ValidateName()
	{
            var code=document.getElementById("txt_user_name").value;  
            var helpemail=document.getElementById("name_verify");
            var codeformat = /^[a-zA-Z\s]+$/;                    
                if(code=="")
				{                                                                  
                                  helpemail.style.color = 'red';
				  helpemail.innerHTML = "Please Enter  Name";
				  document.getElementById("btn").disabled = true;                                
				}
                 else           
                                {                                   
				 
				
		  
		
			if(code!="" && code.match(codeformat))
                                         {   
                                            $.ajax
                                            ({	
                                              url: "<?php echo base_url(); ?>"+"Create_User/check_name",    
                                              //url: "../Create_Chapter_Master/check_chapter/", 
                                              method:"POST",
                                              data: "code_data="+code,
                                              success: function(data)  
                                                 {	
                                                             //alert(data);
                                                    if(data==0){								
                                                                            $("#name_verify").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                            document.getElementById("btn").disabled = true;							
                                                                            }
                                                             else	{
                                                                             $("#name_verify").html("<span style='color:green;'>Name Valid</span>");
                                                                             document.getElementById("btn").disabled = false;
                                                                            }
                                                             }
                                             });
                                        }
                                        else{
                                          helpemail.style.color = 'red';
				  helpemail.innerHTML = "Please Enter Valid Name";
				  document.getElementById("btn").disabled = true;  
                                        }
                                        }
			return false;				
		}
</script>
<style>
     input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 75px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
     </style>