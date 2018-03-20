<?php
include('header.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
<div id="page-content-wrapper">
    <div id="page-content">                
        <div class="container">
            <div id="page-title">
                  <h3>Business SubCategory with Sorting</h3>
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
                                                        <h4 class="modal-title">Update Business Sub Category</h4>
                                                    </div> 
                                                   
                                                     <div class="modal-body">
                                                        <label class="col-md-2"> Main Category</label>
                                                        <div class="col-md-10">
                                                          <input type="hidden" class="form-control"  name="status_id" id="status_id" >
                                                            <input type="text" readonly   class="form-control" name="main_category" id="main_category">
                                                            
                                                        </div>
                                                     </div>                 
                                                     <div> &nbsp</div>
                                                     <div> &nbsp</div> 
                                                      <div class="modal-body">
                                                        <label class="col-md-2">SubCategory</label>
                                                        <div class="col-md-10">
                                                         
                                                            <input type="text"    class="form-control" name="subcategory" id="subcategory" onblur="Validate_sub()">
                                                            <div id="email1"></div>
                                                        </div>
                                                     </div>
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div> 
                                                     <div class="modal-footer" id="update_data">
                                                        <button type="button" onclick="update_sub_business();" class="btn btn-default" name="btnCustLogin_bn_p1" id="btnCustLogin_bn_p1" data-dismiss="modal">Update</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();" ">Close</button>
                                                      </div>
                                                </div>

                                            </div>
                                        </div>
<?php
include('footer.php');
?>
<script>
    var verification;
    $(document).ready(function () 
     {
                get_business_sub_details();                                            
     });
     function close_model()
            {
                location.reload();
            }
            function get_business_sub_details()
                {
                      

                         $.ajax({ 
                          url: "<?php echo base_url(); ?>View_Sub_Cat/fetch_business_details_view/", 
                               method:"POST",
                               data:"u_id="+u_id,
                               dataType: "json",       
                          success: function(data)  
                          {	
                          //  alert(JSON.stringify(data));
                           var len=data.length;//<th>Edit</th>
                           var content = "";
                           var user_array = data;
                           content +="<thead><tr> <th>Sr No.</th><th>MainCategory</th><th>SubCategory</th><th>Edit</th><th>Delete</th></tr></thead>";
                           content += '</tr></thead><tbody>';

                           for (i = 0; i < user_array.length; i++)
                            {

                                 content += "<tr>" ;
                                          content +=  "<td class='center'>" + (i+1) + "</td>" +

                                             "<td class='center'>" + user_array[i].parentname + "</td>" +
                                             "<td class='center'>" + user_array[i].subname + "</td>" +  
                                            // "<td align='center'><a href='javascript:void(0);' onclick='edit_business(" + user_array[i].id + ")'>Edit</a></td>" +
                                    "<td align='center'><a href='javascript:void(0);' onclick='edit_business_sub(" + user_array[i].subid + ")'>Edit</a></td>" +
                                            "<td align='center'><a href='javascript:void(0);' onclick='delete_business_sub(" + user_array[i].subid + ")'>Delete</a></td>" +
                                          
                                       "</tr>";                      

                            }

                           content += '</tbody>';                   
                           $('#example').html(content);                   
                           $(document).ready(function () 
                           {
                               $('#example').DataTable();

                           });

                          }


           });
         }
          function edit_business_sub(id)
                    {
                        var id = id;
                       $.ajax({
                               url: "<?php echo base_url('View_Sub_Cat/ajax_edit_business_sub/') ?>" + id,
                               type: "POST",
                               dataType: "JSON",
                               success: function (data)
                               {
                                   $('[name="subcategory"]').val(data[0].subname);
                                   $('[name="main_category"]').val(data[0].parentname);
                                   verification =(JSON.stringify(data[0].subname));
                                   var $modal = $('#Edit_modal');                                               
                                   $("#status_id").val(id);                                              
                                   $modal.modal("show");
                                   //                                                       
                               }
                           });
                       }
                        function update_sub_business()
         {

                    var cust_id = $("#status_id").val();                   
                    var customer_name = $("#subcategory").val();
                    var str = "customer_name=" + customer_name;
                    $.ajax({
                        url: "<?php echo base_url(); ?>View_Sub_Cat/save_update_business/" + cust_id,
                        method: "POST",
                        data: str,
                        dataType: "json",
                        success: function (data)
                        {
                            location.reload();
                            
                        }});
                      get_business_sub_details();    
        }
        function Validate_sub()
                      {
	
                            var mail=document.getElementById("subcategory").value;

                           var helpemail=document.getElementById("email1");
                            var mailformat = /^[a-zA-Z\s]+$/; 

                       

                      if(mail=="")
                           {
                        helpemail.style.color = 'red';
                         helpemail.innerHTML = "Please Enter Name";
                         mail.value="";
                         document.getElementById("btnCustLogin_bn_p1").disabled = true;
                           }
                           else
                           {

                      

                          

                 
                                    if(mail!="" && mail.match(mailformat))

                                    {   
                                        var desired = verification.replace(/^"(.+)"$/,'$1');
                                       // alert(desired);
                                                                     if(mail==desired)
                                                                       {$("#email1").html("<span style='color:green;'>Name Updated</span>");
                                                                          document.getElementById("btnCustLogin_bn_p1").disabled = false;}
                                                                      else{

                                                    $.ajax({	

                                                    
                                                      url: "<?php echo base_url(); ?>"+"View_Sub_Cat/check_business_sub",                    
                                                      method:"POST",
                                                      data: "email="+mail,
                                                      success: function(data)  
                                                         {	
                                                            if(data==0){

                                                                    $("#email1").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                    document.getElementById("btnCustLogin_bn_p1").disabled = true;
                                                                    //$("#btnCustLogin_bn_p").style.
                                                                     }
                                                                     else{
                                                                             $("#email1").html("<span style='color:green;'>Name Valid</span>");
                                                                             document.getElementById("btnCustLogin_bn_p1").disabled = false;
                                                                     }
                                                                     }
                                 });
                                    }}
                                    else{
                                     helpemail.style.color = 'red';
                         helpemail.innerHTML = "Please Enter  Valid Name";
                         mail.value="";
                         document.getElementById("btnCustLogin_bn_p").disabled = true;
                                    }}
                                           return false;


                    }
                     function delete_business_sub(id)
            {              
                      $.ajax
                      ({
                          url: "<?php echo site_url('View_Sub_Cat/ajax_delete_business/') ?>" + id,
                          type: "POST",
                          dataType: "JSON",
                          success: function (data)
                              {
                                alert("Successfully deleted");                                         
                                  location.reload();
                              }

                       });
                        get_business_details(); 
             }
</script>