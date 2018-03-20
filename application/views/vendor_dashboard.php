<?php
include('header.php');
?>
<style>
.row{
	margin:0px;
	font-family: sans-serif !important;
	margin-top:20px !important;
}
.display_dash{
	margin-left:30px;
	font-family: sans-serif !important;
	margin-top:2px !important;
	text-transform: lowercase !important;

}
.dash{
	margin-left:15px !important;
	font-family: sans-serif !important;
}
</style>
  <div id="page-content-wrapper">
            <div id="page-content" style="border-right:1px solid red">
                
                    <div class="container">
                    

<!-- Sparklines charts -->

<!-- Flot charts 

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
<div id="page-title" style="border-bottom:1px solid red; margin-left:0px " >
    <h2  class="dash">Dashboard</h2>
   <h2 class="display_dash" style="margin-left:30px">Welcome</h2>
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

<div class="row" style="margin-top :15px" id="_itadmin">
     <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#b3483d">
                        <div class="tile-header">
                           Total Vendors
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                            <div class="tile-content">
                                <span>$</span>
                                378
                            </div>
                            <small>
                                <i class="glyph-icon icon-caret-up"></i>
                                +7,6% new users in the first quarter
                            </small>
                        </div>
                        <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
   <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary">
                        <div class="tile-header" >
                            Total Products
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                           <div class="tile-content">
                                <span>$</span>
                                378
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
                            New Visitors
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                            <div class="tile-content">
                                <span>$</span>
                                378
                            </div>
                            <small>
                                <i class="glyph-icon icon-caret-up"></i>
                                +7,6% new users in the first quarter
                            </small>
                        </div>
                        <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
				 <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#8a6d3b">
                        <div class="tile-header">
                            New Visitors
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-dashboard"></i>
                            <div class="tile-content">
                                <span>$</span>
                                378
                            </div>
                            <small>
                                <i class="glyph-icon icon-caret-up"></i>
                                +7,6% new users in the first quarter
                            </small>
                        </div>
                        <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
                            view details
                            <i class="glyph-icon icon-arrow-right"></i>
                        </a>
                    </div>
                </div>
</div>
<div class="row" style="margin-top :15px" id="business_admin">
     <div class="col-md-3">
         
          
                    <div class="tile-box tile-box-alt bg-primary" style="background:#b3483d">
                        <div class="tile-header">
                    No of Vendors   
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-users"></i>
                            <div class="tile-content" id="total_vendor">
                              
                           
                            </div>
                           
                        </div>
                       <div id="show_icon"></div>
                    </div>
                   </div>
		
               
   <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary">
                        <div class="tile-header">
                            Total Products
                        </div>
                        <div class="tile-content-wrapper">
                            <i class="glyph-icon icon-archive" style="height:30px"></i>
                            <div class="tile-content" id="total_product">
							<span id="total_product_span"></span>
                              
                            </div>
                            <div style="height:7px">                                                              
                            </div>
                        </div>
                       
                    </div>
                </div>
   
    <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#3c6876"> 
                        <div class="tile-header">
                            Today Earnings
                        </div>
                        <div class="tile-content-wrapper">
                             <i class="glyph-icon icon-rupee"></i>
                            <div class="tile-content" id="cust_tot">
                               <span id="cust_tot_span"></span> 
                              
                            </div>                       
                        </div>
                        <div id="show_icon_daily" style="height: 7px;">                                                              
                            </div>
                    </div>
                </div>
				 <div class="col-md-3">
                    <div class="tile-box tile-box-alt bg-primary" style="background:#8a6d3b">
                        <div class="tile-header">
                          Today Sales
                        </div>
                        <div class="tile-content-wrapper">
                             <i class="glyph-icon icon-shopping-cart" style="font-size: 57px;"></i>
                          
                            <div class="tile-content" id="total_sales">
                              <!--  <span id="total_earning_span">Rs</span>-->
                           
                            </div>
                          <!--  <small>
                                <i class="glyph-icon icon-caret-up"></i>
                                
                            </small>-->
                        </div>
                         <div id="show_icon_daily_sales">                                                              
                            </div>
                        
                    </div>
                </div>
