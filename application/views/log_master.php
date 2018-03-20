<?php
include('header.php');
?>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
                  <script src="<?php echo base_url(); ?>assets/js/validate.js"></script>  
<div id="page-content-wrapper">
            <div id="page-content" style="height: 800px; background: none;" >
                
                    <div class="container" >
<div id="page-title">
      <h2 style="margin-left: 45%;
          margin-top:10px">LOG MASTER </h2> 
			
</div>
</div>
                <div class="panel" id="coin_details1" name="coin_details1" >
                    <div class="panel-body" >
                    <div class="col-md-12">
                          <div class="col-md-11">
                    <h3 class="title-hero" style="margin: 0 0 25px;
                                                                          padding: 9px;">
						 GENERATE LOGS
						 <!--Show Stock Live-->
						 <div id="stock_show"></div>
						 <!--End Stock Live-->
						</h3>
                               </div>
                         <div class="col-md-1"><i class="glyph-icon tooltip-button demo-icon icon-plus" title="" data-original-title="" onclick="abc();"></i></div>
                        </div>
                    </div>
                    </div>
                  <div class="panel" id="table_data" name="table_data" >
                    <div class="panel-body" >
                    <div class="col-md-12" id="demo2222" name="demo2222">
                      
                    </div>
                    </div>
                    </div>
                        
                      
     
 <div id="sell_div" style="margin-left: 202px; margin-right: 210px;margin-top:40px;">
		<div class="panel-body" >
			<h3 class="title-hero">Fill Log Details</h3>
             <div class="example-box-wrapper">
                <form class="form-horizontal bordered-row" id="button_submit" name="button_submit" method="post">
				<div class="form-horizontal bordered-row"   >
                 <div class="form-group">
					<label class="col-sm-3 control-label">Trading Type</label>
					<div class="col-sm-6">
                      <select class="form-control" name="Trading" id="Trading"></select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Script</label>
					<div class="col-sm-6">
                       <select class="form-control" name="Script" id="Script"></select> 
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Transaction Type</label>
					<div class="col-sm-6">
                      <select class="form-control" name="Transaction" id="Transaction"></select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">buy@</label>
					<div class="col-sm-6">
                       <input type="text" class="form-control" name="buy_text" id="buy_text"   placeholder="Enter Text...">
                    </div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">sell@</label>
					<div class="col-sm-6">
                       <input type="text" class="form-control" name="sell_text" id="sell_text" placeholder="Enter Text...">
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Target1</label>
					<div class="col-sm-6">
                       <input type="text" class="form-control" name="Target1" id="Target1" placeholder="Enter Target1..." onkeypress="return onlyNumbersWithdecimel(event);" >
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-3 control-label">Target2</label>
					<div class="col-sm-6">
                       <input type="text" class="form-control" name="Target2" id="Target2" placeholder="Enter Target2..." onkeypress="return onlyNumbersWithdecimel(event);"  >
					</div>
				</div>                                  <!--   <div class="form-group">
									<label class="col-sm-3 control-label">Target3</label>
									<div class="col-sm-6">
                                                                          <input type="text" class="form-control" name="Target3" id="Target3" placeholder="Enter Target3..." onkeypress="return onlyNumbersWithdecimel(event);"  >
                                                                        
   
									</div>
								</div>-->
                <div class="form-group">
					<label class="col-sm-3 control-label">Result</label>
					<div class="col-sm-6">
                       <input type="text" class="form-control" name="Result" id="Result" placeholder="Enter Result..." >
                    </div>
				</div>
                <div>
					<button class="btn btn-alt btn-hover btn-black" style="margin-left:450px"   id="btnCustLogin_bn" name="btnCustLogin_bn" onclick="get_address();" >
					<span>Submit</span>
					<i class="glyph-icon icon-arrow-right"></i>
					</button>									
				</div> 
 			</div>
                </form>
		</div>
	</div>
</div>

