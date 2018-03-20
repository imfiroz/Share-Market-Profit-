<?php
include('header.php');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
<script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<style>
.design{
        float: right;
}
</style>
<div style="margin-left:10px; margin-right:10px">
   
<div id="page-content-wrapper">
    <div id="page-content">                
        <div class="container">
            <div class="row">
                 <div class="col-md-12">
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                         <div class="tile-box tile-box-alt bg-primary" style="background:#b3483d">
                        
                        
                       
                        </a>
                    </div>
                         </div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>      
                     
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
                       <div id="page-title">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">      
                  <h3 style="margin-top: 10px; margin-bottom: 10px">Customer Data with Sorting</h3>
				  	   <ul class="btn-tasks">
               <!-- <li class="dropdown">
                    <a href="#" id="xls" class="tip" title="<?='download_xls' ?>">
                        <i class="fa fa-file-excel-o"></i>Download Excel
                    </a>
                </li>-->
                  <div class="col-md-12" style="margin-left:10px">  <form action="<?php echo base_url() ?>Categoury_Filter/download_sales_Reports_data" method="post">
        <textarea id="abcdef" name="abcdef" style="display:none;"></textarea>
        <button  type="submit" class="btn btn-danger design" style="margin-bottom: 10px" id="button_data_all"> Download Excel       
		</button></form></div>
            
            </ul>
				 
				  
                  <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="<?php echo $role_id;?>" name="id_display" id="id_display">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-responsive" id="example">
                    </table>   
     </div> 
                </div>
                       </div>
                
          
             </div>
            </div>
         </div>
    </div>
    </div>
<!--update-->
                                            <div class="modal fade" id="Edit_modal" tabindex="-1" 
                                             role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Update Customer</h4>
                                                    </div>
													
                                                     <input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id; ?>">  
                                                  <!--  <input type="hidden" name="v_id" id="v_id" value="1">-->
                                                    <div class="modal-body">
                                                        <label class="col-md-2"> Name:</label>
                                                        <div class="col-md-10">
                                                            <input type="hidden" class="form-control"  name="cust_id" id="cust_id">
                                                            <input type="text"   class="form-control" name="customer_name1" id="customer_name1" onkeypress="return ValidateAlpha(event);" onblur="Validate_name()"  >
															 <div id="name_verification"></div>
                                                        </div>
                                                    </div>  
                                                      <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                       <div class="modal-body">
                                                        <label class="col-md-2"> Email:</label>
                                                        <div class="col-md-10">                                
                                                            <input type="text"   class="form-control" name="txt_mail1" id="txt_mail1" onblur="Validate_email()"  > 
                                                                <div id="email11"></div>
                                                        </div>
                                                    </div>  
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
                                                      <div class="modal-body">
                                                            <label class="col-md-2">Phone</label>
                                                            <div class="col-md-10">
                                                                    <input type="text" class="form-control" name="phone1" id="phone1" onblur="ValidatePhone()" placeholder="Enter Phone..." maxlength="10">
                                                                    <div id="phone_verification"></div>
                                                            </div>
                                                        </div>
                                                       <div> &nbsp</div>
                                                     <div> &nbsp</div>
													 <div style="display:none;">
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
                                                     <div> &nbsp</div></div>
                                                    <div>
                                                        <div id="img_data">                                                         
                                                        </div>
                                                        <div id="img_data1">                                                         
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" id="update_data">
                                                        <button type="button" onclick="update_customer_customer();" class="btn btn-default" name="btnCustLogin_bn_pp" id="btnCustLogin_bn_pp" data-dismiss="modal">Update</button><button type="button" class="btn btn-default" data-dismiss="modal" id="btnCustLogin_bn_n" onclick="close_model();">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<?php
