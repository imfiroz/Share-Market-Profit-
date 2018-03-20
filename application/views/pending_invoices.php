 <?php
include('header.php');
?>
       
                    

<!-- jQueryUI Spinner -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/abc.css">
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script src="<?php echo base_url(); ?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/spinner/spinner.js"></script>
<script type="text/javascript">
    /* jQuery UI Spinner */

    $(function() { "use strict";
        $(".spinner-input").spinner();
    });
</script>

<!-- jQueryUI Autocomplete -->

<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/autocomplete/autocomplete.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/autocomplete/menu.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/autocomplete/autocomplete-demo.js"></script>

<!-- Touchspin -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/touchspin/touchspin.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/touchspin/touchspin.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/touchspin/touchspin-demo.js"></script>

<!-- Input switch -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/input-switch/inputswitch.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/input-switch/inputswitch.js"></script>
<script type="text/javascript">
    /* Input switch */

    $(function() { "use strict";
        $('.input-switch').bootstrapSwitch();
    });
</script>

<!-- Textarea -->

<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/textarea/textarea.js"></script>
<script type="text/javascript">
    /* Textarea autoresize */

    $(function() { "use strict";
        $('.textarea-autosize').autosize();
    });
</script>

<!-- Multi select -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/multi-select/multiselect.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/multi-select/multiselect.js"></script>
<script type="text/javascript">
    /* Multiselect inputs */

    $(function() { "use strict";
        $(".multi-select").multiSelect();
        $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
    });
</script>

<!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/uniform/uniform-demo.js"></script>

<!-- Chosen -->

<!--<link rel="stylesheet" type="text/css" href="assets/widgets/chosen/chosen.css">-->
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/chosen/chosen.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/chosen/chosen-demo.js"></script>
 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
<div id="page-title">
     <h2>Pending Invoices</h2>  
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
						  Pending Invoices
						</h3>
						<div class="example_alt_pagination">
      <div id="container">
        <div class="full_width big"></div>
  <div id="demo">
    <table cellpadding="0" cellspacing="0" border="0"  class="table table-striped table-bordered" id="example">
      <thead>
        <tr><input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id;?>">
      <th><center>Sr No. </center></th>
    <th><center>Invoice Number</center> </th>
    <th><center>Payment Status</center> </th>
	<th><center>View Invoices</center> </th>
	<th><center>Add Payment</center> </th>
          </tr>
        </thead>
      <tbody>       
        </tbody>      
  </table>
    </div>
       </div>
    </div>  
</div>
</div>
<div class="modal fade" id="Edit_modal1" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">                                               
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Invoice</h4>
                                                    </div> 
													
  <div id="demo" style="max-width: 480px;
                 margin: auto;"  >
               
                <div id="demo1">
                    <span id="xx" style="display:none;"><div id="barcodeTarget" class="barcodeTarget"></div>
                        <canvas id="canvasTarget" class="canvasTarget" width="" height="00"></canvas>
                    </span>
                 <span id="xx1" style="display:none;">  <div class="qrcode" id="qr2">
                     </div></span>  
                </div></div>
			 <div class="modal-footer" id="update_data">
			 <input type="button"  class="btn btn-default" value="Print" onclick="PrintDiv('demo1')"></input>
			 <button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();" >Close</button>
			 </div>
			</div>
			</div>
			</div>
                          <input type="hidden" id="new_invoice" value="">
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
                                                    <option value="2">CHEQUE</option>
                                                   
                                                 
                                                    </select>
                                                           
                                                       </div> 
													     
                                                      <div> </div>
													   <div> &nbsp </div>
                                                     <div> &nbsp </div>  
                                                      <div id="business"> <input type="text"placeholder="Enter check number if check" class="form-control" id="cheque_no"></div> 
													   <div> &nbsp </div>  
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
                                        </div></div>
			<!--<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-barcode.js"></script>