<div class="container">
 
  <div class="modal fade" id="myModal11" name="myModal11" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
      
          <h4 class="modal-title" id="get_trans_name" name="get_trans_name"></h4>
        </div>
        <div class="modal-body" style="height: 89px;">
            <div class="col-md-12" >
               <div id="show_addres111"> </div>
              

        </div>
            <div  class="col-md-12" id="abcd" style="margin-top:10px" >
                            <div  class="col-md-4" >
                                <label>Address</label>
                                </div>
                 <div  class="col-md-6" >
                               <input type="text" id="specify_Add" name="specify_Add" class="form-control" readonly></input>
                                </div>
                </div>
             </div>
        <div class="modal-footer" style="margin-top:10px">
             <button type="button" class="btn btn-default" data-dismiss="modal" onclick="insert_data_buy()">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 <div class="modal fade" id="Edit_modal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Update Log</h4>
				</div>

			   <!-- <input type="hidden" name="v_id" id="v_id" value="12">-->

					<div class="modal-body">
					<label class="col-md-2">Trading type:</label>
					<div class="col-md-10">
						<input type="hidden"  readonly class="form-control" name="Trading_na" id="Trading_na" >
						<select id="Trading_mod" class="form-control required " name="Trading_mod" >
						</select></div>
				</div>   
				   <div> &nbsp</div>
				 <div> &nbsp</div>

				   <div class="modal-body">
					<label class="col-md-2">Script</label>
					<div class="col-md-10">
						<input type="hidden"  readonly class="form-control" name="sc_name" id="sc_name" >
						 <input type="hidden"  readonly class="form-control" name="get_id_update" id="get_id_update" >

						<select id="Script_mod" class="form-control required " name="Script_mod" >
						</select></div>
				</div>   
				  <div> &nbsp</div>
				 <div> &nbsp</div>
				  <div class="modal-body">
					<label class="col-md-2">Transaction type:</label>
					<div class="col-md-10">
						<input type="hidden"  readonly class="form-control" name="trs_name" id="trs_name" >
						<select id="Transaction_mod" class="form-control required " name="Transaction_mod" >
						</select></div>
				</div>   
				  <div> &nbsp</div>
				 <div> &nbsp</div>
				<div class="modal-body">
					<label class="col-md-2">@sell:</label>
					<div class="col-md-10">
						<input type="text"   class="form-control" name="sell_mod" id="sell_mod" >
					</div>                                                      
				</div>

				   <div> &nbsp</div>
				 <div> &nbsp</div>
				  <div class="modal-body">
					<label class="col-md-2">@buy:</label>
					<div class="col-md-10">
						<input type="text"   class="form-control" name="buy_mod" id="buy_mod" >
					</div>                                                      
				</div>

				   <div> &nbsp</div>
				 <div> &nbsp</div>
				<div class="modal-body">
					<label class="col-md-2">Target1</label>
					<div class="col-md-10">
						<input type="text"  class="form-control required" id="Target1_mod" name="Target1_mod">                                                          
					</div>
				</div>
				   <div> &nbsp</div>
				 <div> &nbsp</div>
				   <div class="modal-body">
					<label class="col-md-2">Target2</label>
					<div class="col-md-10">
						  <input type="text"  class="form-control required" id="Target2_mod" name="Target2_mod">
					</div>
				</div>
				  <div> &nbsp</div>
				 <div> &nbsp</div>
				   <!-- <div class="modal-body">
					<label class="col-md-2">Target3</label>
					<div class="col-md-10">
						  <input type="text"  class="form-control required" id="Target3_mod" name="Target3_mod">
					</div>
				</div>
				  <div> &nbsp</div>
				 <div> &nbsp</div>-->
				<div class="modal-body">
					<label class="col-md-2">Result</label>
					<div class="col-md-10">
						  <input type="text"  class="form-control required" id="Result_mod" name="Result_mod">
					</div>
				</div>
				  <div> &nbsp</div>
				 <div> &nbsp</div>
				<div class="modal-footer" id="update_data">
					<button type="button" onclick="update_data_det();" class="btn btn-default" name="btnCustLogin_bn_p1" id="btnCustLogin_bn_p1" data-dismiss="modal">Update</button><button type="button" class="btn btn-default" data-dismiss="modal" id="btnCustLogin_bn_n" onclick="close_model();">Close</button>
				</div>
			</div>
		</div>
	</div>
  </div>
 </div>
