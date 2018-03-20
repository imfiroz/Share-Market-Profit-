<?php
include('header.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

</style>
  <div id="page-content-wrapper">
            <div id="page-content" >
                
                   
                    

<!-- Sparklines charts -->
<script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines.js"></script>
<script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines-demo.js"></script>

<!-- Flot charts -->

<script type="text/javascript" src="assets/widgets/charts/flot/flot.js"></script>
<script type="text/javascript" src="assets/widgets/charts/flot/flot-resize.js"></script>
<script type="text/javascript" src="assets/widgets/charts/flot/flot-stack.js"></script>
<script type="text/javascript" src="assets/widgets/charts/flot/flot-pie.js"></script>
<script type="text/javascript" src="assets/widgets/charts/flot/flot-tooltip.js"></script>
<script type="text/javascript" src="assets/widgets/charts/flot/flot-demo-1.js"></script>

<!-- PieGage charts -->

<script type="text/javascript" src="assets/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="assets/widgets/charts/piegage/piegage-demo.js"></script>
<!--<script type="text/javascript" src="js/gauage_meter.js"></script>-->
<div id="page-title" style="border-bottom:1px solid #606f8d; margin-left:0px " >
   
   <h2 class="display_dash" style="margin-left:30px">Welcome</h2>
    <div id="theme-options" class="admin-options">
   
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

<div class="row" style="margin-top :15px" id="_itadmin">
   
    
    
</div>
<div class="row" style="margin-top :15px" id="">
<div class="row"> <h2  class="dash pro" >Dashboard</h2></div><br>
   <div class="col-md-4">
                    <div class="tile-box tile-box-alt bg-primary">
                        <div class="tile-header">
                            Total Customers
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-archive"></i>
                            <div class="tile-content" id="total_cust_rw">
                                <span id="total_cust_rw1"></span>
                              
                            </div>
                            
                        </div>
                        <a href="<?php echo base_url("View_Customer");?>" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
    <div class="col-md-4">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#b3483d">
                        <div class="tile-header">
                          Total Script   
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-users"></i>
                            <div class="tile-content" id="total_vendor">
                               <span id="total_vendor_span"></span>
                           
                            </div>
                           
                        </div>
                        <a href="<?php echo base_url("View_Script");?>" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
    
				    
				<div class="col-md-4" >

                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning i">
                        <div class="tile-header" style="">
                           Customer Satisfaction
                        </div>
                    <div class="tile-content-wrapper" style="padding:0px" >
                           							<!--<div class="chart-alt-10 easyPieChart" data-toggle="easypiechart" id="customer_gauge_meter" data-percent="0" style="width: 100px; height: 40px; line-height: 40px;"><span>70</span>%<canvas width="100" height="100"></canvas></div>
                        </div> style="margin-top: -10px; width: 212px; margin-left: 20px;"-->
							<div class="GaugeMeter" id="test1" 
     data-percent="60" 
     data-label="Percent" 
     >
</div>
                    </a>
					
            </div>  
      </div> 
				
</div>
<div class="row" style="margin-top :15px" id="">
<div class="col-md-4">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#3c6876"> 
                        <div class="tile-header">
                            Total Active Notification
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-user"></i>
                            <div class="tile-content" id="total_active_noti">
                               <span id="total_active"></span> 
                              
                            </div>
                           <!-- <small>
                                <i class="glyph-icon icon-caret-up"></i>
                                +7,6% new vendors in the first quarter
                            </small>-->
                        </div>
                        <a href="<?php echo base_url("View_Notification");?>" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>

 <div class="col-md-4">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#3c6876"> 
                        <div class="tile-header">
                            Total News
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-user"></i>
                            <div class="tile-content" id="total_News">
                               <span id="total_News"></span> 
                              
                            </div>
                           <!-- <small>
                                <i class="glyph-icon icon-caret-up"></i>
                                +7,6% new vendors in the first quarter
                            </small>-->
                        </div>
                        <a href="<?php echo base_url("View_Domain");?>" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div></div>
				<br>
				<hr>
				<div class="row"> <h3  class="dash pro" >Progress Bar Of Notification</h3></div><br>
				
  <div class="col-md-8 progress_bar" >
  
                           All Notifications:<span id="all_per"></span>
                     
  <div class="progress">
	
    <div class="progress-bar bg-info progress-bar-striped handle" id="all" ></div>
  </div>
  
 
                           Unread Notifications:<span id="un_per"></span>
                     
  <div class="progress">
  
    <div class="progress-bar bg-warning progress-bar-striped" id="p_0"></div>
  </div>
  
  
                             Read Notifications:<span id="rd_per"></span>
                      
  <div class="progress">

    <div class="progress-bar bg-danger progress-bar-striped" id="p_1" ></div>
  

</div>
</div>
<div class="row">
    <div class="col-md-6" style="display :none">
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Recent sales activity
                </h3>
                <div class="example-box-wrapper">
                    <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>           
       <div class="" >           
            <div  style="display:none">
                <div id="data-example-3" style="width: 100%; height: 250px;"></div>
            </div>
        </div>

    </div>
    
    <div class="col-md-3" >

        </div>
		  <div class="col-md-3" >			
       
      </div> 			
			
		
			<!--	<script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="http://www.amcharts.com/lib/3/gauge.js"></script>
<div id="chartdiv" style="width: 100%; height: 300px;"></div>-->
         
  </div>
  <hr>
  <div class="row"> <h2  class="dash pro" >Customers Feedback</h2></div><br>
             
                <div class="example-box-wrapper">
                   <!--- <div class="alert alert-success">
                        <div class="bg-green alert-icon">
                            <i class="glyph-icon icon-check"></i>
                        </div>
                        <div class="alert-content">
                         <h4 class="alert-title">name</h4>
                            <p>Information message box using the <code>.alert-success</code> color scheme. <a href="#" title="Link">Link</a></p>
                        </div>
                    </div>-->
                    <!--<div class="alert alert-info">
                        <div class="bg-black alert-icon">
                            <i class="glyph-icon icon-comment"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Info message title</h4>
                            <p>Information message box using the <code>.alert-info</code> color scheme. <a href="#" title="Link">Link</a></p>
                        </div>
                    </div>
                    <div class="alert alert-notice">
                        <div class="bg-blue alert-icon">
                            <i class="glyph-icon icon-info"></i>
                        </div>
                        <div class="alert-content">
                            <h4 class="alert-title">Notice message title</h4>
                            <p>Information message box using the <code>.alert-notice</code> color scheme. <a href="#" title="Link">Link</a></p>
                        </div>
                    </div>-->
					<div class="demo1" id="demo1">
					</div>
                   
                </div>
				<hr>
		<div class="row"> <div class="row"> <h2  class="dash pro" >Graph</h2></div><br>
				
				<div class="col-md-6">
	<div id='polynomial2_div'  ></div>
	</div>
            </div>
		
<div class="row" style="display:none;"> 
  <div class="col-md-6" id="vendor_list">
  <label style="margin-left:0px">List Of Vendors</label>
  
   <select id="list_of_vendors" class="form-control required " name="list_of_vendors" style="width:450px" >
   </select>

</div>
  <div class="col-md-6" id="city_list">
    <label style="margin-left:0px">City</label>	
 <select class="form-control" name="city" id="city" style="width:450px">     
							</select>	
  </div>
</div>

<div id="data_to_display">
<div class="row"> 
   <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary">
                        <div class="tile-header">
                           No of Customers
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                            <div class="tile-content"  id="no_of_customer">
                               <span id="no_of_customer_span"></span>                          
                               
                            </div>
                            
                        </div>
                        <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
    <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#b3483d">
                        <div class="tile-header">
                           No Of Products  
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                            <div class="tile-content"  id="no_of_product">
                              <span id="no_of_product_span"></span>       
                              
                            </div>
                           
                        </div>
                        <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
    <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#3c6876"> 
                        <div class="tile-header">
                           Total Script
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                            <div class="tile-content">
                               
                             0
                            </div>
                           
                        </div>
                        <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
				 <div class="col-md-3">
                    <!--<div class="tile-box tile-box-alt bg-primary" style="background:#8a6d3b">
                        <div class="tile-header">
                          Earnings
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                            <div class="tile-content"  id="total_earning_vendor">
                                 <span id="total_earning_span_vendor"></span>    
                              
                            </div>
                            
                        </div>
                        <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>-->
					<div class="tile-box tile-box-alt bg-primary" style="background:#8a6d3b">
                        <div class="tile-header">
                          Ratings
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                            <div class="tile-content"  id="total_rating_vendor">
                                 <span id="total_rating_span_vendor"></span>    
                              
                            </div>
                            
                        </div>
                        <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
</div>
<div class="row">
  <div class="col-md-8"> 

        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                   Vendor Data
                </h3>
                <div class="example-box-wrapper">
                    <table class="table table-bordered"  id="example">                       
                    </table>
                </div>
            </div>
        </div>
	</div>	
	
	</div>
	<div class="row">
	<div  class="col-md-7">
	<div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Bar chart
                </h3>
                <div class="example-box-wrapper">
                    <div id="example1" style="width: 100%; height: 300px;"><svg height="300" width="462" class="xchart"><g transform="translate(60,0)"><g class="scale"><g class="axis axisX" transform="translate(0,280)"><g class="tick" transform="translate(121,0)" style="opacity: 1;"><line y2="-275" x2="0"></line><text y="3" x="0" dy=".71em" style="text-anchor: middle;">Cheese</text></g><g class="tick" transform="translate(281,0)" style="opacity: 1;"><line y2="-275" x2="0"></line><text y="3" x="0" dy=".71em" style="text-anchor: middle;">Pepperoni</text></g><path class="domain" d="M20,-275V0H382V-275"></path></g><g class="axis axisY" transform="translate(0,0)"><g class="tick" transform="translate(0,275)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">3.5</text></g><g class="tick" transform="translate(0,248)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">4</text></g><g class="tick" transform="translate(0,220)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">4.5</text></g><g class="tick" transform="translate(0,193)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">5</text></g><g class="tick" transform="translate(0,165)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">5.5</text></g><g class="tick" transform="translate(0,138)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">6</text></g><g class="tick" transform="translate(0,110)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">6.5</text></g><g class="tick" transform="translate(0,82)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">7</text></g><g class="tick" transform="translate(0,55)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">7.5</text></g><g class="tick" transform="translate(0,28)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">8</text></g><g class="tick" transform="translate(0,0)" style="opacity: 1;"><line x2="402" y2="0"></line><text x="-3" dy=".32em" style="text-anchor: end;" y="0">8.5</text></g><path class="domain" d="M402,0H0V275H402"></path></g><g class="axisZero"><line x1="0" x2="402" y1="275" y2="275"></line></g></g><g data-index="2" class=" main pizza bar      color0" transform="translate(9,0)" style="opacity: 1;"><rect width="102" rx="3" ry="3" x="61" height="247" y="28"></rect><rect width="102" rx="3" ry="3" x="221" height="27" y="248"></rect></g></g></svg></div>
                </div>
            </div>
        </div>
		</div>
	<div  class="col-md-5">
	 <div class="panel-body">
                <h3 class="title-hero">
                 Customers Feedback
                </h3>
                <div class="example-box-wrapper">  
					<div id="demo2">
					</div>                
                </div>
            </div>
  </div>
	</div>
	
</div>

<div>  
<input type="hidden" class="form-control" placeholder="Enter GSTIN"value="<?php echo $role_id;?>" name="id_display" id="id_display">
            </div>
        </div>
<?php
include('footer.php');
?>
<style>
.GaugeMeter {
  position: Relative;
  text-align: right;
  overflow: Hidden;
  cursor: Default;
  display: inline-block;
   color: white;
}
.GaugeMeter SPAN, .GaugeMeter B {
//	color:#ffffff;
  width: 54%;
  position: Absolute;
  text-align: Center;
  display: Inline-Block;
  color: RGBa(0,0,0,.8);
  font-weight: 100;
  font-family: "Open Sans", Arial;
  overflow: Hidden;
  white-space: NoWrap;
  text-overflow: Ellipsis;
  margin: 0 23%;
   color: white;
}
.GaugeMeter[data-style="Semi"] B {
  width: 80%;
  margin: 0 10%;
    color: white;
}
.GaugeMeter S, .GaugeMeter U {
  text-decoration: None;
  font-size: .60em;
  font-weight: 200;
  opacity: .6;
}
.GaugeMeter B {
  color: #000;
  font-weight: 200;
  opacity: .8;
  color: white;
}
.GaugeMeterA {
  position: Relative;
  text-align: right;
  overflow: Hidden;
  cursor: Default;
  display: inline-block;
   color: white;
}
.GaugeMeterA SPAN, .GaugeMeterA B {
//	color:#ffffff;
  width: 54%;
  position: Absolute;
  text-align: Center;
  display: Inline-Block;
  color: RGBa(0,0,0,.8);
  font-weight: 100;
  font-family: "Open Sans", Arial;
  overflow: Hidden;
  white-space: NoWrap;
  text-overflow: Ellipsis;
  margin: 0 23%;
   color: white;
}
.GaugeMeterA[data-style="Semi"] B {
  width: 80%;
  margin: 0 10%;
    color: white;
}
.GaugeMeterA S, .GaugeMeterA U {
  text-decoration: None;
  font-size: .60em;
  font-weight: 200;
  opacity: .6;
}
.GaugeMeterA B {
  color: #000;
  font-weight: 200;
  opacity: .8;
  color: white;
}
.GaugeMeterB {
  position: Relative;
  text-align: right;
  overflow: Hidden;
  cursor: Default;
  display: inline-block;
   color: white;
}
.GaugeMeterB SPAN, .GaugeMeterB B {
//	color:#ffffff;
  width: 54%;
  position: Absolute;
  text-align: Center;
  display: Inline-Block;
  color: RGBa(0,0,0,.8);
  font-weight: 100;
  font-family: "Open Sans", Arial;
  overflow: Hidden;
  white-space: NoWrap;
  text-overflow: Ellipsis;
  margin: 0 23%;
   color: white;
}
.GaugeMeterB[data-style="Semi"] B {
  width: 80%;
  margin: 0 10%;
    color: white;
}
.GaugeMeterB S, .GaugeMeterB U {
  text-decoration: None;
  font-size: .60em;
  font-weight: 200;
  opacity: .6;
}
.GaugeMeterB B {
  color: #000;
  font-weight: 200;
  opacity: .8;
  color: white;
}
.abc{
	float:left;
	padding-bottom:9px;
	font-size: 15px;
	letter-spacing: 1px;
}
.abcd{
	float:right;
	font-size: 15px;
	letter-spacing: 1px;
	padding-bottom:9px;
}
</style>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/loader.js"></script>
   <script type="text/javascript">
 google.charts.load('current', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);
function drawChart () {
    $.ajax({
       	url: "<?php echo base_url(); ?>Welcome/get_client_weekly/",                                                                     
									method:"POST",
								   dataType:"json",
        success: function (jsonData) {
            var data = new google.visualization.DataTable();
            // assumes "word" is a string and "count" is a number
            data.addColumn('string', 'word');
            data.addColumn('number', 'count');

            for (var i = 0; i < jsonData.length; i++) {
                data.addRow([jsonData[i].dt,parseInt(jsonData[i].cou)]);
            }

            var options = {
                title: 'Customer Weekwise Details',
				 backgroundColor: 'transparent',
                is3D: true
            };
            var chart = new google.visualization.PieChart(document.getElementById('polynomial2_div'));
            chart.draw(data, options);
        }
    });
}
  
				
	  
   </script>
<script>
var value;
 value=document.getElementById("id_display").value;
  
		 $(document).ready(function ()   {
			 
			// alert("aa");
        $("#business_admin").hide();
		$("#_itadmin").hide();
		
		$("#data_to_display").hide();
		if(value==1){
	    $("#_itadmin").hide();
        $("#business_admin").show();	   
	       }
 if(value==2){
	   $("#_itadmin").hide();
        $("#business_admin").show();
		$("#vendor_list").hide();		   
		$("#city_list").hide();
	       }
		   if(value==5)
		   {
			$("#_itadmin").show();
        $("#business_admin").hide();
		   }
		     get_product_count();
			 get_vendor_count();
			 get_customer_count();
			 get_earnings();
			 generate_charts();
			 generate_charts_data();
			 get_News();
		generate_order_status();
		get_trending_products()
			  generate_customer_satisfaction();
			     feedback();
				 display_City();
				 get_product_count();
				 progress_bar();
			  });
			  
function   feedback(){
	//alert("sasdaa");
 value=document.getElementById("id_display").value;
			 //if(value==1){
					  $.ajax({	
							url: "<?php echo base_url(); ?>Welcome/fetch_feedback_messages/" ,                    
							method:"POST",
						dataType: 'json',							
							success: function(data)  
									{
										//alert(JSON.stringify(data));
										
var array_class=[];	 var design_class=[]; var icon=[];
array_class.push({"name":"alert alert-warning"});
array_class.push({"name":"alert alert-success"});
array_class.push({"name":"alert alert-info"});
array_class.push({"name":"alert alert-notice"});
array_class.push({"name":"alert alert-danger"});
array_class.push({"name":"alert alert-warning"});
array_class.push({"name":"alert alert-success"});
array_class.push({"name":"alert alert-info"});
array_class.push({"name":"alert alert-notice"});
array_class.push({"name":"alert alert-danger"});		
design_class.push({"name":"bg-orange alert-icon"});
design_class.push({"name":"bg-green alert-icon"});
design_class.push({"name":"bg-black alert-icon"});
design_class.push({"name":"bg-blue alert-icon"});	
design_class.push({"name":"bg-red alert-icon"});
design_class.push({"name":"bg-orange alert-icon"});
design_class.push({"name":"bg-green alert-icon"});
design_class.push({"name":"bg-black alert-icon"});
design_class.push({"name":"bg-blue alert-icon"});	
design_class.push({"name":"bg-red alert-icon"});
		


var length=data.length;

if(length<=10)
{
	for(var i=0;i<=length-1;i++)		{	
									
									var content="";
									content+="<div class='"+array_class[i].name+"'>";
									content+="<div class='"+design_class[i].name+"'>";
									content+=" <i class='glyph-icon icon-comment'></i>";
									content+="</div>";
									content+=" <div class='alert-content'>";
									content+=" <h4 class='alert-title'>"+data[i].Name+"</h4>";
									content+="<p>"+data[i].msg+"</p>";
									content+="</div>";
									content+="</div>";
									$("#demo1").append(content);
									
									}
									
									}
									
									else{ 
									
									var k=0;
										var data_upto_show=parseFloat(length)-5;
										for(var i=length-1;i>=data_upto_show;i--){	
										var content="";
										content+="<div class='"+array_class[k].name+"'>";
										content+="<div class='"+design_class[k].name+"'>";
										content+=" <i class='glyph-icon icon-comment'></i>";
										content+="</div>";
										content+=" <div class='alert-content'>";
										content+=" <h4 class='alert-title'>"+data[i].Name+"</h4>";
										content+="<p>"+data[i].msg+"</p>";
										content+="</div>";
										content+="</div>";
									$("#demo1").append(content);
									k++;
										}
									}
									}		  
							});
				//	}	
			}
			
			   function progress_bar()
	 {
		 //alert("test");
		 var u_id=$("#u_id").val();
		  $.ajax({ 
		   url: "<?php echo base_url(); ?>Welcome/fetch_progress_bar/", 
			method:"POST",
			dataType: "json",       
		   success: function(data)  
		   {
			 //  $("#all").style
			 $("#all_per").text( data.all_data+'%');
			  $("#un_per").text( data.eq_0+'%');
			   $("#rd_per").text( data.eq_1+'%');
			 document.getElementById("all").style.width =  (data.all_data/data.all_data)*100+'%';
			  document.getElementById("p_0").style.width = (data.eq_0/ data.all_data)*100+'%';

			   document.getElementById("p_1").style.width = (data.eq_1/ data.all_data)*100+'%';


		   }	
		  });	
		 
	 }
	 
			   function get_product_count(){
    value=document.getElementById("id_display").value;
	//if(value==2)
				//	{
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_total_vendor_product_count/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										  // alert(data);
										
										   var count=data;
										   
										//	 var m=document.getElementById("total_product_span").innerHTML;
										//document.getElementById("total_product_span").innerHTML ="";
                                                                               // document.getElementById("total_product_span").innerHTML ="";
                                                                             //   document.getElementById("total_vendor").innerHTML =document.getElementById("total_vendor_span").innerHTML+count ;
										//document.getElementById("total_product").innerHTML =document.getElementById("total_product_span").innerHTML+count ;                                                                           
									   }
							   });
					//} 
		
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_vendor_product_count/",                                                                     
									method:"POST",		
									success: function(data)  
									   {	
										var count=data;
										
									   }
							   });
		}                                             
   //}
   function get_trending_products(){
var total_sum=0;
$.ajax({	
        url: "<?php echo base_url(); ?>Show_Vendor/get_trending_product_total/",                                                                     
        method:"POST",
        dataType: 'json',        
        success: function(data)  
            {            
              total_sum=data;             
            }
      });
$.ajax({	
        url: "<?php echo base_url(); ?>Show_Vendor/get_trending_product/",                                                                     
        method:"POST",
        dataType: 'json',        
        success: function(data)  
            { 
             for( var i=0;i<data.length;i++){
              var percentage1=(data[i].sale/total_sum)*100;
             var content=""; 
             var width_todefine=(parseFloat(295)*parseFloat(percentage1))/100;
             var percentage=Math.round(percentage1);
             content+="<div>"+data[i].category_name+"<div  id='abc' class='progressbar' data-value="+percentage+"><div  id='abcd' class='progressbar-value bg-primary' style='width:"+width_todefine+"px'><div id='abcde' class='progress-overlay'></div><div id='abcdef' class='progress-label'>"+percentage+"%</div></div></div></div>";
                 $("#progress_bar").append(content);   
                     
                    
               //  }
               
        }
            }
      });
}
function get_product_count_refresh(){
	//alert("aa");total_product_span
	
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_vendor_product_count/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
									//	alert(data);
										var count=data;
									//	var m=document.getElementById("total_product_span").innerHTML;
										document.getElementById("total_product").innerHTML ="";
										document.getElementById("total_product").innerHTML =document.getElementById("total_product").innerHTML+count ;
								
									   }
							   });
		                                           
   }

    
    function get_vendor_count(){
    value=document.getElementById("id_display").value;
	if(value==2)
					{
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_vendor_count_for_vendor/",
									method:"POST",								
									success: function(data)  
									   {
										 //alert(data); 
										 var count=data;
										//var m=document.getElementById("total_vendor_span").innerHTML;
										document.getElementById("total_vendor_span").innerHTML ="";
										document.getElementById("total_vendor").innerHTML =document.getElementById("total_vendor_span").innerHTML+count ;                                                                           
									   }
							   });
					} 
	//if(value==1)
	//{	
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_vendor_count/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										
										var count=data;
										//var m=document.getElementById("total_vendor_span").innerHTML;
										document.getElementById("total_vendor_span").innerHTML ="";
										document.getElementById("total_vendor").innerHTML =document.getElementById("total_vendor_span").innerHTML+count ;
								
									   }
							   });
		}                                             
  // }
  function get_earnings_for_vendor(list_of_vendors){
        $.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_earnings_for_vendor/",
									method:"POST",
								//	data: "email="+list_of_vendors,									
									success: function(data)  
									   {
						//	alert(data);
										
									   }
							   });
   }
   
   

    function get_customer_count(){
    value=document.getElementById("id_display").value;
	//if(value==1)
					//{
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_customer_count11/",
									method:"POST",
									//dataType: 'json',     									
									success: function(data)  
									   {
										   //alert((data));
										var count=data;	
										document.getElementById("total_active_noti").innerHTML =count;
									//	document.getElementById("total_customer").innerHTML =document.getElementById("total_customer_span").innerHTML+count ;																	
										//document.getElementById("total_customer").innerHTML =data ;                                                                        
									   }
							   });
					//} 
