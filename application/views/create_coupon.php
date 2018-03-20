<?php
include('header.php');
?>
<script src="<?php echo base_url()?>assets/js/validate.js"></script>
       
                

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



<link rel="stylesheet" type="text/css" href="assets/widgets/multi-select/multiselect.css">
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
     <h2>Create Coupons</h2>
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
						   FILL COUPON DETAILS
						</h3>
						<div class="example-box-wrapper">
							<form class="form-horizontal bordered-row" id="button_submit" name="button_submit" >
								<div class="form-group">
									<label class="col-sm-3 control-label">COUPON NUMBER</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="coupon_number" name="coupon_number" placeholder="Enter Coupon..." onkeypress="return ValidateAlphanum(event);" onblur="ValidateNumber()" >
                                                                                <div id="name_verification"></div>
									</div>
								</div>
								 <div class="form-group">
									<label class="col-sm-3 control-label">PROMOTION OFFER</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="promotion_offer" name="promotion_offer" placeholder="Enter promotion offer..."  >
									</div>
								</div>  
                                                            <div class="form-group" >
                                                                    <label class="col-sm-3 control-label">COUPON</label>
                                                                    <div class="col-md-2">
                                                                        <input type="checkbox" class="form-control required" name="coupon_check" id="coupon_check" value="" >
                                                                    </div>
                                                              </div>
                                 <div id="autoUpdate" class="autoUpdate">                                  
                               <div class="form-group">
									<label class="col-sm-3 control-label">COUPON COUNT</label>
									<div class="col-sm-6">
									<input type="text" class="form-control" name="coupon_count" id="coupon_count" placeholder="Enter coupon count..." onkeypress="return isNumber(event);">
                                                                        
									</div>
                                 </div>
								</div>
								   
                                                                <div class="form-group">
									<label class="col-sm-3 control-label">COUPON START DATE</label>
									<div class="col-sm-6">
										<input type="date" class="form-control" name="start_date" id="start_date" placeholder="Enter start..">
									</div>
								</div>	
								<div class="form-group">
									<label class="col-sm-3 control-label">COUPON EXPIRY DATE</label>
									<div class="col-sm-6">
										<input type="date" class="form-control" name="expiry_date" id="expiry_date" placeholder="Enter expiry..." >
									</div>
								</div>
							
                                                            
                                                            <div class="form-group">
									<label class="col-sm-3 control-label">COUPON RANGE</label>
                                                                       
                                                                        <label  class="col-sm-1" style="margin-top: 7px;">FROM:</label>
                                                                                <div  class="col-sm-2">
										<input type="text" class="form-control" name="r_from" id="r_from" placeholder="Enter start range.." onkeypress="return isNumber(event);">
                                                                                </div>
                                                                        
                                                                        <label class="col-sm-1" style="margin-top: 7px;">TO:</label>
                                                                                <div  class="col-sm-2">
										<input type="text" class="form-control" name="r_to" id="r_to" placeholder="Enter end range..." onkeypress="return isNumber(event);">
                                                                                </div>
								</div>
								<div id="aa"></div>

							<div class="form-group">
									<label class="col-sm-3 control-label">products</label>
										<div class="col-sm-6 ">
											<select  class="form-control" name="product" id="product" multiple>     
											</select>
											
										</div>
										
							<div class="col-sm-12" id="main1"></div>
										
										<!--<input type="text" class="col-sm-5" id="main1" name="main1" style="margin-left: 250px;">-->
								</div>
								

											<input type="hidden" id="multiselect[]" name="multiselect[]">
</div>
															
								<div>
                                    <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px" type="submit" id="button_submit1" name="button_submit1">
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
    </div>