</div>
<div class="row">
    <div class="col-md-6" style="">
       <div class="col-md-12" style="margin-left:-10px" >
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning i">
                        <div class="tile-header" style="border-color: #6e3375;">
                          Earnings
                        </div>
                  
                    <div class="tile-content-wrapper" style="padding:0px; background:#570f61; height: 182px;" >
                       <div class="col-md-4">							
			<div class="GaugeMeter" id="test1"  data-percent="60" data-label="Percent" style="margin-top: 23px;" >
                                                           
                                      </div>
                      <p style="    margin-bottom: 4px;">pick&pack</p>
                      
                       </div>
                        <div class="col-md-4">
                        <div class="GaugeMeterA" id="test2"  data-percent="60" data-label="Percent" style="margin-top: 23px;" >
                                                        </div>
                             <p style=" margin-bottom: 4px;">Delivery</p>
                    
                 </div>
                        <div class="col-md-4">
                        <div class="GaugeMeterB" id="test3"  data-percent="60" data-label="Percent" style="margin-top: 23px;" >
                                                        </div>
                            <p style="margin-bottom: 4px;">Scan</p>
                   
                   </div>
                    </a>
					
            </div>  
      </div> 

    </div>
    <div class="col-md-3" >
	 <div class="col-md-12" >
       <div class="tile-box tile-box-alt bg-green"  >
                        <div class="tile-header" style="background: #735559;">
                           Graph Statistics
                        </div>
                        <div class="tile-content-wrapper" style="background: #4d3e40;">

                            <div class="tile-content" style="height:20px font-size-15px" >
							<h1 style=" text-decoration: underline; letter-spacing: 2px;">Total Sales </h1>
								<div id="Total_sales" style="height-20px"></div>
								<h1 style=" text-decoration: underline; letter-spacing: 2px;">Sales By PickPack </h1>
								<div id="PickPack" style="height-20px"></div>
								<h1 style=" text-decoration: underline; letter-spacing: 2px;">Sales By Scan</h1>
								<div  id="Scan" style="height-20px"></div>
								<h1 style=" text-decoration: underline; letter-spacing: 2px;">Sales By Delivery</h1>
								<div  id="Delivery" style="height-20px"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>
		  <div class="col-md-3" >			
            <div class="col-md-12" >
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning i" style=" background:#535d54; border-color: #4c544d;">
                        <div class="tile-header" style="">
                           Customer Satisfaction
                        </div>
                    <div class="tile-content-wrapper" style="padding:0px;" >
                           							<!--<div class="chart-alt-10 easyPieChart" data-toggle="easypiechart" id="customer_gauge_meter" data-percent="0" style="width: 100px; height: 40px; line-height: 40px;"><span>70</span>%<canvas width="100" height="100"></canvas></div>
                        </div> style="margin-top: -10px; width: 212px; margin-left: 20px;"-->
							<div class="GaugeMeterC" id="test4" style=" margin-top: 35px;"
     data-percent="60" 
     data-label="Percent" 
     >
</div>
                    </a>
					
            </div>  
      </div> 
  </div>				
  


</div>
<div class="row">
   <div class="example-box-wrapper">
                   
                     <div class="col-md-4" >
                    <div class="panel-body" style="border: 4px solid black; background-color: #560705d4; color: #dfe8f1;">
                <h3 class="title-hero">
                   Trending Product By Categories
                </h3>
               <!--<div class="progressbar" data-value="70">
                        <div class="progressbar-value bg-primary" style="width: 287.06px;">
                            <div class="progress-overlay"></div>
                            <div class="progress-label">62%</div>
                        </div>
                    </div>-->
               <div id="progress_bar"></div>
                  </div>
                   </div>
       <div  class="col-md-8">
	 <div class="panel-body">
                <h3 class="title-hero">
                 Customers Comments
                </h3>
                <div class="example-box-wrapper">  
					<div id="demo2">
					</div>                
                </div>
            </div>
  </div>
                </div>
    </div>
