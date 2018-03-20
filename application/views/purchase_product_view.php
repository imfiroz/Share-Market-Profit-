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
     <h2>Purchase Product</h2>
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
						   FILL PURCHASE PRODUCT DETAILS
						</h3>
						<div class="example-box-wrapper">
							<form class="form-horizontal bordered-row" action="<?php echo base_url();?>Purchase_product/add_purches" id="button_submit" name="button_submit" method="post">
								<div class="form-group">
									<label class="col-sm-3 control-label">DATE</label>
									
                                                                        <div class="col-sm-6">
                                                                        <input type="date" class="form-control" name="Meeting_date" id="Meeting_date" >
                                                                        </div>
								</div>
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Reference no</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="Reference_no" id="Reference_no" placeholder="Enter Reference no..." >
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">WareHouse</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="WareHouse" id="WareHouse" placeholder="Enter WareHouse..." >
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"> Status</label>
										<div class="col-sm-6">
                                                                                    <select class="form-control" name="Status" id="Status">
                                                                                         <option value=0>Select</option>
                                                                                        <option value='Received'>Received</option>
                                                                                        <option value='Pending'>Pending</option>
                                                                                        <option value='Ordered'>Ordered</option>
                                                                                    </select>
										</div>
								</div>
                                                            <div class="form-group">
									<label class="col-sm-3 control-label">Supplier</label>
									<div class="col-sm-6">
									 <input type="hidden" class="form-control" placeholder=""  name="s_id" id="s_id">
									    <input type="text" class="form-control" placeholder=""  required name="supplier" id="supplier" >  										
									</div>
								</div> 
                                                             <div class="form-group">
									<label class="col-sm-3 control-label">Product Name</label>
									<div class="col-sm-6">
									<!--  <input type="hidden" class="form-control" placeholder=""  name="hsn_id" id="hsn_id">-->
									    <input type="text" class="form-control" placeholder="" required name="txt_product_name" id="txt_product_name" >  
  <input type="hidden" class="form-control" placeholder=""  name="val_i" id="val_i" >  
                                                                                
										<input type="hidden" class="form-control" placeholder="Enter product id" value="" name="p_id" id="p_id">       
									</div>
								</div>                                                            
                                                         
                                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example1">
                                                            <thead>
                                                               <tr>
                                                                <th>Sr No.</th>
                                                                  <th>Name</th> 
                                                                 <th>Product Price</th>
                                                                 <th>Hsn Code</th>
                                                                 <th>Quantity</th>
																 <th>Discount</th>
																 <th>Product Tax</th>
																 <th>Subtotal</th>
                                                                 <th>Action</th>
                                                              </thead>
                                                              <tbody>
                                                              </tbody>
                                                             </table>  
                                                           
								<div>
                                                                    <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px" type="submit" id="button_submit1">
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
<?php
include('footer.php');
?>

