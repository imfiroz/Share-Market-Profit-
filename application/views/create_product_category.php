 <?php
include('header.php');
?>                         
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
    <h2>Create Product Category</h2> 
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
				   Create Product Category
				</h3>
					<div class="example-box-wrapper">
						<form class="form-horizontal bordered-row"  id="btnCustLogin" name="btnCustLogin" method="post">
							<div class="form-group">
								<label class="col-sm-3 control-label">Name</label>
								<div class="col-sm-6">
									<input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="Enter Name..."  onblur="ValidateEmailAdd1()">
                                                                        <input type="hidden" class="form-control required" placeholder=""  name="get_data" id="get_data">
                                                                        <div id="email_id"></div>
								</div>
							</div>
                                                    
							<!--<div class="form-group">
								<label class="col-sm-3 control-label">Main Category</label>
								<div class="col-md-2">
                                                                  <!--  <select id="txt_parent" class="form-control required " name="txt_parent" >
                                                                      <option value="0">Select</option>
                                                                  </select>
                                                                       <div id="pageContent11" class="dropdown"> 
                                                                           <input type="text" class="form-control required" placeholder=""  name="parent_name" id="parent_name">
                                                                       <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"  id="aaa1" name=aaa1"></button>
                                               <input type="hidden" class="form-control" placeholder=""  name="parent_id" id="parent_id"> 
           
                                                       
                                        </div>
                                                                    
                                                                </div>
                                                              
                                    </div>-->
                                                    <div  class="form-group">
                              
                                  
                                        <label class="col-sm-3 control-label">Categories</label>
                                     
                                             <div class="col-sm-3">
                                            <input type="text"  class="form-control" placeholder=""  name="parent_name" id="parent_name">
                                            <input type="hidden" class="form-control" placeholder=""  name="parent_id" id="parent_id"> 
                                      </div>
                                  

                                  
                                        <div id="pageContent1" class="dropdown"> 
                                            <button   class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown"  id="aaa" name=aaa" style="margin-left: -15px"
                                                      ><span class="caret"></span></button>                                          
                                        </div> 
</div>
                                                     <div class="form-group">
                    <label class="col-sm-3 control-label">HSN</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder=""  name="swSearch" id="swSearch">                               
                            </div>
                           
                        </div>
                    </div>
                </div>
                                                    
							</div>   
                                                   <!-- <div class="form-group">
								<label class="col-sm-3 control-label">Product  Category</label>
								<div class="col-md-6">
                                                                    <select id="txt_product_category" class="form-control required " name="txt_product_category" >
                                                                      <option value="0">Select</option>
                                                                  </select>
                                                                </div>
							</div>   
                                                    <div class="form-group">
								<label class="col-sm-3 control-label">Company</label>
								<div class="col-md-6">
                                                                    <select id="txt_company" class="form-control required " name="txt_company" >
                                                                      <option value="0">Select</option>
                                                                  </select>
                                                                </div>
							</div> -->  
                                                    <!--  <div class="control-group"> 
                       
                            <label for="username" class="col-sm-3 control-label">HSN</label>
                            <div class="form-group">
                              <div class="col-md-6">
                                <input type="text" class="form-control" placeholder=""  name="txt_hsn" id="txt_hsn">
                                 </div>
                            </div>$business_category_id=$this->session->userdata('business_category_id');
                          </div>-->	  <input type="hidden" class="form-control" placeholder=""  name="hsn_id" id="hsn_id">
                                           <input type="hidden" class="form-control" value="<?php echo $business_category_id; ?>" name="cust_id" id="cust_id">          
							 <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px" id="btnCustLogin_bn" name="btnCustLogin_bn">
								<span>Submit</span>
									<i class="glyph-icon icon-arrow-right"></i>
							</button>
							<!--<input class="btn btn-default" type="submit" value="Submit" style="margin-left:450px">-->
						
					</form>
				</div>
			</div>
       </div>
    </div>
 </div>