include('footer.php');
?>
<script>
 var data_to_excel=[];
   var  verification;
   var phn_verification; var name;
    function Validate_name()
            {
                 var mail=document.getElementById("customer_name1").value;	
                 var helpemail=document.getElementById("name_verification");
                 var mailformat =  /^[a-zA-Z\s]+$/;  

           

                     if(mail.value=="")
                    {
                 helpemail.style.color = 'red';
                  helpemail.innerHTML = "Please Enter Name ";
                  mail.value=""; 
				document.getElementById("btnCustLogin_bn_pp").disabled = true;				  
                    }
                    else
                    {
                

                    

                         if(mail!="" && mail.match(mailformat))
                                            {   var desired = name.replace(/^"(.+)"$/,'$1');
                                                 if(mail==desired)
                                                 {$("#name_verification").html("<span style='color:green;'>Name Updated</span>");
                                                      document.getElementById("btnCustLogin_bn_pp").disabled = false;}
                                                  else{
                                                          $.ajax({	
                                                                    url: "<?php echo base_url(); ?>View_Customer/check_name/",                                                                     
                                                                    method:"POST",
                                                                    data: "email="+mail,
                                                                    success: function(data)  
                                                                       {
                                                                          if(data==0){

                                                                                        $("#name_verification").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                                        document.getElementById("btnCustLogin_bn_pp").disabled = true;
                                                                                   }
                                                                                   else{
                                                                                           $("#name_verification").html("<span style='color:green;'>Name Valid</span>");
                                                                                           document.getElementById("btnCustLogin_bn_pp").disabled = false;                                                                                             
                                                                                        }
                                                                       }
                                                               });
                                            }

                                    return false;
                                    }
									else{
										 helpemail.style.color = 'red';
                  helpemail.innerHTML = "Please Enter Valid Name ";
                  mail.value=""; 
				document.getElementById("btnCustLogin_bn_pp").disabled = true;
									}
					}

            }
			 function Validate_email()
            {
                 var mail=document.getElementById("txt_mail1").value;	
                 var helpemail=document.getElementById("email11");
                 var mailformat =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            

                   if(mail.value=="")
                    {
                 helpemail.style.color = 'red';
                  helpemail.innerHTML = "Please Enter Email";
                  mail.value=""; 
				document.getElementById("btnCustLogin_bn_pp").disabled = true; 				  
                    }
                    else
                    {
                

                    

           
                                            if(mail!="" && mail.match(mailformat))
                                            {   var desired = verification.replace(/^"(.+)"$/,'$1');
                                                 if(mail==desired)
                                                 {$("#email11").html("<span style='color:green;'>Email Updated</span>");
                                                      document.getElementById("btnCustLogin_bn_pp").disabled = false;}
                                                  else{
                                                          $.ajax({	
                                                                    url: "<?php echo base_url(); ?>View_Customer/check_email_customer/",                                                                     
                                                                    method:"POST",
                                                                    data: "email="+mail,
                                                                    success: function(data)  
                                                                       {
                                                                          if(data==0){

                                                                                        $("#email11").html("<span style='color:red;'>Please enter another Email its already in use</span>");
                                                                                        document.getElementById("btnCustLogin_bn_pp").disabled = true;
                                                                                   }
                                                                                   else{
                                                                                           $("#email11").html("<span style='color:green;'>Email Valid</span>");
                                                                                           document.getElementById("btnCustLogin_bn_pp").disabled = false;                                                                                             
                                                                                        }
                                                                       }
                                                               });
                                            }

                                    
                                    }
									else{
										  helpemail.style.color = 'red';
                  helpemail.innerHTML = "Please Enter Valid Email";
                  mail.value=""; 
				document.getElementById("btnCustLogin_bn_pp").disabled = true; 	
									}
									
					}
					return false;
            }
            function ValidatePhone()
            {
                        var phone=document.getElementById("phone1").value;
                       // alert(mail);
                        var helpemail=document.getElementById("phone_verification");
                        var phoneformat =/^\+?\d{1,3}(-|)?\d{3,5}(-|)?\d{1,10}$/;                    
                        var length=phone.length;    
                                   if( phone.value=="")
                                                   { 
                                                     //alert("gg");
                                                     helpemail.style.color = 'red';
                                                     helpemail.innerHTML = "Please Enter  Mobile No";
                                                     document.getElementById("btnCustLogin_bn_pp").disabled = true;                                
                                                   }
                                    else           
                                                   {
                                                    
                                                     
                                                   
                                  

                                           if(phone!="" && phone.match(phoneformat))
                                                            { 
                                                                var desired = phn_verification.replace(/^"(.+)"$/,'$1');
                                                                  if(phone==desired)
                                                                       {$("#phone_verification").html("<span style='color:green;'>Mobile No Updated</span>");
                                                                         document.getElementById("btnCustLogin_bn_pp").disabled = false;}
                                                                     else
                                                                     {
                                                                            $.ajax
                                                                            ({	
                                                                              url: "<?php echo base_url(); ?>"+"View_Customer/check_phone",                                                     
                                                                              method:"POST",
                                                                              data: "phone_data="+phone,
                                                                              success: function(data)  
                                                                                 {	

                                                                                    if(data==0){								
                                                                                                            $("#phone_verification").html("<span style='color:red;'>Please enter another Mobile No its already in use</span>");
                                                                                                            document.getElementById("btnCustLogin_bn_pp").disabled = true;							
                                                                                                            }
                                                                                             else	{
                                                                                                             $("#phone_verification").html("<span style='color:green;'>Mobile No Valid</span>");
                                                                                                             document.getElementById("btnCustLogin_bn_pp").disabled = false;
                                                                                                            }
                                                                                             }
                                                                             });
                                                                     }
                                                           }
														   else{
															   helpemail.style.color = 'red';
                                                     helpemail.innerHTML = "Please Enter Valid Mobile No";
                                                     document.getElementById("btnCustLogin_bn_pp").disabled = true;
														   }
														    }
                                           return false;
                                          
                    }
                $(document).ready(function ()
                {
                  get_customer_details();
                  get_customer_count();
                  get_wishlist_product();
                });
                 function get_customer_details()
                                    {
                                      
                                        $.ajax({
                                            url: "<?php echo base_url(); ?>View_Customer/fetch_customer_details/",
                                            method: "POST",
                                        
                                            dataType: "json",
                                            success: function (data)
                                            {
                                             data_to_excel=data;
                                               $("#abcdef").val(JSON.stringify(data_to_excel));	
                                                   var content = "";               
                                                var len = data.length;
                                                content +="<thead><tr> <th>Sr No.</th><th>Name</th><th >Mobile</th><th>Email</th><th>Join Date</th><th>Edit</th><th>Delete</th></tr></thead>";
                                                content += '</tr></thead><tbody>';
                                                for (var i = 0; i < len; i++) 
                                                {
                                                    // alert(i);
                                                      content += "<tr>" +
                                                            "<td align='left'>" + (i + 1) + "</td>" +
                                                            "<td align='left'>" + data[i].Name + "</td>" +
                                                            "<td align='left'>" + data[i].Mobile + "</td>" +
                                                          //  "<td align='left'>" + data[i].pincode + "</td>" +
                                                            "<td align='left'>" + data[i].Email + "</td>" +
														  	"<td align='left'>" + data[i].date + "</td>" +
                                                            "<td align='center'><a href='javascript:void(0);' onclick='edit_customer(" + data[i].Vendor_Id + ")'>Edit</a></td>" +
                                                            "<td align='center'><a href='javascript:void(0);' onclick='delete_customer(" + data[i].Vendor_Id + ")'>Delete</a></td>" +
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

                                    function delete_customer(id)
                                                   {
                                                      var id = id;

                                                              $.ajax
                                                              ({
                                                                   url: "<?php echo site_url('View_Customer/ajax_delete_customer/') ?>" + id,
                                                                   type: "POST",
                                                                  // dataType: "JSON",
                                                                   success: function (data)
                                                                    {
                                                                      alert("Successfully deleted");                                         
                                                                        location.reload();
                                                                    }
                                                                       
                                                               });
                                                                get_customer_details(); 
                                                    }
                                       function edit_customer(id)
                                            {   
                                               
                                                var id = id;                                               
                                                $.ajax({
                                                    url: "<?php echo site_url('View_Customer/ajax_edit_customer/') ?>" + id,
                                                    type: "POST",
                                                    dataType: "JSON",
                                                    success: function (data)
                                                    {
                                                        
                                                         phn_verification =(JSON.stringify(data.table[0].Mobile));
                                                         verification =(JSON.stringify(data.table[0].Email));
														  name =(JSON.stringify(data.table[0].Name));
														 
                                                        $('[name="phone1"]').val(data.table[0].Mobile);
                                                        $('[name="customer_name1"]').val(data.table[0].Name);
                                                    //    $('[name="customer_address"]').val(data.table[0].Address);
                                                        $('[name="txt_mail1"]').val(data.table[0].Email);
                                                        $('[name="state_name"]').val(data.table[0].state);
                                                        $('[name="city_name"]').val(data.table[0].city);
                                                      //  $('[name="txt_street"]').val(data.table[0].street);
                                                        $('[name="txt_pincode1"]').val(data.table[0].pincode);
                                                        display_State(id);
                                                        disp_city_on_disp();
                                                        $('#txt_state').on('change', function () {
                                                         $("#txt_city").empty();
                                                            var city = $(this).val();                                                              
                                                            var city_name = $("#city_name").val();
                                                            
                                                            //  alert(city_name);
                                                            if (city) {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    url: "<?php echo base_url(); ?>" + "View_Customer/get_city",
                                                                    data: 'city=' + city,
                                                                    dataType: 'json',
                                                                    success: function (res) {
                                                                       // alert(res);
                                                                        if (res) {
                                                                           
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
                                                                link.setAttribute('onClick', 'delete_img("' + data.table[0].Vendor_Id + '","' + i + '","' + data.im[i] + '","' + data.path[i] + '","' + data.dir[i] + '")');                                                              
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
                                                        var $modal = $('#Edit_modal'),
                                                        $userName = $modal.find('#userName');
                                                        $("#cust_id").val(id);
                                                        $("#call_id").text(id);
                                                        $modal.modal("show");                                                                                                  
                                                    }

                                                });
                                            }
                                            function delete_img(id, del_i, img, path, dir)
                                            {
                                              document.getElementById("btnCustLogin_bn_n").disabled = true; 
                                                $("#img_name").val(path);
                                                $("#dir_name").val(dir);                                            
                                                var img_name = $("#img_name").val();
                                                var dir_name = $("#dir_name").val();                                              
                                                $.ajax({
                                                    url: "<?php echo site_url('View_Customer/delete_img_from_folder/') ?>" + id,
                                                    type: "POST",
                                                    data: "dir=" + dir_name + "&img_name=" + img_name,
                                                    dataType: "JSON",
                                                    success: function (data) {
                                                    // alert(data);
                                                               $("#path_"+del_i).hide();
                                                              
                                                          
                                                    }
                                                });
                                            }
                                            function disp_city_on_disp()
                                            {
                                                $("#txt_city").empty();
                                                var city_name = $("#city_name").val();
                                                // alert(city_name);

                                                $.ajax({
                                                    type: 'POST',
                                                    url: "<?php echo base_url(); ?>" + "View_Customer/get_city_update",
                                                    // data: 'city=' + city,
                                                    dataType: 'json',
                                                    success: function (data) {
                                                        
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
                                                            
                                                        }

                                                    }
                                                });
                                            }

                                            function display_State(id)
                                            {$("#txt_state").empty();
                                                var state_name = $("#state_name").val();                                               
                                                $.ajax
                                                        ({
                                                            type: "POST",
                                                            url: "<?php echo base_url(); ?>" + "View_Customer/get_state_data",
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
                                                                                .appendTo($('select#txt_state'));                                                                       
                                                                    }
                                                                  else{ $("<option />").val(data[i].id)
                                                                            .text(data[i].name)
                                                                            .appendTo($('select#txt_state'));
                                                                }    
                                                                }                                                               
                                                            }

                                                        });
                                            }
                                        function close_model() 
                                           {
                                              location.reload();

                                            }
                                             function update_customer_customer() {
                                                // alert("dsfdf");
                                                var cust_id = $("#cust_id").val();
                                              //  alert(cust_id);
                                                var customer_name = $("#customer_name1").val();
                                                var phone=$("#phone1").val();
                                               // var customer_address = $("#customer_address").val();
                                                var txt_state = $("#txt_state").val();
                                                var txt_city = $("#txt_city").val();
                                              //  var txt_street = $("#txt_street").val();
                                                var txt_pincode = $("#txt_pincode1").val();
                                                var txt_mail = $("#txt_mail1").val();
                                                var str = "customer_name=" + customer_name + "&txt_state=" + txt_state + "&txt_city=" + txt_city+ "&txt_pincode=" + txt_pincode + "&txt_mail=" + txt_mail + "&phone=" + phone;  
                                                //alert(str);
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>View_Customer/save_update_cust/" + cust_id,
                                                    method: "POST",
                                                    data: str,
                                                    //  dataType: "json",

                                                    success: function (data)
                                                    {
                                                        //alert(data);
                                                       alert("data updated successfully");
                                                        location.reload();

                                                    }});
                                                  get_customer_details(); 

                                            }
     function get_customer_count()
                {
                                       value=document.getElementById("id_display").value;
                                           if(value==1)
                                                {
                                                        $.ajax({	
                                                                                url: "<?php echo base_url(); ?>View_Customer/get_customer_count/",                                                                     
                                                                                method:"POST",
                                                                               dataType: 'json',
                                                                                success: function(data)  
                                                                                   {
                                                                                      var count=JSON.parse(data);

                                                                                         

                                                                                        //	 var m=document.getElementById("total_product_span").innerHTML;
                                                                                        //document.getElementById("total_product_span").innerHTML ="";
                                                                                        document.getElementById("no_of_customer_count").innerHTML ="";
                                                                                     //   document.getElementById("total_vendor").innerHTML =document.getElementById("total_vendor_span").innerHTML+count ;
                                                                                        document.getElementById("customer_count").innerHTML =document.getElementById("no_of_customer_count").innerHTML+count ; 
                                                                                        
                                                                                   }
                                                                   });
                                                } 
                                           if(value==2)
                                                   {	
                                                    $.ajax({	
                                                                            url: "<?php echo base_url(); ?>Welcome/get_customer_count11/",                                                                     
                                                                            method:"POST",		
                                                                            success: function(data)  
                                                                               {
                                                                                   alert(data);
                                                                                    var count=data;
                                                                            //	var m=document.getElementById("total_product_span").innerHTML;
                                                                                    //document.getElementById("total_product_span").innerHTML ="";
                                                                                    //document.getElementById("total_product").innerHTML =document.getElementById("total_product").innerHTML+count ;
                                                                                    document.getElementById("no_of_customer_count").innerHTML ="";
                                                                                    document.getElementById("customer_count").innerHTML =document.getElementById("no_of_customer_count").innerHTML+count ;

                                                                               }
                                                               });
                                                   }                                             
                         }
function get_wishlist_product()
                {
                                       value=document.getElementById("id_display").value;
                                           if(value==1)
                                                {
                                                        $.ajax({	
                                                                                url: "<?php echo base_url(); ?>View_Customer/get_wishlist_count/",                                                                     
                                                                                method:"POST",
                                                                               dataType: 'json',
                                                                                success: function(data)  
                                                                                   {
                                                                                      var count=JSON.parse(data);

                                                                                         

                                                                                        //	 var m=document.getElementById("total_product_span").innerHTML;
                                                                                        //document.getElementById("total_product_span").innerHTML ="";
                                                                                        document.getElementById("no_of_customer_count").innerHTML ="";
                                                                                     //   document.getElementById("total_vendor").innerHTML =document.getElementById("total_vendor_span").innerHTML+count ;
                                                                                        document.getElementById("customer_count").innerHTML =document.getElementById("no_of_customer_count").innerHTML+count ; 
                                                                                        
                                                                                   }
                                                                   });
                                                } 
                                           if(value==2)
                                                   {	
                                                    $.ajax({	
                                                                            url: "<?php echo base_url(); ?>Welcome/get_customer_count11/",                                                                     
                                                                            method:"POST",		
                                                                            success: function(data)  
                                                                               {
                                                                                   alert(data);
                                                                                    var count=data;
                                                                            //	var m=document.getElementById("total_product_span").innerHTML;
                                                                                    //document.getElementById("total_product_span").innerHTML ="";
                                                                                    //document.getElementById("total_product").innerHTML =document.getElementById("total_product").innerHTML+count ;
                                                                                    document.getElementById("no_of_customer_count").innerHTML ="";
                                                                                    document.getElementById("customer_count").innerHTML =document.getElementById("no_of_customer_count").innerHTML+count ;

                                                                               }
                                                               });
                                                   }                                             
                         }
						 $('#xls').click(function (event) {
								event.preventDefault();
								
							 window.location.href = "<?=base_url('View_Customer/fetch_chapter_details_excel/')?>";
							  
							  
									});

</script>