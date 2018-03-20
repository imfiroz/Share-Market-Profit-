<?php //echo $site_name= $this->session->userdata('site_name');  ?>
<?php
include('header.php');
if (isset($_SESSION['bill_no'])) {
    $bill_no = $_SESSION['bill_no'];
} else {
    $bill_no = 0;
}
$_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
// $cust_id= $this->session->userdata('cust_id');
if (isset($_SESSION['invoice_number'])) {
     $inv = $_SESSION['invoice_number'];
} else {
    //echo"Aaa";
    $inv = "";
}

if (isset($_SESSION['ca_id'])) {
    $ca_id = $_SESSION['ca_id'];
} else {
    // echo"Aaa";
    $ca_id = "";
}

if (isset($_SESSION['cust_id'])) {

    $cust_id = $_SESSION['cust_id'];
} else {

    $cust_id = "";
}

if (basename($_SERVER['PHP_SELF']) == $_SESSION['previous']) {

    // echo"a0";
    $invoice_generated = $this->session->userdata('invoice_generated');
} else {
    unset($_SESSION['invoice_generated']);
    unset($_SESSION['ca_id']); //session_destroy();
}
//   echo $this->session->userdata('print_style');
if ($this->session->userdata('print_style')) {
    $print_style = $this->session->userdata('print_style');
} else {
    $print_style = "invoice";
}
if ($this->session->userdata('barcode_renderer')) {
    $barcode_renderer = $this->session->userdata('barcode_renderer');
} else {
    $barcode_renderer = "svg";
}
  //$img = $this->session->userdata('barcode_renderer');
// echo $aadhar['row']->Aadhar_card;
//print_r($biller);
?>



<!-- jQueryUI Spinner -->



<!-- jQueryUI Autocomplete -->



<!-- Touchspin -->



<!-- Input switch -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch.css">-->



<!-- Textarea -->




<!-- Multi select -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/multi-select/multiselect.css">-->



<!-- Uniform -->



<!-- Chosen -->


<div id="page-content-wrapper">
    <div id="page-content">

        <div class="container">
            <div id="page-title">
                <h2>Generate Invoice</h2> 
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
                        Create Invoice
                    </h3>
                    <div class="example-box-wrapper">
                        <fieldset> 

                            <a href=""  class="btn btn-default" onClick="resetForm()" data-toggle="tab">New Invoice</a>

                            <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="" name="gstin" id="gstin">
                            <input type="hidden" class="form-control" placeholder="" name="c_id" id="c_id">
                            <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="<?php echo $cust_id; ?>" name="cust_id" id="cust_id">
                            <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="<?php echo $branch_id; ?>" name="branch_id" id="branch_id">
                            <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="<?php echo $company_id; ?>" name="company_id" id="company_id">

                            <div class="control-group"> 
                                <!-- Email -->
                                <input type="hidden" readonly  class="form-control" name="bill_no" id="bill_no" value="<?php echo $bill_no; ?>">
                                <label for="email" class="col-md-2">Customer</label>
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Enter Customer Name" name="customers" id="customers">
                                        <span id="cust_id_error"></span>
                                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Customer</button>



                                    </div>
                                </div>
                            </div>
                            <div class="control-group"> 
                                <!-- Email -->
                                <label for="email" class="col-md-2">Product</label>
                                <div class="form-group">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="Enter Product Name" name="txt_product_name" id="txt_product_name">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Customer</h4>

                    </div>
                    <div class="modal-body">

                        <input type="hidden"  class="form-control" name="role_id" id="role_id" value="3">
                        <input type="text"  class="form-control" name="txt_name" id="txt_name" placeholder="Enter Name">
                    </div>
                    <div class="modal-body">
                        <input type="text"  class="form-control" name="txt_email" id="txt_email" placeholder="Enter Email">
                        <div id="errfn"></div><div id="mail"></div> 
                    </div>
                    <div class="modal-body">
                        <input type="text"  class="form-control" onkeypress="return isNumber(event);"  maxlength="10" name="txt_mobile" id="txt_mobile" placeholder="Enter Mobile">
                        <div id="mob"></div></div>
                    <div class="modal-footer">
                        <button type="button" onclick="save_customer();" class="btn btn-default" name="btnCustLogin_bn" id="btnCustLogin_bn" data-dismiss="modal">Save</button><button type="button" class="btn btn-default" onclick="close_model();" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="editUserPopUp1" tabindex="-1" 
             role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">

                        <input type="hidden" class="form-control" placeholder="Enter product id" value="" name="p_id" id="p_id">
                        <input type="hidden" class="form-control" placeholder="Enter product id" value="" name="p_id_1" id="p_id_1">
                        <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="" name="Hsn_Code" id="Hsn_Code">
                        <button type="button" class="close" data-dismiss="modal">&times;</butt

                            <h4 class="modal-title">Item BuZZer</h4>
                    </div>
                    <div class="modal-body">
                        <label >Product: <span id="product_name"></span> </label> <label >Actual Price:<span id="actual_cost_sw"></span></label>
                        <input type="hidden"  readonly class="form-control" name="actual_cost" id="actual_cost" >
                        <input type="hidden" value="0"  readonly class="form-control" readonly name="actual_cost_hid" id="actual_cost_hid" >
                        <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="" name="gstin1" id="gstin1">

                    </div>
                    <div class="modal-body">
                        <label class="col-md-3">Product Price:</label>
                        <input type="text" class="col-md-5" onkeyup="common_function()"  name="product_actual_rate" id="product_actual_rate"  readonly>
                        <input type="hidden"  readonly  class="form-control" name="txt_product_name_hid" id="txt_product_name_hid">
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3"> Tax type:</label>                         
                                                            <!--<select id="txt_type" onchange="common_function();"> 														
                                                            </select>	-->
                        <input type="text" class="col-md-5"  name="txt_type1" id="txt_type1" readonly>

                    </div>
                    <div>&nbsp </div>

                    <div class="modal-body" >
                        <label class="col-md-3">Selling Cost:<span id="seal_cost_span"></span></label>
                        <input type="text" readonly name="seal_cost" id="seal_cost" class="col-md-5">
                        <input type="hidden" readonly  name="seal_cost_hid" id="seal_cost_hid">
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3">Present qty:</label>
                        <input type="text" value="1" name="present_qty" id="present_qty" onkeyup="common_function();" class="col-md-5">
                        <input type="hidden"  name="present_qty_available" id="present_qty_available"  class="col-md-5">

                        <input type="hidden"  readonly   name="present_qty_available_modal" id="present_qty_available_modal" >
                        <input type="hidden"  readonly   name="present_qty_hid" value="1"id="present_qty_hid" >
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3">Final Price:</label>
                        <input type="text"  name="total_amount" id="total_amount" class="col-md-5">
                        <input type="hidden"  readonly name="total_amount_hid" id="total_amount_hid">        
                    </div>
                    <div>&nbsp </div>											
                    <div class="modal-body">
                        <label class="col-md-3">Discount type:</label>
                        <!--<input type="radio" id="inval" name="discount" value="In Value" checked> In Value 
                        <input type="radio" id="inper" name="discount" value="In %"> In %-->
                        <select id="txt_type33"  name="txt_type33" onchange="common_function();" class="col-md-5"> 														
                        </select>                            
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3">Discount Amount: </label><input type="text" onkeyup="common_function()" name="discount_amount" id="discount_amount" class="col-md-5" >
                        <input type="hidden"  readonly name="discount_amount_hid" id="discount_amount_hid">
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3">Discounted  Total</label>
                        <input type="text"  name="discounted_total" id="discounted_total" readonly class="col-md-5">
                        <input type="hidden"  readonly name="discounted_total_hid" value="0" id="discounted_total_hid">        
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3">IGST</label>
                        <input type="text" value="0" onkeyup="common_function()" name="txt_igst" id="txt_igst" readonly class="col-md-2">
                        <input type="text" onkeyup="common_function()" value="0" readonly name="txt_igst_cal" id="txt_igst_cal" class="col-md-3">      
                        <input type="hidden"  readonly name="txt_igst_hid" value="0" id="txt_igst_hid"> 
                        <input type="hidden"  readonly name="txt_igst_cal_hid" value="0" id="txt_igst_cal_hid"> 
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3" >CGST</label>
                        <input type="text" onkeyup="common_function()"  name="txt_cgst" id="txt_cgst" readonly class="col-md-2">
<!--                            <input type="text"  value="0" onkeyup="common_function()"name="txt_cgst_cal" id="txt_cgst_cal"> -->
                        <input type="text" onkeyup="common_function()" value="0" readonly name="txt_cgst_cal" id="txt_cgst_cal" class="col-md-3">
                        <input type="hidden"  readonly name="txt_cgst_hid" value="0" id="txt_cgst_hid"> 
                        <input type="hidden"  readonly name="txt_cgst_cal_hid" value="0" id="txt_cgst_cal_hid"> 
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3">SGST</label>
                        <input type="text"  value="0" onkeyup="common_function()" name="txt_sgst" id="txt_sgst" readonly class="col-md-2">
                        <input type="text" value="0"   onkeyup="common_function()" readonly name="txt_sgst_cal" id="txt_sgst_cal" class="col-md-3">      
                        <input type="hidden"  readonly name="txt_sgst_hid" value="0" id="txt_cgst_hid"> 
                        <input type="hidden"  readonly name="txt_sgst_cal_hid" value="0"id="txt_sgst_cal_hid"> 
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3">Total tax</label>
                        <input type="text"  name="calculated_total" id="calculated_total" class="col-md-5">
                        <input type="hidden"  readonly name="calculated_total_hid" value="0" id="calculated_total_hid">        
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-body">
                        <label class="col-md-3">Final Total</label>
                        <input type="text"  name="final_total_cal" id="final_total_cal" readonly class="col-md-5">
                        <input type="hidden"  readonly name="final_total_cal_hid" value="0" id="final_total_cal_hid">        
                    </div>
                    <div>&nbsp </div>
                    <div class="modal-footer" id="save_data_btn1">
                        <button type="button" onclick="save_product_in_cat();" class="btn btn-default" name="btnCustLogin_bn_p" id="btnCustLogin_bn_p" data-dismiss="modal">Save</button><button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();">Close</button>
                    </div>

                    <div class="modal-footer" id="update_data1">
                        <button type="button" onclick="update_product_in_cat();" class="btn btn-default" name="btnCustLogin_bn_p" id="btnCustLogin_bn_p" data-dismiss="modal">Update</button><button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <input type="hidden" name="ca_tbl_id" id="ca_tbl_id" value="<?php echo $ca_id; ?>"></input>
        <input type="hidden" name="invoice_no" id="invoice_no" value="<?php echo $inv; ?>"></input>  
  <input type="hidden" name="barcode_renderer" id="barcode_renderer" value="<?php echo $barcode_renderer; ?>">
        <!--display prosuct start -->
        <input type="hidden" name="bill_type" id="bill_type" value="<?php echo $print_style; ?>">
        <!--<select id="bill_type">
         <option value="0">Select</option>
          <option value="invoice">Invoice</option>
          <option value="bill">Bill</option>
         
        </select>
        -->  <div class="panel">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <input type="hidden" id="new_invoice" value="">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example1">
                                    <thead><tr><th>Sr No.</th><th>Item</th><th>Rate</th><th>Quantity</th><th>Amount</th><th>Cancel</th></tr></thead>
                                    <tbody>
                                        
                                    
                                    </tbody>
                                </table> 
                                <input type="button" value="Choose Payment Mode" onclick="payment_mode();">
                            </div>
                        </div>
             </div>

        <?php if($inv !=""){?>
        <input type="button" value="Print" onclick="PrintDiv('demo')"></input>

        <?php
        }
        if ($print_style == "invoice") {
            //echo"aaa";
            ?>
            <div id="demo" style="max-width: 480px;
                 margin: auto;" >
                <div>

                </div>
                <span id="xx" style="display:none;"><div id="barcodeTarget" class="barcodeTarget"></div>

                    <canvas id="canvasTarget" class="canvasTarget" width="100" height="00"></canvas>
                    <!--<h4 class="modal-title">Added Products</h4>-->
                </span>
 <span id="xx1" style="display:none;">  <div class="qrcode" id="qr2">
                     </div></span> 
            </div>
            <?php
        } else {
            //echo"ccc";
            ?>

            <div id="demo" style="max-width: 480px;
                 margin: auto;"  >
                 <?php
                 //$biller= $this->session->userdata('biller');
                 // print_r($biller);
                 // echo $aadhar['row']->Vat_no;
                 // $this->site->get_biller
                 //echo $biller_data->Aadhar_card;
                 ?>
                 <?php
                 // $biller= $this->session->userdata('biller');
                 // print_r($biller);
                 // echo $aadhar['row']->Mobile;
                 // $this->site->get_biller
                 //echo $biller_data->Aadhar_card;
                 ?>
                <div id="demo1">
                    <span id="xx" style="display:none;"><div id="barcodeTarget" class="barcodeTarget"></div>
                        <canvas id="canvasTarget" class="canvasTarget" width="" height="00"></canvas>
                    </span>
                 <span id="xx1" style="display:none;">  <div class="qrcode" id="qr2">
                     </div></span>  
                </div></div>
                    
                    <?php } ?>

    </div>
    <div id="demoxx"></div>
