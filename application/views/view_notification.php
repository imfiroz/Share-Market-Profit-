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
                  <h3>Notifcation Data</h3>
                  <button type="submit" class="pushnotification" onclick="call_api();" >Push Notification</button>
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-responsive" id="example">
                    </table>   
    
                </div>
             </div>
         </div>
    </div>
  
     <div class="modal fade" id="editUserPopUp333" tabindex="-1" 
                                             role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title">Update Notification</h4>
                                                    </div>
                                                      <input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id; ?>">
                                                   
                                                    <div class="modal-body">
                                                        <label class="col-md-3"> Name:</label>
                                                        <div class="col-md-9">
                                                            <input type="hidden" class="form-control"  name="branch_id" id="branch_id">
                                                            <input type="url"   class="form-control" name="branch_name" id="branch_name"  >
                                                            <div id="name_verify"></div>
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
                  get_branch_details();                                             
                });
     function get_branch_details()
                                    {
                                        var u_id = $("#v_id").val();            
                                        $.ajax({
                                            url: "<?php echo base_url(); ?>View_Notification/fetch_branch_details/",
                                            method: "POST",
                                            data: "u_id=" + u_id,
                                            dataType: "json",
                                            success: function (data)
                                            {
                                               // alert(JSON.stringify(data));
                                                  var content = "";               
                                                var len = data.length;
                                                content +="<thead><tr> <th>Sr No.</th><th>Name</th><th>Edit</th><th>Delete</th></tr></thead>";
                                                content += '</tr></thead><tbody>';
                                                for (var i = 0; i < len; i++) 
                                                {
                                                    // alert(i);
                                                      content += "<tr>" +
                                                            "<td align='left'>" + (i + 1) + "</td>" +
                                                            "<td align='left'>" + data[i].Name + "</td>" +                                                          
                                                           // "<td align='left'>" + data[i].pincode + "</td>" +
                                                           // "<td align='left'>" + data[i].email + "</td>" +
                                                           //  "<td align='left'>" + data[i].Vat_no + "</td>" +
                                                            "<td align='center'><a href='javascript:void(0);' onclick='edit_branch(" + data[i].branch_id + ")'>Edit</a></td>" +
                                                            "<td align='center'><a href='javascript:void(0);' onclick='delete_branch(" + data[i].branch_id + ")'>Delete</a></td>" +
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
                                                    url: "<?php echo site_url('View_Notification/ajax_edit_branch/') ?>" + id,
                                                    type: "POST",
                                                    dataType: "JSON",
                                                    success: function (data)
                                                    {
                                                        // alert(JSON.stringify(data));
                                                        
                                                       verification =(JSON.stringify(data.table[0].Name));
                                                       verification1 =(JSON.stringify(data.table[0].email));
                                                         
                                                       


                                                        $('[name="branch_name"]').val(data.table[0].Name);
                                                       
                                                        
                                                        display_State(id);
                                                        disp_city_on_disp();
                                                        $('#txt_state').on('change', function () {
                                                            var city = $(this).val();
                                                            
                                                            var city_name = $("#city_name").val();
                                                           
                                                            if (city) {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: "<?php echo base_url(); ?>" + "View_Domain/get_city",
                                                                    data: 'city=' + city,
                                                                    dataType: 'json',
                                                                    success: function (res) {
                                                                        if (res) {

                                                                            $("#txt_city").empty();
                                                                            $("#txt_city").append('<option>Select</option>');
                                                                            
                                                                            for (var i = 0; i < res.length; i++)
                                                                            {

                                                                              
                                                                                $("#txt_city").append('<option value="' + (res[i].id) + '">' + (res[i].name) + '</option>');
                                                                            }
                                                                           

                                                                        } else {
                                                                            $("#txt_city").empty();
                                                                        }

                                                                    }
                                                                });
                                                            }
                                                        });
                                                        if (data.im != "no data") {
                                                            var arrayVariable = data.im;
                                                            var arrayLength = arrayVariable.length;
															
                                                        
                                                            for (i = 0; i < arrayLength; i++) {

                                                               
                                                                var temp = document.createElement('div');
                                                                var temp_img = document.createElement('div');
                                                                var link = document.createElement("a");
                                                               link.setAttribute("id", "delete_id"+i);
                                                                link.setAttribute("href", "javascript:void(0);");
                                                                link.className = 'disp';
                                                                link.setAttribute('onClick', 'delete_img("' + data.table[0].branch_id + '","' + i + '","' + data.im[i] + '","' + data.path[i] + '","' + data.dir[i] + '")');
                                                                //link.onclick='delete_img("aa")';
                                                                temp_img.id = 'uplod_img_' + i;
                                                                temp_img.className = 'results1';
                                                                link.appendChild(document.createTextNode("X"));
                                                                temp_img.append(link);                                                                
                                                                temp.id = "path_"+i;//'uplod_' + i;id="' + data.path[i] + '" 
                                                                temp.className = 'results';
                                                                temp.innerHTML = '<a href="'+data.im[i]+'" download ><img  height="50" id="img_display_'+i+'" width="50" src="' + data.im[i] + '"</a>';
                                                                temp.appendChild(temp_img);
                                                                $('#img_data')[0].appendChild(temp);                                                               
                                                            }
                                                        }
                                                        var $modal = $('#editUserPopUp333');
                                                              //  $userName = $modal.find('#userName');
                                                        $("#branch_id").val(id);
                                                      
                                                        $modal.modal("show");
                                                                                                             
                                                    }

                                                });
                                            }
                                            function disp_city_on_disp()
                                            {
                                                var city_name = $("#city_name").val();
                                                // alert(city_name);

                                                $.ajax({
                                                    type: 'POST',
                                                    url: "<?php echo base_url(); ?>" + "View_Domain/get_city_update",
                                                    // data: 'city=' + city,
                                                    dataType: 'json',
                                                    success: function (data) {
                                                        //alert(res);
                                                        //alert(JSON.stringify(data));
                                                        // if (res) {


                                                        for (var i = 0; i < data.length; i++)
                                                        {
                                                            if (city_name == data[i].id) {
                                                                // alert(data[i].id);
                                                                $("<option />").val(city_name)
                                                                        .attr("selected", data[i].name)
                                                                        .text(data[i].name)
                                                                        .appendTo($('select#txt_city'));
                                                                //.text()
                                                                //  .appendTo($('select#txt_state')); 
                                                            }
                                                            //alert(JSON.stringify(res[i].name));
                                                            //  $("#txt_city").append('<option value="' + (data[i].id) + '">' + (data[i].name) + '</option>');
                                                        }

                                                    }
                                                });
                                            }

                                            function display_State(id)
                                            {
                                                var state_name = $("#state_name").val();
                                                //alert(state_name);
                                                $.ajax
                                                        ({
                                                            type: "POST",
                                                            url: "<?php echo base_url(); ?>" + "View_Domain/get_state_data",
                                                            dataType: 'json',
                                                            //data: {name: user_name, pwd: password},
                                                            success: function (data)
                                                            {
                                                                //  alert(data);

                                                                //                                                                            $("<option />").val("0")
                                                                //									   .text("Select State")
                                                                //									   .appendTo($('select#txt_state'));
                                                                for (var i = 0; i < data.length; i++)
                                                                {

                                                                    //  var id=$(this).attr("name");

                                                                    //
                                                                    if (state_name == data[i].id) {
                                                                        //alert(data[i].id);
                                                                        $("<option />").val(state_name)
                                                                                .attr("selected", data[i].name)
                                                                                .text(data[i].name)
                                                                                .appendTo($('select#txt_state'));
                                                                        //.text()
                                                                        //  .appendTo($('select#txt_state')); 
                                                                    }
                                                                    $("<option />").val(data[i].id)
                                                                            .text(data[i].name)
                                                                            .appendTo($('select#txt_state'));
                                                                    //					
                                                                }

                                                            }

                                                        });
                                            }
                                            function delete_img(id, del_i, img, path, dir)
                                            {
                                                document.getElementById("btnCustLogin_bn_n").disabled = true;// alert(del_i);
                                                $("#img_name").val(path);
                                                $("#dir_name").val(dir);
                                              
                                                var img_name = $("#img_name").val();
                                                var dir_name = $("#dir_name").val();
                                                // alert(JSON.stringify(dir_name));
                                                //  var customer_name = $("#customer_name").val();
                                                //  var customer_address = $("#customer_address").val();
                                                // alert(img_name);+ "&customer_name=" + customer_name + "&customer_address=" + customer_address
                                                $.ajax({
                                                    url: "<?php echo site_url('View_Domain/delete_img_from_folder/') ?>" + id,
                                                    type: "POST",
                                                    data: "dir=" + dir_name + "&img_name=" + img_name,
                                                    dataType: "JSON",
                                                    success: function (data) {
                                                     
                                                               $("#path_"+del_i).hide();
                                                              
                                                          
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
                                                                   url: "<?php echo site_url('View_Notification/ajax_delete_branch/') ?>" + id,
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

                                                var cust_id = $("#branch_id").val();
												//alert("aa");
                                                // alert(cust_id);
                                                var branch_name = $("#branch_name").val();
                                               
                                                
                                                var str = "branch_name=" + branch_name ;
//alert(str);                                         
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>View_Notification/save_update_branch/" + cust_id,
                                                    method: "POST",
                                                    data: str,
                                                   // dataType: "json",

                                                    success: function (data)
                                                    {
                                                        alert("data succesfully updated");
                                                        location.reload();

                                                    }});

                                            }
                                            function Validate_email()
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
            }
             function Validate_name()
                    {
                         var mail=document.getElementById("branch_name").value;	
                         var helpemail=document.getElementById("name_verify");
                         var mailformat = /^[a-zA-Z]+$/; 

                  

                        if(mail=="")
                          {
                            helpemail.style.color = 'red';
                            helpemail.innerHTML = "Please Enter  Name";
                            mail.value="";  
                             document.getElementById("btnCustLogin_bn_p1").disabled = true;
                         }
                           else
                           {

                         

                         

                   
                                                    if(mail!="" && mail.match(mailformat))

                                                    { 
                                                           var desired = verification.replace(/^"(.+)"$/,'$1');
                                                            
                                                                 if(mail==desired)
                                                                 {
                                                                     $("#name_verify").html("<span style='color:green;'>Name Updated</span>");
                                                                      document.getElementById("btnCustLogin_bn_p1").disabled = false;
                                                                  }
                                                               else{
                                                        $.ajax({
                                                          url: "<?php echo base_url(); ?>View_Domain/check_name/", 
                                                          method:"POST",
                                                          data: "email="+mail,
                                                          success: function(data)  
                                                             {	
                                                            if(data==0){

                                                                    $("#name_verify").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                    document.getElementById("btnCustLogin_bn_p1").disabled = true;
                                                            //	$("#btnCustLogin_bn").style.
                                                                     }
                                                            else{
                                                                    $("#name_verify").html("<span style='color:green;'>Name Valid</span>");
                                                                    document.getElementById("btnCustLogin_bn_p1").disabled = false;
                                                            }
                                                            }
                                                            });
                                                    }
                                            return false;

                            } 
                            else{
                            helpemail.style.color = 'red';
                            helpemail.innerHTML = "Please Enter Valid Name";
                            mail.value="";  
                             document.getElementById("btnCustLogin_bn_p1").disabled = true;
                            }
                            }
                    }
 function call_api(){
	//alert('<?php echo base_url("mobile/message.php"); ?>');
		 $.ajax
                  ({
                      type: "POST",
                      url:"http://sharemarketprofits.com/mobile/message.php",
					 /// url:"<?php echo base_url("mobile/message.php"); ?>",
                     // url: "<?php echo base_url('mobile/demo.php?method=dis()'); ?>",
                     // dataType: 'json',                

                        success: function (data)
                             { 
							 alert(data);
							 }
				  });
	}
</script>