<script>
	var city=[]; var array=[];	var msg; var product_name; var check=1;	
        function ValidateNumber()
	{
            var code=document.getElementById("coupon_number").value;  
            var helpemail=document.getElementById("name_verification");
            var codeformat = /^[0-9a-zA-Z]+$/;                    
                if(code=="")
				{                                                                  
                                  helpemail.style.color = 'red';
				  helpemail.innerHTML = "Please Enter Coupon Number";
				  document.getElementById("button_submit1").disabled = true;                                
				}
                 else           
                                {                                   
				 
				
				  
		
			if(code!="" && code.match(codeformat))
                                         {   
                                            $.ajax
                                            ({	
                                              url: "<?php echo base_url(); ?>"+"Create_Coupon/check_name",    
                                              //url: "../Create_Chapter_Master/check_chapter/", 
                                              method:"POST",
                                              data: "code_data="+code,
                                              success: function(data)  
                                                 {	
                                                             //alert(data);
                                                    if(data==0){								
                                                                            $("#name_verification").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                            document.getElementById("button_submit1").disabled = true;							
                                                                            }
                                                             else	{
                                                                             $("#name_verification").html("<span style='color:green;'>Name Valid</span>");
                                                                             document.getElementById("button_submit1").disabled = false;
                                                                            }
                                                             }
                                             });
                                        }
                                        else{
                                        helpemail.style.color = 'red';
				  helpemail.innerHTML = "Please Enter Valid Coupon Number";
				  document.getElementById("button_submit1").disabled = true;
                                        }
                                        }
			return false;				
		}
	 function display_product()
        {
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_Coupon/get_coupon",
                    dataType: 'json',                                   
                    success: function (data)                  
					 {					                    
                        $("<option />").val("0")
                                    .text("Select Products")
                                    .appendTo($('select#product'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].product_version_id)
                                              .text(data[i].product_version_name)
                                              .appendTo($('select#product'));
                            }	  
                      }				
                });
        }
      $(document).ready(function()
        {		
            display_product();	
		$(".autoUpdate").hide();
        });
		  $('#coupon_check').change(function ()
    {
        if (this.checked)
            $('#autoUpdate').fadeIn('slow');
        else
            $('#autoUpdate').fadeOut('slow');
    });
		var i=1;
		  $('#product').on('change',function()
        {
			
			var name=document.getElementById("product").value;
			city1 = document.getElementById("product").value;
			var k1=city.length;
if(k1==0){
	$.ajax({
                           url: "<?php echo base_url(); ?>"+"Create_Coupon/get_city",                         
                           type: "POST",
                           data:'cityss='+city1,
                           async: false,
                           dataType:'JSON',
                           success: function (msg)
                                     {                           
					product_name=msg[0].product_version_name;
                                      },                                 
                             });
						
	city.push(product_name);	
var element = document.createElement("input");
element.setAttribute("type", "text");
element.setAttribute("value",product_name);
element.setAttribute("id","ide"+i);
var foo = document.getElementById("main1");
foo.appendChild(element);
 var link = document.createElement("a");
 link.setAttribute("id","idl"+i);
 link.appendChild(document.createTextNode("X"));
 foo.appendChild(link);
   link.setAttribute('onClick','delete_img("'+"idl"+i+'","'+"ide"+i+'")');
	var value=	document.getElementById('main1').value;
	if(value==null || value==""){      
	document.getElementById('main1').value = city;
	}
	else{
		array=city;
		document.getElementById('main1').value = array;
	}		
		i++;
		//alert(city);
		$('[name="multiselect[]"]').val(city);
}
else{
	
		
			$.ajax({
                           url: "<?php echo base_url(); ?>"+"Create_Coupon/get_city",                         
                           type: "POST",
                           data:'cityss='+city1,
                           async: false,
                           dataType:'JSON',
                           success: function (msg)
                                     {                           
				product_name=msg[0].product_version_name;
                                      },
                                 
                             });
						
	
	for(var j=0;j<k1;j++){

		if(city[j]==product_name){
		alert("please select another one,its already selected");
		check=0;
		break;
		}
			else{
				check=1;
			}
		
	}
	if(check==1){
            city.push(product_name);
          
var element = document.createElement("input");
element.setAttribute("type", "text");
element.setAttribute("value",product_name);
element.setAttribute("id","ide"+i);
var foo = document.getElementById("main1");
foo.appendChild(element);
 var link = document.createElement("a");
 link.setAttribute("id","idl"+i);
 link.appendChild(document.createTextNode("X"));
 foo.appendChild(link);
   link.setAttribute('onClick','delete_img("'+"idl"+i+'","'+"ide"+i+'")');		
		i++;
		$('[name="multiselect[]"]').val(city);	
                
		}
		else{}

}
});
function delete_img(id,id2){
var m=city.length;
var mi= document.getElementById(id2).value;	
for(var k=0;k<m;k++){
var index = city.indexOf(mi);
if (index >= 0) {
  city.splice( index, 1 );
}
}
	$('[name="multiselect[]"]').val(city);
	var ni = document.getElementById('main1');
	ni.removeChild(document.getElementById(id));
	ni.removeChild(document.getElementById(id2));	
	return false; 	
}
   
 $('#main1').on('keyup',function(){
	 var face=[];
	face= document.getElementById('main1').value;
	alert(face);
	var face1=[]
	face1.push(face);
	city=face1;
 });
 $("form[name='button_submit']").submit(function(e) 
        {    
            e.preventDefault();     
            var name=$("#coupon_number").val();
            var txt_email=$("#promotion_offer").val();
            var txt_phone=$("#r_from").val();           
                if(name == "" || txt_email == "" || txt_phone == "")
                    {
                        alert("Please insert required fields");
                    }
               else
                    { 
                     
                       var formData = new FormData($(this)[0]);                      
                       $.ajax({
                           url: "<?php echo base_url(); ?>"+"Create_Coupon/coupon_save",                         
                           type: "POST",
                           data: formData,
                           async: false,
                           //dataType:'JSON',
                           success: function (msg)
                                     {
                                      //   alert(msg);
                                       alert("Information loaded successfully");
                                       window.location ="<?php echo base_url();?>"+"View_Coupon";	
                                      },
                                    cache: false,
                                    contentType: false,
                                    processData: false
                             });
               }       
         });
		



</script>
<?php
include('footer.php');
?>