<?php
include('header.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
<div id="page-content-wrapper">
    <div id="page-content">                
        <div class="container">
            <div id="page-title">
                  <h3>State Data with Sorting</h3>
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    </table>   
    
                </div>
             </div>
         </div>
    </div>
<div class="modal fade" id="Edit_modal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Update State</h4>
                                                    </div> 
                                                   <input type="hidden" class="form-control"  name="state_master_id" id="state_master_id">
                                                    
                                                    <div class="modal-body">
                                                        <label class="col-md-2"> code</label>
                                                        <div class="col-md-10">
                                                            

                                                            <input type="text"   class="form-control" name="state_code1" id="state_code1" onblur="state_verification()">
                                                            <div id="txt_state_code_div"></div>
                                                        </div>
                                                    </div>                   
                                                     <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                     <div class="modal-body">
                                                        <label class="col-md-2">description</label>
                                                        <div class="col-md-10">
                                                          <!--  <input type="hidden" class="form-control"  name="state_description" id="state_description1">-->

                                                            <input type="text"   class="form-control" name="state_description1" id="state_description1" onkeypress="return ValidateAlphanum(event);" >

                                                        </div>
                                                    </div> 
                                                    <div> &nbsp</div>
                                                    <div> &nbsp</div>
                                                   
                                                     <div class="modal-footer" id="update_data">
                                                        <button type="button" onclick="update_state();" class="btn btn-default" name="btnCustLogin_bn_p1" id="btnCustLogin_bn_p1" data-dismiss="modal">Update</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();" ">Close</button>
                                                      </div>
                                                </div>

                                            </div>
                                        </div>
<?php
include('footer.php');
?>
<script>
    var verification ;
     function update_state()  
                {
              var state_id = $("#state_master_id").val();
//  alert(state_id);
            var state_code = $("#state_code1").val();
            //alert(state_code);
             var state_description = $("#state_description1").val();
        //  alert(state_description);
             var str = "state_code=" + state_code + "&state_description=" + state_description;
                           $.ajax({
                                  url: "<?php echo base_url(); ?>View_State_Master/save_update_state/" +state_id,
                                  method: "POST",
                                  data: str,
                                  dataType: "json",

                                  success: function (data)
                                  {

                                     // alert(data);
                                      location.reload();

                                  }});   
                              get_state_details();
                      }
                      $(document).ready(function ()
                        {
                                get_state_details();

                        });
                      function get_state_details()
	                             {
		
                                        $.ajax({ 
                                         url: "<?php echo base_url(); ?>View_State_Master/fetch_state_details/", 
                                        method:"POST",
                                       // data:"u_id="+u_id,
                                        dataType: "json",       
                                         success: function(data)  
                                         {	
                                             //  verification =(JSON.stringify(data[0].Name));
                                         var len=data.length;
                                             var content = "";
                                         var user_array = data;
                                                                content +="<thead><tr> <th>Sr No.</th><th>state Code</th><th>state Description</th><th >edit</th><th >Delete</th></tr></thead>";
                                          content += '</tr></thead><tbody>';

                                          for (i = 0; i < user_array.length; i++)
                                          {

                                                content += "<tr>" ;
                                                         content +=  "<td class='center'>" + (i+1) + "</td>" +
                                                            "<td class='center'>" + user_array[i].state_code + "</td>" +
                                                             "<td class='center'>" + user_array[i].state_description + "</td>" +

                                                           "<td align='center'><a href='javascript:void(0);' onclick='edit_state(" + user_array[i].state_master_id + ")'>Edit</a></td>" +
                                                             "<td align='center'><a href='javascript:void(0);' onclick='delete_state(" + user_array[i].state_master_id + ")'>Delete</a></td>" +
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
                       function delete_state(id)
                                        {
                                         var id = id;

                                                 $.ajax
                                                 ({
                                                      url: "<?php echo site_url('View_State_Master/ajax_delete_state/') ?>" + id,
                                                      type: "POST",
                                                      dataType: "JSON",
                                                      success: function (data)
                                                            {
                                                              alert("Successfully deleted");                                         
                                                                location.reload();
                                                            }	    
                                                  });
                                                  get_state_details();
                                        } 
                        function edit_state(id)
                                              {
                                               
                                                var id = id;

                                               // alert(id);
                                                //$("#id").val(id);
                                                $.ajax({
                                                    url: "<?php echo site_url('View_State_Master/ajax_edit_state/') ?>" + id,
                                                    type: "POST",
                                                    dataType: "JSON",
                                                    success: function (data)
                                                    {
                                                         verification =(JSON.stringify(data[0].state_code)); 
                                                    // alert(data);                                               
                                                        $('[name="state_code1"]').val(data[0].state_code);
                                                        $('[name="state_description1"]').val(data[0].state_description);
                                                        
                                                        var $modal = $('#Edit_modal');
                                                        // $userName = $modal.find('#userName');
                                                        $("#state_master_id").val(id);
                                                        $("#state_master_id").text(id);

                                                        // $userName.val(username);
                                                        $modal.modal("show");
                                                        //                                                       
                                                    }

                                                });
                                            }
                           function close_model() {
                                                location.reload();

                                            }
                            function state_verification()
                                {

                                         var mail=document.getElementById("state_code1").value;                                                //alert(mail);
                                         var helpemail=document.getElementById("txt_state_code_div");
                                         var mailformat = /^[0-9a-zA-Z\s]+$/; 
                             
                                     
                                        if(mail=="")
                                        {
                                         helpemail.style.color = 'red';
                                          helpemail.innerHTML = "Please Enter StateCode";
                                          mail.value="";
											 document.getElementById("btnCustLogin_bn_p1").disabled = true;
                                        }
                                        else
                                        {                                       
                                                                if(mail!="" && mail.match(mailformat))

                                                                {   
                                                                    var desired = verification.replace(/[^\w\s]/gi, '');
                                                                    if(mail==desired)
                                                                            {$("#txt_state_code_div").html("<span style='color:green;'>State Code Updated</span>");
                                                                                     document.getElementById("btnCustLogin_bn_p1").disabled = false;}
                                                                     else{
                                                                                $.ajax({	
                                                                                 url: "<?php echo base_url(); ?>View_State_Master/check_state_name/", 
                                                                                  //url: "../admin/check_state_name/", 
                                                                                  method:"POST",
                                                                                  data: "email="+mail,
                                                                                 // processData: false,
                                                                                 // contentType: false,
                                                                                 // type:"JSON",
                                                                                  success: function(data)  
                                                                                                {	
																									if(data==0){
																										$("#txt_state_code_div").html("<span style='color:red;'>Please Enter Another State Code,this already exist</span>");
																										 document.getElementById("btnCustLogin_bn_p1").disabled = true;
																									}
																									else{
																										$("#txt_state_code_div").html("<span style='color:green;'>Code Valid</span>")
																									}
                                                                                                }									   
                                                                                         });
                                                                           }
                                                                                        }
																						else{
																							   helpemail.style.color = 'red';
                                          helpemail.innerHTML = "Please Enter Valid StateCode";
                                          mail.value="";
											 document.getElementById("btnCustLogin_bn_p1").disabled = true;
																						}
										}
                                                        return false;
                                }	 
                   
</script>