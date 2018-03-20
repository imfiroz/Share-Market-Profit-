 <?php
include('header.php');
?>
<script src="<?php echo base_url()?>assets/js/validate.js"></script>
       
        
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
          

<!-- jQueryUI Spinner -->

 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
<div id="page-title">
     <h2>Create  Service Level</h2>
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
						  Service Level Mapping
						</h3>
						<div class="example-box-wrapper">
							<form class="form-horizontal bordered-row"  method="post" id="button_submit1" name="button_submit1">
								<div class="form-group">
									<label class="col-sm-1 control-label">Select Script</label>
									<div class="col-sm-3">
										 <select class="itemName form-control"  name="itemName"></select>
                                                                               
									</div>
								</div>
								
								<div class="form-group1">
									
									<div class="col-sm-4">
									<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered dataTable no-footer  " name="MyTable" id="MyTable">
									<tr><td style="background-color:#fafcfe;;border:1px">Script Name</td></tr>
									<tbody>
									<?php //print_r($data);
									foreach($data as $dt){
										 $dt['id'];
										 /**/
										?><tr  class="color_change" data-id="<?php echo $dt['id'];?>"  id="<?php echo $dt['id'];?>"><td data-id="<?php echo $dt['id'];?>" onclick="change_color(<?php echo $dt['id'];?>)" style="align" id="<?php echo $dt['id'];?>"><?php echo $dt['text'];?></td></tr>
									<?php }
									
									?></tbody>
										</table>
                                                                               
									</div>
								</div>
								 			<div class="row">
									
									<div class="col-sm-4">
									<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered dataTable no-footer " role="grid" style="margin-left: 0px; width: 100%;" border='1' name="MyTable" id="MyTable">
									<tr><td colspan="2" style="background-color:#fafcfe;border:1px">Level Name</td></tr>
									<tbody>
									<?php //print_r($data);
									$a=array();
									
									foreach($data1 as $dt){
										array_push($a,$dt['id']);
									
										 $dt['id'];//
										?><tr  class="color" id="tr_<?php echo $dt['id'];?>"><td><input  onchange="check_box(<?php echo $dt['id'];?>)"  type="checkbox" class="chkbox_chk" id="chk_<?php echo $dt['id'];?>"></td><td style="align" id="<?php echo $dt['id'];?>"><a href="javascript:void(0);"id="link_<?php echo $dt['id'];?>"><?php echo $dt['text'];?></a></td></tr>
									<?php }//print_r($a);
									
									?></tbody>
										</table>
										 <input type="hidden" value="<?php echo print_r($a);?>" id="checkbox_array"> 
                                        <input type="hidden" id="color_id"> 
									<input type="hidden" id="script_id">  										
									<input type="hidden" id="level_id">  
									<input type="hidden" id="level_id_update"> 
								<input type="hidden" id="uncheck"> 	
																
									
									</div>
								</div>					
								<div class="row" style="display:none;">
                                  <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px" type="submit" onclick="insert_into_script_level(<?php echo $dt['id'];?>)" id="button_submit" name="button_submit" >
										<span>Submit</span>
											<i class="glyph-icon icon-arrow-right"></i>
                                                                    </button>
                                                                  
									
								</div>
							</form>
						</div>
					
                                </div>
                         </div>
                    </div>
              </div>
          </div>
    </div>
	<style>
	tr.highlighted td {
    background: #93487f;
}
	</style>
<?php
include('footer.php');
?>
<script>
var signedUpUsernames1= new Array();
var arr_level=new Array();
var myarray= new Array();
var unique = function(origArr) {
    var newArr = [],
        origLen = origArr.length,
        found,
        x, y;
 
    for ( x = 0; x < origLen; x++ ) {
        found = undefined;
        for ( y = 0; y < newArr.length; y++ ) {
            if ( origArr[x] === newArr[y] ) { 
              found = true;
              break;
            }
        }
        if ( !found) newArr.push( origArr[x] );    
    }
   return newArr;
}
 