<link href="<?php echo base_url();?>css/jquery-ui.css" rel="Stylesheet"></link>
<!--<script src="<?php echo base_url();?>js/jquery-ui.js" ></script>-->
<script>
    var i=0;
   $( document ).ready(function() {
  $('#datatable').hide();
});
       var content;  
       var user_array;
    $("#txt_product_name").autocomplete({
                                minLength: 2,
                                source: function(req, add){
                                                        $.ajax({
                                                                 url: "<?php echo base_url(); ?>"+"Purchase_Product/autocomplete", 
                                                                //url: '/search', //Controller where search is performed
                                                                dataType: 'json',
                                                                type: 'POST',
                                                                data: req,
                                                                success: function(data){
                                                                   
                                                                    var m=data.response;
                                                                     if(m === "true"){                                                                      
                                                                           add(data.message);
                                                                                 m=data.message[0].id;
                                                                              
                                                                                $("#p_id").val(data.message[0].id);                                                                              		
                                                                        }
                                                                       else{}
                                                                }
                                                        });
                                                    }		    
});
$("#supplier").autocomplete({
                    minLength: 1,
                    source: function(req, add){
                                            $.ajax({
                                                     url: "<?php echo base_url(); ?>"+"Purchase_Product/autocomplete_supply",
                                                    dataType: 'json',
                                                    type: 'POST',
                                                    data: req,
                                                    success: function(data){
                                                            if(data.response =='true'){
                                                               add(data.message);
                                                                m=data.message[0].id;                                                                              
                                                                $("#s_id").val(data.message[0].id);                                                                               		
                                                            }
                                                    }
                                            });
                                        }    
                            });
                            $("#txt_product_name").autocomplete({  
                                select: function(event, ui) {
                                  var k=ui.item.value;
                                   var m=ui.item.id;
                                   if(m!=""){
                                  $.ajax({ 
                                                 url: "<?php echo base_url(); ?>Purchase_Product/fetch_product_details_view/", 
                                                 method:"POST",
                                                 data:"u_id="+m,
                                                 dataType: "json",       
                                                 success: function(data)  
                                                 {  
//alert(JSON.stringify(data));                                              
													var len=data.length;
                                                    var content = "";
                                                    var user_array = data;                                                   
													var tax_type;
													var discount_factor=user_array[0].discount_factor;
													var discount_rate=user_array[0].discount_rate;
													if(user_array[0].tax_type=='inclusive')
													{ tax_type=0;}
													else if(user_array[0].tax_type=='exclusive') {tax_type=1;}
													else if(user_array[0].tax_type==""||user_array[0].tax_type==0||user_array[0].tax_type==null){tax_type=2;}
													if(tax_type==0){
														if(discount_factor=='In Value')	{
															
													if((user_array[0].Igst)!=null && (user_array[0].Igst)!=0){
														var x=(user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available;
													var product_price=parseFloat(user_array[0].product_price)*parseFloat(x);

											var tax_to_calculate=parseFloat(product_price)-(parseFloat(product_price)*(100/(100+parseFloat(user_array[0].Igst))));									
											var single_product_cost=product_price-tax_to_calculate;																																	
											var discount_calculated_value=parseFloat(single_product_cost)-(parseFloat(user_array[0].Quantity_available)*parseFloat(discount_rate));
											var final=(parseFloat(discount_calculated_value)+((parseFloat(discount_calculated_value)*parseFloat(user_array[0].Igst))/100));
											var  total=final.toFixed(2);
											 $("#sub_total_"+i).text(total);
													}
											else if((user_array[0].Cgst)!=null && (user_array[0].Cgst)!=0 && (user_array[0].Sgst)!=null && (user_array[0].Sgst)!=0){
												 
													var x=(user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available;
													var product_price=parseFloat(user_array[0].product_price)*parseFloat(x);
													var total_tax=(parseFloat(user_array[0].Cgst)+(parseFloat(user_array[0].Sgst)));
													var tax_to_calculate=parseFloat(product_price)-(parseFloat(product_price)*(100/(100+parseFloat(total_tax))));
													
												var single_product_cost=product_price-tax_to_calculate;
												var discount_calculated_value=parseFloat(single_product_cost)-(parseFloat(user_array[0].Quantity_available)*parseFloat(discount_rate));
											var final=(parseFloat(discount_calculated_value)+((parseFloat(discount_calculated_value)*parseFloat(total_tax))/100));										
											var  total=final.toFixed(2);
												 $("#sub_total_"+i).text(total);
														}
														else{}
														}
														else if(discount_factor=='In %'){
															
															if((user_array[0].Igst)!=null && (user_array[0].Igst)!=0){
														var x=(user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available;
													var product_price=parseFloat(user_array[0].product_price)*parseFloat(x);

											var tax_to_calculate=parseFloat(product_price)-(parseFloat(product_price)*(100/(100+parseFloat(user_array[0].Igst))));									
											var single_product_cost=product_price-tax_to_calculate;																																	
											var discount_calculated_value=parseFloat(single_product_cost)-((parseFloat(single_product_cost)*parseFloat(discount_rate))/100);
											var final=(parseFloat(discount_calculated_value)+((parseFloat(discount_calculated_value)*parseFloat(user_array[0].Igst))/100));
											var  total=final.toFixed(2);
											 $("#sub_total_"+i).text(total);
													}
											else if((user_array[0].Cgst)!=null && (user_array[0].Cgst)!=0 && (user_array[0].Sgst)!=null && (user_array[0].Sgst)!=0){
												 
													var x=(user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available;
													var product_price=parseFloat(user_array[0].product_price)*parseFloat(x);
													var total_tax=(parseFloat(user_array[0].Cgst)+(parseFloat(user_array[0].Sgst)));
													var tax_to_calculate=parseFloat(product_price)-(parseFloat(product_price)*(100/(100+parseFloat(total_tax))));
													
												var single_product_cost=product_price-tax_to_calculate;
												var discount_calculated_value=parseFloat(single_product_cost)-((parseFloat(single_product_cost)*parseFloat(discount_rate))/100);
											var final=(parseFloat(discount_calculated_value)+((parseFloat(discount_calculated_value)*parseFloat(total_tax))/100));										
											var  total=final.toFixed(2);
												 $("#sub_total_"+i).text(total);
														}
														else{}
														}
															else{}
														}
														
											
											else if(user_array[0].tax_type=='exclusive'){
											if(discount_factor=='In Value')	{
											var x=(user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available;
											var  discount_value_from_dis_factor = ((parseFloat(user_array[0].product_price)* parseFloat(x))) ;											
											var  total2=(parseFloat(discount_value_from_dis_factor)-(parseFloat(discount_rate)*parseFloat(x)));
											//alert(discount_value_from_dis_factor);
											if((user_array[0].Igst)!=null &&(user_array[0].Igst)!=0 &&(user_array[0].Igst)!=""){												
											var total1 =parseFloat(total2)+parseFloat((total2*(user_array[0].Igst))/100);
											var  total=total1.toFixed(2);
											 $("#sub_total_"+i).text(total);
													}
													else{
														
											var	total_tax=(parseFloat(user_array[0].Cgst))+(parseFloat(user_array[0].Sgst));
												var total1 =parseFloat(total2)+parseFloat((total2*(total_tax))/100);											
												var  total=total1.toFixed(2);
												//alert(total);
												 $("#sub_total_"+i).text(total);
											}
											}	
													else if(discount_factor=='In %')	{ 
													
														var x=(user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available;
											var  discount_value_from_dis_factor = ((parseFloat(user_array[0].product_price)* parseFloat(x))) ;	
																		
											var  total2=(parseFloat(discount_value_from_dis_factor)-((parseFloat(discount_rate)*parseFloat(discount_value_from_dis_factor))/100));
											
											if((user_array[0].Igst)!=null && (user_array[0].Igst)!=0 && (user_array[0].Igst)!=""){
																																	
											var total1 =parseFloat(total2)+parseFloat((total2*(user_array[0].Igst))/100);
											
											var  total=total1.toFixed(2);
											 $("#sub_total_"+i).text(total);
													}
													else{
														
											var	total_tax=(parseFloat(user_array[0].Cgst))+(parseFloat(user_array[0].Sgst));
												var total1 =parseFloat(total2)+parseFloat((total2*(total_tax))/100);											
												var  total=total1.toFixed(2);
												//alert(total);
												 $("#sub_total_"+i).text(total);
											}
													}
												else{
													var x=(user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available;

											var  total2 = ((parseFloat(user_array[0].product_price)* parseFloat(x))) ;
											if((user_array[0].Igst)!=null &&(user_array[0].Igst)!=0 && (user_array[0].Igst)!=""){	
											//alert(1);
											var total1 =parseFloat(total2)+parseFloat((total2*(user_array[0].Igst))/100);
											var  total=total1.toFixed(2);
											//alert(total);
											 $("#sub_total_"+i).text(total);
													}
													else{
														//alert(2);
											var	total_tax=(parseFloat(user_array[0].Cgst))+(parseFloat(user_array[0].Sgst));
												var total1 =parseFloat(total2)+parseFloat((total2*(total_tax))/100);											
												var  total=total1.toFixed(2);
												//alert(total);
												 $("#sub_total_"+i).text(total);
											}
												}													
											}
											else{if(tax_type==2){
												//alert(3);
												var x=(user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available;
												var price=parseFloat(user_array[0].product_price)*parseFloat(x);
												
													var  total=price.toFixed(2);
													//alert(total);
													 $("#sub_total_"+i).text(total);
											}}
											
											
											
											//alert(i);
											$("#val_i").val(i);
											//(user_array[0].discount_factor==0)?"In Value":"In %";
											var xa=(user_array[0].discount_factor=="In Value")?0:1;
                                                    $("#example1 tbody").append("<tr id='tr_"+i+"'>"+"<td >"+(i)+"</td>"+"<td><input type='hidden' name=version_id_"+i+"  id=version_id_"+i+" value='"+user_array[0].id +"'/><input type='hidden' name=version_name_"+i+"  id=version_name_"+i+" value='"+user_array[0].product_version_name +"'/><input type='hidden' name=Cgst_"+i+"  id=Cgst_"+i+" value='"+user_array[0].Cgst +"'/><input type='hidden' name=Sgst_"+i+"  id=Sgst_"+i+" value='"+user_array[0].Sgst +"'/><input type='hidden' name=tax_type_"+i+"  id=tax_type"+i+" value='"+user_array[0].tax_type +"'/>"+ user_array[0].product_version_name +"</td>"+"<td><input type='hidden' name=product_price_"+i+"  id=product_price_"+i+" value='"+user_array[0].product_price +"'/>"+ user_array[0].product_price +"</td>"+"<td><input type='hidden' name=product_hsn_"+i+"  id=product_hsn_"+i+" value='"+user_array[0].Hsn_code +"'/>"+ user_array[0].Hsn_code +"</td>"+"<td><input type='hidden' name=product_qty_"+i+"  id=product_qty"+i+" value='"+((user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available)  +"'/><input type='text' name=qty_"+i+"  id=qty_"+i+" value='"+Math.round((user_array[0].Quantity_available==null)?'0':user_array[0].Quantity_available) +"' onkeyup='sub_total_cal(this.value,"+user_array[0].product_price+","+user_array[0].Cgst+","+user_array[0].Sgst+","+user_array[0].Igst+","+xa+","+user_array[0].discount_rate+","+i+","+tax_type+");' /></td>"+"<td><input type='hidden' name=discount_rate_"+i+"  id=discount_rate"+i+" value='"+user_array[0].discount_rate +"'/>"+ user_array[0].discount_rate +"</td>"+"<td><input type='hidden' name=igst_"+i+"  id=igst_"+i+" value='"+(parseFloat((user_array[0].Igst==null)?'0':user_array[0].Igst)+parseFloat((user_array[0].Cgst==null)?'0':user_array[0].Cgst)+parseFloat((user_array[0].Sgst==null)?'0':user_array[0].Sgst))+"'/>"+(parseFloat((user_array[0].Igst==null)?'0':user_array[0].Igst)+parseFloat((user_array[0].Cgst==null)?'0':user_array[0].Cgst)+parseFloat((user_array[0].Sgst==null)?'0':user_array[0].Sgst))+"</td>"+"<td><input type='text' name='sub_total_"+i+"' id='sub_total_"+i+"' value="+Math.round(total)+"> </td>"+"<td id='"+i+"' onclick='a(this.id)'>DELETE</td>"+"</tr>"); 
                                                 }
                                     });                            
                                  }
                                 i++;
                            }
                        });
						function sub_total_cal(qty,price,ctax,stax,itax,dfact,drate,i,tax_type){

						
            if (tax_type == 1)
            {
             
              var  discount =drate; 
                if (dfact == 0)
                {

                  var Discount_Rate = drate;                   
                 var selling_cost =((price*qty) - (drate * qty));
                   
                  var  txt_cgst =ctax;
                 var   txt_igst = itax;
					var    txt_sgst = stax;
                    if (txt_sgst == 0 || txt_sgst == null)
                    {
                        txt_sgst = 0;
                        
                    }
                    if (txt_cgst == 0 || txt_cgst == null)
                    {
                        txt_cgst = 0;
                      
                    }
                    if (txt_igst == 0 || txt_igst == null)
                    {
                        txt_igst = 0;
                        
                    }
                    if (txt_igst != 0  || txt_igst != null)
                    {
                        
                    var    cal = (selling_cost * txt_igst) / 100;
					
					}
                       
                    if (txt_cgst != 0 || txt_cgst != null)
                    {
					var      cal_cg = (selling_cost * txt_cgst) / 100;
                       
                    }
                    if (txt_sgst != 0 || txt_sgst != null)
                    {
                      var    cal_sg = (selling_cost * txt_sgst) / 100;
                       
                    }
               var     tot = (parseFloat(cal) + parseFloat(cal_cg) + parseFloat(cal_sg));         
                 var   calculated_total = tot;
                 var   s = parseFloat(calculated_total) + parseFloat(selling_cost);
					 var  total_am=Math.round(s);
					$("#sub_total_"+i).val(total_am);                  
                } else if (dfact == 1)
                {
                var    Discount_Rate = drate;
					
                var    selling_cost = ((price*qty) - ((Discount_Rate * price*qty) / 100));   	
                  var  txt_cgst = ctax;
                   var txt_igst = itax;
                   var txt_sgst =stax;
                    if (txt_sgst == 0 || txt_sgst == null)
                    {
                       txt_sgst = 0;
                        
                    }
                    if (txt_cgst == 0 || txt_cgst == null)
                    {
                        txt_cgst = 0;
                       
                    }
                    if (txt_igst == 0 || txt_igst == null)
                    {
                 txt_igst = 0;
                        
                    }
                    if (txt_igst != 0 || txt_igst != null)
                    {
                  var cal = (selling_cost * txt_igst) / 100;
                        
                    }
                    if (txt_cgst != 0 || txt_cgst != null)
                    {
              var cal_cg = (selling_cost * txt_cgst) / 100;
                     
                    }
                    if (txt_sgst != 0 || txt_sgst != null)
                    {
               var cal_sg = (selling_cost * txt_sgst) / 100;
                       
                    }
             var       tot = (parseFloat(cal) + parseFloat(cal_cg) + parseFloat(cal_sg));
                var   calculated_total = tot;
				  var   s = parseFloat(calculated_total) + parseFloat(selling_cost);
					 var  total_am=Math.round(s);
                    $("#sub_total_"+i).val(total_am);

                }
				else{}
            }
			 else  if (tax_type == 0)
            {
			
              var qty =qty;
                if (qty == "" || qty == null)
                {
                    qty = 0;

                }

                
                if (dfact == 0) {
                var    txt_cgst = ctax;
                var    txt_igst = itax;
                var    txt_sgst =stax;
			

                    if (txt_sgst == 0 || txt_sgst == null)
                    {
                        txt_sgst = 0;
                       
                    }
                    if (txt_cgst == 0 || txt_cgst == null)
                    {
                        txt_cgst = 0;
                        
                    }
                    if (txt_igst == 0 || txt_igst == null)
                    {
                        txt_igst = 0;
                       
                    }
                    if (txt_igst != 0 || txt_cgst != null)
                    {
                      var  cal = price - ((price * 100) / (100 + parseFloat(txt_igst)));
                        
                    }
                    if (txt_cgst != 0 || txt_cgst != null)
                    {

                     var   cal_cg = price - ((price * 100) / (100 + parseFloat(txt_cgst)));

                    }
                    if (txt_sgst != 0 || txt_sgst != null)
                    {
                     var   cal_sg = price - ((price * 100) / (100 + parseFloat(txt_sgst)));

                    }
                  var  tot = (parseFloat(cal) + parseFloat(cal_cg) + parseFloat(cal_sg));
                    if (qty != 0) {
                     var   cost_after_tax = (price - tot);
                    } else {

                     var   cost_after_tax = price - tot;
                    }
                  

                var    Discount_Rate = drate;
                 var   selling_cost = cost_after_tax * qty;
                    
                var    discounted_amount = selling_cost - (Discount_Rate * qty);
                    
					var   total_tax = (parseFloat(txt_cgst) + parseFloat(txt_igst) + parseFloat(txt_sgst));
                    var final_tax = (total_tax * discounted_amount) / 100;
                    var final_tax1 = final_tax / 2;
                 
                  var  tax_to_be_calculated = parseFloat(discounted_amount) + parseFloat((total_tax * discounted_amount) / 100);
				//   var  total_am=tax_to_be_calculated.toFixed(2);
				    var  total_am=Math.round(tax_to_be_calculated);
                   $("#sub_total_"+i).val(total_am);
                } else if (dfact == 1)
                {

                var    txt_cgst = ctax;
                    txt_igst = itax;
                    txt_sgst = stax;  
					
                    if (txt_sgst == 0 || txt_sgst == null)
                    {
                        txt_sgst = 0;
                       
                    }
                    if (txt_cgst == 0 || txt_cgst == null)
                    {
                        txt_cgst = 0;
                      
                    }
                    if (txt_igst == 0 || txt_igst == null)
                    {
                        txt_igst = 0;
                      
                    }
                    if (txt_igst != 0 || txt_cgst != null)
                    {
                     var   cal = price - ((price * 100) / (100 + parseFloat(txt_igst)));
                        alert(cal);
                        //$("#txt_igst_cal").val(cal);
                    }
                    if (txt_cgst != 0 || txt_cgst != null)
                    {

                    var    cal_cg = price - ((price * 100) / (100 + parseFloat(txt_cgst)));
								alert(cal_cg);
                        //$("#txt_cgst_cal").val(cal_cg);
                    }
                    if (txt_sgst != 0 || txt_sgst != null)
                    {
                       var  cal_sg = price - ((price * 100) / (100 + parseFloat(txt_sgst)));
//alert(cal_sg);
                    }
               var     tot = (parseFloat(cal) + parseFloat(cal_cg) + parseFloat(cal_sg));
			 //  alert(tot);
                    if (qty != 0) {
                     var   cost_after_tax = (price - tot);
                    } else {

                    var    cost_after_tax = price - tot;
                    }

                   
                  var  Discount_Rate = drate;
                  var  selling_cost = cost_after_tax * qty;
                 
                var    discounted_amount = selling_cost - ((Discount_Rate * selling_cost) / 100);

                 var   total_tax = (parseFloat(txt_cgst) + parseFloat(txt_igst) + parseFloat(txt_sgst));
                    var final_tax = (total_tax * discounted_amount) / 100;
                    

                  var  tax_to_be_calculated = parseFloat(discounted_amount) + parseFloat((total_tax * discounted_amount) / 100);
				  //var  total_am=tax_to_be_calculated.toFixed(2);
				   var  total_am=Math.round(tax_to_be_calculated);
                   $("#sub_total_"+i).val(total_am);
                   

                }
            }
							
						}
						function a(id){
							var id=id;
							
							$('#tr_'+id).remove();	
							// document.location.href="<?php echo base_url();?>"+"Purchase_Product";							
									}
</script>