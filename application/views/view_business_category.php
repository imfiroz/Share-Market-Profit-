<?php
include('header.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
<div id="page-content-wrapper">
    <div id="page-content">                
        <div class="container">
            <div id="page-title">
                  <h3>Business Category with Sorting</h3>
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
                                                        <h4 class="modal-title">Update Business Category</h4>
                                                    </div>                                                   
                                                     <div class="modal-body">
                                                        <label class="col-md-2"> Name:</label>
                                                        <div class="col-md-10">
                                                          <input type="hidden" class="form-control"  name="business_category_id" id="business_category_id">
                                                           <input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id;?>">                                                      
                                                            <input type="text"   class="form-control" name="customer_name1" id="customer_name1" onblur="ValidateEmailAdd1()">
                                                            <div id="email1"></div>
                                                            <input type="hidden"  readonly class="form-control" name="img_name" id="img_name" >
                                                            <input type="hidden"  readonly class="form-control" name="dir_name" id="dir_name" >

                                                        </div>
                                                     </div> 
                                                    <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div>
                                                        <div id="img_data">
                                                            <?php //echo $cid;?>
                                                        </div>
                                                        <div id="img_data1">
                                                            <?php //echo $cid;?>
                                                        </div>
                                                     </div>     
                                                          <div class="modal-footer" id="update_data">
                                                        <button type="button" onclick="update_business();" class="btn btn-default" name="btnCustLogin_bn_p1" id="btnCustLogin_bn_p1" data-dismiss="modal">Update</button>
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();" ">Close</button>
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
                get_business_details();                                            
     });
         function update_business()
         {

                    var cust_id = $("#business_category_id").val();                   
                    var customer_name = $("#customer_name1").val();
                    var str = "customer_name=" + customer_name;
                    $.ajax({
                        url: "<?php echo base_url(); ?>View_Business_Category/save_update_business/" + cust_id,
                        method: "POST",
                        data: str,
                        dataType: "json",
                        success: function (data)
                        {
                            location.reload();
                            
                        }});
                      get_business_details();    
        }
            function close_model()
            {
                location.reload();
            }
             function get_business_details()
                {
                       var u_id=$("#v_id").val();

                         $.ajax({ 
                          url: "<?php echo base_url(); ?>View_Business_Category/fetch_business_details_view/", 
                               method:"POST",
                               data:"u_id="+u_id,
                               dataType: "json",       
                          success: function(data)  
                          {	
                         
                           var len=data.length;//<th>Edit</th>
                           var content = "";
                           var user_array = data;
                           content +="<thead><tr> <th>Sr No.</th><th>Name</th> <th>Edit</th><th>Delete</th></tr></thead>";
                           content += '</tr></thead><tbody>';

                           for (i = 0; i < user_array.length; i++)
                            {

                                 content += "<tr>" ;
                                          content +=  "<td class='center'>" + (i+1) + "</td>" +

                                             "<td class='center'>" + user_array[i].name + "</td>" +                                   
                                            // "<td align='center'><a href='javascript:void(0);' onclick='edit_business(" + user_array[i].id + ")'>Edit</a></td>" +
                                    "<td align='center'><a href='javascript:void(0);' onclick='edit_business(" + user_array[i].id + ")'>Edit</a></td>" +
                                            "<td align='center'><a href='javascript:void(0);' onclick='delete_business(" + user_array[i].id + ")'>Delete</a></td>" +
                                          
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
         function delete_business(id)
            {              
                      $.ajax
                      ({
                          url: "<?php echo site_url('View_Business_Category/ajax_delete_business/') ?>" + id,
                          type: "GET",
                          dataType: "JSON",
                          success: function (data)
                              {
                                alert("Successfully deleted");                                         
                                  location.reload();
                              }

                       });
                        get_business_details(); 
             }
             
             function  get_sub_cat_old(id)
             { var sub_id=id;
                 $.ajax({
                                                    type: 'POST',
                                                    url: "<?php echo base_url(); ?>" + "View_Business_Category/get_city_update",
                                                    // data: 'city=' + city,
                                                    dataType: 'json',
                                                    success: function (data) {
                                                        
                                                        //alert(JSON.stringify(data));
                                                        // if (res) {


                                                        for (var i = 0; i < data.length; i++)
                                                        {
                                                            if (sub_id == data[i].id) {
                                                                // alert(data[i].id);
                                                                $("<option />").val(sub_id)
                                                                        .attr("selected", data[i].name)
                                                                        .text(data[i].name)
                                                                        .appendTo($('select#txt_city'));
                                                                //.text()
                                                                //  .appendTo($('select#txt_state')); 
                                                            }
                                                            
                                                        }

                                                    }
                                                });
             }
             function get_sub_cat(id)
                                            {$("#txt_city").empty();
                                                var state_name = id;                                             
                                                $.ajax
                                                        ({
                                                            type: "POST",
                                                            url: "<?php echo base_url(); ?>" + "View_Business_Category/get_sub_data",
                                                            dataType: 'json',                                                          
                                                            success: function (data)
                                                            {
                                                             // alert(JSON.stringify(data));
                                                                for (var i = 0; i < data.length; i++)
                                                                {                                                                
                                                                    if (state_name == data[i].id) {                                                                      
                                                                        $("<option />").val(state_name)
                                                                                .attr("selected", data[i].name)
                                                                                .text(data[i].name)
                                                                                .appendTo($('select#txt_city'));                                                                       
                                                                    }
                                                                  else{ $("<option />").val(data[i].id)
                                                                            .text(data[i].name)
                                                                            .appendTo($('select#txt_city'));
                                                                }    
                                                                }                                                               
                                                            }

                                                        });
                                            }
            function edit_business(id)
                {
                    var id = id;
                    

                   $.ajax({
                           url: "<?php echo site_url('View_Business_Category/ajax_edit_business/') ?>" + id,
                           type: "POST",
                             dataType: "JSON",
                           success: function (data)
                           {   
                               verification =(JSON.stringify(data.table[0].name));
                               $('[name="category_id"]').val(data.table[0].id);
                               $('[name="customer_name1"]').val(data.table[0].name);                           
                       if (data.im != "no data") {
                           var arrayVariable = data.im;
                           var arrayLength = arrayVariable.length;
                           for (i = 0; i < arrayLength; i++) {
                                    // alert(data.table[0].business_category_id);
                                       //   alert(data.path[i]);
                                       var temp = document.createElement('div');
                                       var temp_img = document.createElement('div');
                                     //  temp.temp_img = 'results';
                                       var link = document.createElement("a");
                                      link.setAttribute("id", "delete_id"+i);
                                       link.setAttribute("href", "javascript:void(0);");
                                       link.className = 'disp';
                                       link.setAttribute('onClick', 'delete_img("' + data.table[0].business_category_id + '","' + i + '","' + data.im[i] + '","' + data.path[i] + '","' + data.dir[i] + '")');
                                       //link.onclick='delete_img("aa")';
                                       temp_img.id = 'uplod_img_' + i;
                                       temp_img.className = 'results1';
                                       link.appendChild(document.createTextNode("X"));

                                       temp_img.append(link);

                                       temp.id = "path_"+i;
                                       temp.className = 'results';
                                       temp.innerHTML = '<img height="50" id="img_display_'+i+'" width="50" src="' + data.im[i] + '"</a>';
                                       temp.appendChild(temp_img);
                                       $('#img_data')[0].appendChild(temp);

                                   }
                               }
                               var $modal = $('#Edit_modal'),
                                $userName = $modal.find('#userName');
                               $("#business_category_id").val(id);
                               $("#business_category_id").text(id);

                               // $userName.val(username);
                               $modal.modal("show");
                               //                                                       
                           }

                       });
                   }
                function delete_img(id, del_i, img, path, dir)
                    {
                         //alert(del_i);
                        $("#img_name").val(path);
                        $("#dir_name").val(dir);                                              
                        var img_name = $("#img_name").val();
                        var dir_name = $("#dir_name").val();
                        $.ajax({
                            url: "<?php echo site_url('View_Business_Category/delete_img_from_folder/') ?>" + id,
                            type: "POST",
                            data: "dir=" + dir_name + "&img_name=" + img_name,
                            dataType: "JSON",
                            success: function (data)
                           {

                                       $("#path_"+del_i).hide();


                            }
                        });
                    }
                     function ValidateEmailAdd1()
                      {
	
                            var mail=document.getElementById("customer_name1").value;
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

                                                    
                                                      url: "<?php echo base_url(); ?>"+"View_Business_Category/check_business",                    
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
                         helpemail.innerHTML = "Please Enter Valid Name";
                         mail.value=""; 
                          document.getElementById("btnCustLogin_bn_p1").disabled = true; 
                                    }
                                           return false;


                    }
                    }
</script>