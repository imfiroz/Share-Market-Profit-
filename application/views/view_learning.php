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
                  <h3>Learning  Data with Sorting</h3>
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-responsive" id="example">
                    </table>   
    
                </div>
             </div>
         </div>
    </div>
  
     <div class="modal fade" id="editUserPopUp222" tabindex="-1" 
                                             role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title">Update Learning</h4>
                                                    </div>
                                                      <input type="hidden" name="l_id" id="l_id">
                                                   
                                                    <div class="modal-body">
                                                        <label class="col-md-3"> Description:</label>
                                                        <div class="col-md-9">
                                                          
                                                            <input type="text"   class="form-control" name="Description" id="Description"  >
                                                        </div>
                                                    </div>  
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
    var verification;
    $(document).ready(function ()
                {
                  get_learning_details();                                             
                });
     function get_learning_details()
                                    {
                                        var u_id = $("#v_id").val();            
                                        $.ajax({
                                            url: "<?php echo base_url(); ?>View_Learning/fetch_learning_details/",
                                            method: "POST",
                                          //  data: "u_id=" + u_id,
                                            dataType: "json",
                                            success: function (data)
                                            {
                                               // alert(JSON.stringify(data));
                                                  var content = "";               
                                                var len = data.length;
                                                content +="<thead><tr> <th>Sr No.</th><th>Description</th><th>Edit</th><th>Delete</th></tr></thead>";
                                                content += '</tr></thead><tbody>';
                                                for (var i = 0; i < len; i++) 
                                                {
                                                    // alert(i);
                                                      content += "<tr>" +
                                                            "<td align='left'>" + (i + 1) + "</td>" +
                                                            "<td align='left'>" + data[i].description + "</td>" +                                                          
                                                            "<td align='center'><a href='javascript:void(0);' onclick='edit_branch(" + data[i].	id + ")'>Edit</a></td>" +
                                                            "<td align='center'><a href='javascript:void(0);' onclick='delete_branch(" + data[i].id + ")'>Delete</a></td>" +
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
                                                    url: "<?php echo base_url('View_Learning/ajax_edit_learning/') ?>" + id,
                                                    type: "POST",
                                                    dataType: "JSON",
                                                    success: function (data)
                                                    {
                                                        $('[name="Description"]').val(data[0].description);   
                                                        $('[name="l_id"]').val(data[0].id);   
                                                        var $modal = $('#editUserPopUp222');
                                                        $modal.modal("show");                                                                                                           
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
                                                                   url: "<?php echo base_url('View_Learning/ajax_delete_learning/') ?>" + id,
                                                                   type: "GET",
                                                                   success: function (data)
                                                                    {
									if(data==1)	{							//	alert(data);
                                                                      alert("Successfully deleted");                                         
                                                                        location.reload();
                                                                    }
                                                                    }
                                                                    
                                                               });
                                                              
                                                    }
                                                     function update_branch() {

                                                var cust_id = $("#l_id").val();
												//alert("aa");
                                                // alert(cust_id);
                                                var Description = $("#Description").val();
                                               
                                                
                                                var str = "Description=" + Description ;
//alert(str);                                         
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>View_Learning/save_update_learning/" + cust_id,
                                                    method: "POST",
                                                    data: str,
                                                    success: function (data)
                                                    {
                                                      if(data==1){
                                                        alert("data succesfully updated");
                                                        location.reload();
                                                    }
                                                    }});

                                            }
                                            
</script>
