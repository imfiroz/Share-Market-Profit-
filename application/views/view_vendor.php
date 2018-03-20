 <?php
include('header.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
<div id="page-content-wrapper">
    <div id="page-content">                
        <div class="container">
            <div id="page-title">
                  <h3>Vendor Data with Sorting</h3>
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    </table>   
    
                </div>
             </div>
         </div>
    </div>
 <div class="modal fade" id="Edit_modal" tabindex="-1" 
                                             role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Update Vendor</h4>
                                                    </div>
                                                     <input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id; ?>">
                                                   <!-- <input type="hidden" name="v_id" id="v_id" value="12">-->
                                                    <div class="modal-body">
                                                        <label class="col-md-2"> Name:</label>
                                                        <div class="col-md-10">
                                                           <!-- <input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id; ?>">-->
                                                            <input type="hidden" class="form-control"  name="cust_id" id="cust_id">
                                                            <input type="text"   class="form-control" name="customer_name1" id="customer_name1" onkeypress="return ValidateAlpha(event);"onblur="ValidateName()" >
															<div id="verify"></div>
                                                        </div>
                                                    </div>   
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div class="modal-body">
                                                        <label class="col-md-2"> Email:</label>
                                                        <div class="col-md-10">                                
                                                            <input type="text"   class="form-control" name="txt_mail1" id="txt_mail1" onblur="Validate_email()"  > 
                                                                <div id="email1"></div>
                                                        </div>
                                                    </div>  
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div class="modal-body">
                                                            <label class="col-md-2">Phone</label>
                                                            <div class="col-md-10">
                                                                    <input type="text" class="form-control" name="phone1" id="phone1" onblur="ValidatePhone()" placeholder="Enter Phone..." maxlength="10">
                                                                    <div id="phone_verification1"></div>
                                                            </div>
                                                        </div>
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                     <div class="modal-body">
                                                        <label class="col-md-2">Address:</label>
                                                        <div class="col-md-10">
                                                            <input type="text"   class="form-control" name="customer_address1" id="customer_address1" >
                                                            <input type="hidden"  readonly class="form-control" name="img_name" id="img_name" >
                                                            <input type="hidden"  readonly class="form-control" name="dir_name" id="dir_name" >
                                                        </div>
                                                    </div>
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                    <div class="modal-body">
                                                        <label class="col-md-2">State:</label>
                                                        <div class="col-md-10">
                                                            <input type="hidden"  readonly class="form-control" name="state_name" id="state_name" >
                                                            <select id="txt_state" class="form-control required " name="txt_state" >
                                                            </select>
                                                        </div>                                                      
                                                    </div>
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                    <div class="modal-body">
                                                        <label class="col-md-2">City:</label>
                                                        <div class="col-md-10">
                                                            <input type="hidden"  readonly class="form-control" name="city_name" id="city_name" >
                                                            <select id="txt_city" class="form-control required " name="txt_city" >
                                                            </select></div>
                                                    </div>   
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                    <div class="modal-body">
                                                        <label class="col-md-2">Pin code</label>
                                                        <div class="col-md-10">
                                                            <input type="text" onkeypress="return isNumber(event);"  maxlength="6" class="form-control required" id="txt_pincode1" name="txt_pincode1">
                                                             <input type="hidden"  readonly class="form-control" name="img_name" id="img_name" >
                                                            <input type="hidden"  readonly class="form-control" name="dir_name" id="dir_name" >
                                                        </div>
                                                    </div>
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                       <div class="modal-body">
                                                        <label class="col-md-2">AadharCard</label>
                                                        <div class="col-md-10">
                                                            <input type="text" onkeypress="return ValidateAlphanum(event);"class="form-control required" id="adhar_card1" name="adhar_card1">
                                                        </div>
                                                    </div>
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                    <div>
                                                        <div id="img_data">                                                         
                                                        </div>
                                                        <div id="img_data1">                                                         
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" id="update_data">
                                                        <button type="button" onclick="update_customer_customer();" class="btn btn-default" name="btnCustLogin_bn_p1" id="btnCustLogin_bn_p1" data-dismiss="modal">Update</button><button type="button" class="btn btn-default" data-dismiss="modal" id="btnCustLogin_bn_n" onclick="close_model();">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<?php
include('footer.php');
?>
<script>
     var phn_verification; var  verification;
    function update_customer_customer() 
                            {
                                var txt_mail = $("#txt_mail1").val();
								//alert(txt_mail);
                                var cust_id = $("#cust_id").val();
                                var customer_name = $("#customer_name1").val();
                                var customer_address = $("#customer_address1").val();
                                var txt_state = $("#txt_state").val();
                                var txt_city = $("#txt_city").val();
                                var txt_street = $("#txt_street1").val();
                                var txt_pincode = $("#txt_pincode1").val();
                                var adhar_card = $("#adhar_card1").val();                              
                                 var txt_phone = $("#phone1").val();
                                var str = "customer_name=" + customer_name + "&txt_phone="+ txt_phone + "&customer_address=" + customer_address + "&txt_state=" + txt_state + "&txt_city=" + txt_city +  "&txt_pincode=" + txt_pincode + "&adhar_card=" + adhar_card +"&txt_mail=" + txt_mail;
                                $.ajax({
                                    url: "<?php echo base_url(); ?>View_Vendor/save_update_vendor/" + cust_id,
                                    method: "POST",
                                    data: str,
                                    //dataType: "json",

                                    success: function (data)
                                    {
                                        //alert(data);
                                        location.reload();

                                    }});
                                   get_vendor_details();
                            }
            function close_model()
                            {
                                location.reload();

                            }
            $(document).ready(function ()
                        {
                            get_vendor_details();
                            // alert("madhu");
                        });
              function get_vendor_details()
                        {
                        var u_id = $("#v_id").val();
                        //alert(u_id);
                        $.ajax({
                            url: "<?php echo base_url(); ?>View_Vendor/fetch_vendor_details/",
                            method: "POST",
                            data: "u_id=" + u_id,
                            dataType: "json",

                            success: function (data)

                            {    
                             //   alert(JSON.stringify(data));
                                var content = "";                                                          
                                var len = data.length;
                                content += "<thead><tr> <th>Sr No.</th><th>Name</th><th>Mobile</th><th>Address</th><th>Email</th><th>Edit</th><th>Delete</th></tr></thead>";
                                content += '</tr></thead><tbody>';
                                for (var i = 0; i < len; i++) {
                                    content += "<tr>" +
                                            "<td align='left'>" + (i + 1) + "</td>" +
                                            "<td align='left'>" + data[i].Name + "</td>" +
                                            "<td align='left'>" + data[i].Mobile + "</td>" +
                                            "<td align='left'>" + data[i].Address + "</td>" +
                                            "<td align='left'>" + data[i].Email + "</td>" +
                                            "<td align='center'><a href='javascript:void(0);' onclick='edit_vendor(" + data[i].Vendor_Id + ")'>Edit</a></td>" +
                                            "<td align='center'><a href='javascript:void(0);' onclick='delete_vendor(" + data[i].Vendor_Id + ")'>Delete</a></td>" +
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
        function delete_vendor(id)
                       {
                                var id = id;

                                $.ajax
                                ({
                                     url: "<?php echo site_url('View_Vendor/ajax_delete_vendor/') ?>" + id,
                                     type: "POST",
                                     dataType: "JSON",
                                     success: function (data)
                                           {
                                             alert("Successfully deleted");                                         
                                             location.reload();
                                           }	    
                                 });
                              get_vendor_details();
                       }
            function edit_vendor(id)
             {
	$("#img_data").empty();
                    var id = id;

                    $.ajax({
                        url: "<?php echo site_url('View_Vendor/ajax_edit_vendor/') ?>" + id,
                        type: "POST",
                       dataType: "JSON",
                        success: function (data)
                        {
                            // alert(data);
                        // alert(JSON.stringify(data));
                           verification =(JSON.stringify(data.table[0].Email));
                           phn_verification =(JSON.stringify(data.table[0].Mobile));
                             $('[name="phone1"]').val(data.table[0].Mobile);
                            $('[name="customer_name1"]').val(data.table[0].Name);
                            $('[name="customer_address1"]').val(data.table[0].Address);
                            $('[name="state_name"]').val(data.table[0].state);
                            $('[name="city_name"]').val(data.table[0].city);
                            $('[name="txt_street1"]').val(data.table[0].street);
                            $('[name="txt_pincode1"]').val(data.table[0].pincode);
                            $('[name="adhar_card1"]').val(data.table[0].Adhar_Card);
                           // $('[name="PanCard"]').val(data.table[0].Pan_Card);
                           // $('[name="Gstin"]').val(data.table[0].gstin);
                            $('[name="txt_mail1"]').val(data.table[0].Email);
                           // $('[name="txt_phone"]').val(data.table[0].Mobile);
                            display_State(id);
                            disp_city_on_disp();
                            $('#txt_state').on('change', function () {
                                $("#txt_city").empty();
                                var city = $(this).val();
                                //alert(city)
                                var city_name = $("#city_name").val();
                                //  alert(city_name);
                                if (city) {
                                    $.ajax({
                                        type: 'POST',
                                        url: "<?php echo base_url(); ?>" + "View_Vendor/get_city",
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

                                    //   alert(data.path[i]);
                                    var temp = document.createElement('div');
                                    var temp_img = document.createElement('div');
                                    //  temp.temp_img = 'results';
                                    var link = document.createElement("a");
                                    link.setAttribute("id", "delete_id" + i);
                                    link.setAttribute("href", "javascript:void(0);");
                                    link.className = 'disp';
                                    link.setAttribute('onClick', 'delete_img("' + data.table[0].Vendor_Id + '","' + i + '","' + data.im[i] + '","' + data.path[i] + '","' + data.dir[i] + '")');
                                    //link.onclick='delete_img("aa")';
                                    temp_img.id = 'uplod_img_' + i;
                                    temp_img.className = 'results1';
                                    link.appendChild(document.createTextNode("X"));

                                    temp_img.append(link);

                                    temp.id = "path_" + i;
                                    temp.className = 'results';
                                    temp.innerHTML = '<img height="50" id="img_display_' + i + '" width="50" src="' + data.im[i] + '"</a>';
                                    temp.appendChild(temp_img);
                                    $('#img_data')[0].appendChild(temp);
                                }
                            }
                            var $modal = $('#Edit_modal');
                           //$userName = $modal.find('#userName');
                            $("#cust_id").val(id);
                            $("#call_id").text(id);


                            $modal.modal("show");

                        }

                    });
                }
                 function delete_img(id, del_i, img, path, dir)
                        {

                            $("#img_name").val(path);
                            $("#dir_name").val(dir);

                            var img_name = $("#img_name").val();
                            var dir_name = $("#dir_name").val();

                            $.ajax({
                                url: "<?php echo site_url('View_Vendor/delete_img_from_folder/') ?>" + id,
                                type: "POST",
                                data: "dir=" + dir_name + "&img_name=" + img_name,
                                dataType: "JSON",
                                success: function (data) {

                                    $("#path_" + del_i).hide();


                                }
                            });
                        }
                    function disp_city_on_disp()
                          {
                              var city_name = $("#city_name").val();
                              // alert(city_name);

                              $.ajax({
                                  type: 'POST',
                                  url: "<?php echo base_url(); ?>" + "View_Vendor/get_city_update",
                                  // data: 'city=' + city,
                                  dataType: 'json',
                                  success: function (data) {


                                      for (var i = 0; i < data.length; i++)
                                      {
                                          if (city_name == data[i].id) {
                                              // alert(data[i].id);
                                              $("<option />").val(city_name)
                                                      .attr("selected", data[i].name)
                                                      .text(data[i].name)
                                                      .appendTo($('select#txt_city'));

                                          }

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
                                                url: "<?php echo base_url(); ?>" + "View_Vendor/get_state_data",
                                                dataType: 'json',

                                                success: function (data)
                                                {

                                                    for (var i = 0; i < data.length; i++)
                                                    {


                                                        if (state_name == data[i].id) {

                                                            $("<option />").val(state_name)
                                                                    .attr("selected", data[i].name)
                                                                    .text(data[i].name)
                                                                    .appendTo($('select#txt_state'));

                                                        }
                                                        else{
                                                        $("<option />").val(data[i].id)
                                                                .text(data[i].name)
                                                                .appendTo($('select#txt_state'));

                                                    }
                                                }
                                                }

                                            });
                                }
                      function Validate_email()
                            {
                                 var mail=document.getElementById("txt_mail1").value;	
                                 var helpemail=document.getElementById("email1");
                                 var mailformat =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                           
                                    

                                     if(mail=="")
                                    {
                                 helpemail.style.color = 'red';
                                  helpemail.innerHTML = "Please Enter Email";
								  document.getElementById("btnCustLogin_bn_p1").disabled = true; 
                                  mail.value="";    
                                    }
                                    else
                                    {

                                

                                    
                           
                                        if(mail!="" && mail.match(mailformat))
                                        {   var desired = verification.replace(/^"(.+)"$/,'$1');

                                             if(mail==desired)
                                             {$("#email1").html("<span style='color:green;'>Email Updated</span>");
                                                  document.getElementById("btnCustLogin_bn_p1").disabled = false;}
                                              else{
                                                        $.ajax({	
                                                          url: "<?php echo base_url(); ?>" + "View_Vendor/check_email_customer",
                                                          method:"POST",
                                                          data: "email="+mail,
                                                          success: function(data)  
                                                             {
                                                                // alert(data);
                                                                if(data==0){

                                                                        $("#email1").html("<span style='color:red;'>Please enter another Email its already in use</span>");
                                                                        document.getElementById("btnCustLogin_bn_p1").disabled = true;
                                                                //	$("#btnCustLogin_bn").style.
                                                                         }
                                                                         else{
                                                                                 $("#email1").html("<span style='color:green;'>Email Valid</span>");
                                                                                 document.getElementById("btnCustLogin_bn_p1").disabled = false;
                                                                         }
                                                                         }
                                     });
                                                            }
                                                            
                                                    return false;
                                                    }
													{
												helpemail.style.color = 'red';
												  helpemail.innerHTML = "Please Enter Valid Email";
												  document.getElementById("btnCustLogin_bn_p1").disabled = true; 
												  mail.value="";    
													}
									}

                            }
                           function ValidatePhone()
                                    {
                                 var phone=document.getElementById("phone1").value;
                                // alert(mail);
                                 var helpemail=document.getElementById("phone_verification1");
                                 var phoneformat =/^\+?\d{1,3}(-|)?\d{3,5}(-|)?\d{1,10}$/;                    
                                 var length=phone.length;    
                                            if(phone==""|| phone.length!=10)
                                                            { 
                                                            // alert("fff");
                                                              helpemail.style.color = 'red';
                                                              helpemail.innerHTML = "Please Enter  Mobile No";
                                                              document.getElementById("btnCustLogin_bn_p1").disabled = true;  
                                                             		
                                                            }
                                                     else           
                                                            {                                                                
                                                            
                                                            		  

                                                    if(phone!="" && phone.match(phoneformat))
                                                    { var desired = phn_verification.replace(/^"(.+)"$/,'$1');
                                                                  if(phone==desired)
                                                                       {$("#phone_verification").html("<span style='color:green;'>Mobile No Updated</span>");
                                                                         document.getElementById("btnCustLogin_bn_p1").disabled = false;}
                                                                      else{
                                                                        $.ajax
                                                                        ({	
                                                                          url: "<?php echo base_url(); ?>"+"View_Vendor/check_phone",                                                     
                                                                          method:"POST",
                                                                          data: "phone_data="+phone,
                                                                          success: function(data)  
                                                                             {	

                                                                                if(data==0){								
                                                                                                        $("#phone_verification1").html("<span style='color:red;'>Please enter another Mobile No its already in use</span>");
                                                                                                        document.getElementById("btnCustLogin_bn_p1").disabled = true;							
                                                                                                        }
                                                                                         else	{
                                                                                                         $("#phone_verification1").html("<span style='color:green;'>Mobile No Valid</span>");
                                                                                                         document.getElementById("btnCustLogin_bn_p1").disabled = false;
                                                                                                        }
                                                                                         }
                                                                         });
                                                                    }
																}
																else{
																	 helpemail.style.color = 'red';
                                                              helpemail.innerHTML = "Please Enter Proper Mobile No";
                                                              document.getElementById("btnCustLogin_bn_p1").disabled = true;  
																}
															}
                                                    return false;				
                                            }
											 function ValidateName()
                                    {
                                 var phone=document.getElementById("customer_name1").value;
                                // alert(mail);
                                 var helpemail=document.getElementById("verify");
                                 var phoneformat = /^[a-zA-Z\s]+$/;                   
                                 var length=phone.length;    
                                            if(phone=="")
                                                            { 
                                                            // alert("fff");
                                                              helpemail.style.color = 'red';
                                                              helpemail.innerHTML = "Please Enter  Name";
                                                              document.getElementById("btnCustLogin_bn_p1").disabled = true;  
                                                             		
                                                            }
                                                     else           
                                                            {                                                                
                                                            
                                                            		  

                                                    if(phone!="" && phone.match(phoneformat))
                                                    { var desired = phn_verification.replace(/^"(.+)"$/,'$1');
                                                                  if(phone==desired)
                                                                       {$("#verify").html("<span style='color:green;'>Name Updated</span>");
                                                                         document.getElementById("btnCustLogin_bn_p1").disabled = false;}
                                                                      else{
                                                                        $.ajax
                                                                        ({	
                                                                          url: "<?php echo base_url(); ?>"+"View_Vendor/check_name",                                                     
                                                                          method:"POST",
                                                                          data: "phone_data="+phone,
                                                                          success: function(data)  
                                                                             {	

                                                                                if(data==0){								
                                                                                                        $("#verify").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                                                        document.getElementById("btnCustLogin_bn_p1").disabled = true;							
                                                                                                        }
                                                                                         else	{
                                                                                                         $("#verify").html("<span style='color:green;'>Name Valid</span>");
                                                                                                         document.getElementById("btnCustLogin_bn_p1").disabled = false;
                                                                                                        }
                                                                                         }
                                                                         });
                                                                    }
																}
																else{
																	 helpemail.style.color = 'red';
                                                              helpemail.innerHTML = "Please Enter Valid Name";
                                                              document.getElementById("btnCustLogin_bn_p1").disabled = true;  
																}
															}
                                                    return false;				
                                            }
                                      
</script>