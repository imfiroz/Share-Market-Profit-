<?php
include('header.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>       
<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">
            <div id="page-title">
                <h2>Create Product & its Version</h2> 
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
                <div class="panel-body" id="product_data">
                    <h3 class="title-hero">
                        FILL PRODUCT DETAILS
                    </h3>
                    <div class="example-box-wrapper" >
                        <form class="form-horizontal bordered-row"  id="btnCustLogin_form" name="btnCustLogin_form" method="post">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Product Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="" name="txt_product_name" id="txt_product_name"  onblur="name_verification()">
                                    <div id="txt_chapter_div"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Product Description</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="" name="txt_product_description" id="txt_product_description">
                                     <input type="hidden" class="form-control" placeholder="" name="is_approved" id="is_approved" value="<?php echo $is_approved; ?>">
                                </div>
                            </div>   
                             <input type="text" class="form-control required" placeholder=""  name="get_data" id="get_data"  value="<?php echo $business_category_id; ?>">                   
                            <div  class="form-group">                                                              
                                        <label class="col-sm-3 control-label">Categories</label>                                     
                                             <div class="col-sm-3">
                                            <input type="text"  class="form-control" placeholder=""  name="parent_name" id="parent_name">
                                            <input type="hidden" class="form-control" placeholder=""  name="parent_id" id="parent_id">
                                            <input type="hidden" class="form-control" placeholder=""  name="get_category_id" id="get_category_id">
                                      </div>                                                                    
                                        <div id="pageContent1" class="dropdown"> 
                                            <button   class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown"  id="aaa" name=aaa" style="margin-left: -15px">
                                                     <span class="caret"></span></button>                                                                                                                        <!--<input type="text" class="btn btn-default dropdown-toggle" value="Click here"  data-toggle="dropdown"  id="aaa" name=aaa"></input>-->
                                        </div> 
                                </div> 
                             <div class="form-group">
                                <label class="col-sm-3 control-label">Product Size</label>
                                        <div class="col-sm-6">
                                                <select class="form-control" name="request[]" id="request"  multiple="multiple">     
                                                </select>                              
                                        </div>
				</div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">HSN</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control"  name="txt_hsn" id="txt_hsn" readonly >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Image</label>
                                    <div class="col-sm-6">
                                        <input type="file" class="upload"  name="image[]" id="image" accept="image/x-png,image/gif,image/jpeg"> 
                                        <input type="text" class="form-control" id="img_txt[]" name="img_txt[]"  style=" width:150px">
                                        <span><a href="javascript:void(0);" class="add" >Add More</a></span>
                                       
                                    </div>
                                    <div class="  col-sm-6 contents" ></div>
                                   

                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Discount Type</label>
                                    <div class="col-sm-6">
                                        <select  class="form-control required " name="txt_discount_type" id="txt_discount_type" >
                                            <option value="0">Select</option>						   
                                            <option value="In Value">In Value</option>
                                            <option value="In %">In %</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Discount Amount</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="txt_discount_amount" id="txt_discount_amount" placeholder="Enter Discount Amount..." onkeypress="return isNumber(event);">
                                    </div>
                                </div>								
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Product price</label>
                                    <div class="col-sm-6">
                                        <input type="hidden" class="form-control" name="final" id="final" >
                                        <input type="hidden" class="form-control" name="final1" id="final1" >
                                        <input type="text" class="form-control" name="txt_product_price" id="txt_product_price" placeholder="Enter Product price..." onkeypress="return isNumber(event);">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tax Type</label>
                                    <div class="col-sm-6">
                                        <select  class="form-control required " name="tax_type" id="tax_type" >
                                            <option value="0">Select</option>						   
                                            <option value="inclusive">Inclusive</option>
                                            <option value="exclusive">Exclusive</option>
                                        </select>
                                        <input type="hidden" class="form-control" name="tax_type1" id="tax_type1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">IGST</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="txt_igst" id="txt_igst" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">GSTN No.</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="txt_gstn" id="txt_gstn"  onkeypress="return ValidateAlphanum(event);" maxlength="14">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">CGST</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="txt_cgst" id="txt_cgst" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">SGST</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="txt_sgst" id="txt_sgst"  readonly>
                                    </div>
                                </div> 
                               <div class="form-group">
                                    <label class="col-sm-3 control-label">bar-code type</label>
                                    <div class="col-sm-6">
                                        <select id="barcode_type_product" class="form-control required " name="barcode_type_product" >
                                        </select>
                                    </div>
                               </div>
                            
                              <div class="form-group">
                                   <label class="col-sm-3 control-label">bar-code number </label>
                                          <div class="col-sm-6">
                                                <input type="text" class="form-control required" name="barcode_number_product" id="barcode_number_product"  onkeypress="return isNumber(event);" >
                                           </div>
                               </div>	
                              <div class="form-group">
                                <label class="col-sm-3 control-label">UOM</label>
                                <div class="col-sm-6">
                                    <select id="txt_uom_product" class="form-control required " name="txt_uom_product" >
                                    </select>
                                </div>
                            </div>
                              <div class="form-group">
                                <label class="col-sm-3 control-label">Product Type</label>
                                <div class="col-sm-6">
                                    <select id="txt_product_type" class="form-control required " name="txt_product_type" >
                                    </select>
                                </div>
                            </div>
                               <div class="form-group">
                                   <label class="col-sm-3 control-label">Avi.Quantity </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control required" name="Quantity_available_product" id="Quantity_available_product"  onkeypress="return isNumber(event);">
                                      </div>
                               </div>
                               <div class="form-group">
                                         <label class="col-sm-3 control-label">Threshold limit </label>
                                             <div class="col-sm-6">
                                                 <input type="text" class="form-control required" name="Threshold_limit_product" id="Threshold_limit_product"  onkeypress="return isNumber(event);" >
                                          </div>
                                </div>
                              <div class="form-group" >
                                        <label class="col-sm-3 control-label">Product schedule</label>
                                              <div class="col-sm-2">
                                                     <input type="checkbox" class="form-control required" name="is_product_is_scedule_product" id="is_product_is_scedule_product" value="" >
                                               </div>
                                  </div>
                              <div id="autoUpdate_product" class="autoUpdate">
                                                            <div class="form-group">
                                                                <label class=" col-sm-3 control-label">End date</label>
                                                                <div class="col-sm-6">
                                                                    <input type="date" class="form-control required" name="product_version_end_date_product" id="product_version_end_date_product" >    </div>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label class=" col-sm-3 control-label">number of days </label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control required" name="number_of_days_product" id="number_of_days_product"  onkeypress="return isNumber(event);" >   
                                                                </div>
                                                            </div>
                                  </div>
                                <div>
                                    <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px"  type="submit" id="btnCustLogin_pr" name="btnCustLogin_pr">
                                        <span>Submit</span>
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </button>									
                                </div> 
                        </form>
                    </div>
                </div>
            </div>
        
                <div id="page-title">

                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    </table>   
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example1">
                    </table>   

                </div>

                <div class="modal fade" id="myModal" role="dialog" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"></button>
                                <h4 class="modal-title">Version</h4>
                              
                            </div>
                            <div class="modal-body">				
                                <div id="mail"></div> 
                                <div class="row">
                                  
                                        
                                            <!-- <div class="widget-content">-->
                                            
                                             
                                                    <form method="POST" action="" name="btnCustLogin_modal" id="btnCustLogin_modal"> 
                                                        <input type="hidden"  class="form-control" name="version_id" id="version_id">
                                                        <input type="hidden"  class="form-control" name="product_id" id="product_id">
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">Version Name </label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="product_version_name" class="form-control required" id="product_version_name" onblur="version_verification()"   >
                                                                <div id="txt_version_div"></div>
                                                            </div>
                                                        </div>
                                                       
                                                       <div class="form-group col-md-12">                          
                                                            <label for="hsn" class="col-md-3">HSN</label>
                                                            
                                                                <div class="col-md-8">
                                                                     <input type="hidden" class="form-control required" placeholder=""  name="get_data" id="get_data" value="<?php echo $business_category_id; ?>">
                                                                    <input type="hidden" class="form-control" placeholder=""  name="parent_id1" id="parent_id1"> 
                                                                    <input type="text" class="form-control"  name="txt_hsn_modal" id="txt_hsn_modal" readonly >
                                                                </div>
                                                            </div>
                                                       
                                                                                                                  
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3"> price</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" placeholder="" onkeyup="common_function()"  onkeypress="return isNumber(event);"
                                                                       name="txt_product_price_modal" id="txt_product_price_modal">
                                                             <input type="hidden" class="form-control" name="txt_gstn1" id="txt_gstn1">  
                                                            <input type="hidden" class="form-control" name="txt_product_main_category1" id="txt_product_main_category1">  
                                                            <input type="hidden" class="form-control" name="txt_product_category1" id="txt_product_category1"> 
                                                            <input type="hidden" class="form-control" name="igst_tax" id="igst_tax">
                                                            <input type="hidden" class="form-control" name="cgst_tax" id="cgst_tax">
                                                            <input type="hidden" class="form-control" name="sgst_tax" id="sgst_tax">	
                                                            <input type="hidden" class="form-control" name="tax_type1" id="tax_type1">
                                                            </div>
                                                            			
                                                          
                                                        </div>
                                                       
                                                        <div class="form-group col-md-12" id="abc">
                                                            <label class="col-md-3">Image</label>
                                                            <div class="col-md-5">
                                                                <input type="file" class="upload" name="image_version[]" id="image_version" accept="image/x-png,image/gif,image/jpeg"> 
                                                                <input type="text" id="image_version_txt[]" name="image_version_txt[]" class="form-control"  style="width:150px">
                                                           <span><a href="javascript:void(0);" class="add_version1" >Add More</a></span>
                                                            </div>
                                                            
                                                          

                                                        </div>
                                                        <div class="form-group col-md-12">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-9 contents_version"></div>          
                                                        </div>
                                                                                                                                                    
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">Discount factor</label>
                                                            <div class="col-md-8">
                                                                <select  class="form-control required " name="txt_discount_type_modal" onchange="common_function()" id="txt_discount_type_modal" >
                                                                    <option value="0">Select</option>						   
                                                                    <option value="In Value">In Value</option>
                                                                    <option value="In %">In %</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                       
                                                             <div class="form-group col-md-12">                   
                                                            <label for="hsn" class="col-md-3">Discount rate</label>
                                                           
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" onkeyup="common_function()" name="txt_discount_type_rate" id="txt_discount_type_rate" >
                                                                </div>
                                                            </div>
                                                       
                                                       
                                                      
                                                         <div class="form-group col-md-12">
                                                            <label class="col-md-3">Product Type</label>
                                                             <div class="col-md-8">
                                                                <select id="txt_product_type_version" class="form-control required " name="txt_product_type_version" >
                                                                </select>
                                                            </div>
                                                            </div>
                                                        <div class="form-group col-md-12">
                                                           <label class="col-md-3">Product Size</label>
                                                           	<div class="col-md-8">
                                                                <select id="request1" class="form-control required " name="request1[]" multiple="multiple" >
                                                                </select>
                                                            </div>
                                                        </div>

                                                          
                                                       
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">cal discount </label>
                                                            <div class="col-md-8">
                                                                <input type="text"  class="form-control required" id="discount_calculated_value" name="discount_calculated_value" readonly>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">Final price </label>
                                                            <div class="col-md-8">
                                                                <input type="text"  class="form-control required" id="product_final_price1" name="product_final_price1" readonly>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">bar-code type</label>
                                                            <div class="col-md-8">
                                                                <select id="barcode_type" class="form-control required " name="barcode_type" >
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">bar-code number </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control required" name="barcode_number" id="barcode_number"  onkeypress="return isNumber(event);" >
                                                            </div>
                                                        </div>	
                                                       

                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">UOM</label>
                                                            <div class="col-md-8">
                                                                <select id="txt_uom" class="form-control required " name="txt_uom" >
                                                                </select>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">Avi.Quantity </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control required" name="Quantity_available" id="Quantity_available"  onkeypress="return isNumber(event);">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">Threshold limit </label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control required" name="Threshold_limit" id="Threshold_limit"  onkeypress="return isNumber(event);" >
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">Productconfigure</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control required" name="product_config" id="product_config" >
                                                            </div>
                                                        </div>


                                                       


                                                        <div class="form-group col-md-12">
                                                            <label class="col-md-3">Rate</label>
                                                            <div class="col-md-2">
                                                                <input type="checkbox"  class="form-control required" checked id="rate_chk" name="rate_chk"  >
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group col-md-12" >
                                                            <label class="col-md-3">product schedule</label>
                                                            <div class="col-md-2">
                                                                <input type="checkbox" class="form-control required" name="is_product_is_scedule" id="is_product_is_scedule" value="" >
                                                            </div>
                                                        </div>
                                                       
                                                        <div id="autoUpdate" class="autoUpdate">
                                                            <div class="form-group col-md-12">
                                                                <label class="col-md-3">End date</label>
                                                                <div class="col-md-8">
                                                                    <input type="date" class="form-control required" name="product_version_end_date" id="product_version_end_date" >    </div>
                                                            </div> 
                                                           
                                                            <div class="form-group col-md-12">
                                                                <label class="col-md-3">number of days </label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control required" name="number_of_days" id="number_of_days"  onkeypress="return isNumber(event);" >   
                                                                </div>
                                                            </div>   
                                                        </div>
                                                        
                                                            <div class="modal-footer" style="border-top: none;">
                                                            <button class="btn btn-default" type="submit" id="btnCustLogin_modal_id" name="btnCustLogin_modal_id">
                                                                Save 
                                                            </button>												                                          
                                                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();" >Close</button>
                                                        </div>                                
                                                    </form>
                                    
                                </div>
                                
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="modal fade" id="Edit_modal_for_update" role="dialog" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Update Version</h4>
                            </div>            
                         <!--   <input type="hidden"  class="form-control" name="product_id" id="product_id">-->

                            <div class="form-group">
                                <label class="col-md-3"> version name</label>
                                <div class="col-md-9">   
                                    <input type="hidden"  class="form-control" name="product_id_value" id="product_id_value">                                    
                                    <input type="text"   class="form-control" name="version_name" id="version_name" onblur="version_verification2()" >
                                    <input type="hidden" class="form-control"  name="product_version_id" id="product_version_id" >   
                                    <div id="txt_version_div2"></div>
                                </div>
                            </div>
                            <div>&nbsp</div>
                            <div>&nbsp</div>

                            <div class="form-group">
                                <label class="col-md-3">Hsn code</label>
                                <div class="col-md-9">
                                    <input type="text"   class="form-control" name="txt_hsn" id="txt_hsn" readonly >
                                    <input type="hidden"  readonly class="form-control" name="img_name" id="img_name" >
                                    <input type="hidden"  readonly class="form-control" name="dir_name" id="dir_name" >
                                </div>
                            </div>
                            <div>&nbsp</div>
                            <div>&nbsp</div>

                            <div class="form-group">
                                <label class="col-md-3">Price</label>
                                <div class="col-md-9">
                                    <input type="hidden"  readonly class="form-control" name="state_name" id="state_name" >
                                    <input type="text"   class="form-control" name="txt_price" id="txt_price" >
                                </div>              
                            </div>
                            <div>&nbsp</div>
                            <div>&nbsp</div>

                            <div class="form-group">
                                <label class="col-md-3">Configuration</label>
                                <div class="col-md-9">
                                    <input type="text"  class="form-control required" id="txt_configuration" name="txt_configuration">               
                                </div>
                            </div>  
                            <div>&nbsp</div>
                            <div>&nbsp</div>

                            <div class="form-group">
                                <label class="col-md-3">Barcode Number</label>
                                <div class="col-md-9">
                                    <input type="text"  class="form-control" id="barcode_number_update" name="barcode_number_update" >
                                </div>
                            </div>
                            <div>&nbsp</div>
                            <div>&nbsp</div>

                            <div class="form-group">
                                <label class="col-md-3">Discount Rate</label>
                                <div class="col-md-9">
                                    <input type="text"  class="form-control" id="discount_rate_update" name="discount_rate_update" >
                                </div>
                            </div>
                            <div>&nbsp</div>
                            <div>&nbsp</div>

                            <div class="form-group">
                                <label class="col-md-3">bar-code type</label>
                                <div class="col-md-9">
                                    <input type="hidden"  class="form-control" id="barcode_type_update" name="barcode_type_update" >
                                    <select id="barcode_type_update_val" class="form-control required " name="barcode_type_update_val" >
                                    </select>
                                </div>
                            </div>
                            <div>&nbsp</div>
                            <div>&nbsp</div>

                            <div id="img_data">    
                            </div>



                            <!-- <div class="modal-body">
                                <label class="col-md-3">No of days</label>
                                <div class="col-md-9">
                                    <input type="text"  class="form-control" id="number_of_days_update" name="number_of_days_update" >
                                </div>
                            </div>-->



                            <div class="modal-footer" id="update_data">
                                <button type="submit" onclick="update_version();" class="btn btn-default" name="btnCustLogin_bn_pm" id="btnCustLogin_bn_pm" data-dismiss="modal">Update</button><button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal1" role="dialog" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title"> AddVersion</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="" name="btnCustLogin_modal_version_add" id="btnCustLogin_modal_version_add">

                    <div class="form-group col-md-12">
                        <label class="col-md-3">Version Name </label>
                        <div class="col-md-8">
                            <input type="hidden" class="form-control"   name="parent_id1" id="parent_id1"> 
                            <input type="text" name="product_version_name1" class="form-control required" id="product_version_name1" onblur="version_verification3()"   >
                            <div id="txt_version_div3"></div>
                        </div>
                    </div>
            
                    <div class="form-group col-md-12">                           
                        <label for="hsn" class="col-md-3">HSN</label>                      
                            <div class="col-md-8">
                                <input type="text" class="form-control"  name="txt_hsn_modal1" id="txt_hsn_modal1" readonly  >
                                 <input type="hidden"  class="form-control" name="version_id" id="version_id">
                                   <div id="errfn"></div>
                                   <div id="mail"></div>     
                            </div>                    
                    </div>                                   
                    <div class="form-group col-md-12">
                        <label class="col-md-3"> price</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="" onkeyup="common_function1()"
                                   name="txt_product_price_modal1" id="txt_product_price_modal1" onkeypress="return isNumber(event);">
                           <!-- <input type="text" class="form-control" placeholder="" 
                                   name="product_id_version" id="product_id_version">-->
                        </div>
                    </div>                 
                    <div class="form-group col-md-12" id="abc1">
                        <label class="col-md-3">Image</label>
                        <div class="col-md-5">                         
                            <input type="file" class="upload"  name="image_addversion[]" id="image_addversion" accept="image/x-png,image/gif,image/jpeg"> 
                            <input type="text" id="image_addversion_txt" name="image_addversion_txt[]" class="form-control"  style="width:150px">
                            <span><a href="javascript:void(0);" class="addversion" >Add More</a></span>
                        </div>                                                                                                                                                                
                    </div>
                     <div class="form-group col-md-12">
                        <div class="col-md-3"></div>
                        <div class="col-md-9 contents_modal_version"></div>          
                        </div>
                    



                    <div class="form-group col-md-12">
                        <label class="col-md-3">Discount factor</label>
                        <div class="col-md-8">
                            <select  class="form-control required " name="txt_discount_type_modal1" onchange="common_function1()" id="txt_discount_type_modal1" >
                                <option value="0">Select</option>						   
                                <option value="In Value">In Value</option>
                                <option value="In %">In %</option>
                            </select>
                        </div>
                    </div>                  
                     <div class="form-group col-md-12">
                            <label class="col-md-3">Product Type</label>
                            <div class="col-md-8">
                                <select id="txt_product_type_add_version" class="form-control required " name="txt_product_type_add_version" >
                                </select>
                            </div>
                            </div>    
                    <div class="form-group col-md-12">
                                                           <label class="col-md-3">Product Size</label>
                                                           	<div class="col-md-8">
                                                                <select id="request2" class="form-control required " name="request2[]" multiple="multiple" >
                                                                </select>
                                                            </div>
                                                        </div>
                    <div class="form-group col-md-12">                           
                        <label for="hsn" class="col-md-3">Discount rate</label>                       
                            <div class="col-md-8">
                                 <input type="hidden" class="form-control required" placeholder=""  name="get_data" id="get_data" value="<?php echo $business_category_id; ?>">                                 
                                <input type="text" class="form-control" onkeyup="common_function1()" name="txt_discount_type_rate1" id="txt_discount_type_rate1" >
                            </div>                       
                    </div>	                   
                    <div class="form-group col-md-12">
                        <label class="col-md-3">cal discount </label>                     
                            <div class="col-md-8">
                                <input type="text"  class="form-control required" id="discount_calculated_value1" name="discount_calculated_value1" readonly>
                            </div>                  
                    </div>
                     
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Final price </label>
                        <div class="col-md-8">
                            <input type="hidden" class="form-control" name="txt_product_main_category1" id="txt_product_main_category1">  
                            <input type="hidden" class="form-control" name="txt_product_category1" id="txt_product_category1">  
                            <input type="hidden" class="form-control" name="igst_tax" id="igst_tax">
                            <input type="hidden" class="form-control" name="cgst_tax" id="cgst_tax">
                            <input type="hidden" class="form-control" name="sgst_tax" id="sgst_tax">
                            <input type="hidden" class="form-control" name="tax_type1" id="tax_type1">
                            <input type="hidden" class="form-control" name="txt_uom_version" id="txt_uom_version">
                            <input type="hidden" class="form-control" name="txt_gstn1" id="txt_gstn1"  onkeypress="return isNumber(event);" maxlength="14"> 
                            <input type="text"  class="form-control required" id="product_final_price2" name="product_final_price2" readonly>
                        </div>
                    </div>                  
                    <div class="form-group col-md-12">
                        <label class="col-md-3">bar-code type</label>
                        <div class="col-md-8">
                            <select id="barcode_type1" class="form-control required " name="barcode_type1" >
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="col-md-3">bar-code number </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control required" name="barcode_number1" id="barcode_number1"  onkeypress="return isNumber(event);" >
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3">UOM</label>
                        <div class="col-md-8">
                            <select id="txt_uom1" class="form-control required " name="txt_uom1" >
                            </select>
                        </div>
                    </div>                 
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Avi.Quantity </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control required" name="Quantity_available1" id="Quantity_available1"  onkeypress="return isNumber(event);">
                        </div>
                    </div>                   
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Threshold limit </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control required" name="Threshold_limit1" id="Threshold_limit1"  onkeypress="return isNumber(event);" >
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Productconfigure</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control required" name="product_config1" id="product_config1" >  
                            <input type="hidden" class="form-control required" name="product_id_new_version" id="product_id_new_version">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3">Rate</label>
                        <div class="col-md-2">
                            <input type="checkbox"  class="form-control required" checked id="rate_chk1" name="rate_chk1"  >
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-md-3">product schedule</label>
                        <div class="col-md-2">
                            <input type="checkbox" class="form-control required" name="is_product_is_scedule1" id="is_product_is_scedule1" value="" >
                        </div>
                    </div>
                    <div id="autoUpdate2" class="autoUpdate2">
                        <div class="form-group col-md-12">
                            <label class="col-md-3">End date</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control required" name="product_version_end_date1" id="product_version_end_date1" >    </div>
                        </div>    
                        <div class="form-group col-md-12">
                            <label class="col-md-3">number of days </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control required" name="number_of_days1" id="number_of_days1"  onkeypress="return isNumber(event);" >   
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="border-top: none;">
                    <button type="submit" class="btn btn-default" id="button_submit" >Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();" >Close</button>
                   </div>
                </form>
            </div>

        </div>
    </div>

</div>



<script>
// $('#myModal').modal({backdrop: 'static', keyboard: false}); 
    var count=0;
    var verification;
    var increment = 2; 
     $(document).ready(function ()
    {
        $(".autoUpdate").hide();
        $(".autoUpdate2").hide();
        display_parent_child();
        display_product_type();
        display_product_barcode();
        display_product_uom();
        display_size();
    });
    function size()
        {
            $.ajax
                  ({
                      type: "POST",
                      url: "<?php echo base_url(); ?>"+"Create_Product/get_size_data",
                      dataType: 'json',                

                        success: function (data)
                             {                      
                                $("<option />").val("0")
                                        .text("Select Size")
                                        .appendTo($('select#request1'));
                                        for(var i=0;i<data.length;i++)
                                                { 												
                                                    $("<option />").val(data[i].id)
                                                                    .text(data[i].name)
                                                                    .appendTo($('select#request1'));
                                                }

                              }

                  });
        }
    function display_size()
        {
            $.ajax
                  ({
                      type: "POST",
                      url: "<?php echo base_url(); ?>"+"Create_Product/get_size_data",
                      dataType: 'json',                

                        success: function (data)
                             {                      
                                $("<option />").val("0")
                                        .text("Select Size")
                                        .appendTo($('select#request'));
                                        for(var i=0;i<data.length;i++)
                                                { 												
                                                    $("<option />").val(data[i].id)
                                                                    .text(data[i].name)
                                                                    .appendTo($('select#request'));
                                                }

                              }

                  });
        }
         function size_version()
        {
            $("#request2").empty();
            $.ajax
                  ({
                      type: "POST",
                      url: "<?php echo base_url(); ?>"+"Create_Product/get_size_data",
                      dataType: 'json',                

                        success: function (data)
                             {                      
                                $("<option />").val("0")
                                        .text("Select Size")
                                        .appendTo($('select#request2'));
                                        for(var i=0;i<data.length;i++)
                                                { 												
                                                    $("<option />").val(data[i].id)
                                                                    .text(data[i].name)
                                                                    .appendTo($('select#request2'));
                                                }

                              }

                  });
        }
    function display_product_type()
        {
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_Product/get_product_type",
                    dataType: 'json',                                   
                    success: function (data)
                      {                     
                        $("<option />").val("0")
                                    .text("Select Product Type")
                                    .appendTo($('select#txt_product_type'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].id)
                                              .text(data[i].name)
                                              .appendTo($('select#txt_product_type'));
                            }

                      }

                });
        }
         function product_type1()
        {  $("#txt_product_type_add_version").empty();
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_Product/get_product_type",
                    dataType: 'json',                                   
                    success: function (data)
                      {                     
                        $("<option />").val("0")
                                    .text("Select Product Type")
                                    .appendTo($('select#txt_product_type_add_version'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].id)
                                              .text(data[i].name)
                                              .appendTo($('select#txt_product_type_add_version'));
                            }

                      }

                });
        }
          function product_type()
        {
           
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_Product/get_product_type",
                    dataType: 'json',                                   
                    success: function (data)
                      {                     
                        $("<option />").val("0")
                                    .text("Select Product Type")
                                    .appendTo($('select#txt_product_type_version'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].id)
                                              .text(data[i].name)
                                              .appendTo($('select#txt_product_type_version'));
                            }

                      }

                });
        }
        function display_product_barcode()
        {
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_Product/get_barcode_data",
                    dataType: 'json',                                   
                    success: function (data)
                      {                     
                        $("<option />").val("0")
                                    .text("Select Barcode")
                                    .appendTo($('select#barcode_type_product'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].barcode_id)
                                              .text(data[i].Code)
                                              .appendTo($('select#barcode_type_product'));
                            }

                      }

                });
        }
        function display_product_uom()
        {
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_Product/get_uom_data",
                    dataType: 'json',                                   
                    success: function (data)
                      {                     
                        $("<option />").val("0")
                                    .text("Select Uom")
                                    .appendTo($('select#txt_uom_product'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].uom_id)
                                              .text(data[i].Name)
                                              .appendTo($('select#txt_uom_product'));
                            }

                      }

                });
        }
        
     function convert(array) {

         var id  = $("#get_data").val();
         alert(id);
    var get_cat_id=$("#get_category_id").val();
    
         var iddata =[]; var temp=0;
         iddata.push(id);
         var length = array.length;
         var map = {}, node, roots = [];
            for (var m = 0; m < length; m++) {
             temp=0;
             for(var k=0;k<iddata.length;k++){          
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
                if (node.category_id !== get_cat_id) {
                 
                    array[map[node.category_id]].items.push(node);
                } else {
                    roots.push(node);
                }
            }
            } 
            // console.log(roots);
        return roots;
    }
    function buildList(parentElement, items)
    {
        var i, l, list, li;
        if (!items || !items.length)
        {
            return;
        } 
        list = $('<ul class="dropdown-menu" ></ul>').appendTo(parentElement);
        for (i = 0, l = items.length; i < l; i++)
        {
            if (items[i].items.length !== 0)
            {
                li = $('<li class="dropdown-submenu"><a  id="' + items[i].product_category_id + '" onclick="getIDLi(this.id)">' + items[i].Name + '<span class="caret"></span></a></li>');
                buildList(li, items[i].items);
            } else if (items[i].items.length === 0)
            {
                li = $('<li class="dropdown-submenu"><a  tabindex="-1"  id="' + items[i].product_category_id + '" onclick="getIDLi(this.id)">' + items[i].Name + '</a></li>');
                buildList(li, items[i].items);
            }
            list.append(li);
        }
    }
    function getIDLi(id)
    {
        document.getElementById("parent_id").value = id; 
         $('[name="parent_id1"]').val(id);
        var Data_Of_a_tag = document.getElementById(id).textContent;
        document.getElementById("parent_name").value = Data_Of_a_tag;
      
        var value=id;
          if (value) {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url(); ?>" + "Create_Product/product_category_data_hsn",
                    data: 'value=' + value,
                    dataType: 'json',
                    success: function (res) {
                        var m = (JSON.stringify(res[0].Hsn_Code));
                        $("#txt_hsn").val(res[0].Hsn_Code);
                        $("#txt_igst").val(res[0].Igst);
                        $("#txt_cgst").val(res[0].Cgst);
                        $("#txt_sgst").val(res[0].Sgst);
                    }
                });
            }        
    }
    $('#aaa').on('click', function () {
        var get_data = $("#get_data").val();
      //  alert(get_data);
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url(); ?>" + "Create_Product/get_city1_new",
            data: 'city=' + get_data,
            dataType: 'json',
            success: function (res) {                
                var points = [];
                points = convert(res);
                buildList($('#pageContent1'), points);                
            }
        });
    });
    function name_verification()
    {
        var mail = document.getElementById("txt_product_name").value;
        var helpemail = document.getElementById("txt_chapter_div");
        var mailformat = /^[0-9a-zA-Z\s]+$/;
        if (mail == "")
        {
            helpemail.style.color = 'red';
            helpemail.innerHTML = "Please Enter Product Name";
            mail.value = "";
            document.getElementById("btnCustLogin_pr").disabled = true;
        } else
        {
            if (mail != "" && mail.match(mailformat))
            {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "Create_Product/check_Product_name",
                    method: "POST",
                    data: "email=" + mail,
                    // processData: false,
                    // contentType: false,
                    // type:"JSON",
                    success: function (data)
                    {
                        if (data == 0) {
                            $("#txt_chapter_div").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                            document.getElementById("btnCustLogin_pr").disabled = true;
                        } else {
                            $("#txt_chapter_div").html("<span style='color:green;'>Name Valid</span>");
                            document.getElementById("btnCustLogin_pr").disabled = false;
                        }
                    }
                });
            } else {
                helpemail.style.color = 'red';
                helpemail.innerHTML = "Please Enter Valid Product Name";
                mail.value = "";
                document.getElementById("btnCustLogin_pr").disabled = true;
            }
        }
        return false;
    }
    function display_parent_child()
    {
        $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Create_Product/get_parent_data",
                    dataType: 'json',
                    success: function (data)
                    {
                     //   alert(data);
                    if((data)==null){
                        var get_id="0";
                    }
                    else{
                     var get_id =JSON.parse(data.category_id);
                    }
                  
                       $('[name="get_category_id"]').val(get_id);
                    }

                });
    }
    $("form[name='btnCustLogin_form']").submit(function (e)
    {        
        var final_price;
        var final_amount;
        var igst_amount;
        var cgst_amount;
        var sgst_amount;
        var product_price_inclusive;
        var tax_deducting_val;
        e.preventDefault();
        var barcode_type_product = $("#barcode_type_product").val();
        var barcode_number_product = $("#barcode_number_product").val();
        var txt_uom_product = $("#txt_uom_product").val();
        var product_version_end_date_product = $("#product_version_end_date_product").val();
     /*   var txt_product_name = $("#txt_product_name").val();*/
        var txt_product_description = $("#txt_product_description").val();
        var txt_product_main_category = $("#txt_product_main_category").val();
        var txt_product_category = $("#txt_product_category").val();
        var txt_hsn = $("#txt_hsn").val();
        var txt_discount_type = $("#txt_discount_type").val();
        var txt_discount_amount = $("#txt_discount_amount").val();
        var txt_product_price = $("#txt_product_price").val();
        var txt_igst = $("#txt_igst").val();
        var txt_gstn = $("#txt_gstn").val();
        var tax_type = $("#tax_type").val();
        var txt_cgst = $("#txt_cgst").val();
        var txt_sgst = $("#txt_sgst").val();
        var tax_type = $("#tax_type").val();
        var approval = $("#is_approved").val();
        $('[name="tax_type1"]').val(tax_type);
        $('[name="txt_gstn1"]').val(txt_gstn);
        $('[name="txt_product_category1"]').val(txt_product_category);
        $('[name="txt_product_main_category1"]').val(txt_product_main_category);       
        $('[name="igst_tax"]').val(txt_igst);
        $('[name="cgst_tax"]').val(txt_cgst);
        $('[name="sgst_tax"]').val(txt_sgst);
        

{
        if (txt_product_name == "" || txt_product_description == "" || txt_product_main_category == "" || txt_product_category == "" || product_version_end_date_product=="")
        {
            alert("Please fill the details");
            //document.getElementById("btnCustLogin_pr").disabled = true;
        } else
        {
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>" + "Create_Product/product_save_data",
                type: "POST",
                data: formData,
                // async: false,
                dataType: 'JSON',
                success: function (msg) {
                    localStorage.setItem("msg", JSON.stringify(msg));
                    $("#product_id").val(msg.product_id);
                    $("#product_id_value").val(msg.product_id);
                    
                    $("#version_id").val(msg.version_id);
                    if (msg.product_id >= 1) {
                       
                        var chk = $("#Is_Service_modal").attr("checked") ? 1 : 0;
                        var txt_hsn_modal_modal = $("#txt_hsn_modal").val(msg.product_tbl_data[0].Hsn_Code);
                        var txt_product_price_modal = $("#txt_product_price_modal").val(msg.product_tbl_data[0].Cost_1);
                        var txt_discount_type_modal = $("#txt_discount_type_modal").val(msg.product_tbl_data[0].Discount_Type);
                        var txt_discount_type_rate = $("#txt_discount_type_rate").val(msg.product_tbl_data[0].Discount_Rate);
                        var type = msg.product_tbl_data[0].Discount_Type;
                        if (type == 'In Value')
                        {
                            var price = msg.product_tbl_data[0].Cost_1;
                            var discount = msg.product_tbl_data[0].Discount_Rate;
                            var selling_cost = price - discount;
                            $("#discount_calculated_value").val(discount);
                            $("#product_final_price1").val(selling_cost);
                        }
                        if (type == 'In %')
                        {
                            var Discount_Rate = msg.product_tbl_data[0].Discount_Rate;
                            var Cost_1 = msg.product_tbl_data[0].Cost_1;
                            var discount_value = ((Cost_1) * (Discount_Rate)) / 100;
                            var selling_cost = (Cost_1 - discount_value);
                            $("#discount_calculated_value").val(discount_value);
                            $("#product_final_price1").val(selling_cost);
                        }
                         $("#myModal").modal();
                    }

                },
                cache: false,
                contentType: false,
                processData: false
            });
            uom();
            barcode();
            product_type();
            size();
        }
        }
    });
    $(document).ready(function ()
    {
       
        var i1 = 0;
        $(".add").click(function () {
            i1++;
            if (i1 <= 6) {
                $('<div id="remove_image"><div class="col-sm-3" style="display:inline"></div><div class="col-sm-3" style="display:inline"></div><div class="col-sm-6"><input class="files" name="image[]" type="file" ><input type="text" class="form-control"  style="width:150px" id="img_txt[]" name="img_txt[]"><span class="rem" ><a href="javascript:void(0);" >Remove</span></div></div>').appendTo(".contents");
            } else {
                alert("Only 7 imags allow");
            }

        });
        $('.contents').on('click', '.rem', function () {
            $("#remove_image").remove();
            i1--;
        });

    });
     $(document).ready(function ()
    {

        var k1 = 0;
        $(".add_version1").click(function () {
            k1++;
            if (k1 <= 6) {
                $('<div id="remove_image_version"><div ><input class="files" name="image_version[]" type="file" ><input type="text" class="form-control"  style="width:150px"  id="image_version_txt[]" name="image_version_txt[]"><span class="rem_version" ><a href="javascript:void(0);" >Remove</span></div></div>').appendTo(".contents_version");
            } else {
                alert("Only 7 imags allow");
            }

        });
        $('.contents_version').on('click', '.rem_version', function () {
           $("#remove_image_version").remove();
            k1--;
        });


    });
    $(document).ready(function ()
    {

        var m1 = 0;
        $(".addversion").click(function () {
            m1++;
            if (m1 <= 6) {
                $('<div id="remove_image_version1"><div ><input class="files" name="image_addversion[]" type="file" ><input type="text"  class="form-control"  style=" width:150px" id="image_addversion_txt[]" name="image_addversion_txt[]"><span class="rem_v" ><a href="javascript:void(0);" >Remove</span></div></div>').appendTo(".contents_modal_version");
            } else {
                alert("Only 7 imags allow");
            }

        });
        $('.contents_modal_version').on('click', '.rem_v', function () {
         $("#remove_image_version1").remove();
         //   $(this).parent("div").remove();
            m1--;
        });


    });
    function uom() {
        $("#txt_uom").empty();
        $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Create_Product/get_uom_data",
                    dataType: 'json',
                    success: function (data)
                    {
                        $("<option />").val("0")
                                .text("Select UOM")
                                .appendTo($('select#txt_uom'));
                        for (var i = 0; i < data.length; i++)
                        {
                            $("<option />").val(data[i].uom_id)
                                    .text(data[i].Name)
                                    .appendTo($('select#txt_uom'));
                        }

                    }

                });
    }
    function barcode() {
        $("#barcode_type").empty();
        $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Create_Product/get_barcode_data",
                    dataType: 'json',

                    success: function (data)
                    {
                        $("<option />").val("0")
                                .text("Select Barcode")
                                .appendTo($('select#barcode_type'));
                        for (var i = 0; i < data.length; i++)
                        {
                            $("<option />").val(data[i].barcode_id)
                                    .text(data[i].Code)
                                    .appendTo($('select#barcode_type'));
                        }

                    }

                });
    }
    function common_function()
    {
        var discount = $("#txt_discount_type_modal").val();
        if (discount == 'In Value')
        {
            var Cost_1 = $("#txt_product_price_modal").val();
            var Discount_Rate = $("#txt_discount_type_rate").val();
            var selling_cost = ((Cost_1) - (Discount_Rate));
            $("#discount_calculated_value").val(Discount_Rate);
            $("#product_final_price1").val(selling_cost);
        }
        if (discount == 'In %')
        {
            var Discount_Rate = $("#txt_discount_type_rate").val();
            var Cost_1 = $("#txt_product_price_modal").val();
            var discount_value = ((Cost_1) * (Discount_Rate)) / 100;
            var selling_cost = (Cost_1 - discount_value);
            $("#discount_calculated_value").val(discount_value);
            $("#product_final_price1").val(selling_cost);
        }
    }
    
    
     $('#is_product_is_scedule_product').change(function ()
    {
        if (this.checked)
            $('#autoUpdate_product').fadeIn('slow');
        else
            $('#autoUpdate_product').fadeOut('slow');
    });
    $('#is_product_is_scedule').change(function ()
    {
        if (this.checked)
            $('#autoUpdate').fadeIn('slow');
        else
            $('#autoUpdate').fadeOut('slow');
    });
    $('#is_product_is_scedule1').change(function ()
    {
        if (this.checked)
            $('#autoUpdate2').fadeIn('slow');
        else
            $('#autoUpdate2').fadeOut('slow');
    });
    function version_verification()
    {

        var mail = document.getElementById("product_version_name").value;
        //alert(mail);
        var helpemail = document.getElementById("txt_version_div");
        var mailformat = /^[0-9a-zA-Z\s]+$/;

        if (mail.value == "")
        {
            helpemail.style.color = 'red';
            helpemail.innerHTML = "Please Enter Version Name";
            mail.value = "";
            document.getElementById("btnCustLogin_modal_id").disabled = true;
        } else
        {



            if (mail != "" && mail.match(mailformat))
            {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "Create_Product/check_Version_name",
                    // url: "../Create_Product/check_Version_name/",
                    method: "POST",
                    data: "email=" + mail,
                    // processData: false,
                    // contentType: false,
                    //type:"JSON",
                    success: function (data)
                    {                     
                        if (data == 0) {
                            $("#txt_version_div").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                            document.getElementById("btnCustLogin_modal_id").disabled = true;
                            //	$("#btnCustLogin_bn").style.
                        } else {
                            $("#txt_version_div").html("<span style='color:green;'>Name Valid</span>");
                            document.getElementById("btnCustLogin_modal_id").disabled = false;
                        }
                    }
                });
            } else {
                helpemail.style.color = 'red';
                helpemail.innerHTML = "Please Enter Valid Version Name";
                mail.value = "";
                document.getElementById("btnCustLogin_modal_id").disabled = true;
            }
        }
        return false;
    }
    $("form[name='btnCustLogin_modal']").submit(function (e)
    {
        e.preventDefault();
        var product_id = $("#product_id").val();
        var uom = $("#txt_uom").val();
        $('[name="txt_uom_version"]').val(uom);
        var product_version_name = $("#product_version_name").val();
        var txt_product_type_version = $("#txt_product_type_version").val();  
        var request1 = $("#request1").val();       
        var txt_product_price_modal = $("#txt_product_price_modal").val();
        var barcode_number = $("#barcode_number").val();
        var product_config = $("#product_config").val();
        if (product_version_name == "" || txt_product_price_modal == "" || barcode_number == "" || product_config == "" || txt_product_type_version=="" || request1=="")
        {
            alert("Please fill the details");
           
        } else
        {
            var formData = new FormData($(this)[0]);

            $.ajax({
                url: "<?php echo base_url(); ?>" + "Create_Product/version_save_data",
                type: "post",
                data: formData,
                dataType: "json",
                success: function (data)
                {
                    
                       $('#myModal').modal('hide');
                       $("#product_data").hide();
                         var len = data.length;
                var content = "";
                var user_array = data;
                content += "<thead><tr> <th>Sr No.</th><th>product version name</th><th>product price</th><th>Product configuration</th><th>Hsn code</th><th >Edit</th><th>Delete</th><th>Add Version</th></tr></thead>";
                content += '</tr></thead><tbody id="table_body">';
                for (i = 0; i < user_array.length; i++)
                {

                    content += "<tr>";
                    content += "<td class='center black_font'>" + (i + 1) + "</td>" +
                            "<td class='center black_font'>" + user_array[i].product_version_name + "</td>" +
                            "<td class='center black_font'>" + user_array[i].product_price + "</td>" +
                            "<td class='center black_font'>" + user_array[i].Product_configuration + "</td>" +
                            "<td class='center black_font'>" + user_array[i].Hsn_code + "</td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='edit_version(" + user_array[i].product_version_id + ")'>Edit</a></td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='delete_version(" + user_array[i].product_version_id + ")'>Delete</a></td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='add_version(" + user_array[i].product_id + ")'>Add Version</a></td>" +
                            "</tr>";

                }
                content += '</tbody>';

                $('#example').html(content);

                $(document).ready(function () {
                    $('#example').DataTable();

                });
                },
                cache: false,        
                contentType: false,
                processData: false

            });


        }
     
      //  get_version_details(product_id);
    });
   // function get_data(product_id)
  //  {
       
 //   }
    $("form[id='btnCustLogin_modal_version_add']").submit(function (e)
    {
       //count=count+1;
       // alert(count);
        e.preventDefault();
        var product_id = $("#product_id").val();
        var product_version_name1 = $("#product_version_name1").val();
        var txt_product_price_modal1 = $("#txt_product_price_modal1").val();
        var barcode_number1 = $("#barcode_number1").val();
        var product_config1 = $("#product_config1").val();
        if (product_version_name1 == "" || txt_product_price_modal1 == "" || barcode_number1 == "" || product_config1 == "")
        {
            alert("Please fill the details");
        

        } else
        {
            var formData = new FormData($(this)[0]);
            $.ajax({
                url: "<?php echo base_url(); ?>" + "Create_Product/version_save_data_new",
                type: "post",
                data: formData,
                  dataType: "json",
                success: function (data)
                {
                    if (data) {
                    //    alert(JSON.stringify(data));
                      $('#myModal1').modal('hide');
                      $("#product_data").hide();
                         var len = data.length;
                var content = "";
                var user_array = data;
                content += "<thead><tr> <th>Sr No.</th><th>product version name</th><th>product price</th><th>Product configuration</th><th>Hsn code</th><th >Edit</th><th>Delete</th><th>Add Version</th></tr></thead>";
                content += '</tr></thead><tbody id="table_body">';
                for (i = 0; i < user_array.length; i++)
                {

                    content += "<tr>";
                    content += "<td class='center black_font'>" + (i + 1) + "</td>" +
                            "<td class='center black_font'>" + user_array[i].product_version_name + "</td>" +
                            "<td class='center black_font'>" + user_array[i].product_price + "</td>" +
                            "<td class='center black_font'>" + user_array[i].Product_configuration + "</td>" +
                            "<td class='center black_font'>" + user_array[i].Hsn_code + "</td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='edit_version(" + user_array[i].product_version_id + ")'>Edit</a></td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='delete_version(" + user_array[i].product_version_id + ")'>Delete</a></td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='add_version(" + user_array[i].product_id + ")'>Add Version</a></td>" +
                            "</tr>";

                }
                content += '</tbody>';

                $('#example').html(content);

                $(document).ready(function () {
                    $('#example').DataTable();
                                      });                         
                    }
                },
                cache: false,
                contentType: false,
                processData: false,

            });          
        }

    });

    function edit_version(id)
    {

        $("#txt_version_div2").empty();
        $("#img_data").empty();
        $("#barcode_type_update_val").empty();
        var product_for_image = $("#product_id").val();
        var id = id;
        var str = "id=" + id + "&product_for_image=" + product_for_image;
        $.ajax({
            url: "<?php echo base_url(); ?>" + "Create_Product/ajax_edit_version",
            // url: "<?php echo site_url('Create_Product/ajax_edit_version/') ?>" +id+product_for_image,
            data: str,
            type: "Post",
            dataType: "JSON",
            success: function (data)
            {
                verification = data.table[0].product_version_name;
                $('[name="txt_hsn"]').val(data.table[0].Hsn_code);
                $('[name="txt_price"]').val(data.table[0].product_price);
                $('[name="version_name"]').val(data.table[0].product_version_name);
                $('[name="txt_configuration"]').val(data.table[0].Product_configuration);
                $('[name="discount_rate_update"]').val(data.table[0].discount_rate);
                $('[name="number_of_days_update"]').val(data.table[0].number_of_days);
                $('[name="barcode_number_update"]').val(data.table[0].barcode_number);
                barcode_data(id);
                if (data.im != "no data") {
                    var arrayVariable = data.im;
                    var arrayLength = arrayVariable.length;
                    for (i = 0; i < arrayLength; i++) {
                        var temp = document.createElement('div');
                        var temp_img = document.createElement('div');
                        var link = document.createElement("a");
                        link.setAttribute("id", "delete_id" + i);
                        link.setAttribute("href", "javascript:void(0);");
                        link.className = 'disp';
                        link.setAttribute('onClick', 'delete_img("' + data.table[0].product_version_id + '","' + i + '","' + data.im[i] + '","' + data.path[i] + '","' + data.dir[i] + '")');
                        temp_img.id = 'uplod_img_' + i;
                        temp_img.className = 'results1';
                        link.appendChild(document.createTextNode("X"));
                        temp_img.append(link);
                        temp.id = "path_" + i;//'uplod_' + i;id="' + data.path[i] + '" 
                        temp.className = 'results';
                        temp.innerHTML = '<a href="' + data.im[i] + '" download ><img  height="50" id="img_display_' + i + '" width="50" src="' + data.im[i] + '"</a>';
                        temp.appendChild(temp_img);
                        $('#img_data')[0].appendChild(temp);
                    }
                }
                var $modal = $('#Edit_modal_for_update');
                $("#product_version_id").val(id);
                $modal.modal("show");
            }
        });
    }
    function barcode_data(id)
    {
        var state_name = $("#barcode_type_update").val();

        $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Create_Product/get_barcode",
                    dataType: 'json',
                    success: function (data)
                    {

                        for (var i = 0; i < data.length; i++)
                        {
                            if (state_name == data[i].barcode_id) {
                                $("<option />").val(state_name)
                                        .attr("selected", data[i].Code)
                                        .text(data[i].Code)
                                        .appendTo($('select#barcode_type_update_val'));
                                // else (state_name != data[i].barcode_id)
                            } else {
                                $("<option />").val(data[i].barcode_id)
                                        .text(data[i].Code)
                                        .appendTo($('select#barcode_type_update_val'));
                            }
                        }
                    }

                });
    }
    function update_version() {
    var product_id_val=$("#product_id_value").val();
  //  alert(product_id_val);
        var cust_id = $("#product_version_id").val();
        var version_name = $("#version_name").val();
        var txt_hsn = $("#txt_hsn").val();
        var txt_price = $("#txt_price").val();
        var txt_configuration = $("#txt_configuration").val();
        var barcode_number_update = $("#barcode_number_update").val();
        var discount_rate_update = $("#discount_rate_update").val();
        var number_of_days_update = $("#number_of_days_update").val();
        var barcode_type_update = $("#barcode_type_update_val").val();
        var str = "version_name=" + version_name + "&txt_hsn=" + txt_hsn + "&txt_price=" + txt_price + "&txt_configuration=" + txt_configuration + "&barcode_number_update=" + barcode_number_update + "&discount_rate_update=" + discount_rate_update + "&number_of_days_update=" + number_of_days_update + "&barcode_type_update=" + barcode_type_update+"&product_id_val="+product_id_val ;
        $.ajax({
            url: "<?php echo base_url(); ?>Create_Product/save_update_version/" + cust_id,
            method: "POST",
            data: str,
            dataType: "json",
            success: function (data)
            {
                  var len = data.length;
                var content = "";
                var user_array = data;
                content += "<thead><tr> <th>Sr No.</th><th>product version name</th><th>product price</th><th>Product configuration</th><th>Hsn code</th><th >Edit</th><th>Delete</th><th>Add Version</th></tr></thead>";
                content += '</tr></thead><tbody id="table_body">';
                for (i = 0; i < user_array.length; i++)
                {

                    content += "<tr>";
                    content += "<td class='center black_font'>" + (i + 1) + "</td>" +
                            "<td class='center black_font'>" + user_array[i].product_version_name + "</td>" +
                            "<td class='center black_font'>" + user_array[i].product_price + "</td>" +
                            "<td class='center black_font'>" + user_array[i].Product_configuration + "</td>" +
                            "<td class='center black_font'>" + user_array[i].Hsn_code + "</td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='edit_version(" + user_array[i].product_version_id + ")'>Edit</a></td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='delete_version(" + user_array[i].product_version_id + ")'>Delete</a></td>" +
                            "<td align='center'><a href='javascript:void(0);' class='center black_font' onclick='add_version(" + user_array[i].product_id + ")'>Add Version</a></td>" +
                            "</tr>";

                }
                content += '</tbody>';

                $('#example').html(content);

                $(document).ready(function () {
                    $('#example').DataTable();
                                      });            
               
            }
        });
       
    }
    function close_model() {
        location.reload();
    }

    function version_verification2()
    {
        var mail = document.getElementById("version_name").value;               // alert(mail);
        var helpemail = document.getElementById("txt_version_div2");
        var mailformat = /^[0-9a-zA-Z\s]+$/;

        if (mail == "")
        {
            helpemail.style.color = 'red';
            helpemail.innerHTML = "Please Enter Version Name";
            mail.value = "";
            document.getElementById("btnCustLogin_bn_pm").disabled = true;
        } else
        {



            if (mail != "" && mail.match(mailformat))
            {
                var desired = verification.replace(/^"(.+)"$/, '$1');
                if (mail == desired)
                {
                    $("#txt_version_div2").html("<span style='color:green;'>Name Updated</span>");
                    document.getElementById("btnCustLogin_bn_pm").disabled = false;
                } else {
                    $.ajax({
                        url: "<?php echo base_url(); ?>Create_Product/check_Version_name/",
                        // url: "../Create_Product/check_Version_name/",
                        method: "POST",
                        data: "email=" + mail,
                        // processData: false,
                        // contentType: false,
                        // type:"JSON",
                        success: function (data)
                        {
                            if (data == 0) {
                                $("#txt_version_div2").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                document.getElementById("btnCustLogin_bn_pm").disabled = true;
                                //	$("#btnCustLogin_bn").style.
                            } else {
                                $("#txt_version_div2").html("<span style='color:green;'>Name Valid</span>");
                                document.getElementById("btnCustLogin_bn_pm").disabled = false;
                            }
                        }

                    });
                }
            } else {
                helpemail.style.color = 'red';
                helpemail.innerHTML = "Please Enter Valid Version Name";
                mail.value = "";
                document.getElementById("btnCustLogin_bn_pm").disabled = true;
            }
        }
        return false;
    }
    function delete_version(id)
    {
        var id = id;

        var pid = $("#product_id").val();
        $.ajax
                ({
                    url: "<?php echo site_url('Create_Product/ajax_delete_version/') ?>" + id,
                    type: "POST",
                    // dataType: "JSON",
                    success: function (data)
                    {
                        alert("Successfully deleted");
                         get_version_details(pid);

                    }

                });
       
    }

    function  add_version(product_id) {
        $("#image_addversion").val('');
        $("#image_addversion_txt").val('');
        increment++;
        if (increment <= 7) {
            $(".autoUpdate1").hide();
            document.getElementById("txt_version_div3").innerHTML = "";
            document.getElementById("barcode_type1").innerHTML = "";
            document.getElementById("txt_uom1").innerHTML = "";
            // document.getElementById("txt_uom1").innerHTML = "";
            var product_id_new_version = product_id;
            var msg = localStorage.getItem("msg");
            var m2 = JSON.parse(msg);
            $("#myModal1").modal();
            var chk = $("#Is_Service_modal1").attr("checked") ? 1 : 0;
            var txt_hsn_modal_modal = $("#txt_hsn_modal1").val(m2.product_tbl_data[0].Hsn_Code);
            var txt_product_price_modal = $("#txt_product_price_modal1").val(m2.product_tbl_data[0].Cost_1);
            var txt_discount_type_modal = $("#txt_discount_type_modal1").val(m2.product_tbl_data[0].Discount_Type);
            var txt_discount_type_rate = $("#txt_discount_type_rate1").val(m2.product_tbl_data[0].Discount_Rate);
            $("#barcode_number1").val("");
            $("#Quantity_available1").val("");
            $("#Threshold_limit1").val("");
            $("#product_config1").val("");
            $("#product_version_name1").val("");
            $("#product_version_end_date1").val("");
            $("#number_of_days1").val("");
            var type = m2.product_tbl_data[0].Discount_Type;
            if (type == 'In Value')
            {
                var price = m2.product_tbl_data[0].Cost_1;
                var discount = m2.product_tbl_data[0].Discount_Rate;
                var selling_cost = price - discount;
                $("#discount_calculated_value1").val(discount);
                $("#product_final_price2").val(selling_cost);
            }
            if (type == 'In %')
            {
                var Discount_Rate = m2.product_tbl_data[0].Discount_Rate;
                var Cost_1 = m2.product_tbl_data[0].Cost_1;
                var discount_value = ((Cost_1) * (Discount_Rate)) / 100;
                var selling_cost = (Cost_1 - discount_value);
                $("#discount_calculated_value1").val(discount_value);
                $("#product_final_price2").val(selling_cost);
            }
            $("#product_id_new_version").val(product_id);
            uom1();
            barcode1();
            product_type1();
           size_version();

        } else {
            alert("you cant create more version")
        }
    }
   
    function version_verification3()
    {
        var mail = document.getElementById("product_version_name1").value;
        //alert(mail);
        var helpemail = document.getElementById("txt_version_div3");
        var mailformat = /^[0-9a-zA-Z\s]+$/;

        if (mail.value == "")
        {
            helpemail.style.color = 'red';
            helpemail.innerHTML = "Please Enter Version Name";
            mail.value = "";
            document.getElementById("button_submit").disabled = true;
        } else
        {



            if (mail != "" && mail.match(mailformat))
            {
                $.ajax({
                    url: "<?php echo base_url(); ?>Create_Product/check_Version_name/",
                    // url: "../admin/check_Version_name/",
                    method: "POST",
                    data: "email=" + mail,
                    // processData: false,
                    // contentType: false,
                    // type:"JSON",
                    success: function (data)
                    {
                        if (data == 0) {
                            $("#txt_version_div3").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                            document.getElementById("button_submit").disabled = true;
                            //	$("#btnCustLogin_bn").style.
                        } else {
                            $("#txt_version_div3").html("<span style='color:green;'>Name Valid</span>");
                            document.getElementById("button_submit").disabled = false;
                        }
                    }

                });
            } else {
                helpemail.style.color = 'red';
                helpemail.innerHTML = "Please Enter Valid Version Name";
                mail.value = "";
                document.getElementById("button_submit").disabled = true;
            }
        }
        return false;


    }
    function uom1() {
        //  alert(hii);
        $("#txt_uom1").empty();
        $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Create_Product/get_uom_data",
                    dataType: 'json',

                    success: function (data)
                    {
                        //  alert(data);

                        $("<option />").val("0")
                                .text("Select UOM")
                                .appendTo($('select#txt_uom1'));
                        for (var i = 0; i < data.length; i++)
                        {
                            $("<option />").val(data[i].uom_id)
                                    .text(data[i].Name)
                                    .appendTo($('select#txt_uom1'));
                        }

                    }
                });
    }
    function barcode1() {
        $("#barcode_type1").empty();
        $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Create_Product/get_barcode_data",
                    dataType: 'json',

                    success: function (data)
                    {
                        //alert(data);

                        $("<option />").val("0")
                                .text("Select Barcode")
                                .appendTo($('select#barcode_type1'));
                        for (var i = 0; i < data.length; i++)
                        {
                            $("<option />").val(data[i].barcode_id)
                                    .text(data[i].Code)
                                    .appendTo($('select#barcode_type1'));

                        }

                    }

                });
    }
    function common_function1()
    {
        var discount = $("#txt_discount_type_modal1").val();
        if (discount == 'In Value')
        {
            var Cost_1 = $("#txt_product_price_modal1").val();
            var Discount_Rate = $("#txt_discount_type_rate1").val();
            var selling_cost = ((Cost_1) - (Discount_Rate));
            $("#discount_calculated_value1").val(Discount_Rate);
            $("#product_final_price2").val(selling_cost);
        }
        if (discount == 'In %')
        {
            var Discount_Rate = $("#txt_discount_type_rate1").val();
            var Cost_1 = $("#txt_product_price_modal1").val();
            var discount_value = ((Cost_1) * (Discount_Rate)) / 100;
            var selling_cost = (Cost_1 - discount_value);
            $("#discount_calculated_value1").val(discount_value);
            $("#product_final_price2").val(selling_cost);
        }
    }
    function delete_img(id, del_i, img, path, dir)
    {
        // document.getElementById("btnCustLogin_bn_pm").disabled = true; 
        $("#img_name").val(path);
        $("#dir_name").val(dir);
        var img_name = $("#img_name").val();
        //alert(img_name);
        var dir_name = $("#dir_name").val();
        //alert(dir_name);												
        $.ajax({
            // url: "<?php echo base_url(); ?>" + "Create_Product/get_uom_data",
            url: "<?php echo base_url('Create_Product/delete_image/') ?>" + id,
            type: "POST",
            data: "dir=" + dir_name + "&img_name=" + img_name,
            // dataType: "JSON",
            success: function (data) {
                //   alert(JSON.stringify(data));
                //  alert(data);
                $("#path_" + del_i).hide();


            }
        });
    }


    function get_version_details(product_id)
    {
      //  $('#example').hide();
        $.ajax({
            url: "<?php echo base_url(); ?>Create_Product/fetch_version_details/",
            method: "POST",
            data: "product_id=" + product_id,
            dataType: "json",
            success: function (data)
            {
                //alert(product_id);
                //    alert(JSON.stringify(data));
                var len = data.length;
                var content = "";
                var user_array = data;
               content += "<thead><tr> <th>Sr No.</th><th>product version name</th><th>product price</th><th>Product configuration</th><th>Hsn code</th><th >Edit</th><th>Delete</th><th>Add Version</th></tr></thead>";
               content += '</tr></thead><tbody>';
                for (i = 0; i < user_array.length; i++)
                {
                    content += "<tr>";
                    content += "<td class='center'>" + (i + 1) + "</td>" +
                            "<td class='center black_font ' >" + user_array[i].product_version_name + "</td>" +
                            "<td class='center black_font'>" + user_array[i].product_price + "</td>" +
                            "<td class='center black_font'>" + user_array[i].Product_configuration + "</td>" +
                            "<td class='center black_font'>" + user_array[i].Hsn_code + "</td>" +
                            "<td align='center black_font'><a href='javascript:void(0);' onclick='edit_version(" + user_array[i].product_version_id + ")'>Edit</a></td>" +
                            "<td align='center black_font'><a href='javascript:void(0);' onclick='delete_version(" + user_array[i].product_version_id + ")'>Delete</a></td>" +
                            "<td align='center black_font'><a href='javascript:void(0);' onclick='add_version(" + user_array[i].product_id + ")'>Add Version</a></td>" +
                            "</tr>";
                }
                content += '</tbody>';
                $('#example').html(content);
                $(document).ready(function () {
                    $('#example').DataTable();
                });
            }
        });
    }
</script>

<?php
include('footer.php');
?>