<?php
include('footer.php');
?>
<link href="<?php echo base_url(); ?>css/jquery-ui.css" rel="Stylesheet"></link>
<!--<script src="<?php echo base_url(); ?>js/jquery-ui.js" ></script>-->
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!--<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>-->
<script>
     function display_parent_child()
    {
        $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Create_Product_Category/get_parent_data",
                   dataType: 'json',
                    success: function (data)
                    {
                   //  alert(data);
                        var get_id = data.product_category_id;
                        
                        $('[name="get_data"]').val(get_id);                       
                    }

                });
    }
    function ValidateEmailAdd1()
{
	
	 var mail=document.getElementById("txt_name").value;	
     var helpemail=document.getElementById("email_id");
	 var mailformat = /^[a-zA-Z ]*$/;
	 
if(mail.match(mailformat))
		{
      helpemail.innerHTML = "";
	  document.getElementById("btnCustLogin_bn").disabled = false;
        }
  
	else if(mail.value=="")
	{
     helpemail.style.color = 'red';
      helpemail.innerHTML = "Please Enter Name";
      mail.value="";    
	}
	else
	{

    helpemail.style.color = 'red';
      helpemail.innerHTML = "Please Enter valid Name";
      //$("#mail").val("");
	   mail.value="";
      document.getElementById("btnCustLogin_bn").disabled = true; 
  
	}

if(mail.value=="")
	{
	}
				if(mail!="" && mail.match(mailformat))

				{   
						$.ajax({	
                                                  url: "<?php echo base_url(); ?>"+"Create_Product_Category/check_product",    
 						//  url: "../welcome/check_product/", 
						  method:"POST",
						  data: "email="+mail,
						  success: function(data)  
					             {	//alert(data);
								  if(data==0){								
                                                                    $("#email_id").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                    document.getElementById("btnCustLogin_bn").disabled = true;							
                                                                 }
                                                             else{
                                                                    $("#email_id").html("<span style='color:green;'>Name Valid</span>");
                                                                    document.getElementById("btnCustLogin_bn").disabled = false;
                                                                    }
                                                             }
								
							 //    }		
							   
                             });
				}
			return false;
			
	
}
function display_Parent()
{
	$.ajax
            ({
                type: "POST",
                url: "<?php echo base_url(); ?>"+"Create_Product_Category/get_city1_new_2",
                dataType: 'json',                

				success: function (data)
                {
					
				    for(var i=0;i<data.length;i++)
					{ 	
                                            
						$("<option />").val(data[i].id)						
									   .text(data[i].name)
									   .appendTo($('select#txt_parent'));
					}	 
				}
              
            });
}

		
$(document).ready(function() {	
		display_Parent();
                display_parent_child();
            });
             $('#txt_parent').on('change',function(){
   //$("#txt_product_category").empty(); 
   
	  var city = $(this).val();	 
        if(city){
            $.ajax({
               type:'POST',
               url: "<?php echo base_url(); ?>"+"Create_Product_Category/get_city1_new",
               data:'city='+city,
               dataType: 'json',        
                success:function(res){
                 //   alert(JSON.stringify(res));
                   // convert(res);
                 var points=[];
                    points=convert(res);
                      buildList($('#pageContent1'), points);
                    //alert(JSON.stringify(m));
                    //
                   // console.log(res);  
                   
				/*alert(res);
				 if(res){					
                $("#txt_product_category").append('<option>Select</option>');
					for(var i=0;i<res.length;i++)
					{  
					$("#txt_product_category").append('<option value="'+(res[i].product_category_id)+'">'+(res[i].Name)+'</option>');
                                        }
              
            }
            else{
               $("#txt_product_category").empty();
                 }*/			
                      }
            }); 
               }
			
    });
     $('#aaa').on('click',function(){

   
	 
       
            $.ajax({
               type:'POST',
               url: "<?php echo base_url(); ?>"+"Create_Product_Category/get_city1_new",
            //   data:'city='+city,
               dataType: 'json',        
                success:function(res){
                
                 var points=[];
                    points=convert(res);
                  //   alert(JSON.stringify(res));
                      buildList($('#pageContent1'), points);
                   
                    //
                   // console.log(res);  
                   
				/*alert(res);
				 if(res){					
                $("#txt_product_category").append('<option>Select</option>');
					for(var i=0;i<res.length;i++)
					{  
					$("#txt_product_category").append('<option value="'+(res[i].product_category_id)+'">'+(res[i].Name)+'</option>');
                                        }
              
            }
            else{
               $("#txt_product_category").empty();
                 }*/			
                      }
            }); 
               
			
    });
    function convert(array) {
 // alert(JSON.stringify(array));
  // console.log(array);
         var id  = $("#get_data").val();
         var iddata =[]; var temp=0;
         iddata.push(id);
         var length = array.length;
         var map = {}, node, roots = [];
            for (var m = 0; m < length; m++) {
             temp=0;
             for(var k=0;k<iddata.length;k++){
           // var value_from_array = array[m].product_category_id;
           //
            //  alert(value_from_array+"/"+iddata+"/"+array[m].category_id);
            if (array[m].product_category_id == iddata[k] || array[m].category_id == iddata[k] )
            {           
                   temp=1;
                   iddata.push(array[m].product_category_id);
                   break;
               }}
               if(temp==1){
                node = array[m];
                node.items = [];
                map[node.product_category_id] = m; // use map to look-up the parents
                if (node.category_id !== "0") {
                    array[map[node.category_id]].items.push(node);
                } else {
                    roots.push(node);
                }
            }
            }       
        return roots;
    }
    function convert_old(array) {
 // alert(JSON.stringify(array));
  // console.log(array);
        var length = array.length;
        var map = {}, node, roots = [];
        for (var m = 0; m < length; m++) {
            var value_from_array = array[m].product_category_id;
            //alert(value_from_array);
            var iddata = $("#get_data").val();
            //  alert(value_from_array+"/"+iddata+"/"+array[m].category_id);
            if (value_from_array == iddata || array[m].category_id == iddata )
            {           

             
                node = array[m];
                node.items = [];
                map[node.product_category_id] = m; // use map to look-up the parents
                if (node.category_id !== "0") {
                    array[map[node.category_id]].items.push(node);
                } else {
                    roots.push(node);
                }

            }
        }
        return roots;
    }
   /* function convert_old(array){
			//alert(JSON.stringify(array));
			var map = {}, node, roots = [];
			for (var i = 0; i < array.length; i += 1) {
                          //  alert(i);
				node = array[i];
                               // alert(node);
				node.items = [];
				map[node.product_category_id] = i; // use map to look-up the parents
				if (node.category_id !== "0") {
					array[map[node.category_id]].items.push(node);
				} else {
					roots.push(node);
				}
			}
		//console.log(roots);
			return roots;                        
		}*/
                  $('#txt_product_category').on('change',function(){
    
		$("#txt_company").empty();
		var city = $(this).val();
                //alert(city);
		//alert(city);
		if(city){
            $.ajax({
               type:'POST',
               url: "<?php echo base_url(); ?>"+"Create_Product_Category/get_city2",
               data:'city='+city,
               dataType: 'json',        
                success:function(res){
					//alert(1);
					//alert(res);
			if(res){
                              $("#txt_company").empty();
                             $("#txt_company").append('<option>Select</option>');
					for(var i=0;i<res.length;i++)
					{ 
					 $("#txt_company").append('<option value="'+(res[i].product_category_id)+'">'+(res[i].Name)+'</option>');
                    }              
            }else{
               $("#txt_company").empty();
                 }	
                      }
            }); 
               }
	});
    $('#txt_product_category').on('change',function(){
    
		$("#txt_company").empty();
		var city = $(this).val();
                //alert(city);
		//alert(city);
		if(city){
            $.ajax({
               type:'POST',
               url: "<?php echo base_url(); ?>"+"Create_Product_Category/get_city2",
               data:'city='+city,
               dataType: 'json',        
                success:function(res){
					//alert(1);
					//alert(res);
			if(res){
                              $("#txt_company").empty();
                             $("#txt_company").append('<option>Select</option>');
					for(var i=0;i<res.length;i++)
					{ 
					 $("#txt_company").append('<option value="'+(res[i].product_category_id)+'">'+(res[i].Name)+'</option>');
                    }              
            }else{
               $("#txt_company").empty();
                 }	
                      }
            }); 
               }
	});
       $("#swSearch").autocomplete({
	minLength: 1,
	source: function(req, add){
		$.ajax({
                         url: "<?php echo base_url(); ?>"+"Create_Product_Category/autocomplete", 
			//url: '/search', //Controller where search is performed
                        dataType: 'json',
			type: 'POST',
			data: req,
			success: function(data){
                     
                          //  $(#hid).val
                            $("#hsn_id").val(data.message[0].id);
				if(data.response =='true'){
				   add(data.message);
				}
			}
		});
	}
});
    function buildList(parentElement, items)
    {
        
        var i, l, list, li;
        if (!items || !items.length)
        {
            return;
        } // return here if there are no items

        list = $('<ul class="dropdown-menu" ></ul>').appendTo(parentElement);

        for (i = 0, l = items.length; i < l; i++)
        {
            if (items[i].items.length !== 0)
            {   
                li = $('<li class="dropdown-submenu"><a class="test" id="' + items[i].product_category_id + '" onclick="getIDLi(this.id)">' + items[i].Name + '<span class="caret"></span></a></li>');
                buildList(li, items[i].items);
            } else if (items[i].items.length === 0)
            {
                li = $('<li class="dropdown-submenu"><a class="test" tabindex="-1"  id="' + items[i].product_category_id + '" onclick="getIDLi(this.id)">' + items[i].Name + '</a></li>');
                buildList(li, items[i].items);
            }
            list.append(li);
        }
    }
    function getIDLi(id)
    {
        //alert(id);
        var Data_Of_a_tag = document.getElementById(id).textContent;
        //alert(Data_Of_a_tag);
        document.getElementById("parent_name").value = Data_Of_a_tag;
        document.getElementById("parent_id").value = id;
    }
$("form[name='btnCustLogin']").submit(function(e) {
		 e.preventDefault();
		   var category_name = $("#txt_name").val();
         if (category_name == "" )
        {
            alert("Please create Category");
            
        }
			else {
  var formData = new FormData($(this)[0]);
        $.ajax({
             url: "<?php echo base_url(); ?>"+"Create_Product_Category/customer_save_data1",
            type: "POST",
            data: formData,
            async: false,
	
            success: function (msg)
			       {
					  // alert(msg);
                    if (msg== 0)
					{alert("Enter Valid HSN");
				    $("#txt_hsn").val(m[0].a);
					}
					 else
					 {
						 alert(" Information registered successfully ")
                         location.reload();
					 }
            },
            cache: false,
            contentType: false,
            processData: false
        });
        }
    });
	
 </script>
 	
