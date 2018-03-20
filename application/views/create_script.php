 <?php
include('header.php');
?>
 <script src="<?php echo base_url(); ?>assets/js/validate.js"></script>        
                    

 <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
<div id="page-title">
    <h2>Create Script</h2> 
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
						   FILL SCRIPT DETAILS
						</h3>
                                            <h4>Fields marked with * are mandatory</h4>
						<div class="example-box-wrapper">
							<form class="form-horizontal bordered-row"  id="button_submit" name="button_submit" method="post">
                                                             <div class="form-group">
									<label class="col-sm-3 control-label">Trading Type*</label>
										<div class="col-sm-6">
											<select class="form-control" name="trading_type" id="trading_type">     
											</select>
										</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label"> Name*</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="txt_branch_name" name="txt_branch_name" placeholder="Enter Script..." >
                                                                                  <div id="verify_script_name"></div>
									</div>
								</div>
                                                           
                                                              <div class="form-group">
									<label class="col-sm-3 control-label">Transaction Type*</label>
										<div class="col-sm-6">
											<select class="form-control" name="transaction_type" id="transaction_type">     
											</select>
										</div>
								</div>
                                                            <div class="form-group">
									<label class="col-sm-3 control-label"> Entry Price*</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="txt_price" name="txt_price" placeholder="Enter EntryPrice..." onkeypress="return onlyNumbersWithdecimel(event);" >
                                                                                  
									</div>
								</div>
                                                             <div class="form-group">
									<label class="col-sm-3 control-label"> Target1*</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="Target1" name="Target1" placeholder="Enter Target..." onkeypress="return onlyNumbersWithdecimel(event);" >
                                                                                  
									</div>
								</div>
                                                            <div class="form-group">
									<label class="col-sm-3 control-label"> Target2*</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="Target2" name="Target2" placeholder="Enter Target..." onkeypress="return onlyNumbersWithdecimel(event);" >
                                                                                 
									</div>
								</div>
                                                            <div class="form-group">
									<label class="col-sm-3 control-label"> Stop Loss*</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" id="Toploss" name="Toploss" placeholder="Enter Toploss..." onkeypress="return onlyNumbersWithdecimel(event);"  >
                                                                                 
									</div>
								</div>
                                                             <div class="form-group">
									<label class="col-sm-3 control-label"> Comment</label>
									<div class="col-sm-6">
										<textarea class="form-control" id="Comment" name="Comment"></textarea>
                                                                                 
									</div>
								</div>
                                    
                                                            
									 <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px" type="submit" id="submit_form">
										<span>Submit</span>
											<i class="glyph-icon icon-arrow-right"></i>
									</button>
									<!--<input class="btn btn-default" type="submit" value="Submit" style="margin-left:450px">-->
								
							</form>
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
  $(document).ready(function (){
    trade_type();
     buy_type();
  });
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
   function validate_script_name()
	{  var value_trad_typ=$("#trading_type").val();
          
            if(value_trad_typ==0){
               alert("please choose Trade type");
              document.getElementById("submit_form").disabled = true;   
            }
                else{
            document.getElementById("submit_form").disabled = false;   
            var code=document.getElementById("txt_branch_name").value;  
            var helpemail=document.getElementById("verify_script_name");
            var codeformat = /^[a-zA-Z\s]+$/;                    
                if(code=="")
				{                                                                  
                                  helpemail.style.color = 'red';
				  helpemail.innerHTML = "Please Enter  Name";
				  document.getElementById("submit_form").disabled = true;                                
				}
                 else           
                                {                                   
				 
				
		
			if(code!="" && code.match(codeformat))
                                         {                                            
                                            $.ajax
                                            ({	
                                              url: "<?php echo base_url(); ?>"+"Create_Script/check_script",                                             
                                              method:"POST",
                                              data: "code_data="+code+"&value_trad_typ="+value_trad_typ,
                                              success: function(data)  
                                                 {	                                                           
                                                    if(data==0){								
                                                                    $("#verify_script_name").html("<span style='color:red;'>Please enter another Name its already in use</span>");
                                                                    document.getElementById("submit_form").disabled = true;							
                                                                 }
                                                             else{
                                                                    $("#verify_script_name").html("<span style='color:green;'>Name Valid</span>");
                                                                    document.getElementById("submit_form").disabled = false;
                                                                    }
                                                             }
                                             });
                                        }
                                        else{
                                  helpemail.style.color = 'red';
				  helpemail.innerHTML = "Please Enter Valid Name code";
				  document.getElementById("submit_form").disabled = true; 
                                        }
                                        }
			return false;				
		}
                }
    function trade_type(){
         {
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_Script/get_data_to_show",
                    dataType: 'json',                                   
                    success: function (data)
                      {
                          if(data){
			 $("#trading_type").empty();		  //alert(JSON.stringify(data));
                        $("<option />").val("0")
                                    .text("Select Trading type")
                                    .appendTo($('select#trading_type'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].master_id)
                                              .text(data[i].Name)
                                              .appendTo($('select#trading_type'));
                            }
                         //   $("#filter_data_customers").show();
                        } 
                      }

                });
        }
   }
    function buy_type(){
         {
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Create_Script/get_data_to_buy",
                    dataType: 'json',                                   
                    success: function (data)
                      {
                          if(data){
			 $("#transaction_type").empty();		  //alert(JSON.stringify(data));
                        $("<option />").val("0")
                                    .text("Select Transaction type")
                                    .appendTo($('select#transaction_type'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].transaction_id)
                                              .text(data[i].name)
                                              .appendTo($('select#transaction_type'));
                            }
                         //   $("#filter_data_customers").show();
                        } 
                      }

                });
        }
   }