<div class="modal fade" id="Edit_modal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Payment Mode</h4>
                                                    </div> 
                                                 
                                                    
                                                    <div class="modal-body">
                                                        <label class="col-md-6">Amount</label>
                                                         <label class="col-md-4">Paying By</label>
                                                        <div> &nbsp</div>
                                                     <div> &nbsp</div> 
                                                        <div class="col-md-6">     
                                                            
                                                            <input type="text"   class="form-control" name="amount" id="amount" onkeyup="calculate_amount_for_payment(this.value)">
                                                             </div>
                                                       <div class="col-md-6">     
                                                            <select id="payment_type" class="form-control">
                                                    <option value="1">CASH</option>
                                                    <option value="2">CREDIT</option>
                                                   
                                                 
                                                    </select>
                                                           
                                                       </div> 
                                                      <div> </div>
                                                      <div id="business"> <input type="text"placeholder="Enter check number" class="form-control" id="cheque_no"></div> 
                                                         <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered"> 
                                                             <thead>
                                                                 <tr>
                                                                     <Th>Final Amount</th><th>Total Payable </th> <th>Balance</th>
                                                                 </tr>
                                                                 </thead>
                                                                 <tbody>
                                                                     <tr>
                                                                         <td><span id="final_amount"></span> </td>  <td><input type="hidden" id="total_payble_hid" value=""><span id="total_payble"></span> </td> <td><input type="hidden" id="balance_hid" value=""><span id="balance"></span></td>
                                                                 </tr>
                                                                     
                                                                 </tbody>
                                                         </table>
                                                            
                                                       
                                                             
                                                     <div> &nbsp</div>
                                                     <div> &nbsp</div>                                             
                                                     <div class="modal-footer" id="update_data">
                                                        <button type="button" onclick="update_payment();" class="btn btn-default" name="btnCustLogin_bn_p" id="btnCustLogin_bn_p" data-dismiss="modal">Save</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();" ">Close</button>
                                                      </div>
                                                </div>

                                            </div>
                                        </div>

    <?php
    include('footer.php');
    ?>
    <link href="<?php echo base_url(); ?>css/jquery-ui.css" rel="Stylesheet"></link>
    <style>
        * {
            color: #7F7F7F;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-weight: normal;
        }
        #config {
            overflow: auto;
            margin-bottom: 10px;
        }
        .config {
            float: left;
            width: 200px;
            height: 250px;
            border: 1px solid #000;
            margin-left: 10px;
        }
        .config .title {
            font-weight: bold;
            text-align: center;
        }
        .config .barcode2D,  #miscCanvas {
            display: none;
        }
        #submit {
            clear: both;
        }
        #barcodeTarget,  #canvasTarget {
            margin-top: 20px;

        }
        #barcodeTarget1{border:1px solid #eee;min-height:200px;width:200px;}
        .container{padding:10px;}
    </style>
    <script src="<?php echo base_url(); ?>js/jquery-ui.js" ></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-barcode.js"></script>