//var myarray = ['jeffrey', 'allie', 'patty', 'damon', 'zach', 'jeffrey', 'allie', 'patty', 'damon', 'zach', 'joe'];

var cn='';
$('#MyTable tr').click(function(e) {
    /*$('#MyTable tr').removeClass('highlighted');
    $(this).addClass('highlighted');
	$("#level_id").val('');*/
	var $this = $(this);
	  var $this = $(this);
    var trid = $this.closest('tr').data('id');
   // alert("TR ID " + trid);
   
    var tdid = $this.find('td[id]').attr('id');
    
	  var x = document.getElementById("MyTable").getElementsByTagName("td");
	  if(trid !=undefined){
	  if(cn=='' || cn==null)
	  { cn = tdid ? tdid : '';
 
		   x[cn].style.backgroundColor = "#93487f"; 
	  }else{
				//alert(cn);	
					x[cn].style.backgroundColor = "white"; 
					cn = tdid ? tdid : '';
				   x[tdid].style.backgroundColor = "#93487f";
				  // change_color(cn);
	  }
	  }
			 //cn = $(this).val() ? $(this).val() : '';cn
			
			 
			/* if(cn=='' || cn==null)
			 {cn =tdid ? tdid: '';
				//alert(cn);
				 x[cn].style.backgroundColor = "#93487f"; 
				 change_color(cn);
			 }else{
				// alert(cn);
				  x[cn].style.backgroundColor = "white"; 
				  cn = tdid ? tdid : '';
				   x[cn].style.backgroundColor = "#93487f";
				   change_color(cn);
				  
			 }*/
});