//	if(value=2)
		//{	
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_cutomer/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										//alert(data);
										var count=data;
									//	var m=document.getElementById("total_customer_span").innerHTML;
									//	document.getElementById("total_customer_span").innerHTML ="";
									//	document.getElementById("total_customer").innerHTML =document.getElementById("total_customer_span").innerHTML+count ;
								document.getElementById("total_cust_rw").innerHTML =data;
									   }
							   });
		//}        
		
   }
   
          function get_News(){
	//alert("aa");
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_News/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										//alert(data);
										var count=data;
									//	var m=document.getElementById("total_product_span").innerHTML;
										document.getElementById("total_News").innerHTML =count;
								
									   }
							   });
		                                           
   }
 function   get_earnings(){
 value=document.getElementById("id_display").value;	 
 if(value==1)
					{
							$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_earnings/",
									method:"POST",								
									success: function(data)  
									   {
							
										var count= Math.round(data);										
										//var m=document.getElementById("total_earning_span").innerHTML;
										document.getElementById("total_earning_span").innerHTML ="Rs";
										document.getElementById("total_earning").innerHTML =document.getElementById("total_earning_span").innerHTML+count ;     
										
									   }
							   });
					} 
	   
else{}		
 }
  function   generate_charts(){
	  $.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_data_for_chart/",                                                                     
									method:"POST",
									 dataType: 'json',        
									success: function(data)  
	  {
		  var data_pick_pack=[];
		  var scan=[];
			var delivery=[];
		 for(var i=0;i<data.length;i++){
			 if(data[i].sale_type==1){
				 data_pick_pack.push(data[i]);
			 }
			  if(data[i].sale_type==2){
				 delivery.push(data[i]);
			 }
			  if(data[i].sale_type==3){
				 scan.push(data[i]);
			 }
		 }	
		/*alert(JSON.stringify(data_pick_pack));
		alert(JSON.stringify(delivery));	
		alert(JSON.stringify(scan));	*/
	  }
	  });
  }
   function   generate_charts_data(){
	   value=document.getElementById("id_display").value;	 
	   if(value==1){
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_info_for_chart/",                                                          
				method:"POST",	
				 dataType: 'json',        
				success: function(data)  
	  {
		  var total_amount=0;
		 for(var i=0;i<data.length;i++){
		 var m11=data[i].name;	
		total_amount=total_amount+parseFloat(data[i].sale);			 
		if(m11=="pick and packup"){
			var amount_earned=Math.round(data[i].sale);
			document.getElementById("PickPack").innerHTML =document.getElementById("PickPack").innerHTML+"Rs"+amount_earned ;
		}
		if(m11=="Cash on delivery"){
			var amount_earned=Math.round(data[i].sale);
			document.getElementById("Delivery").innerHTML =document.getElementById("Delivery").innerHTML+"Rs"+amount_earned ;
		}
		if(m11=="scan"){
			var amount_earned=Math.round(data[i].sale);
			document.getElementById("Scan").innerHTML =document.getElementById("Scan").innerHTML+"Rs"+amount_earned ;
		 }}
		 document.getElementById("Total_sales").innerHTML =document.getElementById("Total_sales").innerHTML+"Rs"+Math.round(total_amount);
		
	  }
	
	  });
   }
   
   }