<!--    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.qrcode.min.js"></script>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.classyqr.js"></script>
    <script>
        
            var selling_cost;
            var cal;
            var txt_cgst;
            var amount_display = 0;
            var s;
            var cal_sg;
            var calculated_total;
            var finnal_ig;
            var tot;
            var cal_cg;
            var txt_igst;
            var txt_sgst;
            var Cost_1;
            var qty;
            var c;
            var seal_cost;
            var type;
            var discount;
            var Discount_Rate;
            var cost_after_tax;
            var discounted_amount;
            var tax_to_be_calculated;
            var total_tax;
            var state_name1;
            var state_name12;
            var gstin_number;
            var HSN_code;
            var qty_available;
             $('#payment_type').on('change', function() {
                // alert("aa");
      if ( this.value == '2')
      {
        $("#business").show();
      }
      else
      {
        $("#business").hide();
      }
    });
            function resetForm()
            {
				//alert("aa");
                // alert(str);
                $.ajax
                        (
                                {
                                    url: "<?php echo base_url(); ?>Generate_Invoice/distroy_bill",
                                    method: "POST",
                                    // data: str,
                                    // processData: false,
                                    //  contentType: false,
                                    // type:"JSON",
                                    success: function (data)
                                    {
										//alert(data);
                                        location.reload();
                                        //alert("Ok");
                                        //location.redirect();

                                    }
                                });

            }
   
 
        
        function PrintDiv1(divId) {

            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = "<html><head><title></title></head><body>" + printContents + "</body>";
            window.print();
            document.body.innerHTML = originalContents;
        }
        function PrintDiv(divid) {

            var selectval = $('#bill_type').val();

            //else{
            if (selectval == "bill") {

                // var divid1= $("#demo1").innerHTML();
                var contents = document.getElementById(divid).innerHTML;
                var frame1 = document.createElement('iframe');
                frame1.name = "frame1";
                frame1.style.position = "absolute";
                frame1.style.top = "-1000000px";
                document.body.appendChild(frame1);
                var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
                frameDoc.document.open();
                frameDoc.document.write('<html><head><title>DIV Contents</title>');
                frameDoc.document.write('</head><body>');
                frameDoc.document.write(contents);
                frameDoc.document.write('</body></html>');
                frameDoc.document.close();
                setTimeout(function () {
                    window.frames["frame1"].focus();
                    window.frames["frame1"].print();
                    document.body.removeChild(frame1);
                }, 500);
                return false;

            } else {

                var contents = document.getElementById(divid).innerHTML;
                var frame1 = document.createElement('iframe');
                frame1.name = "frame1";
                frame1.style.position = "absolute";
                frame1.style.top = "-1000000px";
                document.body.appendChild(frame1);
                var frameDoc = frame1.contentWindow ? frame1.contentWindow : frame1.contentDocument.document ? frame1.contentDocument.document : frame1.contentDocument;
                frameDoc.document.open();
                frameDoc.document.write('<html><head><title>DIV Contents</title>');
                frameDoc.document.write('</head><body>');
                frameDoc.document.write(contents);
                frameDoc.document.write('</body></html>');
                frameDoc.document.close();
                setTimeout(function () {
                    window.frames["frame1"].focus();
                    window.frames["frame1"].print();
                    document.body.removeChild(frame1);
                }, 500);
                return false;
            }
            //}
        }

        var FV = 0;var total_tax_amt = 0;
        function close_model() {
           // location.reload();
        }
        $(document).ready(function () {

                        
                                   var bill_no=$("#bill_no").val();
                                   if(bill_no!=0){
                                    var bill="Inv_"+bill_no;
                              
                                   $("#new_invoice").val(bill); 
                                    display_product(bill);
            //  sessionStorage.removeItem('invoice_number');
            var CA_id = $("#ca_tbl_id").val();
            var inv_no = $("#invoice_no").val();

            //alert(inv_no);
            // inv_no==""
            if ((CA_id != "")) {
                //  alert("bbb");
                // alert("ntblank");

                display_added_product(CA_id);
            }
            // if(inv_no!="" ){
            else {
                if(inv_no !=""){
                var print_style = $("#bill_type").val();
                //alert(print_style);
                if (print_style == "invoice") {
                    display_added_product_using_inv(inv_no);
                } else {
                    display_added_product_using_inv1(inv_no);
                }
            }
              
            }

                                   }else{}

        });

        function update_product_in_cat()
        {
            //     alert("madhu");
            var gstin = $('#gstin').val();

            var p_id = $("#p_id").val();
            var c_id = $("#ca_tbl_id").val();
            var actual_cost = $("#actual_cost").val();
            var actual_cost_hid = $("#actual_cost_hid").val();
            var discount_amount = $("#discount_amount").val();
            var discount_amount_hid = $("#discount_amount_hid").val();
            var seal_cost = $("#seal_cost").val();
            var seal_cost_hid = $("#seal_cost_hid").val();
            var present_qty = $("#present_qty").val();
            var present_qty_hid = $("#present_qty_hid").val();
            var total_amount = $("#total_amount").val();//fp
            var total_amount_hid = $("#total_amount_hid").val();
            var txt_hsn = $("#txt_hsn").val();
            var txt_hsn_hid = $("#txt_hsn_hid").val();
            var txt_igst = $("#txt_igst").val();
            var txt_igst_hid = $("#txt_igst_hid").val();
            var txt_igst_cal = $("#txt_igst_cal").val();
            var txt_igst_cal_hid = $("#txt_igst_cal_hid").val();
            var Hsn_Code = $("#Hsn_Code").val();
            var txt_cgst = $("#txt_cgst").val();
            var txt_cgst_hid = $("#txt_cgst_hid").val();
            var txt_cgst_cal = $("#txt_cgst_cal").val();
            var txt_cgst_cal_hid = $("#txt_cgst_cal_hid").val();
            var txt_sgst_cal = $("#txt_sgst_cal").val();
            var txt_sgst_cal_hid = $("#txt_sgst_cal_hid").val();
            var txt_sgst = $("#txt_sgst").val();
            var txt_sgst_hid = $("#txt_sgst_hid").val();
            var calculated_total = $("#calculated_total").val();
            var calculated_total_hid = $("#calculated_total_hid").val();
            var final_total_cal = $("#final_total_cal").val();
            var final_total_cal_hid = $("#final_total_cal_hid").val();
            var discount = $('input[name=discount]:checked').val();
            var Cost_1 = $("#product_actual_rate").val();
            var qty = $("#present_qty").val();
            var Discount_Rate = $("#discount_amount").val();//discount amount
            var product_actual_rate = $("#product_actual_rate").val();///pp
            var actual_cost = $("#actual_cost").val();
            /*if(actual_cost != actual_cost_hid && discount_amount != discount_amount_hid && seal_cost != seal_cost_hid && present_qty != present_qty_hid
             && total_amount != total_amount_hid && txt_hsn!= txt_hsn_hid && txt_igst!= txt_igst_hid && txt_igst_cal != txt_igst_cal_hid
             && txt_cgst != txt_cgst_hid && txt_cgst_cal != txt_cgst_cal_hid && txt_sgst_cal !=txt_sgst_cal_hid && txt_sgst != txt_sgst_hid
             && calculated_total != calculated_total_hid && final_total_cal !=final_total_cal_hid )
             {
             alert("ok");
             }
             else{
             alert("not");
             }*/
            var str = "c_id=" + c_id + "&gstin=" + gstin + "&actual_cost" + actual_cost + "&Hsn_Code=" + Hsn_Code + "&product_actual_rate=" + product_actual_rate + "&Discount_Rate=" + Discount_Rate + "&qty=" + qty + "&Cost_1=" + Cost_1 + "&discount=" + discount + "&p_id=" + p_id + "&actual_cost=" + actual_cost + "&discount_amount=" + discount_amount + "&seal_cost=" + seal_cost + "&present_qty=" + present_qty +
                    "&total_amount=" + total_amount + "&txt_hsn=" + txt_hsn + "&txt_igst=" + txt_igst + "&txt_igst_cal=" + txt_igst_cal + "&txt_cgst=" + txt_cgst + "&txt_cgst_cal=" + txt_cgst_cal
                    + "&txt_sgst_cal=" + txt_sgst_cal + "&txt_sgst=" + txt_sgst + "&calculated_total=" + calculated_total + "&final_total_cal=" + final_total_cal;
            //   alert(str);
            $.ajax
                    (
                            {
                                url: "<?php echo base_url(); ?>Generate_Invoice/update_product_in_cat",
                                method: "POST",
                                data: str,
                                // processData: false,
                                //  contentType: false,
                                // type:"JSON",
                                success: function (data)
                                {
                                    //	alert(data);
                                    alert("Ok");
                                    //location.redirect();

                                }
                            });

        }
        function save_product_in_cat()
        {

            // alert("madhu");
            //var gstin = document.getElementById("gstin").value;
            var gstin = gstin_number;
            //alert(1);
            //alert(gstin);
            var p_id = $("#p_id").val();
            var c_id = $("#c_id").val();
            var actual_cost = $("#actual_cost").val();
            //   var actual_cost_hid = $("#actual_cost_hid").val();
            var discount_amount = $("#discount_amount").val();
            //   var discount_amount_hid = $("#discount_amount_hid").val();
            var seal_cost = $("#seal_cost").val();
            //  var seal_cost_hid = $("#seal_cost_hid").val();
            var present_qty = $("#present_qty").val();
            //   var present_qty_hid = $("#present_qty_hid").val();
            var total_amount = $("#total_amount").val();//fp
            //    var total_amount_hid = $("#total_amount_hid").val();
            //  var txt_hsn = $("#txt_hsn").val();
            //    var txt_hsn_hid = $("#txt_hsn_hid").val();
            var txt_igst = $("#txt_igst").val();
            //     var txt_igst_hid = $("#txt_igst_hid").val();
            var txt_igst_cal = $("#txt_igst_cal").val();
            //    var txt_igst_cal_hid = $("#txt_igst_cal_hid").val();
            var Hsn_Code = HSN_code;
            var present_qty_available = $("#present_qty_available").val();
            var txt_cgst = $("#txt_cgst").val();
            //    var txt_cgst_hid = $("#txt_cgst_hid").val();
            var txt_cgst_cal = $("#txt_cgst_cal").val();
            //    var txt_cgst_cal_hid = $("#txt_cgst_cal_hid").val();

            var txt_sgst_cal = $("#txt_sgst_cal").val();
            //    var txt_sgst_cal_hid = $("#txt_sgst_cal_hid").val();
            var txt_sgst = $("#txt_sgst").val();
            //     var txt_sgst_hid = $("#txt_sgst_hid").val();
            var calculated_total = $("#calculated_total").val();
            //     var calculated_total_hid = $("#calculated_total_hid").val();
            var final_total_cal = $("#final_total_cal").val();
            //     var final_total_cal_hid = $("#final_total_cal_hid").val();
            //   var discount = $('input[name=discount]:checked').val();
            var discount = $("#txt_type33").val();
            var Cost_1 = $("#product_actual_rate").val();
            var qty = $("#present_qty").val();
            //     var Discount_Rate = $("#discount_amount").val();
            var Discount_Rate = $("#discount_amount").val();
            var product_actual_rate = $("#product_actual_rate").val();///pp
            var actual_cost = $("#actual_cost").val();
            
            var str = "c_id=" + c_id + "&gstin=" + gstin + "&actual_cost=" + actual_cost + "&Hsn_Code=" + Hsn_Code + "&product_actual_rate=" + product_actual_rate + "&Discount_Rate=" + Discount_Rate + "&qty=" + qty + "&Cost_1=" + Cost_1 + "&discount=" + discount + "&p_id=" + p_id + "&actual_cost=" + actual_cost + "&discount_amount=" + discount_amount + "&seal_cost=" + seal_cost + "&present_qty=" + present_qty +
                    "&total_amount=" + total_amount + "&txt_igst=" + txt_igst + "&present_qty_available=" + present_qty_available + "&txt_igst_cal=" + txt_igst_cal + "&txt_cgst=" + txt_cgst + "&txt_cgst_cal=" + txt_cgst_cal
                    + "&txt_sgst_cal=" + txt_sgst_cal + "&txt_sgst=" + txt_sgst + "&calculated_total=" + calculated_total + "&final_total_cal=" + final_total_cal;

            //  alert(str);
            $.ajax
                    (
                            {
                                url: "<?php echo base_url(); ?>Generate_Invoice/save_product_in_cat",
                                method: "POST",
                                data: str,
                                // processData: false,
                                //  contentType: false,
                                // type:"JSON",
                                success: function (data)
                                {
                                   // alert(data);
                                    
                                //    alert(data);
                                    var bill_no=$("#bill_no").val();
                                    if(bill_no==0){
                                    $("#new_invoice").val(data);
                                }
                                else{
                                    var bill="Inv_"+bill_no;
                                   $("#new_invoice").val(bill); 
                                }
								
                                   // alert("Success");
                                    display_product(data);
                                  //  location.reload();
                                    
                                   // alert($("#invoice_no").val());

                                }
                            });
        }
        function display_product(inv_no)
        {
          
            $.ajax
            ({
                url: "<?php echo base_url(); ?>Generate_Invoice/fetch_product_using_invoice/",
                method: "POST",
                data: "inv_no=" + inv_no,
                dataType: "json",
                success: function (user_array)
                {  var len=user_array.length;
                                 var content = "";
                                  content +="<thead><tr> <th>Sr No.</th><th>Item</th><th> Rate</th><th >Quantity</th><th>Amount</th><th>Cancel</th></tr></thead>";
                                 content += '</tr></thead><tbody>';
                     for (i = 0; i < user_array.length; i++)
                                     {

                                                    content += "<tr>" ;
                                                    content +=  "<td class='center'>" + (i+1) + "</td>" +
                                                       "<td class='center'>" + user_array[i].product_name + "</td>" +
                                                        "<td class='center'>" + user_array[i].rate + "</td>" +
                                                        "<td class='center'>" + user_array[i].quantity + "</td>" +
                                                        "<td class='center'>" + user_array[i].amount + "</td>" +
                                                         "<td class='center'>" + user_array[i].cancel + "</td>" +
                                                       // "<td class='center'>" + user_array[i].Sgst + "</td>" +
                                                      ///  "<td align='center'><a href='javascript:void(0);' onclick='edit_hsn(" + user_array[i].Hsn_Id + ")'>Edit</a></td>" +
                                                       // "<td align='center'><a href='javascript:void(0);' onclick='delete_hsn(" + user_array[i].Hsn_Id + ")'>Delete</a></td>" +
                                                 "</tr>";                      

                                     }
                                 content += '</tbody>';

                               $('#example1').html(content);
                    
                }
            });
            
        }
        function cancel_bill_item(id,inv)
        {
           //alert(id);
           $.ajax({
                url: "<?php echo base_url(); ?>Generate_Invoice/cancel_item_from_bill",
                method: "POST",
                data: "cat_id=" + id+"&inv_no="+inv,
                dataType: "json",
                success: function (data)
                {
//alert(data);
                    display_product(inv);
                  //  location.reload();
                }});
           
        }
      
      
		   function display_added_product_using_inv1(inv_no)
        {
           
            var CA_id = inv_no;
            $.ajax({
                url: "<?php echo base_url(); ?>Generate_Invoice/fetch_product_cust_details_using_invoice/",
                method: "POST",
                data: "inv_no=" + CA_id,
               dataType: "json",
                success: function (data)
                {  
                  
					
                    var len = data.length;
                    var div_ele = "";
                    var igst = 0;
                    var cgst = 0;
                    var sgst = 0;
					 var igst1 = 0;
                    var cgst1 = 0;
                    var sgst1 = 0;
                    var FV = 0;
                    var FV1 = 0;
                    var barcode = "";
                    var barcode_txt = "";
                    var amt = 0;
                    var total_tax_amt = 0;
                    var paid_amount=0;
					var amount_to_show=0;
					var amount_to_calculate=0;
				var	amt_shown=0;
                    //var content1 = "<table  name='example' class='display' id='example1'>";
                    var content = "<div class='row'><div class='col-md-6'><p>Tax Invoice</p></div> <div class='col-md-6'><p >Tel:"+data[0].Mobile+"</p></div></div>";
                     content +="<div class='row'><div class='col-md-3'></div> <div class='col-md-6'><img src='<?php echo base_url();?>assets/images/footer_logo.png'></div> <div class='col-md-3'></div></div>";
                     content +="<div class='row'><p style='text-align:center;font-size:12px;'>"+data[0].Location+"</p></div>";
                     content +="<div class='row'><p style='text-align:center;font-size:12px;'>GST Reg. No.:"+data[0].GSTIN+"</p></div>";
                   
                    content +="<div class='row'><div class='col-md-6'>Date:28/10/2017</div><div class='col-md-6'></div></div>";
                     content +="<div class='row'><div class='col-md-6'>Sales no.:"+CA_id+"</div><div class='col-md-6'></div></div> <br>";
                     content +="<div class='row'><div class='col-md-12'>Customer:"+data[0].Name+"<br>Tel:9891469865<br><p style='font-size:12px;'>"+data[0].Address+"</p></div></div>";
                     content += "<table  name='example'  class='display printt' id='prtrt'>";
                     var inv_no = $("#invoice_no").val();
                    generateBarcode(inv_no);
                   
                   
                    content += "<tr><th>Product</th> <th>Rate</th><th>Qty</th><th>Amount</th></tr></thead>";
                    //  generateBarcode(barcode_txt);   
                    var paid="";
                    for (var i = 0; i < len; i++)
                    {var gst=data[i].Igst;
			
					if(gst==""||gst==null||gst==0){
						
						cgst=data[i].Cgst;
						sgst=data[i].Sgst;
					}
					else{
						cgst=data[i].Igst/2;
						sgst=data[i].Igst/2;
					}
					var tax_type=data[i].tax_type;
					if(tax_type=="inclusive"){
				
					var amount_to_display=(parseFloat(data[i].Final_Value)/parseFloat(data[i].Quantity)) -(parseFloat(data[i].Product_Discount_Calculated_Value)/parseFloat(data[i].Quantity));
					amt_shown=parseFloat(amount_to_display) * data[i].Quantity;
					
					amount_to_calculate=parseFloat(amount_to_calculate)+parseFloat(amt_shown);
					
						  var tr_str = "<tr>" +
                                "<td class='left'>" + (i + 1) + "." + data[i].Product_Name + "</td>" +
                              
                                "<td class='left' >" +parseFloat(amount_to_display)  + "</td>" +
                                "<td class='center'>" + data[i].Quantity + "</td>" +
                                "<td class='left' >" +parseFloat(amount_to_display) * data[i].Quantity + "</td>" +
                                "</tr>";
                       tr_str +="<tr><td colspan='3'>(Hsn Code:-"+data[i].Hsn_code +",CGST:-"+(cgst)+"%,SGST:-"+(sgst)+"%)Amount</td><td>"+parseFloat(data[i].Product_Discount_Calculated_Value).toFixed(2)+"</td></tr>";
                        
                        var board;
                        board = document.createElement("div");
                        board.id = "mainBoard";
                        igst1 += parseFloat(data[i].igst_pr_value);
					//	alert(igst1);
                        cgst1 += parseFloat(data[i].cgst_pr_value);
                        sgst1 += parseFloat(data[i].sgst_pr_value);
                        FV1 += parseFloat(data[i].Final_Value);
                        FV=Math.round(FV1);
                        amt += parseFloat(data[i].taxable_value);
                        barcode += data[i].product_barcode;
                        div_ele += data[i].div_ele;
                        barcode_txt += data[i].barcode_txt;
                        total_tax_amt1 = igst1 + cgst1 + sgst1;
                        total_tax_amt=Math.round(total_tax_amt1);
                  
                        content += tr_str;
                        

                    }
					else{ 
							amt_shown=parseFloat(data[i].taxable_value).toFixed(2) * data[i].Quantity ;
							amount_to_calculate=parseFloat(amount_to_calculate)+parseFloat(amt_shown);
                        var tr_str = "<tr>" +
                                "<td class='left'>" + (i + 1) + "." + data[i].Product_Name + "</td>" +
                              
                                "<td class='left' >" +parseFloat(data[i].taxable_value).toFixed(2)  + "</td>" +
                                "<td class='center'>" + data[i].Quantity + "</td>" +
                                "<td class='left' >" +parseFloat(data[i].taxable_value).toFixed(2) * data[i].Quantity + "</td>" +
                                "</tr>";
                       tr_str +="<tr><td colspan='3'>(Hsn Code:-"+data[i].Hsn_code +",CGST:-"+(cgst)+"%,SGST:-"+(sgst)+"%)Amount</td><td>"+parseFloat(data[i].Product_Discount_Calculated_Value).toFixed(2)+"</td></tr>";
                        
                        var board;
                        board = document.createElement("div");
                        board.id = "mainBoard";
                        igst1 += parseFloat(data[i].igst_pr_value);
						//alert(igst1);
                        cgst1 += parseFloat(data[i].cgst_pr_value);
                        sgst1 += parseFloat(data[i].sgst_pr_value);
                        FV1 += parseFloat(data[i].Final_Value);
                        FV=Math.round(FV1);
                        amt += parseFloat(data[i].taxable_value);
                        barcode += data[i].product_barcode;
                        div_ele += data[i].div_ele;
                        barcode_txt += data[i].barcode_txt;
                        total_tax_amt1 = igst1 + cgst1 + sgst1;
                        total_tax_amt=Math.round(total_tax_amt1);
                  
                        content += tr_str;
					}
				
					}
//                    var tr_str1 = "<tr>" +
//                            "<td  colspan='3' >HSN CODE</td>" +
//                            "<td  >" + FV + "</td>" +
//                            "</tr>";
//
//                    content += tr_str1;

                    var tr_str2 = "<tr>" +
                            "<td  colspan='3' >TOTAL AMOUNT BEFORE TAX:</td>" +
                            "<td   >" + Math.round(amount_to_calculate) + "</td>" +
                            "</tr>";
                    content += tr_str2;
                    var tr_str3 = "<tr>" +
                            "<td  colspan='3' >Add IGST:</td>" +
                            "<td  >" +Math.round(igst1) + "</td>" +
                            "</tr>";
                    content += tr_str3;
                    var tr_str4 = "<tr>" +
                            "<td   colspan='3'>ADD CGST:</td>" +
                            "<td  >" + Math.round(cgst1) + "</td>" +
                            "</tr>";
                    content += tr_str4;
                    var tr_str5 = "<tr>" +
                            "<td  colspan='3' >ADD SGST:</td>" +
                            "<td  >" + Math.round(sgst1) + "</td>" +
                            "</tr>";
                    content += tr_str5;
                    var tr_str6 = "<tr>" +
                            "<td   colspan='3'>TOTAL TAX AMOUNT:</td>" +
                            "<td  >" + total_tax_amt + "</td>" +
                            "</tr>";
                    content += tr_str6;
                    var tr_str7 = "<tr>" +
                            "<td   colspan='3'>TOTAL AMOUNT AFTER TAX:</td>" +
                            "<td  >" + FV + "</td>" +
                            "</tr>";
                    
                    content += tr_str7;
                       var tr_str8 = "<tr>" +
                            "<td   colspan='3'>Grand Total:</td>" +
                            "<td  >" + FV + "</td>" +
                            "</tr>";
                    tr_str8 += "<tr>" +
                            "<td   colspan='3'>Paid Amount:</td>" +
                            "<td  >" +Math.round(data[0].paid) + "</td>" +
                            "</tr>";
                    tr_str8 += "<tr>" +
                            "<td   colspan='3'>Balance:</td>" +
                            "<td  >" + Math.round(data[0].balance) + "</td>" +
                            "</tr>";
                    content += tr_str8;
                    //var tr_str11 = "<tr>" +

                    ///		              "<td colspan='3' >"+content1+"</td>" +
                    //             "</tr>";
                    //content += tr_str11;
                    var tr_str12 = "<tr>" +
                            "<td colspan='4'><table><tr><td><center >" + barcode + $("#xx").html() + "</center></td></tr>" +
                             "<tr><td colspan=''><center >" + barcode + $("#xx1").html() + "</center></td></tr></td>" +
                            "</tr>";
                    content += tr_str12;

                    $("#demo1").append(content);

                }
            });
        }

        function display_added_product_using_inv(inv_no) {

            var CA_id = inv_no;

            $.ajax({
                url: "<?php echo base_url(); ?>Generate_Invoice/fetch_product_cust_details_using_invoice/",
                method: "POST",
                data: "inv_no=" + CA_id,
                dataType: "json",
                success: function (data)
                {
						
                    var len = data.length;
                    var igst = 0;
                    var cgst = 0;
                    var sgst = 0;

                    var amt = 0;
                    var barcode = "";
                    var barcode_txt = "";

                    var div_ele = "";
                    var content1 = "<table size='40%' name='example'class='display' id='example1' border='1'>";
                    //content +="<tr><th colspan='5'><h2></h2></th></tr>";<th>Customer</th>
                    //  content1 +="<thead><tr> <th>Customer</th> <th>Total Amount Before Tax</th><th>Add:IGST</th><th>Add:CGST</th><th>Add:SGST</th><th>Total Tax</th><th>Total Amount After Tax:</th></tr></thead>";
                    var paid="";
                    var content = "<table name='example'class='display' id='example' border='1'>";
                    //content +="<tr><th colspan='5'><h2></h2></th></tr>";<th>Customer</th><th>Customer</th>
                    var inv_no = $("#invoice_no").val();
                    //alert(inv_no);
                    content += "<h1>Invoce</h1>";
                    generateBarcode(inv_no);
                    var in_val="<img src='<?php echo base_url();?>icons/star.png'>";
                    var in_per="<img src='<?php echo base_url();?>icons/tick.png'>";
                    content += "<thead><tr><td colspan='13'><b>Pending Invoices</b></td></tr><tr><td colspan='3'><b>Invoice Number:</td><td colspan='10'>" + inv_no + "</b></td></tr><tr> <th>Sr No.</th><th>Product Title</th><th >Dis. Type</th><th>Quantity</th><th>Product Amount</th><th>Discount</th><th>Hsn</th><th>Taxable Value</th><th>IGST</th><th>CGST</th><th>SGST</th><th>Final Value</th></tr></thead>";
                    for (var i = 0; i < len; i++) {
                        //alert(data[i].product_barcode);
                        //   alert( data[i].Name);     //    alert(i);

                        var tr_str = "<tr>" +
                                "<td class='left'>" + (i + 1) + "</td>" +
                                "<td class='left'>" + data[i].Product_Name + "</td>" +
                                "<td class='left'>" + ((data[i].Discount_Factor=="In %")?in_val:in_per) + "</td>" +
                                "<td class='center'>" + data[i].Quantity + "</td>" +
                                "<td class='left' >" + data[i].product_amount + "</td>" +
                                "<td class='left' >" + data[i].Product_Discount_Value + "</td>" +                                
                                "<td class='left' >" + data[i].Hsn_code + "</td>" +
                                "<td class='left' >" + data[i].taxable_value + "</td>" +
                                "<td class='left' >" + data[i].igst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].cgst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].sgst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].Final_Value + "</td>" +
                                "</tr>";
                        var board;
                        board = document.createElement("div");
                        board.id = "mainBoard";


                        igst += parseFloat(data[i].igst_pr_value);
                        cgst += parseFloat(data[i].cgst_pr_value);
                        sgst += parseFloat(data[i].sgst_pr_value);
                        FV += parseFloat(data[i].Final_Value);
                        amt += parseFloat(data[i].taxable_value);
                        barcode += data[i].product_barcode;
                        div_ele += data[i].div_ele;
                        barcode_txt += data[i].barcode_txt;
                        total_tax_amt = parseFloat(igst) + parseFloat(cgst) + parseFloat(sgst);
                        content += tr_str;
                        var bill_no = $("#bill_no").val();
                      
                    } 
                    var amount_on_which_tax_to_be_applied = FV;
                    //alert(FV);
                    var tax1 = total_tax_amt;
                     var tax=Math.round(tax1);
                    var amount_to_be_applied_for_tax = parseFloat(amount_on_which_tax_to_be_applied) - parseFloat(total_tax_amt);

                    var tr_str1 = "<tr>" +
                            "<td class='left'colspan='3' >Total:</td>" +
                            "<td class='left'colspan='5' ></td>" +
                            "<td class='left'colspan='' >" + igst + "</td>" +
                            "<td class='left'colspan='' >" + cgst + "</td>" +
                            "<td class='left'colspan='' >" + sgst + "</td>" +
                            "<td class='left'colspan='' >" + FV + "</td>" +
                            "</tr>";
                    content += tr_str1;

                    var tr_str2 = "<tr>" +
                            "<td class='left'colspan='' >Total Amount Befor Tax:</td>" +
                            "<td class='left'colspan=''  >" + amount_to_be_applied_for_tax + "</td>" +
                            "</tr>";
                    content1 += tr_str2;

                    var tr_str3 = "<tr>" +
                            "<td class='left'colspan='' >Add IGST:</td>" +
                            "<td class='left'colspan='' >" + igst + "</td>" +
                            "</tr>";
                    content1 += tr_str3;
                    var tr_str4 = "<tr>" +
                            "<td class='left'colspan='' >ADD CGST:</td>" +
                            "<td class='left'colspan='' >" + cgst + "</td>" +
                            "</tr>";
                    content1 += tr_str4;
                    var tr_str5 = "<tr>" +
                            "<td class='left'colspan='' >ADD SGST:</td>" +
                            "<td class='left'colspan='' >" + sgst + "</td>" +
                            "</tr>";
                    content1 += tr_str5;
                    var tr_str6 = "<tr>" +
                            "<td class='left'colspan='' >TOTAL TAX AMOUNT:</td>" +
                            "<td class='left'colspan='' >" + total_tax_amt + "</td>" +
                            "</tr>";
                    content1 += tr_str6;
                    var tr_str7 = "<tr>" +
                            "<td class='left'colspan='' >TOTAL AMOUNT AFTER TAX:</td>" +
                            "<td class='left'colspan='' >" + FV + "</td>" +
                            "</tr>";
                    content1 += tr_str7;
                    
                      var tr_str8 = "<tr>" +
                            "<td   colspan=''>Grand Total:</td>" +
                            "<td  >" + FV + "</td>" +
                            "</tr>";
                    tr_str8 += "<tr>" +
                            "<td   colspan=''>Paid Amount:</td>" +
                            "<td  >" +Math.round(data[0].amount) + "</td>" +
                            "</tr>";
                    tr_str8 += "<tr>" +
                            "<td   colspan=''>Balance:</td>" +
                            "<td  >" + Math.round(data[0].balance) + "</td>" +
                            "</tr>";
                    content1 += tr_str8;
                    
                    
                    var tr_str1 = "<tr>" +
                            "<td class='left'colspan='7' ><table><tr><td>" + barcode + $("#xx").html() + "</td></tr>" +
                            "<tr><td >" + barcode + $("#xx1").html() + "</td></tr></table></td>" +
                           
                            "<td class='left'colspan='6' >" + content1 + "</td>" +
                            "</tr>";
                    //tr_str1 = "<tr><td>" +$("#xx_qrcode").html()+"</td></tr>";
                    content += tr_str1;
                    // alert(total_tax_amt);
                    $("#demo").append(content);
                    //$("#demo1").append(content1);
                }

            });
        }
        function display_barcode(code) {
            //alert(code);
            $.ajax({
                url: "<?php echo base_url(); ?>Generate_Invoice/fetch_barcode/",
                method: "POST",
                data: "code=" + code,
                //	dataType: "json",       
                success: function (data)
                {
                    //	alert(data); 
                    $("#demo1").append(data);
                }});
        }
        function display_added_product_old(Ca_id) {

            var CA_id = Ca_id;
            var cust_id = $("#cust_id").val();
           // alert("aaa");
            // alert(cust_id);
            // alert(Ca_id);
            // alert(CA_id);
            $.ajax({
                url: "<?php echo base_url(); ?>Generate_Invoice/fetch_product_cust_details/",
                method: "POST",
                data: "ca_id=" + CA_id + "&cust_id=" + cust_id,
                dataType: "json",
                success: function (data)
                {
                    // alert(data);

                    var len = data.length;

                    var igst = 0;
                    var cgst = 0;
                    var sgst = 0;
                    var FV = 0;
                    var amt = 0;
                    var total_tax_amt = 0;
                    var content1 = "<table size='40%' name='example'class='display' id='example1' border='1'>";
                    //content +="<tr><th colspan='5'><h2></h2></th></tr>";<th>Customer</th>
                    //  content1 +="<thead><tr> <th>Total Amount Before Tax</th><th>Add:IGST</th><th>Add:CGST</th><th>Add:SGST</th><th>Total Tax</th><th>Total Amount After Tax:</th></tr></thead>";

                    var content = "<table name='example'class='display' id='example' border='1'>";
                    //content +="<tr><th colspan='5'><h2></h2></th></tr>";<th>Customer</th>
                    content += "<thead><tr> <th>Sr No.</th><th>Product Title</th><th >Product Description</th><th>Quantity</th><th>Product Amount</th><th>Discount</th><th>Type</th><th>Taxable Value</th><th>IGST</th><th>CGST</th><th>SGST</th><th>Final Value</th></tr></thead>";
                    //	alert(len);
                    for (var i = 0; i < len; i++) {


                        var tr_str = "<tr>" +
                                "<td class='left'>" + (i + 1) + "</td>" +
                                // "<td class='left'>" +  data[i].Name + "</td>" +
                                //  "<td align='center'>" + COUSTOMER_AGGREEMENT_ID + "</td>" +
                                //    "<td class='center'>" + data[i].image + "</td>" +
                                "<td class='left'>" + data[i].Product_Name + "</td>" +
                                "<td class='left'>" + data[i].Product_Description + "</td>" +
                                "<td class='left'>" + data[i].Quantity + "</td>" +
                                "<td class='left' >" + data[i].product_amount + "</td>" +
                                "<td class='left' >" + data[i].Product_Discount_Value + "</td>" +
                                "<td class='left' >" + data[i].Discount_Factor + "</td>" +
                                "<td class='left' >" + data[i].taxable_value + "</td>" +
                                "<td class='left' >" + data[i].igst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].cgst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].sgst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].Final_Value + "</td>" +
                                "</tr>";



                        igst += parseFloat(data[i].igst_pr_value);
                        cgst += parseFloat(data[i].cgst_pr_value);
                        sgst += parseFloat(data[i].sgst_pr_value);
                        FV += parseFloat(data[i].Final_Value);
                        amt += parseFloat(data[i].taxable_value);

                        total_tax_amt = igst + cgst + sgst;
                        content += tr_str;


                        //  $("#demo").append(content);
                        // $("#example").append('<tbody>' + tr_str + '</tbody>');
                    } //$( "#example" ).DataTable();
                    //  alert(HABERES);
                    // common_function();

                    var tr_str1 = "<tr>" +
                            "<td class='center'colspan='3' >Total:</td>" +
                            "<td class='center'colspan='5' ></td>" +
                            "<td class='center'colspan='' >" + igst + "</td>" +
                            "<td class='center'colspan='' >" + cgst + "</td>" +
                            "<td class='center'colspan='' >" + sgst + "</td>" +
                            "<td class='center'colspan='' >" + FV + "</td>" +
                            "</tr>";
                    content += tr_str1;

                    var tr_str2 = "<tr>" +
                            "<td class='left'colspan='' >Total Amount Befor Tax:</td>" +
                            "<td class='left'colspan='' >" + amt + "</td>" +
                            "</tr>";
                    content1 += tr_str2;

                    var tr_str3 = "<tr>" +
                            "<td class='left'colspan='' >Add IGST:</td>" +
                            "<td class='left'colspan='' >" + igst + "</td>" +
                            "</tr>";
                    content1 += tr_str3;
                    var tr_str4 = "<tr>" +
                            "<td class='left'colspan='' >ADD CGST:</td>" +
                            "<td class='left'colspan='' >" + cgst + "</td>" +
                            "</tr>";
                    content1 += tr_str4;
                    var tr_str5 = "<tr>" +
                            "<td class='left'colspan='' >ADD SGST:</td>" +
                            "<td class='left'colspan='' >" + sgst + "</td>" +
                            "</tr>";
                    content1 += tr_str5;
                    var tr_str6 = "<tr>" +
                            "<td class='left'colspan='' >TOTAL TAX AMOUNT:</td>" +
                            "<td class='left'colspan='' >" + total_tax_amt + "</td>" +
                            "</tr>";
                    content1 += tr_str6;
                    var tr_str7 = "<tr>" +
                            "<td class='left'colspan='' >TOTAL AMOUNT AFTER TAX:</td>" +
                            "<td class='left'colspan='' >" + FV + "</td>" +
                            "</tr>";
                    content1 += tr_str7;
                    var tr_str1 = "<tr>" +
                            "<td class='left'colspan='7' ></td>" +
                            //                                         "<td class='left'colspan='4' ></td>" +
                            "<td class='left'colspan='6' >" + content1 + "</td>" +
                            "</tr>";
                    content += tr_str1;
                    // alert(total_tax_amt);
                    $("#demo").append(content);
                    //$("#demo1").append(content1);
                }

            });
        }
        function display_added_product(Ca_id) {
            var CA_id = Ca_id;
            var cust_id = $("#cust_id").val();
            // alert(Ca_id);
            //   alert(CA_id);
            $.ajax({
                url: "<?php echo base_url(); ?>Generate_Invoice/fetch_product_cust_details/",
                method: "POST",
                data: "ca_id=" + CA_id + "&cust_id=" + cust_id,
                dataType: "json",
                success: function (data)
                {
                  
                    
                    // alert(data);	
                    //for(var i=0; i<len; i++){
                    //   alert(i);
                    // alert(JSON.stringify(data));
                    var len = data.length;

                    var igst = 0;
                    var cgst = 0;
                    var sgst = 0;
                    var FV = 0;
                    var amt = 0;
                    var total_tax_amt = 0;
                    var content1 = "<table size='40%' name='example'class='display' id='example1' border='1'>";
                    //content +="<tr><th colspan='5'><h2></h2></th></tr>";<th>Customer</th>
                    //  content1 +="<thead><tr> <th>Total Amount Before Tax</th><th>Add:IGST</th><th>Add:CGST</th><th>Add:SGST</th><th>Total Tax</th><th>Total Amount After Tax:</th></tr></thead>";

                    var content = "<table name='example'class='display' id='example' border='1'>";
                    //content +="<tr><th colspan='5'><h2></h2></th></tr>";<th>Customer</th>
                    content += "<thead><tr> <th>Sr No.</th><th>Product Title</th><th >Product Description</th><th>Quantity</th><th>Product Amount</th><th>Discount</th><th>Type</th><th>Taxable Value</th><th>IGST</th><th>CGST</th><th>SGST</th><th>Final Value</th></tr></thead>";
                    //	alert(len);
                    for (var i = 0; i < len; i++) {

                        //product_barcode
                        var tr_str = "<tr>" +
                                "<td class='left'>" + (i + 1) + "</td>" +
                                // "<td class='left'>" +  data[i].Name + "</td>" +
                                //  "<td align='center'>" + COUSTOMER_AGGREEMENT_ID + "</td>" +
                                //    "<td class='center'>" + data[i].image + "</td>" +
                                "<td class='left'>" + data[i].Product_Name + "</td>" +
                                "<td class='left'>" + data[i].Hsn_code + "</td>" +
                                "<td class='left'>" + data[i].Quantity_available + "</td>" +
                                "<td class='left' >" + data[i].product_amount + "</td>" +
                                "<td class='left' >" + data[i].Product_Discount_Value + "</td>" +
                                "<td class='left' >" + data[i].Discount_Factor + "</td>" +
                                "<td class='left' >" + data[i].taxable_value + "</td>" +
                                "<td class='left' >" + data[i].igst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].cgst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].sgst_pr_value + "</td>" +
                                "<td class='left' >" + data[i].Final_Value + "</td>" +
                                "</tr>";



                        igst += parseFloat(data[i].igst_pr_value);
                        cgst += parseFloat(data[i].cgst_pr_value);
                        sgst += parseFloat(data[i].sgst_pr_value);
                        FV += parseFloat(data[i].Final_Value);
                        amt += parseFloat(data[i].taxable_value);
                        div_ele += data[i].div_ele;
                        total_tax_amt = igst + cgst + sgst;
                        content += tr_str;


                        //  $("#demo").append(content);
                        // $("#example").append('<tbody>' + tr_str + '</tbody>');
                    } //$( "#example" ).DataTable();
                    //  alert(HABERES);
                    // common_function();

                    var tr_str1 = "<tr>" +
                            "<td class='center'colspan='3' >Total:</td>" +
                            "<td class='center'colspan='5' ></td>" +
                            "<td class='center'colspan='' >" + igst + "</td>" +
                            "<td class='center'colspan='' >" + cgst + "</td>" +
                            "<td class='center'colspan='' >" + sgst + "</td>" +
                            "<td class='center'colspan='' >" + FV + "</td>" +
                            "</tr>";
                    content += tr_str1;

                    var tr_str2 = "<tr>" +
                            "<td class='left'colspan='' >Total Amount Befor Tax:</td>" +
                            "<td class='left'colspan='' >" + amt + "</td>" +
                            "</tr>";
                    content1 += tr_str2;

                    var tr_str3 = "<tr>" +
                            "<td class='left'colspan='' >Add IGST:</td>" +
                            "<td class='left'colspan='' >" + igst + "</td>" +
                            "</tr>";
                    content1 += tr_str3;
                    var tr_str4 = "<tr>" +
                            "<td class='left'colspan='' >ADD CGST:</td>" +
                            "<td class='left'colspan='' >" + cgst + "</td>" +
                            "</tr>";
                    content1 += tr_str4;
                    var tr_str5 = "<tr>" +
                            "<td class='left'colspan='' >ADD SGST:</td>" +
                            "<td class='left'colspan='' >" + sgst + "</td>" +
                            "</tr>";
                    content1 += tr_str5;
                    var tr_str6 = "<tr>" +
                            "<td class='left'colspan='' >TOTAL TAX AMOUNT:</td>" +
                            "<td class='left'colspan='' >" + total_tax_amt + "</td>" +
                            "</tr>";
                    content1 += tr_str6;
                    var tr_str7 = "<tr>" +
                            "<td class='left'colspan='' >TOTAL AMOUNT AFTER TAX:</td>" +
                            "<td class='left'colspan='' >" + FV + "</td>" +
                            "</tr>";
                    content1 += tr_str7;
                    var tr_str1 = "<tr>" +
                            "<td class='left'colspan='7' > </td>" +
                            //                                         "<td class='left'colspan='4' ></td>" +
                            "<td class='left'colspan='6' >" + content1 + "</td>" +
                            "</tr>";
                    content += tr_str1;
                    // alert(total_tax_amt);
                    $("#demo").append(content);
                    //$("#demo1").append(content1);
                }

            });
        }
        function change_qty(pro_id) {
            //alert(pro_id);
            var cust_id = $("#ca_tbl_id").val();
            $("#pro_id").val(pro_id);
            common_function();
            $("#editUserPopUp1").modal("show");
            // getUserName(cust_id, pro_id);

            get_product_data_from_cat(cust_id, pro_id);
        }
       
        function common_function()

        {

            discount = $("#txt_type33").val();
            Cost_1 = $("#product_actual_rate").val();
            qty = $("#present_qty").val();
            c = qty * Cost_1;
            type = $("#txt_type1").val();

            if (type == "exclusive")
            {

               
                discount = $("#txt_type33").val();
                if (discount == 'In Value')
                {

                    Discount_Rate = $("#discount_amount").val();
                    //selling_cost = (c - (Discount_Rate*qty));
                    //selling_cost=qty * Cost_1;
                    $("#total_amount").val(c);
                    selling_cost = (c - (Discount_Rate * qty));
					 $("#seal_cost").val(selling_cost/qty);
                    //	alert(selling_cost);
                    $("#discounted_total").val(selling_cost);
                    $("#discounted_total_hid").val(selling_cost);
                    txt_cgst = $("#txt_cgst").val();
                    txt_igst = $("#txt_igst").val();

                    txt_sgst = $("#txt_sgst").val();
                    if (txt_sgst == 0 || txt_sgst == null)
                    {
                        txt_sgst = 0;
                        $("#txt_sgst").val(txt_sgst);
                    }
                    if (txt_cgst == 0 || txt_cgst == null)
                    {
                        txt_cgst = 0;
                        $("#txt_cgst").val(txt_cgst);
                    }
                    if (txt_igst == 0 || txt_igst == null)
                    {
                        txt_igst = 0;
                        $("#txt_igst").val(txt_igst);
                    }
                    if (txt_igst != 0 && txt_igst != null)
                    {
                        //alert(txt_igst);
                        cal = (selling_cost * txt_igst) / 100;

                        $("#txt_igst_cal").val(cal);
                    }
                    if (txt_cgst != 0 && txt_cgst != null)
                    {
                        cal_cg = (selling_cost * txt_cgst) / 100;
                        $("#txt_cgst_cal").val(cal_cg);
                    }
                    if (txt_sgst != 0 && txt_sgst != null)
                    {
                        cal_sg = (selling_cost * txt_sgst) / 100;
                        $("#txt_sgst_cal").val(cal_sg);
                    }
                    tot = (parseFloat($("#txt_cgst_cal").val()) + parseFloat($("#txt_sgst_cal").val()) + parseFloat($("#txt_igst_cal").val()));
                    $("#calculated_total").val(tot);
                    calculated_total = $("#calculated_total").val();
                    s = parseFloat(calculated_total) + parseFloat(selling_cost);
                    $("#final_total_cal").val(s);
                } else if (discount == 'In %')
                {
                    Discount_Rate = $("#discount_amount").val();
                    $("#total_amount").val(c);
                    selling_cost = (c - ((Discount_Rate * c) / 100));
                    //selling_cost=qty * Cost_1;
					$("#seal_cost").val(selling_cost/qty);
                    $("#discounted_total").val(selling_cost);
                    $("#discounted_total_hid").val(selling_cost);
                    txt_cgst = $("#txt_cgst").val();
                    txt_igst = $("#txt_igst").val();
                    txt_sgst = $("#txt_sgst").val();
                    if (txt_sgst == 0 || txt_sgst == null)
                    {
                        txt_sgst = 0;
                        $("#txt_sgst").val(txt_sgst);
                    }
                    if (txt_cgst == 0 || txt_cgst == null)
                    {
                        txt_cgst = 0;
                        $("#txt_cgst").val(txt_cgst);
                    }
                    if (txt_igst == 0 || txt_igst == null)
                    {
                        txt_igst = 0;
                        $("#txt_igst").val(txt_igst);
                    }
                    if (txt_igst != 0 && txt_igst != null)
                    {
                        cal = (selling_cost * txt_igst) / 100;
                        $("#txt_igst_cal").val(cal);
                    }
                    if (txt_cgst != 0 && txt_cgst != null)
                    {
                        cal_cg = (selling_cost * txt_cgst) / 100;
                        $("#txt_cgst_cal").val(cal_cg);
                    }
                    if (txt_sgst != 0  && txt_sgst != null)
                    {
                        cal_sg = (selling_cost * txt_sgst) / 100;
                        $("#txt_sgst_cal").val(cal_sg);
                    }
                    tot = (parseFloat($("#txt_cgst_cal").val()) + parseFloat($("#txt_sgst_cal").val()) + parseFloat($("#txt_igst_cal").val()));
                    $("#calculated_total").val(tot);
                    calculated_total = $("#calculated_total").val();
                    s = parseFloat(calculated_total) + parseFloat(selling_cost);
                    $("#final_total_cal").val(s);

                }
            }
            if (type == "inclusive")
            {
				
                qty = $("#present_qty").val();
                if (qty == "" || qty == null)
                {
                    qty = 0;

                }

                discount = $("#txt_type33").val();
                if (discount == 'In Value') {
                    txt_cgst = $("#txt_cgst").val();
                    txt_igst = $("#txt_igst").val();
                    txt_sgst = $("#txt_sgst").val();
                    //alert(txt_sgst);
                    //alert(txt_igst);
                    //alert(txt_cgst);
                    if (txt_sgst == 0 || txt_sgst == null)
                    {
                        txt_sgst = 0;
                        $("#txt_sgst").val(txt_sgst);
                    }
                    if (txt_cgst == 0 || txt_cgst == null)
                    {
                        txt_cgst = 0;
                        $("#txt_cgst").val(txt_cgst);
                    }
                    if (txt_igst == 0 || txt_igst == null)
                    {
                        txt_igst = 0;
                        $("#txt_igst").val(txt_igst);
                    }
                    if (txt_igst != 0 || txt_cgst != null)
                    {
                        cal = Cost_1 - ((Cost_1 * 100) / (100 + parseFloat(txt_igst)));
                        //alert(cal);
                        //$("#txt_igst_cal").val(cal);
                    }
                    if (txt_cgst != 0 || txt_cgst != null)
                    {

                        cal_cg = Cost_1 - ((Cost_1 * 100) / (100 + parseFloat(txt_cgst)));

                        //$("#txt_cgst_cal").val(cal_cg);
                    }
                    if (txt_sgst != 0 || txt_sgst != null)
                    {
                        cal_sg = Cost_1 - ((Cost_1 * 100) / (100 + parseFloat(txt_sgst)));

                        //$("#txt_sgst_cal").val(cal_sg);
                    }
                    tot = (parseFloat(cal) + parseFloat(cal_cg) + parseFloat(cal_sg));
                    if (qty != 0) {
                        cost_after_tax = (Cost_1 - tot);
                    } else {

                        cost_after_tax = Cost_1 - tot;
                    }
                    $("#seal_cost").val(cost_after_tax);

                    Discount_Rate = $("#discount_amount").val();
                    selling_cost = cost_after_tax * qty;
                    $("#total_amount").val(selling_cost);
                    discounted_amount = selling_cost - (Discount_Rate * qty);
                    $("#discounted_total").val(discounted_amount);
                    total_tax = (parseFloat(txt_cgst) + parseFloat(txt_igst) + parseFloat(txt_sgst));
                    var final_tax = (total_tax * discounted_amount) / 100;
                    var final_tax1 = final_tax / 2;
                    //alert(final_tax1);
                    if (txt_igst == 0) {
                        $("#txt_igst_cal").val(0);
                        $("#txt_cgst_cal").val(final_tax1);
                        $("#txt_sgst_cal").val(final_tax1);
                    } else {
                        $("#txt_igst_cal").val(final_tax);
                        $("#txt_cgst_cal").val(0);
                        $("#txt_sgst_cal").val(0);
                    }
                    $("#calculated_total").val(final_tax);
                    tax_to_be_calculated = parseFloat(discounted_amount) + parseFloat((total_tax * discounted_amount) / 100);
                    $("#final_total_cal").val(tax_to_be_calculated);
                } else if (discount == 'In %')
                {

                    txt_cgst = $("#txt_cgst").val();
                    txt_igst = $("#txt_igst").val();
                    txt_sgst = $("#txt_sgst").val();
                    //alert(txt_sgst);
                    //alert(txt_igst);
                    //alert(txt_cgst);
                    if (txt_sgst == 0 || txt_sgst == null)
                    {
                        txt_sgst = 0;
                        $("#txt_sgst").val(txt_sgst);
                    }
                    if (txt_cgst == 0 || txt_cgst == null)
                    {
                        txt_cgst = 0;
                        $("#txt_cgst").val(txt_cgst);
                    }
                    if (txt_igst == 0 || txt_igst == null)
                    {
                        txt_igst = 0;
                        $("#txt_igst").val(txt_igst);
                    }
                    if (txt_igst != 0 || txt_cgst != null)
                    {
                        cal = Cost_1 - ((Cost_1 * 100) / (100 + parseFloat(txt_igst)));
                        //alert(cal);
                        //$("#txt_igst_cal").val(cal);
                    }
                    if (txt_cgst != 0 || txt_cgst != null)
                    {

                        cal_cg = Cost_1 - ((Cost_1 * 100) / (100 + parseFloat(txt_cgst)));

                        //$("#txt_cgst_cal").val(cal_cg);
                    }
                    if (txt_sgst != 0 || txt_sgst != null)
                    {
                        cal_sg = Cost_1 - ((Cost_1 * 100) / (100 + parseFloat(txt_sgst)));
                    }
                    tot = (parseFloat(cal) + parseFloat(cal_cg) + parseFloat(cal_sg));
                    if (qty != 0) {
                        cost_after_tax = (Cost_1 - tot);
                    } else {

                        cost_after_tax = Cost_1 - tot;
                    }

                    $("#seal_cost").val(cost_after_tax);
                    Discount_Rate = $("#discount_amount").val();
                    selling_cost = cost_after_tax * qty;
                    $("#total_amount").val(selling_cost);
                    discounted_amount = selling_cost - ((Discount_Rate * selling_cost) / 100);
                    //discounted_amount=selling_cost-(Discount_Rate*qty);
                    $("#discounted_total").val(discounted_amount);
                    total_tax = (parseFloat(txt_cgst) + parseFloat(txt_igst) + parseFloat(txt_sgst));
                    var final_tax = (total_tax * discounted_amount) / 100;
                    var final_tax1 = final_tax / 2;
                    //alert(final_tax1);
                    if (txt_igst == 0) {
                        $("#txt_igst_cal").val(0);
                        $("#txt_cgst_cal").val(final_tax1);
                        $("#txt_sgst_cal").val(final_tax1);
                    } else {
                        $("#txt_igst_cal").val(final_tax);
                        $("#txt_cgst_cal").val(0);
                        $("#txt_sgst_cal").val(0);
                    }
                    $("#calculated_total").val(final_tax);
                    tax_to_be_calculated = parseFloat(discounted_amount) + parseFloat((total_tax * discounted_amount) / 100);
                    $("#final_total_cal").val(tax_to_be_calculated);

                }
            }
        }

        $('#txt_mobile').on("change", function () {
            //alert($(this).val());

            var mobile = $(this).val();
            // alert(mobile);
            if (mobile == " ")
            {
                $("#mob").html("<span style='color:red'>please enter mobile number</span>");
                return false;
            }
            if (mobile != "") {
                // var e_mail="email";
                $.ajax
                        (
                                {
                                    url: "<?php echo base_url(); ?>Generate_Invoice/check_mobile_no/" + mobile,
                                    method: "POST",
                                    // data: e_mail,
                                    processData: false,
                                    contentType: false,
                                    // type:"JSON",
                                    success: function (data)
                                    {
                                        //alert(data);
                                        if (data == "presentinrelation")
                                        {
                                            alert("you are already register with vendor");
                                            location.reload();
                                        }
                                        if (data == "notpresentinrelation")
                                        {
                                            alert("Yor relation is Create");
                                            location.reload();
                                        }
                                        if (data == "noentryinvendortable") {
                                            $("#mob").html("<span style='color:green;'>Mobile Number Available</span>");

                                        }
                                        if (data == "2entries")
                                        {
                                            alert("wrong data");
                                            location.reload();
                                        }

                                    }

                                });
            } else {
                $("#mob").html("<span style='color:red'>please enter mobile number</style>");
            }
        });
        $('#txt_email').on("change", function () {
            //alert($(this).val());




            var mail = $(this).val();
            var helpemail = document.getElementById("mail");
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (mail.match(mailformat))
            {


                helpemail.innerHTML = "";
                //$("#disp").html("");
                document.getElementById("btnCustLogin_bn").disabled = false;
            } else if (mail.value == "")
            {
                helpemail.style.color = 'red';
                helpemail.innerHTML = "Please Enter valid email";
                mail.value = "";

            } else
            {
                //$("#disp").html("");
                helpemail.style.color = 'red';
                helpemail.innerHTML = "Please Enter valid email";
                //$("#mail").val("");
                //mail.focus();
                document.getElementById("btnCustLogin_bn").disabled = true;

            }
            // alert(mail_add);
            if (mail == " ")
            {
                $("#mail").html("<span style='color:red'>please enter mobile number</span>");
                return false;
            }
            var str = "mail_add=" + mail;
            //alert(str);
            if (mail != "" && mail.match(mailformat))
            {
                // var e_mail="email";
                $.ajax
                        (
                                {
                                    url: "<?php echo base_url(); ?>Generate_Invoice/check_email_address/",
                                    method: "POST",
                                    data: str,
                                    // processData: false,
                                    // contentType: false,
                                    // type:"JSON",
                                    success: function (data)
                                    {
                                        //alert(data);
                                        if (data == "presentinrelation")
                                        {
                                            alert("you are already register with vendor");
                                            location.reload();
                                        }
                                        if (data == "notpresentinrelation")
                                        {
                                            alert("Yor relation is Create");
                                            location.reload();
                                        }
                                        if (data == "noentryinvendortable") {
                                            $("#mail").html("<span style='color:green;'>Email id Available</span>");

                                        }
                                        if (data == "2entries")
                                        {
                                            alert("wrong data");
                                            location.reload();
                                        }
                                        /*if(data == 0){
                                         
                                         $("#mob").html("<span style='color:green;'>Mobile Number Available</span>");
                                         
                                         }	
                                         if(data==1){
                                         $("#mob").html("<span style='color:red;'>Plese enter another contact number address its already in use</span>");
                                         }*/
                                    }

                                });
            }

        });
        
        function save_customer()
        {
            //alert("madhu");

            var txt_name = $("#txt_name").val();
            var txt_email = $("#txt_email").val();
            var txt_mobile = $("#txt_mobile").val();
            var role_id = $("#role_id").val();
            var str = "txt_name=" + txt_name + "&txt_email=" + txt_email + "&txt_mobile=" + txt_mobile + "&role_id=" + role_id;
            //  alert(str);
            $.ajax({
                url: "<?php echo base_url(); ?>" + "Generate_Invoice/customer_save_data_invoice",
                type: "POST",
                data: str,
                async: false,
                // dataType:'JSON',
                success: function (msg)
                {
                    alert("Ok");
                    //  $('#myModal').html('');
                    //  $(".modal").html("");
                }

            });

        }
    </script>
    <script type="text/javascript">
        var m;

        $("#txt_product_name").autocomplete({
            minLength: 2,
            source: function (req, add) {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "Generate_Invoice/autocomplete",
                    //url: '/search', //Controller where search is performed
                    dataType: 'json',
                    type: 'POST',
                    data: req,
                    success: function (data) {

                        if (data.response == 'true') {
                            add(data.message);
                            m = data.message[0].id;

                            $("#p_id").val(data.message[0].id);
                            //common_function();
                           // get_product_details(m);		
                        }

                    }


                });
            }


        });
        $("#txt_product_name").autocomplete({
            select: function (event, ui) {
                var k = ui.item.id;
            //    alert(k);
//common_function();
                get_product_details(k);
            }
        });
        
        $("#customers").autocomplete({
            minLength: 1,
            source: function (req, add) {
                $.ajax({
                    url: "<?php echo base_url(); ?>" + "Generate_Invoice/autocomplete1",
                    dataType: 'json',
                    type: 'POST',
                    data: req,
                    success: function (data) {


//alert(JSON.stringify(data));     
                        if (data.response == 'true') {
                            add(data.message);
                            $("#c_id").val(data.message[0].id);
                            $("#gstin").val(data.message[0].gstin);
                        }
                    }
                });
            }
        });
        
        function get_product_details(p_id)
        {

            var c_id = $('#c_id').val();

            if (c_id == "") {
                c_id = 0;
            }

// alert(c_id);
//alert(c_id);
            /* if (c_id == "")
             {
             $("#cust_id").html("<span style='color:red;'>Plese select customer</span>");
             
             } else
             {*/
// $("#cust_id").html("");
          //  alert(c_id);
            getUserName(c_id, p_id);
//}
        }
        function getUserName(username, p_id) {
// alert(username+"/"+p_id);

            var $modal = $('#editUserPopUp1'),
             $userName = $modal.find('#userName');
            $userName.val(username);
            $modal.modal("show");
            common_function();
            get_product_data(username, p_id);
        }
    
        function  get_product_data(username, p_id)
        {
          //  alert(username + "/" + p_id);
            var str = "cust_name=" + username + "&product_id=" + p_id;
            $.ajax({
                url: "<?php echo base_url(); ?>" + "Generate_Invoice/get_product_details",
                type: "POST",
                data: str,
                async: false,
                dataType: 'JSON',
                success: function (msg)
                {
                    //alert(JSON.stringify(msg));
                    var selling_cost;
                    $("#update_data1").hide();
                    $("#save_data_btn1").show();

                    $("#product_name").html(msg[0].product_version_name);
                    $("#actual_cost").val(msg[0].product_price);
                    $("#actual_cost_sw").html(msg[0].product_price);
                    $("#product_actual_rate").val(msg[0].product_price);
                    $("#discount_amount_hid").val(msg[0].discount_rate);
                    $("#discount_amount").val(msg[0].discount_rate);
                    $("#txt_product_name_hid").val(msg[0].product_version_name);
                    $("#txt_igst").val(msg[0].Igst);
                    $("#txt_cgst").val(msg[0].Cgst);
                    $("#txt_sgst").val(msg[0].Sgst);
                    $("#txt_igst_hid").val(msg[0].Igst);
                    $("#txt_cgst_hid").val(msg[0].Cgst);
                    $("#txt_sgst_hid").val(msg[0].Sgst);
                    $("#Hsn_Code").val(msg[0].Hsn_code);
                    $("#gstin1").val(msg[0].gstin);
                    qty_available = msg[0].Quantity_available;
                    $("#present_qty_available").val(qty_available);

                    gstin_number = msg[0].gstin;
                    HSN_code = msg[0].Hsn_code;
                    $("#present_qty").val(1);
                    $("#txt_type1").val(msg[0].tax_type);
                    state_name1 = msg[0].discount_factor;

                    get_tax_type1(state_name1);
                    common_function();

                }

            });

        }
        function get_tax_type1(state_name12)
        {
            state_name1 = "In %";
            if (state_name12 === "In Value") {

                $("#txt_type33").empty();
                $("<option />").val(state_name12)
                        .attr("selected", "In Value")
                        .text("In Value")
                        .appendTo($('select#txt_type33'));
                $("#txt_type33").append("<option value='In %'>In %</option>");
            } else {

                $("#txt_type33").empty();
                $("<option />").val(state_name1)
                        .attr("selected", "In %")
                        .text("In %")
                        .appendTo($('select#txt_type33'));
                $("#txt_type33").append("<option value='In Value'>In Value</option>");
            }

        }


      
        function  get_product_data_from_cat(username, p_id)
        {
            common_function();
// alert(username+"/"+p_id);
            var str = "cust_name=" + username + "&product_id=" + p_id;
            $.ajax({
                url: "<?php echo base_url(); ?>" + "Generate_Invoice/get_product_details_from_cat",
                type: "POST",
                data: str,
                async: false,
                dataType: 'JSON',
                success: function (msg)
                {
//alert(JSON.stringify(msg));
                    var selling_cost;
                    common_function();
                    $("#save_data_btn").hide();
                    $("#update_data").show();
//  alert(msg[0].Igst_pr);
                    $("#p_id").val(msg[0].Vendor_Gst_Product_Id);
                    $("#product_name").html(msg[0].Product_Name);
                    $("#actual_cost").val(msg[0].Product_Actual_Value);
                    $("#actual_cost_sw").html(msg[0].Product_Actual_Value);
                    $("#product_actual_rate").val(msg[0].Product_Actual_Value);
                    $("#discount_amount_hid").val(msg[0].Product_Discount_Value);
                    $("#discount_amount").val(msg[0].Product_Discount_Value);
                    $("#txt_product_name_hid").val(msg[0].Product_Name);
                    $("#txt_igst").val(msg[0].Igst_pr);
                    $("#txt_cgst").val(msg[0].Cgst_pr);
                    $("#txt_sgst").val(msg[0].Sgst_pr);
                    $("#txt_igst_hid").val(msg[0].Igst_pr);
                    $("#txt_cgst_hid").val(msg[0].Cgst_pr);
                    $("#txt_sgst_hid").val(msg[0].Sgst_Pr);
                    $("#present_qty").val(msg[0].Quantity_available);
                    $("#Hsn_Code").val(msg[0].Hsn_Code);

                    if (msg[0].Discount_Type == 'In %') {
                        $("#inper").attr('checked', 'checked');
                        a = ((msg[0].Product_Actual_Value) * (msg[0].Product_Discount_Value)) / 100;
                        selling_cost = (msg[0].Product_Actual_Value) - a;
// selling_cost = ((msg[0].Product_Actual_Value) * (msg[0].Product_Discount_Value)) / 100;
                        $("#seal_cost").val(selling_cost);
                        $("#seal_cost_hid").val(selling_cost);
                        $("#total_amount").val(selling_cost);
                        $("#total_amount_hid").val(selling_cost);
                        $("#final_total_cal").val(selling_cost);
                    }
                    if (msg[0].Discount_Type == 'In Value') {
                        $("#inval").attr('checked', 'checked');
                        selling_cost = ((msg[0].Product_Actual_Value) - (msg[0].Product_Discount_Value));
                        $("#seal_cost").val(selling_cost);
                        $("#seal_cost_hid").val(selling_cost);
                        $("#total_amount").val(selling_cost);
                        $("#total_amount_hid").val(selling_cost);
                        $("#final_total_cal").val(selling_cost);
                    }

                }

            });

        }


    </script>
    <script type="text/javascript">

        function generateBarcode(code) {
            //  var aa=$("#barcode").val();
            var value = code;
            //alert(aa);

            var btype = 'code128';
            var renderer =$("#barcode_renderer").val();// 'SVG';
           // alert(renderer);
            //var quietZone = false;
            // if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
            //  quietZone = true;
            //}
            var bgcol = '#FFFFFF';
            var col = '#000000';
            var barwidth = 1;
            var barheight = 50;
            module_size = 5;
            var settings = {
                output: renderer,
                bgColor: bgcol,
                color: col,
                barWidth: barwidth,
                barHeight: barheight,
                moduleSize: module_size,
                posX: 10,
                posY: 20,
                addQuietZone: 1
            };
            // if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
            //     value = {code:value, rect: true};
            // }
            if (renderer == 'canvas') {
                clearCanvas();
                // $("#barcodeTarget").hide();
                $("#canvasTarget").barcode(value, btype, settings);
            } else {
                //alert(value);
                //$("#canvasTarget").hide();
                $("#barcodeTarget").barcode(value, btype);
                //  $('#barcodeTarget1').qrcode(value);
                //var qrcode = new QRCode("qrcode");
                //  qrcode.makeCode(value);
                //$('#barcodeTarget1').qrcode(value);
              generate_qr(value);
                //$('#qrcode').qrcode(value);
            }

        }