function change_color(cn){
	//alert(id);
//$(".color_change").click(function(){
	signedUpUsernames1.push(cn);
	myarray = unique(signedUpUsernames1);
//alert(myarray.join(', '));
			$("#color_id").val(cn);
	//if(!objectWithPropExists(cn,'key',signedUpUsernames1['key'])) signedUpUsernames1.push(signedUpUsernames1);
			$("#script_id").val(cn);
		//	alert(cn);
   // $("#td_"+cn).css("background-color", "#954a7f");
	
	 $.ajax
                                            ({	
                                              url: "<?php echo base_url(); ?>"+"Create_Services/get_level_data",                                             
                                              method:"POST",
                                              data: "s_id="+$("#script_id").val(),
											  dataType:"JSON",
											  success: function(data)  
                                                 {	//alert(data.length);
												// store();
												var js_array = [<?php echo '"'.implode('","', $a).'"' ?>];
										//	alert(js_array.length);
										if( data.length < js_array.length){
											for(var u=0;u<js_array.length;u++){
														//	alert("zzz"+data[u]);
															$("#chk_"+js_array[u]).prop('checked', false);
														}
										}
										if(data.length==0 ){
												for(var u=0;u<js_array.length;u++){
															//alert(js_array[u]);
															$("#chk_"+js_array[u]).prop('checked', false);
														}
										}else{
											for(var i=0;i<data.length;i++)
												{
													
													//alert(data[i].level_id);
													
														//alert(JSON.stringify$("#chk_"+data[i].level_id).attr('value', '0'));
														
													$("#chk_"+data[i].level_id).prop('checked', true);
													
													//document.getElementById("chk_"+data[i].level_id).checked = true;
													//}
													
													 if ($("#chk_"+data[i].level_id).prop('checked')) {
         //alert(id);
														 arr_level.push(data[i].level_id);
													//myarray = unique(signedUpUsernames1);
														
														$("#level_id_update").val(arr_level); 
														$("#level_id").val(arr_level); 
														}
														else {
															 $($("#chk_"+data[i].level_id)).prop('checked', false);
														/*
															var j = 0;
														  for (var i = 0; i< arr_level.length;  i++) {
															if (arr_level[i] == id) {
																//$("#level_id").val(arr_level[i]); 
																//alert(arr_level[i]);
															  //arr[j++] = arr[i];
															  
															}
															else{
																//alert(arr_level[i]);
																$("#level_id").val(arr_level[i]);
															}
														  }
														*/
														
														}
														
														
												}
											}}
		});
	
}
 function remove1(array, element) {
   return array.filter(e => e !== element);
  //  array.splice(index, 1);
}
 function check_box(id) {
	//alert(id);
        if ($("#chk_"+id).prop('checked')) {
          //alert(id);
		 arr_level.push(id);
		 $("#level_id").val(id); 
		insert_into_script_level(id);	
	
		
        }else{
			$("#uncheck").val(id);
			//alert(id);
			$.ajax
                                            ({	
                                              url: "<?php echo base_url(); ?>"+"Create_Services/update_service",                                             
                                              method:"POST",
                                              data: "lavel_id="+$("#uncheck").val()+"&script_id="+$("#script_id").val(),
											  success: function(data)  
                                                 {	//alert(data);
												 if(data ){
													
												// alert("Ok updates Successfully");
												 // $("#chk_"+id).prop("checked", false);
												 location.reload();
												
												 }
												 }
		});
		}
       /* else {
		//var tt=remove1(arr_level,3);
		var j = 0;
		  for (var i = 0; i< arr_level.length;  i++) {
			if (arr_level[i] == id) {
				//$("#level_id").val(arr_level[i]); 
				//alert(arr_level[i]);
			  //arr[j++] = arr[i];
			  $("#level_id").val("");
			}
			else{
				//alert(arr_level[i]);
				
			}
		  }
		 // arr.length = j;
          //  alert("You have elected to turn off checkout historyssss."+tt); //not checked
        }*/
    }
	
 $('.itemName').select2({
        placeholder: '--- Select Item ---',
        ajax: {
          url: '<?php echo base_url();?>Create_Services/search',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
			          
		//alert(data);
		if(data ==null){
			alert("no data is availabel");
			}
		else{
            return {
				                         
                results: $.map(data, function (item) {
                    return {
                        text: item.text,
                        slug: item.text,
                        id: item.id
                    }
                })
            };
        }
	//	}
          /*  return {
				
              results: data
            };*/
			//alert(results);
          },
          cache: true
        }
      });	
	  var unser_arr=new Array();
	   
	    $(document).on('change', '.itemName', function () {
			 
			// alert(cn);
			  var x = document.getElementById("MyTable").getElementsByTagName("td");
			 // alert(x);
			 //cn = $(this).val() ? $(this).val() : '';
			 if(cn=='' || cn==null)
			 {cn = $(this).val() ? $(this).val() : '';
		 	///alert(cn);
				 x[cn].style.backgroundColor = "#93487f"; 
				 change_color(cn);
			 }else{
				 //alert(cn);
				  x[cn].style.backgroundColor = "white"; 
				  cn = $(this).val() ? $(this).val() : '';
				   x[cn].style.backgroundColor = "#93487f";
				   change_color(cn);
				  
			 }
			 /*
              var x = document.getElementById("MyTable").getElementsByTagName("td");
			 if(cn ==''){
				
			x[cn-1].style.backgroundColor = "#93487f"; 
			}
			else{
				alert(cn);
					//x[cn].style.backgroundColor = "red";
					//cn = $(this).val() ? $(this).val() : '';
					//x[cn].style.backgroundColor = "#93487f"; 
			}
			cn='';
			
			change_color(cn);
			unser_arr.push(cn);
			
		$("#unset_color").val(unser_arr);
		
			//x[0].innerHTML = "i want to change my cell color";
			
			//var len=unser_arr.length;
			
			 //$('#tr_'+cn).removeClass('highlighted');
			//$('#tr_'+cn).addClass('highlighted');
		//	$("#level_id").val('');
			
				   /* var payid$(this).id = ;	
			//alert(cn);
			var signedUpUsernames= new Array();
		
			 var x = document.getElementById("MyTable").getElementsByTagName("td");
			//x[0].innerHTML = "i want to change my cell color";
			x[cn-1].style.backgroundColor = "#93487f";     
		
			signedUpUsernames1.push(cn);
			
			$("#script_id").val(signedUpUsernames1);
			//alert(signedUpUsernames1);
					*/
		});
		var a1=new Array();
		var a2=new Array();
		function insert_into_script_level(id){
			//alert(id);
			var dt=$("#script_id").val();
			
			var a1=$("#level_id").val();
			var a2 = $("#level_id_update").val();

		//	var res = check.filter( function(n) { return !this.has(n) }, new Set(data) );

			
			
			$.ajax
                                            ({	
                                              url: "<?php echo base_url(); ?>"+"Create_Services/insert_service",                                             
                                              method:"POST",
                                              data: "lavel_id="+id+"&script_id="+dt+"&level_id="+$("#level_id").val()+"&level_id_update="+$("#level_id_update").val(),
											  success: function(data)  
                                                 {	//alert(data);
												 if(data ){
													
												// alert("Ok Inserted Successfully");
												 // $("#chk_"+id).prop("checked", false);
											//	 location.reload();
												
												 }
												 }
		});
			
		}
 function validate_hsn()
	{           
            var code=document.getElementById("hsn_code").value;  
            var helpemail=document.getElementById("code_verification");
            var codeformat = /^[0-9a-zA-Z]+$/;                    
                if(code=="")
				{                                                                  
                                  helpemail.style.color = 'red';
				  helpemail.innerHTML = "Please Enter  HSN code";
				  document.getElementById("button_submit").disabled = true;                                
				}
                 else           
                                {                                   
				 
				
		
			if(code!="" && code.match(codeformat))
                                         {                                            
                                            $.ajax
                                            ({	
                                              url: "<?php echo base_url(); ?>"+"Create_Hsn/check_hsn",                                             
                                              method:"POST",
                                              data: "code_data="+code,
                                              success: function(data)  
                                                 {	                                                           
                                                    if(data==0){								
                                                                    $("#code_verification").html("<span style='color:red;'>Please enter another HSN code its already in use</span>");
                                                                    document.getElementById("button_submit").disabled = true;							
                                                                 }
                                                             else{
                                                                    $("#code_verification").html("<span style='color:green;'>HSN code Valid</span>");
                                                                    document.getElementById("button_submit").disabled = false;
                                                                    }
                                                             }
                                             });
                                        }
                                        else{
                                  helpemail.style.color = 'red';
				  helpemail.innerHTML = "Please Enter Valid HSN code";
				  document.getElementById("button_submit").disabled = true; 
                                        }
                                        }
			return false;				
		}
   $("form[name='button_submit1']").submit(function(e)
            {
               
                        e.preventDefault();
                        var name=$("#hsn_code").val();
                        var hsn_dscrp=$("#hsn_decription").val();
                        var igst=$("#igst").val();
                        var cgst=$("#cgst").val(); 
                        var sgst=$("#sgst").val();		 
                        if(name == "" || hsn_dscrp == "" || igst == "" || cgst == ""|| sgst == "")
                           {
                               alert("Please insert required fields");
                               document.getElementById("button_submit").disabled = true; 
                           }
                         else {
                                   var formData = new FormData($(this)[0]);
                                   $.ajax({
                                        url: "<?php echo base_url(); ?>"+"Create_Hsn/hsn_user_data",
                                       type: "POST",
                                       data: formData,
                                       async: false,
                                       dataType:'JSON',
                                       success: function (msg)
                                                     {	
                                                        if(msg)
                                                        {	
                                                           alert("Information successfully registered")			  
                                                        //   location.reload();
                                                            window.location ="<?php echo base_url();?>"+"View_Hsn";
                                                           
                                                         }				
                                                      },
                                       cache: false,
                                       contentType: false,
                                       processData: false

                                   });
                            }
            });
</script>