<?php
include('header.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
 <script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

<div id="page-content-wrapper">
    <div id="page-content">                
        <div class="container">
            <div id="page-title">
                  <h3>Script Data </h3>
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    </table>   
    
                </div>
             </div>
         </div>
    </div>
  
     <div class="modal fade" id="editUserPopUp444" tabindex="-1" 
                                             role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title">Update Script</h4>
                                                    </div>
                                                      <input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id; ?>">
                                                     <div class="modal-body">
                                                        <label class="col-md-3">Trading Type:</label>
                                                        <div class="col-md-9">
                                                            <input type="hidden"  readonly class="form-control" name="trading_type_id" id="trading_type_id" >
                                                            <select id="txt_state" class="form-control required " name="txt_state" >
                                                            </select>
                                                        </div>                                                      
                                                    </div>
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                    <div class="modal-body">
                                                        <label class="col-md-3"> Name:</label>
                                                        <div class="col-md-9">
                                                            <input type="hidden" class="form-control"  name="id_to_update" id="id_to_update">
                                                             
                                                           
                                                            <input type="text"   class="form-control" name="branch_name" id="branch_name"  onblur="check_name()"  >
                                                            <div id="name_verify"></div>
                                                        </div>
                                                    </div>  
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                 
                                                      <div class="modal-body">
                                                        <label class="col-md-3">Transaction Type:</label>
                                                        <div class="col-md-9">
                                                              <input type="hidden"  readonly class="form-control" name="transaction_type_id" id="transaction_type_id" >
                                                            <select id="txt_trntype" class="form-control required " name="txt_trntype" >
                                                            </select>
                                                        </div>                                                      
                                                    </div>
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div class="modal-body">
                                                        <label class="col-md-3"> Entry Price*:</label>
                                                        <div class="col-md-9">                                                            
                                                            <input type="text" class="form-control" name="entry_price" id="entry_price" onkeypress="return onlyNumbersWithdecimel(event);"  >
                                                        </div>
                                                    </div>  
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div class="modal-body">
                                                        <label class="col-md-3"> Target1*:</label>
                                                        <div class="col-md-9">
                                                            <input type="text"   class="form-control" name="Target1" id="Target1"  onkeypress="return onlyNumbersWithdecimel(event);" >                                                 
                                                        </div>
                                                    </div>  
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div class="modal-body">
                                                        <label class="col-md-3"> Target2*:</label>
                                                        <div class="col-md-9">                                                                                                                                                                               
                                                            <input type="text"   class="form-control" name="Target2" id="Target2" onkeypress="return onlyNumbersWithdecimel(event);"   >
                                                        </div>
                                                    </div>  
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div class="modal-body">
                                                        <label class="col-md-3"> Stop Loss*:</label>
                                                        <div class="col-md-9">                                                        
                                                            <input type="text"   class="form-control" name="Toploss" id="Toploss" onkeypress="return onlyNumbersWithdecimel(event);"   >
                                                           
                                                        </div>
                                                    </div>  
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div class="modal-body">
                                                        <label class="col-md-3"> Comment:</label>
                                                        <div class="col-md-9">                                                           
                                                            <textarea  class="form-control" name="Comment_data" id="Comment_data"  ></textarea>
                                                           
                                                        </div>
                                                    </div>  
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                    
                                                    <div class="modal-footer" id="update_data">
                                                        <button type="button" onclick="update_branch();" class="btn btn-default" name="btnCustLogin_bn_p1" id="btnCustLogin_bn_p1" data-dismiss="modal">Update</button><button type="button" class="btn btn-default"  data-dismiss="modal"  id="btnCustLogin_bn_n" onclick="close_model();">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                     </div>
<?php
include('footer.php');
?>
<script>
function onlyNumbersWithdecimel(e) {
            var charCode;
            if (e.keyCode > 0) {
                charCode = e.which || e.keyCode;
            }
            else if (typeof (e.charCode) != "undefined") {
                charCode = e.which || e.keyCode;
            }
            if (charCode == 46)
                return true
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    var verification;
    $(document).ready(function ()
                {
                  get_branch_details();                                             
                });
	

     function get_branch_details()
			{
				
				var u_id = $("#v_id").val();            
				$.ajax({
					url: "<?php echo base_url(); ?>View_Script/fetch_branch_details/",
					method: "POST",
					data: "u_id=" + u_id,
					dataType: "json",
					success: function (data)
					{
					  //alert(JSON.stringify(data));
						 var content = "";               
						var len = data.length;
						content +="<thead><tr> <th>Sr No.</th><th>Name</th><th>Trading Type</th><th>Transcation Type</th><th>Entry Price</th><th>Target1</th><th>Target2</th><th>Stoploss</th><th>Comment</th><th>Edit</th><th>Delete</th></tr></thead>";
						content += '</tr></thead><tbody>';
						for (var i = 0; i < len; i++) 
						{
							// alert(i);
							  content += "<tr>" +
									"<td align='left' class='center black_font' >" + (i + 1) + "</td>" +
									"<td align='left' class='center black_font' >" + data[i].Name + "</td>" +                                                          
									"<td align='left' class='center black_font' >" + data[i].tradingtype + "</td>" +
									"<td align='left' class='center black_font' >" + data[i].transaction_type + "</td>" +
									"<td align='left' class='center black_font' >" + data[i].entry_price + "</td>" +
									 "<td align='left' class='center black_font' >" + data[i].Target1 + "</td>" +
									  "<td align='left' class='center black_font' >" + data[i].Target2 + "</td>" +
									   "<td align='left' class='center black_font' >" + data[i].Toploss + "</td>" +
										"<td align='left' class='center black_font' >" + data[i].Comment + "</td>" +

									"<td class='center black_font' ><a  class='center black_font' href='javascript:void(0);' onclick='edit_branch(" + data[i].id + ")'>Edit</a></td>" +
									"<td class='center black_font' ><a  class='center black_font' href='javascript:void(0);' onclick='delete_branch(" + data[i].id + ")'>Delete</a></td>" +
									"</tr>";
						}
						content += '</tbody>';           
							$('#example').html(content);  $(document).ready(function () {
								$('#example').DataTable();

							});


					}
				});

			}
      function edit_branch(id)
			{

				var id = id;


				$.ajax({
					url: "<?php echo site_url('View_Script/ajax_edit_branch/') ?>" + id,
					type: "POST",
					dataType: "JSON",
					success: function (data)
					{ 
						verification =(JSON.stringify(data.table[0].Name));                  
					 //    verification=(data.table[0].Name);
						  $('[name="trading_type_id"]').val(data.table[0].trading_type);
						  $('[name="transaction_type_id"]').val(data.table[0].transaction_type);
						   $('[name="customer_name1"]').val(data.table[0].Name);
							$('[name="entry_price"]').val(data.table[0].entry_price);
							$('[name="Target1"]').val(data.table[0].Target1);
							$('[name="Target2"]').val(data.table[0].Target2);
							$('[name="Comment_data"]').val(data.table[0].Comment);
							$('[name="Toploss"]').val(data.table[0].Toploss);
							 $('[name="id_to_update"]').val(data.table[0].id);
						  display_trading(data.table[0].trading_type);
						  display_transaction(data.table[0].transaction_type);                                                    
						$('[name="branch_name"]').val(data.table[0].Name);
						var $modal = $('#editUserPopUp444');
							  //  $userName = $modal.find('#userName');
						$("#branch_id").val(id);

						$modal.modal("show");

					}

				});
			}
                                             function display_trading(id)
                                {
                                   
                                    var state_name = id;
                                    //alert(state_name);
                                    $.ajax
                                            ({
                                                type: "POST",
                                                url: "<?php echo base_url(); ?>" + "View_Script/get_trading_type",
                                                dataType: 'json',

                                                success: function (data)
                                                {
                                                     $("#txt_state").empty();
                                                    for (var i = 0; i < data.length; i++)
                                                    {


                                                        if (state_name == data[i].master_id) {

                                                            $("<option />").val(state_name)
                                                                    .attr("selected", data[i].Name)
                                                                    .text(data[i].Name)
                                                                    .appendTo($('select#txt_state'));

                                                        }
                                                        else{
                                                        $("<option />").val(data[i].master_id)
                                                                .text(data[i].Name)
                                                                .appendTo($('select#txt_state'));

                                                    }
                                                }
                                                }

                                            });
                                }
                                         
                                            function display_transaction(id)
                                            {
                                                var state_name =id;
                                                //alert(state_name);
                                                $.ajax
                                                        ({
                                                            type: "POST",
                                                            url: "<?php echo base_url(); ?>" + "View_Script/get_transaction",
                                                            dataType: 'json',
                                                            //data: {name: user_name, pwd: password},
                                                            success: function (data)
                                                            {
                                                               	 $("#txt_trntype").empty();						  
                                                                for (var i = 0; i < data.length; i++)
                                                                {                                                              
                                                                    if (state_name == data[i].transaction_id) {
                                                                        //alert(data[i].id);
                                                                        $("<option />").val(state_name)
                                                                                .attr("selected", data[i].name)
                                                                                .text(data[i].name)
                                                                                .appendTo($('select#txt_trntype'));
                                                                        //.text()
                                                                        //  .appendTo($('select#txt_state')); 
                                                                    }
                                                                    else{
                                                                    $("<option />").val(data[i].transaction_id)
                                                                            .text(data[i].name)
                                                                            .appendTo($('select#txt_trntype'));
                                                                }
                                                                    //	}				
                                                                }

                                                            }

                                                        });
                                            }
                                           
                                             function close_model() 
                                           {
                                              location.reload();

                                            }
                                              function delete_branch(id)
                                                   {
                                                       
                                                      var id = id;

                                                              $.ajax
                                                              ({
                                                                   url: "<?php echo site_url('View_Script/ajax_delete_branch/') ?>" + id,
                                                                   type: "GET",
                                                                  // dataType: "JSON",
                                                                   success: function (data)
                                                                    {
																
                                                                      alert("Successfully deleted");                                         
                                                                        location.reload();
                                                                    }
                                                                    
                                                               });
                                                                get_branch_details(); 
                                                    }
                                                     function update_branch() {

                                                var cust_id = $("#id_to_update").val();
                                                
                                                var branch_name = $("#branch_name").val();
                                                 var trading_type_id = $("#txt_state").val();
                                                  var txt_trntype = $("#txt_trntype").val(); 
                                                  var entry_price = $("#entry_price").val();
                                                  var Target1 = $("#Target1").val();
                                                   var Target2 = $("#Target2").val();
                                                    var Toploss = $("#Toploss").val();
                                                     var Comment_data = $("#Comment_data").val();
                                                    
                                               if(branch_name == "" || trading_type_id == "" || Target1 == "" || Target2 == "" || Toploss == "" || txt_trntype == "" || entry_price == "")
                    {
                        alert("Please insert required fields");
                         var $modal = $('#editUserPopUp444');  
                         $modal.modal("show");
                    }
                                                  
                                                  
                                 else{  
                                       var trading_type_id = $("#txt_state").val();
                                   
             
        $.ajax({	
				url: "<?php echo base_url(); ?>View_Script/get_count/",                                                                     
				method:"POST",
                                data: "email="+trading_type_id,
                                dataType:'JSON',
				success: function(data)  
				   {
                       var count=JSON.parse(data);
                    if(count>=3){                                     
         alert("You can't add more script against these trading type,as already limit reached");   
          var $modal = $('#editUserPopUp444');
                                                              //  $userName = $modal.find('#userName');
                                                     
                                                      
                                                        $modal.modal("show");
     }
     else{
          var str = "branch_name=" + branch_name + "&trading_type_id="+ trading_type_id + "&txt_trntype=" + txt_trntype + "&entry_price=" + entry_price + "&Target1=" + Target1 +  "&Target2=" + Target2 + "&Toploss=" + Toploss +"&Comment=" + Comment_data;
                                               
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>View_Script/save_update_branch/" + cust_id,
                                                    method: "POST",
                                                    data: str,
                                                    success: function (data)
                                                    {
                                                        alert("data succesfully updated");
                                                        location.reload();

                                                    }});
     }
                 }});
             
                                         
                                                }
                                            }
                                        /*    function Validate_email()
            {
             
                 var mail=document.getElementById("txt_mail1").value;	
                 var helpemail=document.getElementById("email11");
                 var mailformat =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

           

                  if(mail=="")
                    {
                 helpemail.style.color = 'red';
                  helpemail.innerHTML = "Please Enter Email";
                  mail.value=""; 
                 document.getElementById("btnCustLogin_bn_p1").disabled = true; 
                    }
                    else
                    {
               

                  

          
                                            if(mail!="" && mail.match(mailformat))
                                            
                                            {  
                                                var desired = verification1.replace(/^"(.+)"$/,'$1');
                                                //alert(verification);
                                               //alert(desired);
                                                 if(mail==desired)
                                                 {$("#email11").html("<span style='color:green;'>Email Updated</span>");
                                                      document.getElementById("btnCustLogin_bn_p1").disabled = false;}
                                                  else{
                                                          $.ajax({	
                                                                    url: "<?php echo base_url(); ?>View_Domain/check_email_customer/",                                                                     
                                                                    method:"POST",
                                                                    data: "email="+mail,
                                                                    success: function(data)  
                                                                       {
                                                                          if(data==0){

                                                                                        $("#email11").html("<span style='color:red;'>Please enter another Email its already in use</span>");
                                                                                        document.getElementById("btnCustLogin_bn_p1").disabled = true;
                                                                                   }
                                                                                   else{
                                                                                           $("#email11").html("<span style='color:green;'>Email Valid</span>");
                                                                                           document.getElementById("btnCustLogin_bn_p1").disabled = false;                                                                                             
                                                                                        }
                                                                       }
                                                               });
                                            }

                                    return false;
                                    }
                                    else{
                                       helpemail.style.color = 'red';
                                        helpemail.innerHTML = "Please Enter Valid  Email";
                                        mail.value=""; 
                                         document.getElementById("btnCustLogin_bn_p1").disabled = true; 
                                    }
                                    }
            }*/
              function check_name()
                     {       
                         var txt_state=$("#txt_state").val();
                            if(txt_state==0){
               alert("please choose Trade type");
              document.getElementById("btnCustLogin_bn_p1").disabled = true;   
            }else{
                        var hsn=document.getElementById("branch_name").value;	
                        var helpemail=document.getElementById("name_verify");
                        var hsnformat =  /^[a-zA-Z\s]+$/;   
                         
                           if(hsn=="")
                          {
                                 helpemail.style.color = 'red';
                                 helpemail.innerHTML = "Please Enter Name";
                                 hsn.value="";
                                 document.getElementById("btnCustLogin_bn_p1").disabled = true; 
                          }
                          else
                          {
                               
                         

                     
				if(hsn!="" && hsn.match(hsnformat))
				{              
                                   
                                        var desired = verification.replace(/[^\w\s]/gi, ''); 
                               
                                  
                                       var areEqual = desired.toUpperCase() === hsn.toUpperCase();
                                    
                                      if(areEqual==true)
                                        
                                            {
                                          
                                              $("#name_verify").html("<span style='color:green;'>Name Updated</span>");
                                               document.getElementById("btnCustLogin_bn_p1").disabled = false;
                                             }
                                                     
                                         else
                                             {
                                              
						$.ajax({	
                                                  url: "<?php echo base_url(); ?>View_Script/check_script/", 
						  method:"POST",
						  data: "hsn_data="+hsn+"&txt_state="+txt_state,						 
						  success: function(data)  
					             {	
                                                        // alert(data);
                                                           if(data==0){								
                                                                            $("#name_verify").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                            document.getElementById("btnCustLogin_bn_p1").disabled = true;							
                                                                            }
                                                             else	{
                                                                             $("#name_verify").html("<span style='color:green;'>Name  Valid</span>");
                                                                             document.getElementById("btnCustLogin_bn_p1").disabled = false;
                                                                            }
                                                        
                                                     }		
							   
                                                    });
                                              }
                                            return false;				
                                }
                                else{
                                  helpemail.style.color = 'red';
                                 helpemail.innerHTML = "Please Enter Valild Name";
                                 hsn.value="";
                                 document.getElementById("btnCustLogin_bn_p1").disabled = true;
                                }
                                }
                }}
</script>