function generate_qr(value){
    $("#qr2").ClassyQR({
    create: true,
    type: 'text',
    text: value
});
}
        function showConfig1D() {
            $('.config .barcode1D').show();
            $('.config .barcode2D').hide();
        }

        function showConfig2D() {
            $('.config .barcode1D').hide();
            $('.config .barcode2D').show();
        }

        function clearCanvas() {
            var canvas = $('#canvasTarget').get(0);
            var ctx = canvas.getContext('2d');
            ctx.lineWidth = 1;
            ctx.lineCap = 'butt';
            ctx.fillStyle = '#FFFFFF';
            ctx.strokeStyle = '#000000';
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.strokeRect(0, 0, canvas.width, canvas.height);
        }

        $(function () {
            $('input[name=btype]').click(function () {
                if ($(this).attr('id') == 'datamatrix')
                    showConfig2D();
                else
                    showConfig1D();
            });
            $('input[name=renderer]').click(function () {
                if ($(this).attr('id') == 'canvas')
                    $('#miscCanvas').show();
                else
                    $('#miscCanvas').hide();
            });
            //   generateBarcode();
        });
        function payment_mode(){
             var inv=$("#new_invoice").val();
             var str = "inv=" + inv ;
            $.ajax({
                url: "<?php echo base_url(); ?>" + "Generate_Invoice/get_payment_details",
                type: "POST",
                data: str,
                async: false,
                dataType: 'JSON',
                success: function (msg)
                {
                   
                var $modal = $('#Edit_modal');
                var ss1=(msg.pos_balance==null)?(msg.Final_Amount):(msg.pos_balance);
				var ss=Math.round(ss1);	
               $("#total_payble_hid").val(ss);
               $("#final_amount").text(msg.Final_Amount);
              //  alert(ss););
               $modal.modal("show");
           }
       });
        }
        function calculate_amount_for_payment(val)
        {
            //alert(val);
              //alert($("#total_payble_hid").val());
              var bal1=$("#total_payble_hid").val()-val;
             	var bal=Math.round(bal1);			
                $("#balance").text(bal);
                $("#balance_hid").val(bal);
        }