<div class="row">
   <div class="col-md-6" id="vendor_list">
  <label style="margin-left:0px">List Of Vendors</label>
  
   <select id="Vendor_list" class="form-control required " name="Vendor_list" style="width:450px" >
   </select>

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
.GaugeMeterC {
  position: Relative;
  text-align: right;
  overflow: Hidden;
  cursor: Default;
  display: inline-block;
   color: white;
}
.GaugeMeterC SPAN, .GaugeMeterC B {
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
.GaugeMeterC[data-style="Semi"] B {
  width: 80%;
  margin: 0 10%;
    color: white;
}
.GaugeMeterC S, .GaugeMeterC U {
  text-decoration: None;
  font-size: .60em;
  font-weight: 200;
  opacity: .6;
}
.GaugeMeterC B {
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
<script>
var value;
 value=document.getElementById("id_display").value;
  
		 $(document).ready(function ()   {
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
	       }
		   if(value==5)
		   {
			$("#_itadmin").show();
        $("#business_admin").hide();
		   }
                    get_vendor_count();
		     get_product_count();			
                     get_earning_count();
                     get_sales();
                     generate_customer_satisfaction();
                      generate_charts_data();
                      get_trending_products();
                      feedback_all();	
                      display_vendors();
			  });
                          function get_vendor_count(){
    
    var d = new Date();
 var    month = d.getMonth();
   var previous_month=parseFloat(month)-1;
  var   year = d.getFullYear();
    
    value=document.getElementById("id_display").value;
	if(value==2)
					{
                                            $.ajax({	
                                                                    url: "<?php echo base_url(); ?>Show_Vendor/get_vendor_count_for_vendor/",
                                                                    method:"POST",	
                                                                    data: "month="+month+"&year="+year+"&previous_month="+previous_month,		
                                                                    success: function(data)  
                                                                       {
                                                                             //alert(data); 
                                                                            // var count=data;
                                                                            //var m=document.getElementById("total_vendor_span").innerHTML;
                                                                            //document.getElementById("total_vendor_span").innerHTML ="";
                                                                            //document.getElementById("total_vendor").innerHTML =document.getElementById("total_vendor_span").innerHTML+count ;                                                                           
                                                                       }
                                                       });
					} 
	if(value==1)
		{

            $.ajax({	
                                    url: "<?php echo base_url(); ?>Show_Vendor/get_vendor_count_for_vendor/",                                                                     
                                    method:"POST",
                                    data:"month="+month+"&year="+year+"&previous_month="+previous_month,
                                    dataType: 'json',
                                    success: function(data)  
                                       {
                                          //  alert(JSON.stringify(data));
                                            var count=JSON.parse(data.recent);

                                            document.getElementById("total_vendor").innerHTML =document.getElementById("total_vendor").innerHTML+count ;
                                            var previous=JSON.parse(data.previous);


                                            //alert(previous);
                                            //alert(previous);
                                           if(count>previous)
                                           {
                                            var extra=parseFloat(count)-parseFloat(previous);
                                            var get_percentage=(parseFloat(extra)*100)/parseFloat(count);    
                                            var content="";
                                            content+="<div style='margin-left: 115px;'>";
                                            content+=" <i class='glyph-icon icon-caret-up' style='margin-left:-200px'></i>";
                                            content+=""+get_percentage+"% up from last month</div>";
                                            $("#show_icon").append(content);
                                           }   
                                           if(count<previous)
                                           {
                                            var extra=parseFloat(previous)-parseFloat(count);
                                            var get_percentage=(parseFloat(extra)*100)/parseFloat(previous);    
                                            var content="";
                                            content+="<div style='margin-left: 115px;'>";
                                            content+=" <i class='glyph-icon icon-sort-down' style='margin-left:-200px'></i>";
                                            content+=""+get_percentage+"% down from last month</div>";
                                            $("#show_icon").append(content);
                                           }       

                                       }
                       });
		}                                             
   }
			   function get_product_count(){
    value=document.getElementById("id_display").value;
	if(value==2)
					{
						$.ajax({	
									url: "<?php echo base_url(); ?>Show_Vendor/get_total_vendor_product_count/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										
										   var count=data;
										   
										
										document.getElementById("total_product").innerHTML =document.getElementById("total_product").innerHTML+count ;                                                                           
									   }
							   });
					} 
	if(value==1)
		{	
               
						$.ajax({	
									url: "<?php echo base_url(); ?>Show_Vendor/get_vendor_product_count/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										
										var count=data;
									//	var m=document.getElementById("total_product_span").innerHTML;
										//document.getElementById("total_product_span").innerHTML ="";
										document.getElementById("total_product").innerHTML =document.getElementById("total_product").innerHTML+count ;
								
									   }
							   });
		}                                             
   }