<script src="<?php echo base_url(); ?>js/jquery-ui.js" ></script>-->
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.qrcode.min.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">    
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-barcode.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.classyqr.js"></script>  

 <script>
		  $(document).ready(function () {
			  get_branch_details();			
		  });
                  function payment_mode(inv){
             var inv=inv;
             $("#new_invoice").val(inv);
             var str = "inv=" + inv ;
            $.ajax({
                url: "<?php echo base_url(); ?>" +"Pending_Invoices/get_payment_details",
                type: "POST",
                data: str,
                async: false,
                dataType: 'JSON',
                success: function (msg)
                {
                   
                var $modal = $('#Edit_modal');
                var ss1=(msg.pos_balance==null)?(msg.Final_Amount):(msg.pos_balance);
				var ss=Math.round(ss1);				
                $("#total_payble").text(ss);
               $("#total_payble_hid").val(ss);
               $("#final_amount").text(msg.Final_Amount);
              //  alert(ss););
               $modal.modal("show");
           }
       });
        }
		   function get_branch_details()
	 {
        
		$.ajax({ 
		   url: "<?php echo base_url(); ?>Pending_Invoices/fetch_pending_invoice/", 
			method:"POST",			
                  dataType: "json",       
		   success: function(data)  
		   {	
                        var len=data.length;
                        	for(var i=0; i<len; i++){
		   
		  var inv="'"+data[i].Invoice_Number+"'";
				// alert(data[i].bal);
			 var tr_str = "<tr>" +
                    "<td align='center'>" + (i+1) + "</td><td align='center'>" + data[i].Invoice_Number ;
					tr_str +="</td><td align='center'>" + data[i].status + "</td>";
					//tr_str +="<td align='center'>"+ data[i].Name + "</td>";
					tr_str +="<td align='center'><a href='javascript:void(0);'"; 
					tr_str +='onclick="display_added_product_using_inv1('+inv+')">View</a></td>';
                                        tr_str +="<td align='center'><a href='javascript:void(0);'"; 
                                        tr_str +='onclick="payment_mode('+inv+')">Add Payment</a></td></tr>';
					
                $("#example").append(tr_str);
			 }
            
		   }
		  });	
			  //var str=window.location.href ;
				
		//	var abc=str.split('Admin')[0]+'Admin';	
//window.history.pushState("object or string", "Title",abc );
// var myVar = window.location.href;
 //var window.location.href = abc;
//window.location  =abc ;
	//	document.location.href = "<?php echo base_url(); ?>" + "Pending_Invoices/pending_invoices";
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
    function update_payment(){
            //alert($("#new_invoice").val());
           var inv=$("#new_invoice").val();
           var balance=$("#balance_hid").val();
           var payment_type=$("#payment_type").val();
           var amount=$("#amount").val();
           var total_payble=$("#total_payble_hid").val();
           var str = "inv=" + inv +"&balance="+balance+"&total_payable="+total_payble+"&payment_type="+payment_type+"&amount="+amount;
            $.ajax({
                url: "<?php echo base_url(); ?>" + "Pending_Invoices/update_payment_data",
                type: "POST",
                data: str,
                async: false,
              //  dataType: 'JSON',
                success: function (msg)
                {
                     $("#amount").val('');
                     resetForm();
               
               
           }});
           
        }
        function resetForm()
            {//alert("aa");
                // alert(str);
                $.ajax
                        (
                                {
                                    url: "<?php echo base_url(); ?>Pending_Invoices/distroy_bill",
                                    method: "POST",
                                    // data: str,
                                    // processData: false,
                                    //  contentType: false,
                                    // type:"JSON",
                                    success: function (data)
                                    {//alert(data);
                                        location.reload();
                                        //alert("Ok");
                                        //location.redirect();

                                    }
                                });
get_branch_details();
            }
			   function display_added_product_using_inv1_old(inv_no)
        {
            var $modal = $('#Edit_modal1');
		 $modal.modal("show");
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
	  function display_added_product_using_inv1(inv_no)
	{      
		 var $modal = $('#Edit_modal1');
		 $modal.modal("show");
		var CA_id=inv_no;         
     
        $.ajax({
                url: "<?php echo base_url(); ?>Pending_Invoices/fetch_product_cust_details_using_invoice/",
                method: "POST",
                data: "inv_no=" + CA_id,
               dataType: "json",
                success: function (data)
                { 
				  //alert(JSON.stringify(data));
                      generateBarcode(CA_id);
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
                   
                   
                   
                    content += "<tr><th>Product</th> <th>Rate</th><th>Qty</th><th>Amount</th></tr></thead>"; 
                    var paid="";
                    for (var i = 0; i < len; i++)
                    {	var gst=data[i].Igst;
			
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
				
                     /*   var tr_str = "<tr>" +
                                "<td class='left'>" + (i + 1) + "." + data[i].Product_Name + "</td>" +
                              
                                "<td class='left' >" +parseFloat(data[i].rate).toFixed(2)  + "</td>" +
                                "<td class='center'>" + data[i].Quantity + "</td>" +
                                "<td class='left' >" +parseFloat(data[i].rate).toFixed(2) * data[i].Quantity + "</td>" +
                                "</tr>";
                       tr_str +="<tr><td colspan='3'>(Hsn Code:-"+data[i].Hsn_code +",CGST:-"+(data[i].Cgst)+"%,SGST:-"+(data[i].Sgst)+"%)Amount</td><td>"+parseFloat(data[i].product_amount).toFixed(2)+"</td></tr>";
                        
                        var board;
                        board = document.createElement("div");
                        board.id = "mainBoard";
                        igst += parseFloat(data[i].igst_pr_value);
                        cgst += parseFloat(data[i].cgst_pr_value);
                        sgst += parseFloat(data[i].sgst_pr_value);
                        FV1 += parseFloat(data[i].Final_Value);
                        FV=Math.round(FV1);
                        amt += parseFloat(data[i].taxable_value);
                        barcode += data[i].product_barcode;
                        div_ele += data[i].div_ele;
                        barcode_txt += data[i].barcode_txt;
                        total_tax_amt1 = igst + cgst + sgst;
                        total_tax_amt=Math.round(total_tax_amt1);
                     //paid_amount= data[0].paid
                        content += tr_str;
                        

                    }    */  
				}					
                    var tr_str2 = "<tr>" +
                            "<td  colspan='3' >Total Amount Befor Tax:</td>" +
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
                            "<td  >" +Math.round(data[0].amount) + "</td>" +
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
	 function display_added_product_using_inv1_older(inv_no)
	{
		 var $modal = $('#Edit_modal1');
		 $modal.modal("show");
       var CA_id=inv_no;                               
       $.ajax({ 
		   url: "<?php echo base_url(); ?>Generate_Invoice/fetch_product_cust_details_using_invoice/", 
		   method:"POST",
		   data:"inv_no="+CA_id,
           dataType: "json",       
		   success: function(data)  
		   {	
		   var len=data.length;
	       var div_ele="";
           var igst = 0;
           var cgst = 0;
           var sgst = 0;
           var FV = 0;
		   var barcode="";
		   var barcode_txt="";
           var amt = 0;
           var total_tax_amt = 0;
           var content = "<table  name='example' border='1' class='display printt' id='prtrt'>";        
           content +="<thead><tr><td colspan='4'><b>Invoice</b></td></tr>";
		   content +="<tr><td colspan='4'><center> Reyank</center></td></tr>";
		   content +="<tr><td colspan='2'><b>Invoice Number:</td><td colspan='2'>"+inv_no+"</b></td></tr>";
		   content +="<tr><th>Product</th> <th>Rate</th><th>Qty</th><th>Amount</th></tr></thead>";
		     generateBarcode(inv_no);  
	for(var i=0; i<len; i++)
	 {                                   
			 var tr_str = "<tr>" +
                    "<td class='left'>" + (i+1) +"."+ data[i].Product_Name + "</td>" +
                    
                    "<td class='left' >" + data[i].product_amount + "</td>" +
					"<td class='center'>" + data[i].Quantity + "</td>" +
                    "<td class='left' >" + data[i].product_amount + "</td>" +
					"</tr>";
             var board;
			 board= document.createElement("div");
		     board.id = "mainBoard";
		     igst += parseFloat(data[i].igst_pr_value);
             cgst += parseFloat(data[i].cgst_pr_value);
             sgst += parseFloat(data[i].sgst_pr_value);
             FV += parseFloat(data[i].Final_Value);
             amt += parseFloat(data[i].taxable_value);
		     barcode +=data[i].product_barcode;
			 div_ele +=data[i].div_ele;
			 barcode_txt +=data[i].barcode_txt;
			 total_tax_amt=igst+cgst+sgst;
			 content += tr_str;
			
      }
	         var tr_str1 = "<tr>" +
                                 "<td  colspan='3' >HSN CODE</td>" +
                                 
					            
                                 "<td  >"+Math.round(FV)+"</td>" +
					       "</tr>";
						   
             content += tr_str1;
			 
             var tr_str2 = "<tr>" +
                                 "<td  colspan='3' >Total Amount Befor Tax:</td>" +
                                 "<td   >"+Math.round(amt)+"</td>" +
					       "</tr>";
             content += tr_str2;
             var tr_str3 = "<tr>" +
                                  "<td  colspan='3' >Add IGST:</td>" +
                                  "<td  >"+Math.round(igst)+"</td>" +
					       "</tr>";
             content += tr_str3;
             var tr_str4 = "<tr>" +
                                  "<td   colspan='3'>ADD CGST:</td>" +
                                  "<td  >"+Math.round(cgst)+"</td>" +
					       "</tr>";
             content += tr_str4;
             var tr_str5 = "<tr>" +
                                 "<td  colspan='3' >ADD SGST:</td>" +
                                 "<td  >"+Math.round(sgst)+"</td>" +
					       "</tr>";
             content += tr_str5;
             var tr_str6 = "<tr>" +
                                 "<td   colspan='3'>TOTAL TAX AMOUNT:</td>" +
                                 "<td  >"+Math.round(total_tax_amt)+"</td>" +
					       "</tr>";
             content += tr_str6;
             var tr_str7 = "<tr>" +
                                  "<td   colspan='3'>TOTAL AMOUNT AFTER TAX:</td>" +
                                  "<td  >"+Math.round(FV)+"</td>" +
					       "</tr>";
             content += tr_str7;
             //var tr_str11 = "<tr>" +
                                                                       
			///		              "<td colspan='4' >"+content1+"</td>" +
              //             "</tr>";
			//content += tr_str11;
		    var tr_str12 = "<tr>" +
                                  "<td colspan='4'><center >"+barcode+$("#xx").html()+"</center></td>" +                                         
					        
                           "</tr>";
             content += tr_str12;
                                
            $("#demo1").append(content);
                                  
            }                  
        });  
		
	}
	function generateBarcode(code) {
           // alert(code);
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
	 function close_model() 
                                    {
                                        location.reload();

                                    }
									function generateBarcode_old(code){
	
        var value = code;
       //alert(aa);
		
		var btype = 'code128';
        var renderer = 'SVG';
        
		//var quietZone = false;
       // if ($("#quietzone").is(':checked') || $("#quietzone").attr('checked')){
        //  quietZone = true;
        //}
		var bgcol='#FFFFFF';
		var col='#000000';
		var barwidth=1;
		var barheight=50;
		module_size=5;
        var settings = {
          output:renderer,
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
        if (renderer == 'canvas'){
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
		$('#qrcode').qrcode(value);
        }
		
      }
	  function generate_qr(value){
    $("#qr2").ClassyQR({
    create: true,
    type: 'text',
    text: value
});
}
	  function PrintDiv(divid) {
			
			// var selectval = $('#bill_type').val();
  
   //else{
	  // if(selectval=="bill")
	   {
		     
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
		   
	   }
	  /* else{
		  
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
        }*/
   //}
		}
	</script>
<?php
include('footer.php');
?>
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