function update_payment(){
            //alert($("#new_invoice").val());
           var inv=$("#new_invoice").val();
           var balance=$("#balance_hid").val();
           var payment_type=$("#payment_type").val();
           var amount=$("#amount").val();
           var total_payble=$("#total_payble_hid").val();
           var str = "inv=" + inv +"&balance="+balance+"&total_payable="+total_payble+"&payment_type="+payment_type+"&amount="+amount;
            $.ajax({
                url: "<?php echo base_url(); ?>" + "Generate_Invoice/update_payment_data",
                type: "POST",
                data: str,
                async: false,
              //  dataType: 'JSON',
                success: function (msg)
                {
                     $("#amount").val('');
                     resetForm();
                  // alert(msg);
                   // alert(JSON.stringify(msg));
                  //  alert(msg.Final_Amount);
               
           }});
           
        }
    </script>
    <style type="text/css" media="all">
        @media print {
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
            }
            th, td {
                border: solid #000 !important;
                border-width: 0 1px 1px 0 !important;
            }
        }

    </style>
    <style>
        /* Autocomplete
        ----------------------------------*/
        .ui-autocomplete { position: absolute; cursor: default; }   

        /* workarounds */
        * html .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */

        /* Menu
        ----------------------------------*/
        .ui-menu {
            list-style:none;
            padding: 2px;
            margin: 0;
            display:block;
        }
        .ui-menu .ui-menu {
            margin-top: -3px;
        }
        .ui-menu .ui-menu-item {
            margin:0;
            padding: 0;
            zoom: 1;
            float: left;
            clear: left;
            width: 100%;
            font-size:80%;
        }
        .ui-menu .ui-menu-item a {
            text-decoration:none;
            display:block;
            padding:.2em .4em;
            line-height:1.5;
            zoom:1;
        }
        .ui-menu .ui-menu-item a.ui-state-hover,
        .ui-menu .ui-menu-item a.ui-state-active {
            font-weight: normal;
            margin: -1px;
        }
		table{
			border-collapse:collapse;
			width:100%;
		}
		th,td{
			padding:8px;
			text-align:left;
			border-bottom:1px solid #ddd;
			
		}
    </style>