function get_product_count_refresh(){
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_vendor_product_count/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										//alert(data);
										var count=data;
									//	var m=document.getElementById("total_product_span").innerHTML;
										document.getElementById("total_product").innerHTML ="";
										document.getElementById("total_product").innerHTML =document.getElementById("total_product").innerHTML+count ;
								
									   }
							   });
		                                           
   }
    
    function get_earning_count(){
    //alert("dd");
    var today = new Date();
    var dd = today.getDate();
    var p_date=parseFloat(dd)-1;
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    value=document.getElementById("id_display").value;
	if(value==1)
					{
						$.ajax({	
									url: "<?php echo base_url(); ?>Show_Vendor/earnings_of_daily/",
									method:"POST",
                                                                         data:"today="+dd+"&month="+mm+"&year="+yyyy+"&p_date="+p_date,                                                                      
									dataType: 'json',     									
									success: function(data)  
									   {                                                                              
                                                                              var recent1=JSON.parse(data.recent); 
                                                                              var recent=Math.ceil(recent1);
                                                                              var previous=JSON.parse(data.previous);
                                                                              document.getElementById("cust_tot").innerHTML =document.getElementById("cust_tot").innerHTML+"Rs  "+recent ;
                                                                                if(recent>previous)
                                                                               {
                                                                                var extra=parseFloat(recent)-parseFloat(previous);
                                                                               var get_percentage1=(parseFloat(extra)*100)/parseFloat(recent);
                                                                               var get_percentage=Math.ceil(get_percentage1);
                                                                               var content="";
                                                                                content+="<div style='margin-left: 115px;'>";
                                                                                content+=" <i class='glyph-icon icon-caret-up' style='margin-left:-200px'></i>";
                                                                                content+=""+get_percentage+"% up from yesterday</div>";
                                                                               // $("#show_icon_daily").append(content);
                                                                               } 
                                                                                if(recent<previous)
                                                                               {
                                                                                var extra=parseFloat(previous)-parseFloat(recent);
                                                                                var get_percentage1=(parseFloat(extra)*100)/parseFloat(previous); 
                                                                                var get_percentage=Math.ceil(get_percentage1);
                                                                                var content="";
                                                                                content+="<div style='margin-left: 115px;'>";
                                                                                content+=" <i class='glyph-icon icon-sort-down' style='margin-left:-200px'></i>";
                                                                                content+=""+get_percentage+"% down from yesterday</div>";
                                                                              //  $("#show_icon_daily").append(content);
                                                                               }     
										//var count=data;	
										//document.getElementById("cust_tot").innerHTML =count;
									//	document.getElementById("total_customer").innerHTML =document.getElementById("total_customer_span").innerHTML+count ;																	
										//document.getElementById("total_customer").innerHTML =data ;                                                                        
									   }
							   });
					} 
	if(value=2)
		{	
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_customer_count11/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										
										var count=data;
									//	var m=document.getElementById("total_customer_span").innerHTML;
									//	document.getElementById("total_customer_span").innerHTML ="";
									//	document.getElementById("total_customer").innerHTML =document.getElementById("total_customer_span").innerHTML+count ;
							//	document.getElementById("total_customer").innerHTML =data;
									   }
							   });
		}                                             
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
	 else if(value=2)
		{	
				$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_earning_for_particular_vendor/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
									
										var count=Math.round(data);
									//	var m=document.getElementById("total_earning_span").innerHTML;
										document.getElementById("total_earning_span").innerHTML ="Rs";
										document.getElementById("total_earning").innerHTML =document.getElementById("total_earning_span").innerHTML+count ;
								
									   }
							   });
		}    