function   generate_customer_satisfaction(){
	 value=document.getElementById("id_display").value;
	// if(value==1){
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_satisfaction/",                                                          
				method:"POST",	  
				dataType:"JSON",
				success: function(data)  
	  {	
	  
	  //alert(JSON.stringify(data));
	 
	  if(data[1].r2 ==0){
		   alert(data[1].r2);
	  }else{
		   //alert(data[1].r2);
	  }
	  
		var percentage=(parseFloat(data[1].r2)*100)/data[0].r1;
		//alert(percentage);
		$(".GaugeMeter").gaugeMeter();
		  $("#test1").data("percent",Math.round(percentage));
        $("#test1").empty();
        $("#test1").gaugeMeter();
		
	 
	  }
	
	  });
  // }
    //if(value==2){
	
   }
//}
function   generate_order_status(){
	 value=document.getElementById("id_display").value;
	  var count_for_new,count_for_pending,count_for_confir,count_cancel,count_for_deliver;
	 if(value==1){
		
		   $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_new/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
	 count_for_new=data;
	  document.getElementById("new_orders").innerHTML =document.getElementById("new_orders").innerHTML+count_for_new;
	  }
	 });
	   $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_pending/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	   
	 count_for_pending=data;
	  document.getElementById("pending_orders").innerHTML =document.getElementById("pending_orders").innerHTML+count_for_pending;
	  }
	 });
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_confirm/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
	 count_for_confir=data;
	  document.getElementById("Confirm").innerHTML =document.getElementById("Confirm").innerHTML+count_for_confir;
	  }
	 });
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_cancel/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
	 count_cancel=data;
	  document.getElementById("Cancelled").innerHTML =document.getElementById("Cancelled").innerHTML+count_cancel;
	  }
	 });
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_delivered/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
	 count_for_deliver=data;
	  document.getElementById("Delivered").innerHTML =document.getElementById("Delivered").innerHTML+count_for_deliver;
	  }
	 });
	
	
	 
}
 if(value==2){
		
		   $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_new_vendor/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
	 count_for_new=data;
	  document.getElementById("new_orders").innerHTML =document.getElementById("new_orders").innerHTML+count_for_new;
	  }
	 });
	   $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_pending_vendor/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	   
	 count_for_pending=data;
	  document.getElementById("pending_orders").innerHTML =document.getElementById("pending_orders").innerHTML+count_for_pending;
	  }
	 });
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_confirm_vendor/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
	 count_for_confir=data;
	  document.getElementById("Confirm").innerHTML =document.getElementById("Confirm").innerHTML+count_for_confir;
	  }
	 });
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_cancel_vendor/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
	 count_cancel=data;
	  document.getElementById("Cancelled").innerHTML =document.getElementById("Cancelled").innerHTML+count_cancel;
	  }
	 });
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_count_for_delivered_vendor/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
	 count_for_deliver=data;
	  document.getElementById("Delivered").innerHTML =document.getElementById("Delivered").innerHTML+count_for_deliver;
	  }
	 });
	
	
	 
}
}
			 function display_City()
        {
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Welcome/get_state_data",
                    dataType: 'json',                                   
                    success: function (data)
                      { 
					  //alert(JSON.stringify(data));
                        $("<option />").val("0")
                                    .text("Select City")
                                    .appendTo($('select#city'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].id)
                                              .text(data[i].name)
                                              .appendTo($('select#city'));
                            }

                      }

                });
        }
		 $('#city').on('change',function()
        {
			 var city = $(this).val();
			 if(city){
            $.ajax({
               type:'POST',
               url: "<?php echo base_url(); ?>"+"Welcome/get_vendors",
               data:'city='+city,
                dataType: 'json',        
                success:function(res)
                   {
					  // alert(JSON.stringify(res));
                     if(res)
                     {    
                $("#list_of_vendors").empty();
                $("#list_of_vendors").append('<option>Select</option>');
                        for(var i=0;i<res.length;i++)
                         { 						
                             $("#list_of_vendors").append('<option value="'+(res[i].Vendor_Id)+'">'+(res[i].Name)+'</option>');
                         }              
                     }
                 else
                    {
                        $("#list_of_vendors").empty();
                    }				
                   }
            }); 
        }
		});
		var value_to_refresh;
		 $('#list_of_vendors').on('change',function()
        {
		var list_of_vendors = $(this).val();
		value_to_refresh=list_of_vendors;
		if(list_of_vendors){		
		$("#data_to_display").show();
		get_count_customers1(list_of_vendors);
		get_products_of_vendor(list_of_vendors);
		//get_earnings_for_vendor(list_of_vendors);
		get_product_info(list_of_vendors);
		generate_vendor_order_details(list_of_vendors);
		 feedback_of_vendor(list_of_vendors);
		 generate_customer_satisfaction_of_vendor(list_of_vendors);
		}
		});
		 function get_count_customers1(list_of_vendors){
			//
        $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_customer_count12/",                                                                     
				method:"POST",
			   data: "email="+list_of_vendors,
				success: function(data)  
				   {
					   //alert(data);
					   var m=data;
					    document.getElementById("no_of_customer").innerHTML="";
						document.getElementById("no_of_customer").innerHTML =document.getElementById("no_of_customer").innerHTML +m ;						   
				   }
		   });
   }
    function get_products_of_vendor(list_of_vendors){
  //  alert("dd");
        $.ajax({	
                                                                    url: "<?php echo base_url(); ?>Welcome/get_products_of_vendor/",                                                                     
                                                                    method:"POST",
                                                                   data: "email="+list_of_vendors,
                                                                    success: function(data)  
                                                                       {
                                                                           var m=data;
																		     document.getElementById("no_of_product").innerHTML="";
																		   document.getElementById("no_of_product").innerHTML =document.getElementById("no_of_product").innerHTML+m ;
                                                                        
                                                                        
                                                                   }
                                                               });
   }
    
    function get_product_info(list_of_vendors){
		
		 $.ajax({	
									url: "<?php echo base_url(); ?>Welcome/fetch_product_details_vendor/",
									method:"POST",
									dataType: 'json',
									data: "email="+list_of_vendors,									
									success: function(data)  
									   {
												var len=data.length;
												var content = "";
												var user_array = data;
										   content +="<thead><tr> <th>Sr No.</th><th>Product Name</th><th >HsnCode</th><th>Price</th><th>Action</th>";
										    content += '</tr></thead><tbody>';
											for (i = 0; i < user_array.length; i++)
											{
												  content += "<tr>" ;
												   content +=  "<td class='center black_font' >" + (i+1) + "</td>" +
												   "<td class='center black_font' contenteditable='true' style='width: 357px;' id='"+user_array[i].product_version_id+"_0'>" + user_array[i].product_version_name + "</td>" +
													"<td class='center black_font' contenteditable='true' id='"+user_array[i].product_version_id+"_1'>" + user_array[i].Hsn_code + "</td>" +
													"<td class='center black_font' contenteditable='true' id='"+user_array[i].product_version_id+"_2'>" + user_array[i].final_price_of_product + "</td>" +	
													"<td class='center black_font'><button class='btn btn-danger' id='delete'onclick='edit_products_version(" + data[i].product_version_id + ")' style='width: 2px;'><span class='glyphicon glyphicon-edit' style='margin-left:-2px'></span></button><button class='btn btn-primary' id='delete' onclick='delete_product(" + data[i].product_version_id + ")'><span class='glyphicon glyphicon-trash'  style='width: 2px; margin-left:-12px; '></span></button></td>" +														
													"</tr>";  													  
											}
											 content += '</tbody>';
													     $('#example').html(content);
														  
									   }
		 });
	}
		var Remaining;
	function generate_vendor_order_details(list_of_vendors)
	{
		 $('[name="notify_vendor"]').val(list_of_vendors);
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_satisfaction_of_vendor/",                                                          
				method:"POST",
				data: "email="+list_of_vendors,	
				dataType:'json',				
				success: function(data)  
	  {	

	 
 var total=(data.total);
 
  var delivered=data.delivered;
		var percentage=(parseFloat(delivered)*100)/parseFloat(total);
	 Remaining=(100-parseFloat(percentage));
		$(".GaugeMeterA").gaugeMeter();
		  $("#test2").data("percent",Math.round(percentage));
        $("#test2").empty();
        $("#test2").gaugeMeter();
		$(".GaugeMeterB").gaugeMeter();
		  $("#test3").data("percent",Math.round(Remaining));
        $("#test3").empty();
        $("#test3").gaugeMeter();	
var order_remaining =	parseFloat(total)-parseFloat(delivered); if(order_remaining<=1){
document.getElementById("get_data_of_pending_orders").innerHTML =order_remaining+"  Order Remaining";
}
else{
	document.getElementById("get_data_of_pending_orders").innerHTML =order_remaining+"  Orders Remaining";
}
	  }
	
	  });
	
	}
 function 	feedback_of_vendor(list_of_vendors){
	 $("#demo2").empty();
	 $.ajax({	
							url: "<?php echo base_url(); ?>Welcome/fetch_feedback_messages_of_vendor/" ,                    
							method:"POST",
							dataType: 'json',
							data: "email="+list_of_vendors,								
							success: function(data)  
									{
										if(data==""){
											var content="";
									content+="<div class='alert alert-warning'>";
									content+="<div class='bg-orange alert-icon'>";
									content+=" <i class='glyph-icon icon-comment'></i>";
									content+="</div>";
									content+=" <div class='alert-content'>";
										content+=" <h4 class='alert-title'>----</h4>";
										content+="<p>No Messages</p>";
										content+="</div>";
										content+="</div>";
										$("#demo2").append(content);
										}
var array_class=[];	 var design_class=[]; var icon=[];
array_class.push({"name":"alert alert-warning"});
array_class.push({"name":"alert alert-success"});
array_class.push({"name":"alert alert-info"});
array_class.push({"name":"alert alert-notice"});
array_class.push({"name":"alert alert-danger"});
array_class.push({"name":"alert alert-warning"});
array_class.push({"name":"alert alert-success"});
array_class.push({"name":"alert alert-info"});
array_class.push({"name":"alert alert-notice"});
array_class.push({"name":"alert alert-danger"});		
design_class.push({"name":"bg-orange alert-icon"});
design_class.push({"name":"bg-green alert-icon"});
design_class.push({"name":"bg-black alert-icon"});
design_class.push({"name":"bg-blue alert-icon"});	
design_class.push({"name":"bg-red alert-icon"});
design_class.push({"name":"bg-orange alert-icon"});
design_class.push({"name":"bg-green alert-icon"});
design_class.push({"name":"bg-black alert-icon"});
design_class.push({"name":"bg-blue alert-icon"});	
design_class.push({"name":"bg-red alert-icon"});
		


var length=data.length;

if(length<=10)
{
	for(var i=0;i<=length-1;i++)		{	
									
									var content="";
									content+="<div class='"+array_class[i].name+"'>";
									content+="<div class='"+design_class[i].name+"'>";
									content+=" <i class='glyph-icon icon-comment'></i>";
									content+="</div>";
									content+=" <div class='alert-content'>";
									content+=" <h4 class='alert-title'>"+data[i].Name+"</h4>";
									content+="<p>"+data[i].msg+"</p>";
									content+="</div>";
									content+="</div>";
									$("#demo2").append(content);
									
									
									}
									
									}
									
									else{ 
									
									var k=0;
										var data_upto_show=parseFloat(length)-5;
										for(var i=length-1;i>=data_upto_show;i--){	
										var content="";
										content+="<div class='"+array_class[k].name+"'>";
										content+="<div class='"+design_class[k].name+"'>";
										content+=" <i class='glyph-icon icon-comment'></i>";
										content+="</div>";
										content+=" <div class='alert-content'>";
										content+=" <h4 class='alert-title'>"+data[i].Name+"</h4>";
										content+="<p>"+data[i].msg+"</p>";
										content+="</div>";
										content+="</div>";
									$("#demo2").append(content);
									k++;
										}
									}
									}		  
							});
 }
 function   generate_customer_satisfaction_of_vendor(list_of_vendors){
	// value=document.getElementById("id_display").value;
	// if(value==1){
	  $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_rating_of_vendor/",                                                          
				method:"POST",
				data: "email="+list_of_vendors,					
				success: function(data)  
	  {	
	  if(data==""||data==null){
		  data=0;
	  }
	  document.getElementById("total_rating_vendor").innerHTML="";
	  document.getElementById("total_rating_vendor").innerHTML =document.getElementById("total_rating_vendor").innerHTML+data;		 
	  }
	
	  });
   //}
}
  function edit_products_version(id) {
 var name=document.getElementById (id+"_0").innerText;
  var hsn=document.getElementById (id+"_1").innerText;
   var amount=document.getElementById (id+"_2").innerText;


                                                var str = "txt_product_name=" + name + "&hsn=" + hsn + "&amount=" + amount;
                                       
                                                $.ajax({
                                                    url: "<?php echo base_url(); ?>Welcome/save_update_product/" +id,
                                                    method: "POST",
                                                    data: str,
                                                    

                                                    success: function (data)
                                                    {
														//alert(data);
                                                       alert("data updated successfully");
											 get_product_info(value_to_refresh);
                                                    }});

                                            }
				 function delete_product(id)
                                   {
                                    var id = id;

                                            $.ajax
                                            ({
                                                 url: "<?php echo site_url('Welcome/ajax_delete_product/') ?>" + id,
                                                 type: "POST",
                                                 dataType: "JSON",
                                                 success: function (data)
                                                       {
                                                         alert("Successfully deleted");                                         
                                                          get_product_info(value_to_refresh);
														  get_products_of_vendor(value_to_refresh);
														 // get_product_count_refresh();
                                                       }	    
                                             });
                                              
                                   } 
</script> 
                        
                 <style>
				 hr{
	border-top: 1px solid #e5e8ec;
}
				 </style>          
                       
                            
                        
                       
                           
                           