<?php
include('footer.php');
?>
<script>
	
	var verification;
		 $(document).ready(function() {
		   setInterval(fetchdata, 1000);
		   get_transaction_details();  
		   display_Transaction();
		   display_Script();
		   display_trading();
	  $("#sell_div").hide(); 
	   });
	
	
	function PopupCenter() 
	{
		var url = "https://api.upstox.com/index/dialog/authorize?apiKey=3tAI6YEbd48Hqw5zEV2YM9brEDNaps4V7dRcblQM&redirect_uri=<?= base_url() ?>Stock_Live&response_type=code";
		var title = "Upstox";
		var w = "500";
		var h = "270";
    	// Fixes dual-screen position                         Most browsers      Firefox
		var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
		var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

		var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
		var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

		var left = ((width / 2) - (w / 2)) + dualScreenLeft;
		var top = ((height / 2) - (h / 2)) + dualScreenTop;
		
		
		var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

		// Puts focus on the newWindow
		if (window.focus) {
			newWindow.focus();
		}
	}
	

	function fetchdata()
	{
		$.ajax({
			url: "<?php echo base_url(); ?>Log_Master/stock_data_live",
			type: 'post',
			success: function(response)
			{
				// Perform operation on the return value
				//alert(response);
				var content = ""; 
				content += "LTP : <b>" + response + "</b>";
				//content += 'LTP'; 
				$('#stock_show').html(content);
				//document.getElementById('result').textContent = response.data;
			}
		});
	}
		
  	function get_transaction_details() 
	{  
		$.ajax({
			url: "<?php echo base_url(); ?>Log_Master/fetch_transaction_details/",
			method: "POST",
			dataType: "json",
			success: function (data)
			{
			   //alert(JSON.stringify(data));
			   var content = "";   
			   content+='<div class="example-box-wrapper">';
			   content+='<input type="button" OnClick="PopupCenter()" value="Open Upstox" />';
			   content+='<table id="datatable-responsive" class="table table-striped table-bordered responsive no-wrap" cellspacing="0">';
				
			   var len = data.length;

				content +="<thead><tr> <th>Sr No.</th><th>Trading Name</th><th>Script Name</th><th>Transaction type </th><th>@buy</th><th>Stoploss</th><th>Target1</th><th>Target2</th><th>Date</th><th>Result</th><th>Action</th><th>Action</th></tr></thead>";
				content += '</tr></thead><tbody>';
				for (var i = 0; i < len; i++) 
				{
				  content += "<tr>" +
						"<td align='left' class='center black_font'>" + (i + 1) + "</td>" +
						"<td align='left' class='center black_font'>" + data[i].trading_name + "</td>" +
						"<td   align='left' class='center black_font'>" + data[i].script_name+ "</td>" +
						"<td   align='left' class='center black_font'>" + data[i].transaction_name + "</td>" +  
						"<td   align='left' class='center black_font'>" + data[i].buy_text + "</td>" + 
						"<td   align='left' class='center black_font'>" + data[i].sell_text + "</td>" + 
						"<td   align='left' class='center black_font'>" + data[i].target1 + "</td>" + 
						"<td   align='left' class='center black_font'>" + data[i].target2+ "</td>" +
					   // "<td   align='left' class='center black_font'>" + data[i].target3+ "</td>" + 
						"<td   align='left' class='center black_font'>" + data[i].date+ "</td>" + 
						"<td   align='left' class='center black_font'>"+data[i].result+"</td>" + 
						  "<td align='center'><a href='javascript:void(0);' onclick='edit_hsn(" + data[i].id + ")'>Edit</a></td>" +
						"<td align='center'><a href='javascript:void(0);' onclick='delete_hsn(" + data[i].id + ")'>Delete</a></td>" +
						"</tr>";
					  /*  if(approved==0){}
					   else if(approved==1){
							"<td   align='left' class='center black_font'>Confirmed</td>"+
					   }*/
				}
						content += '</tbody>';  
						content += '</table>';
						content += '</div>';
						$('#demo2222').html(content);
					  	$('#datatable-responsive').DataTable( {responsive: true} );
			}
		});
	}
	function abc()
	{
		 $("#sell_div").show();
		 $("#table_data").hide();
 	}
    function edit_hsn(id)
	{
		var id = id;
		$.ajax({
			url: "<?php echo base_url('Log_Master/ajax_edit_log/') ?>" + id,
			type: "POST",
			dataType: "JSON",
			success: function (data)
			{
				trading_type_modal(data[0].trading_id);
				script_modal((data[0].script_id),(data[0].trading_id));
				trade_modal(data[0].transaction_id);
				$('[name="sc_name"]').val(data[0].script_id);
				$('[name="Trading_na"]').val(data[0].trading_id);
				$('[name="trs_name"]').val(data[0].transaction_id);
				$('[name="Target3_mod"]').val(data[0].target3);
				$('[name="Target2_mod"]').val(data[0].target2);
				$('[name="Target1_mod"]').val(data[0].target1);
				$('[name="Result_mod"]').val(data[0].result);
				$('[name="buy_mod"]').val(data[0].buy_text);
				$('[name="sell_mod"]').val(data[0].sell_text);
				
				$('[name="get_id_update"]').val(data[0].id);
				var $modal = $('#Edit_modal');
				$modal.modal("show");   

			}

		});
	}
	function display_trading()
	{
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>"+"Log_Master/trading",
			dataType: 'json',                                   
			success: function (data)
			{ 
					$("<option />").val("0")
								.text("Select Tradingtype")
								.appendTo($('select#Trading'));

				for(var i=0;i<data.length;i++)
				{   
					$("<option />").val(data[i].master_id)
								  .text(data[i].Name)
								  .appendTo($('select#Trading'));
				}
			}
			});
	}
    function display_Script()
    {
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>"+"Log_Master/script",
			dataType: 'json',                                   
			success: function (data)
			{                     
				    $("<option />").val("0")
								   .text("Select Script")
								   .appendTo($('select#Script'));
				for(var i=0;i<data.length;i++)
				{ 
					$("<option />").val(data[i].id)
								   .text(data[i].Name)
								   .appendTo($('select#Script'));
				}

			}
			});
   }
   function display_Transaction()
   {
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>"+"Log_Master/transaction",
			dataType: 'json',                                   
			success: function (data)
			{ 
					$("<option />").val("0")
								  .text("Select Transaction")
								  .appendTo($('select#Transaction'));
				for(var i=0;i<data.length;i++)
				{ 
					$("<option />").val(data[i].transaction_id)
								  .text(data[i].name)
								  .appendTo($('select#Transaction'));
				}

			}
			});
	}
	
	
 $('#Trading').on('change',function()
   {
		$("#Script").empty();  
		var city = $(this).val();		
			if(city)
			{
				$.ajax({
				   type:'POST',
				   url: "<?php echo base_url(); ?>"+"Log_Master/script1",
				   data:'city='+city,
					dataType: 'json',        
					success:function(res)
					   {
						 if(res)
						 {    
					$("#Script").empty();
					$("#Script").append('<option>Select</option>');
							for(var i=0;i<res.length;i++)
							 { 						
								 $("#Script").append('<option value="'+(res[i].id)+'">'+(res[i].Name)+'</option>');
							 }              
						 }
					 else
						{
							$("#Script").empty();
							$("#Script").append('<option>Select</option>');
						}				
					   }
				}); 
			}
	}); 
 $('#Script').on('change',function()
   {
        var get_value_trading=$("#Trading").val();
			 if(get_value_trading==0)
			 {
				 alert("Please Choose Trading Type"); 
				 $("#Script").empty();
				 display_Script();
			 }
   }); 
 $("form[name='button_submit']").submit(function(e) 
	{
		e.preventDefault();
		var Script=$("#Script").val();
		var Transaction=$("#Transaction").val();
          
		if(Script == "" || Transaction == "" )
		{
			alert("Please insert required fields");
		  //  document.getElementById("submit_form").disabled = true;
		}
		else
		{
			var formData = new FormData(document.querySelector('form'))
			$.ajax({
				 url: "<?php echo base_url(); ?>"+"Log_Master/log_data",
				type: "POST",
				data: formData,
				async: false,
			   // dataType:'JSON',
				success: function (msg)
				{
					if(msg==1)
					  {
						  alert("Information Loaded Successfully");
						location.reload();
					  }
				},
				cache: false,
				contentType: false,
				processData: false
			});
		}
    });
	
 	function trading_type_modal(id)
	{
		var state_name = id;                                                                 
		$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "Log_Master/trading",
				dataType: 'json',

				success: function (data)
				{
					$("#Trading_mod").empty();
					for (var i = 0; i < data.length; i++)
					{
						if (state_name == data[i].master_id) 
						{
							$("<option />").val(state_name)
									.attr("selected", data[i].Name)
									.text(data[i].Name)
									.appendTo($('select#Trading_mod'));
						}
						else
						{
							$("<option />").val(data[i].master_id)
									.text(data[i].Name)
									.appendTo($('select#Trading_mod'));
						}
					}
				}
			});
	}
	function script_modal(id,trade_id)
	{
		var state_name = id;
	    var trade_id = trade_id;
		$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "Log_Master/script1",
				data:'city='+trade_id,
				dataType: 'json',

				success: function (data)
				{
					$("#Script_mod").empty();
					for (var i = 0; i < data.length; i++)
					{
						if (state_name == data[i].id)
						{
							$("<option />").val(state_name)
									.attr("selected", data[i].Name)
									.text(data[i].Name)
									.appendTo($('select#Script_mod'));
						}
						else
						{
							$("<option />").val(data[i].id)
									.text(data[i].Name)
									.appendTo($('select#Script_mod'));
						}
					}
				}
			});
	}
    function trade_modal(id)
    {
         var state_name = id;
         $.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>" + "Log_Master/transaction",
				dataType: 'json',

				success: function (data)
				{
					$("#Transaction_mod").empty();
					for (var i = 0; i < data.length; i++)
					{
						if (state_name == data[i].transaction_id)
						{
							$("<option />").val(state_name)
									.attr("selected", data[i].name)
									.text(data[i].name)
									.appendTo($('select#Transaction_mod'));

						}
						else
						{
							$("<option />").val(data[i].transaction_id)
									.text(data[i].name)
									.appendTo($('select#Transaction_mod'));
						}
					}
				}
			});
   }
	
   $('#Trading_mod').on('change',function()
    {
        $("#Script_mod").empty();  
        var city = $(this).val();	
       
        if(city)
		{
			$.ajax({
			type:'POST',
			url: "<?php echo base_url(); ?>"+"Log_Master/script1",
			data:'city='+city,
			dataType: 'json',        
			success:function(res)
			   {
				 if(res)
				 {    
					$("#Script_mod").empty();
					$("#Script_mod").append('<option>Select</option>');
						for(var i=0;i<res.length;i++)
						 { 
							 $("#Script_mod").append('<option value="'+(res[i].id)+'">'+(res[i].Name)+'</option>');
						 }              
				 }
			 	 else
				 {
					$("#Script_mod").empty();
					$("#Script_mod").append('<option>Select</option>');
				 }				
			   }
            }); 
        }
    }); 
    function update_data_det()
	{                    
		var get_id_update = $("#get_id_update").val();
		var Trading_mod = $("#Trading_mod").val();
		var Script_mod = $("#Script_mod").val();
		var Transaction_mod = $("#Transaction_mod").val();
		var sell_mod = $("#sell_mod").val();
		var buy_mod = $("#buy_mod").val();
		var Target1_mod = $("#Target1_mod").val();
		var Target2_mod = $("#Target2_mod").val();
		var Target3_mod = $("#Target3_mod").val();
		var Result_mod = $("#Result_mod").val();


	   	var str = "Trading_mod=" + Trading_mod + "&Script_mod=" + Script_mod + "&Transaction_mod=" + Transaction_mod + "&sell_mod=" + sell_mod+"&buy_mod=" + buy_mod +"&Target1_mod=" + Target1_mod  +"&Target2_mod=" + Target2_mod  +"&Target3_mod=" + Target3_mod +"&Result_mod=" + Result_mod;                    
			 $.ajax({
					url: "<?php echo base_url(); ?>Log_Master/update_records/" + get_id_update,
					method: "POST",
					data: str,
				   // dataType: "json",
					success: function (data)
					{  

						if(data==1){
							alert("Data updated successfully")
						location.reload();
					}
					else{}
					}});  

	}
    function delete_hsn(id)
	{
	   var id = id;
	   $.ajax
	   ({
			url: "<?php echo base_url('Log_Master/ajax_delete_details/') ?>" + id,
			type: "POST",
			//dataType: "JSON",
			success: function (data)
			  {
				if(data==1)
				{   
					alert("Successfully deleted");                                         
					location.reload();
				}
				else{}
			  }	    
		});

   }
</script>