else{}		
 }
 function get_sales(){
   // alert("dd");
    var today = new Date();
    var dd = today.getDate();
    var p_date=parseFloat(dd)-1;
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    value=document.getElementById("id_display").value;
	if(value==1)
					{
						$.ajax({	
									url: "<?php echo base_url(); ?>Show_Vendor/Sales_of_daily/",
									method:"POST",
                                                                         data:"today="+dd+"&month="+mm+"&year="+yyyy+"&p_date="+p_date,                                                                      
									dataType: 'json',     									
									success: function(data)  
									   {                                                                              
                                                                              var recent1=JSON.parse(data.recent);
                                                                             // alert(data);
                                                                              var recent=Math.ceil(recent1);
                                                                             
                                                                              var previous=JSON.parse(data.previous);                                                                               
                                                                              document.getElementById("total_sales").innerHTML =document.getElementById("total_sales").innerHTML+recent ;
                                                                                if(recent>previous)
                                                                               {
                                                                               var extra=parseFloat(recent)-parseFloat(previous);
                                                                               var get_percentage1=(parseFloat(extra)*100)/parseFloat(recent);
                                                                               var get_percentage=Math.ceil(get_percentage1);
                                                                               var content="";
                                                                                content+="<div style='margin-left: 115px;'>";
                                                                                content+=" <i class='glyph-icon icon-caret-up' style='margin-left:-200px'></i>";
                                                                                content+=""+get_percentage+"% up from yesterday</div>";
                                                                                $("#show_icon_daily_sales").append(content);
                                                                               } 
                                                                                if(recent<previous)
                                                                               {
                                                                                var extra=parseFloat(previous)-parseFloat(recent);
                                                                                var get_percentage1=(parseFloat(extra)*100)/parseFloat(previous); 
                                                                                var get_percentage=Math.ceil(get_percentage1);
                                                                                var content="";
                                                                                content+="<div style='margin-left: 115px;'>";
                                                                                content+=" <i class='glyph-icon icon-sort-down' style='margin-left:-200px'></i>";
                                                                                content+=""+get_percentage+"% down from yesterday</div>";
                                                                                $("#show_icon_daily_sales").append(content);
                                                                               } 
                                                                                if(recent==previous)
                                                                               { 
                                                                                   if(recent==0 || previous==0){
                                                                                       var content="";
                                                                                content+="<div style='margin-left: 115px;'>";
                                                                                content+=" <i class='glyph-icon icon-minus' style='margin-left:-200px'></i>";
                                                                                content+=" No  Sale</div>";
                                                                                $("#show_icon_daily_sales").append(content); 
                                                                                   }
                                                                                   else{
                                                                               var content="";
                                                                                content+="<div style='margin-left: 115px;'>";
                                                                                content+=" <i class='glyph-icon icon-minus' style='margin-left:-200px'></i>";
                                                                                content+=" Constant  Sale</div>";
                                                                                $("#show_icon_daily_sales").append(content);
                                                                               } 
                                                                               }
										//var count=data;	
										//document.getElementById("cust_tot").innerHTML =count;
									//	document.getElementById("total_customer").innerHTML =document.getElementById("total_customer_span").innerHTML+count ;																	
										//document.getElementById("total_customer").innerHTML =data ;                                                                        
									   }
							   });
					} 
	/*if(value=2)
		{	
						$.ajax({	
									url: "<?php echo base_url(); ?>Welcome/get_customer_count11/",                                                                     
									method:"POST",
								
									success: function(data)  
									   {
										
										var count=data;
									//	var m=document.getElementById("total_customer_span").innerHTML;
									//	document.getElementById("total_customer_span").innerHTML ="";
									//	document.getElementById("total_customer").innerHTML =document.getElementById("total_customer_span").innerHTML+count ;
								document.getElementById("total_customer").innerHTML =data;
									   }
							   });
		}     */                                        
   }
    function   generate_charts_data(){
	   value=document.getElementById("id_display").value;	 
	   if(value==1){
	  $.ajax({	
		url: "<?php echo base_url(); ?>Show_Vendor/get_info_for_chart/",                                                          
		method:"POST",	
		dataType: 'json',        
		success: function(data)  
	  {
             //alert(JSON.stringify(data));
           // var sale_by_pick_pack=
           var amount_earned_by_pick_pack;
                 var amount_earned_cash;
                 var amount_earned_scan;
		 var total_amount=0;
		 for(var i=0;i<data.length;i++){
		 var m11=data[i].name;
                 
		total_amount=total_amount+parseFloat(data[i].sale);			 
		if(m11=="pick and packup"){
		 amount_earned_by_pick_pack=Math.round(data[i].sale);
			//document.getElementById("PickPack").innerHTML =document.getElementById("PickPack").innerHTML+"Rs"+amount_earned ;
		}
		if(m11=="Cash on delivery"){
                 amount_earned_cash=Math.round(data[i].sale);
			//document.getElementById("Delivery").innerHTML =document.getElementById("Delivery").innerHTML+"Rs"+amount_earned ;
		}
		if(m11=="scan"){
                    amount_earned_scan=Math.round(data[i].sale);
			//.getElementById("Scan").innerHTML =document.getElementById("Scan").innerHTML+"Rs"+amount_earned ;
		 }}
		// document.getElementById("Total_sales").innerHTML =document.getElementById("Total_sales").innerHTML+"Rs"+Math.round(total_amount);
		
           var    percentage_for_pick_pack=(parseFloat(amount_earned_by_pick_pack)*100)/parseFloat(total_amount);
            var    percentage_for_cash=(parseFloat(amount_earned_cash)*100)/parseFloat(total_amount);
             var    percentage_for_scan=(parseFloat(amount_earned_scan)*100)/parseFloat(total_amount);
             $(".GaugeMeter").gaugeMeter();
		  $("#test1").data("percent",Math.round(percentage_for_pick_pack));
        $("#test1").empty();
        $("#test1").gaugeMeter();
        $(".GaugeMeterA").gaugeMeter();
		  $("#test2").data("percent",Math.round(percentage_for_cash));
        $("#test2").empty();
        $("#test2").gaugeMeter();
        $(".GaugeMeterB").gaugeMeter();
		  $("#test3").data("percent",Math.round(percentage_for_scan));
        $("#test3").empty();
        $("#test3").gaugeMeter();
             
            document.getElementById("Total_sales").innerHTML =document.getElementById("Total_sales").innerHTML+"Rs"+total_amount ;
            document.getElementById("PickPack").innerHTML =document.getElementById("PickPack").innerHTML+"Rs"+amount_earned_by_pick_pack ;
            document.getElementById("Scan").innerHTML =document.getElementById("Scan").innerHTML+"Rs"+amount_earned_scan ;
            document.getElementById("Delivery").innerHTML =document.getElementById("Delivery").innerHTML+"Rs"+amount_earned_cash ;
	  }
	
	  });
   }}
   function   generate_customer_satisfaction(){
	 value=document.getElementById("id_display").value;
	 if(value==1){
	  $.ajax({	
				url: "<?php echo base_url(); ?>Show_Vendor/get_satisfaction/",                                                          
				method:"POST",	       
				success: function(data)  
	  {	
		var percentage=(parseFloat(data)*100)/5;
		
		$(".GaugeMeterC").gaugeMeter();
		  $("#test4").data("percent",Math.round(percentage));
        $("#test4").empty();
        $("#test4").gaugeMeter();
		
	 
	  }
	
	  });
   }
}
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
function feedback_all(){

 value=document.getElementById("id_display").value;
			 if(value==1){
					  $.ajax({	
							url: "<?php echo base_url(); ?>Show_Vendor/fetch_feedback_messages/" ,                    
							method:"POST",
							dataType: 'json',							
							success: function(data)  
									{
                                                                         
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
			}
                        function display_vendors()
        {
            $.ajax
                ({
                    type: "POST",
                    url: "<?php echo base_url(); ?>"+"Show_Vendor/get_vendors",
                    dataType: 'json',                                   
                    success: function (data)
                      { // alert(JSON.stringify(data));
					
                        $("<option />").val("0")
                                    .text("Select Vendor")
                                    .appendTo($('select#Vendor_list'));
                        for(var i=0;i<data.length;i++)
                            { 
                                $("<option />").val(data[i].Vendor_Id)
                                              .text(data[i].Name)
                                              .appendTo($('select#Vendor_list'));
                            }

                      }

                });
        }

 
</script> 
                        
                           
                       
                            
                        
                       
                           
                           