$("form[name='button_submit']").submit(function(e) {

		 e.preventDefault();
            var name=$("#txt_branch_name").val();
            var txt_price=$("#txt_price").val();
            var Target1=$("#Target1").val(); 
              var Target2=$("#Target2").val(); 
                var Toploss=$("#Toploss").val(); 
                  var trading_type=$("#trading_type").val(); 
                    var transaction_type=$("#transaction_type").val(); 
if(name == "" || txt_price == "" || Target1 == "" || Target2 == "" || Toploss == "" || trading_type == "0" || transaction_type == "0")
                    {
                        alert("Please insert required fields");
                      //  document.getElementById("submit_form").disabled = true;
                    }
else{
      var trading_type=$("#trading_type").val(); 
             
        $.ajax({	
				url: "<?php echo base_url(); ?>Create_Script/get_count/",                                                                     
				method:"POST",
                                data: "email="+trading_type,
                                dataType:'JSON',
				success: function(data)  
				   {
                       var count=JSON.parse(data);
				
                                 if(count>=3){                                     
         alert("You can't add more script against these trading type,as already limit reached");
     }
    else
     { 
         
    // document.getElementById("submit_form").disabled = false;
      var formData = new FormData(document.querySelector('form'))
        $.ajax({
             url: "<?php echo base_url(); ?>"+"Create_Script/level_save_data",
            type: "POST",
            data: formData,
            async: false,
           // dataType:'JSON',
            success: function (msg) {
				
           //   alert(JSON.stringify(msg));
      
		  if(msg==1){
				  alert("Information Loaded Successfully");
				//url=msg.redirect_path;
				   window.location ="<?php echo base_url();?>"+"View_Script";
				//window.location.reload=url;
			  }
				
            },
            cache: false,
            contentType: false,
            processData: false
        });
        }
				   }
		   });
    
}
        //e.preventDefault();
    });
    
</script>
<style>
     input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 95px;
  border: 2px solid black;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #000;
  border: 1px solid red;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
.thumb {
    width: 50px;
    height: 50px;
    margin: 0.2em -0.7em 0 0;
}
.remove_img_preview {
    position:relative;
    top:-25px;
    right:5px;
    background:black;
    color:white;
    border-radius:50px;
    font-size:0.9em;
    padding: 0 0.3em 0;
    text-align:center;
    cursor:pointer;
}
.remove_img_preview:before {
    content:"×";
}
     </style>