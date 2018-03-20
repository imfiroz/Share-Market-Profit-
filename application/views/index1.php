<?php
include('header.php');
?>
  <div id="page-content-wrapper">
            <div id="page-content">
                
                    <div class="container">
                    
<div id="dashboard">
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

<div id="page-title">
    <h2>Dashboard</h2>
   
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

<div class="row">
   
	 <div class="col-md-6" id="data_display">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper" >
                <div class="header" id="pending_vendors" style="height:34px" >
                               
                </div>
            
               
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <button id="view_data_pending_vendors" onclick="get_data_of_pending_vendors1()" style="color: #f5f5f5;
    background: red;
    border-radius: 7px;
    width: 130px;
    height: 35px;">
                       View  Details
                      </button>
                </div>             
            </div>
        </div>
    </div>
     <div class="col-md-6" id="data_display1">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper" >
                <div class="header" id="pending_vendors1" style="height:34px" >
                               
                </div>
            
               
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <button id="view_data_pending_vendors" onclick="get_data_of_pending_products()" style="color: #f5f5f5;
    background: red;
    border-radius: 7px;
    width: 130px;
    height: 35px;">
                       View  Details
                      </button>
                </div>
               <!-- <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-plus"></i>
                </a>-->
            </div>
        </div>
    </div>
	
     <div class="col-md-6" id="data_display_vendor">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper" >
                <div class="header" id="Vendor_approval" style="height:34px" >
                               
                </div>
            
               
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                   <!--- <button id="view_data_pending_vendors" onclick="get_data_of_pending_vendors1()" style="color: #f5f5f5;
    background: red;
    border-radius: 7px;
    width: 130px;
    height: 35px;">
                       View  Details
                      </button>-->
                </div>
               <!-- <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-plus"></i>
                </a>-->
            </div>
        </div>
    </div>
     <div class="col-md-6" id="data_display1_vendor_product">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper" >
                <div class="header" id="product_vendor" style="height:34px" >
                               
                </div>
            
               
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <button id="get_data_of_pending_products_vendor" onclick="get_data_of_pending_products_vendor()" style="color: #f5f5f5;
    background: red;
    border-radius: 7px;
    width: 130px;
    height: 35px;">
                       View  Details
                      </button>
                </div>
               <!-- <a href="#" class="btn btn-info float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-plus"></i>
                </a>-->
            </div>
        </div>
    </div>
	 <div class="col-md-6" id="data_display_count_customers">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper" >
                <div class="header" id="customer_count" style="height:34px" >
                               
                </div>
				  <div class="header" id="customer_count11" style="height:34px" >
                               
                </div>
            
               
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <button id="customers_count" onclick="get_data_of_customers_count()" style="color: #f5f5f5;
    background:red;
    border-radius: 7px;
    width: 130px;
    height: 35px;">
                       View  Details
                      </button>
					  <button id="view_customers" onclick="get_data_of_customers_count_of_vendor()" style="color: #f5f5f5;
    background: red;
    border-radius: 7px;
    width: 130px;
    height: 35px;">
                       View  Details
                      </button>
                </div>             
            </div>
        </div>
    </div>
     <div class="col-md-6" id="demo_data1">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    169
                    <span>Total Orders</span>
                </div>
                <div class="bs-label bg-red">-14%</div>
                <div class="center-div sparkline-big-alt">21,41,31,50,18,41</div>
                <div class="row list-grade">
                    <div class="col-md-2">M</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">W</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">F</div>
                    <div class="col-md-2">S</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View all members
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
     
    <div class="col-md-6" id="demo_data2" >
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper" style="height:50px">
                <div class="header">
                    169
                   
                </div>
                <div class="bs-label bg-red">-14%</div>
                <div class="center-div sparkline-big-alt">21,41,31,50,18,41</div>
                <div class="row list-grade">
                    <div class="col-md-2">M</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">W</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">F</div>
                    <div class="col-md-2">S</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View all members
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
	<div class="col-md-6" id="demo_data">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    169
                    <span>Total Orders</span>
                </div>
                <div class="bs-label bg-red">-14%</div>
                <div class="center-div sparkline-big-alt">21,41,31,50,18,41</div>
                <div class="row list-grade">
                    <div class="col-md-2">M</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">W</div>
                    <div class="col-md-2">T</div>
                    <div class="col-md-2">F</div>
                    <div class="col-md-2">S</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View all members
                    </a>
                </div>
                <a href="#" class="btn btn-default float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    8960
                    <span>Total Customers</span>
                </div>
                <div class="bs-label bg-orange">~51%</div>
                <div class="center-div sparkline-big-alt">2210,2310,2010,2310,2123,2350</div>
                <div class="row list-grade">
                    <div class="col-md-2">2009</div>
                    <div class="col-md-2">2010</div>
                    <div class="col-md-2">2011</div>
                    <div class="col-md-2">2012</div>
                    <div class="col-md-2">2013</div>
                    <div class="col-md-2">2014</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View more details
                    </a>
                </div>
                <a href="#" class="btn btn-primary float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-caret-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
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

        <div class="row">
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-success">
                    <div class="tile-header">
                        Photo Gallery
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="43"><span>43</span>%</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-info">
                    <div class="tile-header">
                        Subscriptions
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="76"><span>76</span>%</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning">
                    <div class="tile-header">
                        New Visitors
                    </div>
                    <div class="tile-content-wrapper">
                        <div class="chart-alt-10" data-percent="11"><span>11</span>%</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="content-box mrg20T">
            <h3 class="content-box-header bg-primary">
                Toggle button closed
                <span class="header-buttons-separator">
                    <a href="#" class="icon-separator toggle-button">
                        <i class="glyph-icon icon-chevron-down"></i>
                    </a>
                </span>
            </h3>
            <div class="content-box-wrapper hide">
                This content boxes has the header with <code>.bg-default</code>.
            </div>
        </div>

        <div class="content-box">
            <h3 class="content-box-header bg-default">
                <i class="glyph-icon icon-cog"></i>
                Live server status
                <span class="header-buttons-separator">
                    <a href="#" class="icon-separator">
                        <i class="glyph-icon icon-question"></i>
                    </a>
                    <a href="#" class="icon-separator refresh-button" data-style="dark" data-theme="bg-white" data-opacity="40">
                        <i class="glyph-icon icon-refresh"></i>
                    </a>
                    <a href="#" class="icon-separator remove-button" data-animation="flipOutX">
                        <i class="glyph-icon icon-times"></i>
                    </a>
                </span>
            </h3>
            <div class="content-box-wrapper">
                <div id="data-example-3" style="width: 100%; height: 250px;"></div>
            </div>
        </div>

    </div>
	<div class="col-md-2">
                    <a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-primary">
                        <div class="tile-header">
                            Dashboard
                        </div>
                        <div class="tile-content-wrapper">
                            <div class="chart-alt-10 easyPieChart" data-percent="21" style="width: 100px; height: 100px; line-height: 100px;"><span>20</span>%<canvas width="100" height="100"></canvas></div>
                        </div>
                    </a>
                </div>
    <div class="col-md-4">
        <div class="row mrg20B">
            <div class="col-md-6">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
                    <span class="bs-badge badge-absolute">5</span>
                    <div class="tile-header">
                        Dashboard
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-dashboard"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-black">
                    <span class="bs-badge badge-absolute">5</span>
                    <div class="tile-header">
                        Orders
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-cogs"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Users activity
                </h3>
                <div class="example-box-wrapper">
                    <div class="timeline-box timeline-box-left">
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-red">
                                    <i class="glyph-icon icon-toggle-on"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-info">Appointment</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-primary">
                                    <i class="glyph-icon icon-wifi"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label bg-yellow">Teleconference</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-black">
                                    <i class="glyph-icon icon-headphones"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-danger">Meeting</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-box bg-white post-box">
            <textarea name="" class="textarea-autosize" placeholder="What are you doing right now?"></textarea>
            <div class="button-pane">
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-volume-down"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-video-camera"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-microphone"></i>
                </a>
                <a href="#" class="btn btn-md btn-link hover-white" title="">
                    <i class="glyph-icon icon-picture-o"></i>
                </a>

                <a href="#" class="btn btn-md btn-post float-right btn-success" title="">
                    Post
                </a>

            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <ul class="todo-box">
                    <li class="border-red">
                        <input type="checkbox" name="todo-1" id="todo-1">
                        <label for="todo-1">This is an example task that i need to finish</label>
                        <span class="bs-label bg-red" title="">Overdue</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-orange">
                        <input type="checkbox" name="todo-2" id="todo-2">
                        <label for="todo-2">Update server to a newer version</label>
                        <span class="bs-label bg-green" title="">2 Weeks</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-blue">
                        <input type="checkbox" name="todo-3" id="todo-3">
                        <label for="todo-3">Add more awesome template features</label>
                        <span class="bs-label bg-blue" title="">Tomorrow</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                    <li class="border-purple">
                        <input type="checkbox" name="todo-4" id="todo-4">
                        <label for="todo-4">Never forget to buy milk</label>
                        <span class="bs-label bg-black" title="">Today</span>
                        <a href="#" class="btn btn-xs btn-danger float-right" title="">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                        <a href="#" class="btn btn-xs btn-success float-right" title="">
                            <i class="glyph-icon icon-check"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
                    </div>
                        <div id ="data_vendors">
                             <button id="back" onclick="redirect()" style="color: #f5f5f5; background: red;border-radius: 7px; width: 150px;height: 50px;">  Back To Dashboard </button>
                             <div> &nbsp</div>
                           <div> &nbsp</div> 
                   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    </table>
                            <button id="submit_data" onclick="submit_vendor()" style="color: #f5f5f5; background: red;border-radius: 7px; width: 100px;height: 30px;">  submit </button>
                            </div>
                        <div id ="data_products">
                             <button id="back" onclick="redirect()" style="color: #f5f5f5; background: red;border-radius: 7px; width: 150px;height: 50px;">  Back To Dashboard </button>
                             <div> &nbsp</div>
                           <div> &nbsp</div> 
                   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example_product">
                    </table>
                            <button id="submit_data" onclick="submit_product()" style="color: #f5f5f5; background: red;border-radius: 7px; width: 100px;height: 30px;">  submit </button>
                            </div>
                        <div id ="data_products_of_vendor">
                             <button id="back" onclick="redirect()" style="color: #f5f5f5; background: red;border-radius: 7px; width: 150px;height: 50px;">  Back To Dashboard </button>
                             <div> &nbsp</div>
                           <div> &nbsp</div> 
                   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example_product_vendor">
                    </table>
                           
                            </div>
							<div id ="data_count_of_customers">
                             <button id="back" onclick="redirect()" style="color: #f5f5f5; background: red;border-radius: 7px; width: 150px;height: 50px;">  Back To Dashboard </button>
                             <div> &nbsp</div>
                           <div> &nbsp</div> 
                   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example_customer_data">
                    </table>
                           
                            </div>
							<div id ="data_count_of_customers_of_vendor">
                             <button id="back" onclick="redirect()" style="color: #f5f5f5; background: red;border-radius: 7px; width: 150px;height: 50px;">  Back To Dashboard </button>
                             <div> &nbsp</div>
                           <div> &nbsp</div> 
                   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example_customer_data">
                    </table>
                           
                            </div>
</div>
                
 <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="<?php echo $role_id;?>" name="id_display" id="id_display">
            </div>
        </div>
<!--<div class="container">

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pending Vendors for Approval</h4>
        </div>
        <div class="modal-body">   
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                    </table>   
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 // +"&poodeman="+poodemanid
</div>-->
<?php
include('footer.php');
?>
<script>
    var temp_data=[];  var temp_product=[];
    function redirect(){
         window.location ="<?php echo base_url();?>"+"Dashboard";
    }
      function submit_vendor(){
        for(var k=0;k<temp_data.length;k++)
        {
          var get_id;
          var get_phone;
           var get_name;
            if(document.getElementById(temp_data[k].Vendor_Id).checked==true){
              get_id=temp_data[k].Vendor_Id;
              get_phone=document.getElementById("get_"+temp_data[k].Vendor_Id).value;
               get_name=document.getElementById("getn_"+temp_data[k].Vendor_Id).value;
              
             $.ajax({
                                        url: "<?php echo base_url(); ?>Welcome/save_update_vendors/" + get_id,
                                        method: "POST",
                                        data:"get_phone="+get_phone+"&get_name="+get_name,
                                        dataType: "json",
                                        success: function (data)
                                        {                                                 
                                           // location.reload();

                                        }});  
                                  //  get_hsn_details();
            
            }
            else{
              
            }
            if(k==(temp_data.length)-1){
                window.location ="<?php echo base_url();?>"+"Dashboard";
            }
        }
        
    }
     function submit_product(){
        for(var k=0;k<temp_product.length;k++)
        {
          var get_id;
            if(document.getElementById(temp_product[k].product_version_id).checked==true){
                get_id=temp_product[k].product_version_id;
               
             $.ajax({
                                        url: "<?php echo base_url(); ?>Welcome/save_update_products/" + get_id,
                                        method: "POST",
                                        dataType: "json",
                                        success: function (data)
                                        {                                                 
                                           // location.reload();

                                        }});  
                                  //  get_hsn_details();
            
            }
            else{
              
            }
            if(k==(temp_product.length)-1){
                window.location ="<?php echo base_url();?>"+"Dashboard";
            }
        }
        
    }
    
   /* function get_data_of_pending_vendors(){
         var $modal = $('#myModal'); 
          $modal.modal("show");
            {
		
		  $.ajax({ 
                         url: "<?php echo base_url(); ?>View_Hsn/fetch_hsn_details/", 
                         method:"POST",			
                         dataType: "json",       
                            success: function(data)  
                            {	
                                 var len=data.length;
                                 var content = "";
                                 var user_array = data;
                                 content +="<thead><tr> <th>Sr No.</th><th>HSN Code</th><th> HSN Description</th><th >Igst</th><th>Cgst</th><th>Sgst</th><th>Edit</th><th>Delete</th></tr></thead>";
                                 content += '</tr></thead><tbody>';

                                     for (i = 0; i < user_array.length; i++)
                                     {

                                                    content += "<tr>" ;
                                                    content +=  "<td class='center'>" + (i+1) + "</td>" +
                                                       "<td class='center'>" + user_array[i].Hsn_Code + "</td>" +
                                                        "<td class='center'>" + user_array[i].Hsn_Description + "</td>" +
                                                        "<td class='center'>" + user_array[i].Igst + "</td>" +
                                                        "<td class='center'>" + user_array[i].Cgst + "</td>" +					 
                                                        "<td class='center'>" + user_array[i].Sgst + "</td>" +
                                                        "<td align='center'><a href='javascript:void(0);' onclick='edit_hsn(" + user_array[i].Hsn_Id + ")'>Edit</a></td>" +
                                                        "<td align='center'><a href='javascript:void(0);' onclick='delete_hsn(" + user_array[i].Hsn_Id + ")'>Delete</a></td>" +
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
          
    }*/
  function get_data_of_pending_products(){
        $("#dashboard").hide();
        $("#data_vendors").hide();
        $("#data_products").show();
        $("#data_products_of_vendor").hide();
		$("#data_count_of_customers").hide();
		$("#data_count_of_customers_of_vendor").hide();
		
		
          $.ajax({ 
                         url: "<?php echo base_url(); ?>Welcome/fetch_pending_product/", 
                         method:"POST",			
                         dataType: "json",       
                            success: function(data)  
                            {
                              // alert(JSON.stringify(data));
                                  var len=data.length;
                                 var content = "";
                                 var user_array = data;
                                 temp_product=user_array;
                                 content +="<thead><tr> <th>Sr No.</th><th>VendorName</th><th>Product Name</th><th>Approval</th></tr></thead>";
                                 content += '</tr></thead><tbody>';

                                     for (i = 0; i < user_array.length; i++)
                                     {

                                                    content += "<tr>" ;
                                                    content +=  "<td class='center black_font'>" + (i+1) + "</td>" +
                                                       "<td class='center black_font'>" + user_array[i].Name + "</td>" +
                                                        "<td class='center black_font'>" + user_array[i].product_version_name + "</td>" +
                                                       "<td class='center black_font'><input type='checkbox' id='"+user_array[i].product_version_id +"'/></td>"          
                                                 "</tr>";                      

                                     }
                                  content += '</tbody>';

                               $('#example_product').html(content);

                               $(document).ready(function () {
                                    $('#example_product').DataTable();

                                 });


                            }
		  });
		 
  }
  
   function  get_data_of_customers_count(){
       $("#dashboard").hide();
       $("#data_vendors").hide();
       $("#data_products").hide();        
       $("#data_products_of_vendor").hide();
	   $("#data_count_of_customers").show();
	   $("#data_count_of_customers_of_vendor").hide();
       $.ajax({ 
                         url: "<?php echo base_url(); ?>Welcome/fetch_customers_count/", 
                         method:"POST",			
                         dataType: "json",       
                            success: function(data)  
                            {
                            //  alert(JSON.stringify(data));
                                 var len=data.length;
                                 var content = "";
                                 var user_array = data;
                                 temp_data=user_array;
                                 
                                 content +="<thead><tr> <th>Sr No.</th><th>Name</th><th>Email</th><th>Mobile</th><th>Address</th></tr></thead>";
                                 content += '</tr></thead><tbody>';

                                     for (i = 0; i < user_array.length; i++)
                                     {
                                                    
                                                    content += "<tr>" ;
                                                    content +=  "<td class='center black_font'>" + (i+1) + "</td>" +
                                                       "<td class='center black_font'>" + user_array[i].Name + "</td>" +
													   "<td class='center black_font'>" + user_array[i].Email + "</td>" +
													    "<td class='center black_font'>" + user_array[i].Mobile + "</td>" +
                                                          "<td class='center black_font'>" + user_array[i].Address + "</td>" +    
                                                 "</tr>";                      

                                     }
                                  content += '</tbody>';

                               $('#example_customer_data').html(content);
                               $(document).ready(function () {
                               $('#example_customer_data').DataTable();

                                 });

                               
                            }
		  });
		
    }
	 function  get_data_of_customers_count_of_vendor(){
       $("#dashboard").hide();
       $("#data_vendors").hide();
       $("#data_products").hide();        
       $("#data_products_of_vendor").hide();
	   $("#data_count_of_customers").show();
	   $("#data_count_of_customers_of_vendor").hide();
       $.ajax({ 
                         url: "<?php echo base_url(); ?>Welcome/fetch_customers_count_of_vendor/", 
                         method:"POST",			
                         dataType: "json",       
                            success: function(data)  
                            {
                            //  alert(JSON.stringify(data));
                                 var len=data.length;
                                 var content = "";
                                 var user_array = data;
                                 temp_data=user_array;
                                 
                                 content +="<thead><tr> <th>Sr No.</th><th>Name</th><th>Email</th><th>Mobile</th><th>Address</th></tr></thead>";
                                 content += '</tr></thead><tbody>';

                                     for (i = 0; i < user_array.length; i++)
                                     {
                                                    
                                                    content += "<tr>" ;
                                                    content +=  "<td class='center black_font'>" + (i+1) + "</td>" +
                                                       "<td class='center black_font'>" + user_array[i].Name + "</td>" +
													   "<td class='center black_font'>" + user_array[i].Email + "</td>" + 
													   "<td class='center black_font'>" + user_array[i].Mobile + "</td>" +	
													   "<td class='center black_font'>" + user_array[i].Address + "</td>" +												  
                                                             
                                                 "</tr>";                      

                                     }
                                  content += '</tbody>';

                               $('#example_customer_data').html(content);
                               $(document).ready(function () {
                               $('#example_customer_data').DataTable();

                                 });

                               
                            }
		  });
		
    }
    function  get_data_of_pending_products_vendor(){
        $("#dashboard").hide();
       $("#data_vendors").hide();
       $("#data_products").hide();  
		$("#data_count_of_customers").hide();	   
       $("#data_products_of_vendor").show();
	   $("#data_count_of_customers_of_vendor").hide();
       $.ajax({ 
                         url: "<?php echo base_url(); ?>Welcome/fetch_pending_vendors_products/", 
                         method:"POST",			
                         dataType: "json",       
                            success: function(data)  
                            {
                             // alert(JSON.stringify(data));
                                 var len=data.length;
                                 var content = "";
                                 var user_array = data;
                                 temp_data=user_array;
                                 
                                 content +="<thead><tr> <th>Sr No.</th><th>Name</th></tr></thead>";
                                 content += '</tr></thead><tbody>';

                                     for (i = 0; i < user_array.length; i++)
                                     {
                                                    
                                                    content += "<tr>" ;
                                                    content +=  "<td class='center black_font'>" + (i+1) + "</td>" +
                                                       "<td class='center black_font'>" + user_array[i].product_version_name + "</td>" +
                                                             
                                                 "</tr>";                      

                                     }
                                  content += '</tbody>';

                               $('#example_product_vendor').html(content);
                               $(document).ready(function () {
                               $('#example_product_vendor').DataTable();

                                 });

                                 
                            }
		  });
		 
    }
	//get_data_of_customers_count_of_vendor
      function get_data_of_pending_vendors1(){
       $("#dashboard").hide();
       $("#data_vendors").show();
       $("#data_products").hide();
	   $("#data_count_of_customers").hide();
        $("#data_products_of_vendor").hide();
		$("#data_count_of_customers_of_vendor").hide();
       {
		
		  $.ajax({ 
                         url: "<?php echo base_url(); ?>Welcome/fetch_pending_vendors/", 
                         method:"POST",			
                         dataType: "json",       
                            success: function(data)  
                            {
                               // alert(JSON.stringify(data));
                                 var len=data.length;
                                 var content = "";
                                 var user_array = data;
                                 temp_data=user_array;
                                 
                                 content +="<thead><tr> <th>Sr No.</th><th>Name</th><th>Approval</th></tr></thead>";
                                 content += '</tr></thead><tbody>';

                                     for (i = 0; i < user_array.length; i++)
                                     {
                                                    
                                                    content += "<tr>" ;
                                                    content +=  "<td class='center black_font'>" + (i+1) + "</td>" +
                                                       "<td class='center black_font'>" + user_array[i].Name + "</td>" +
                                                       "<td class='center black_font'><input type='checkbox' id='"+user_array[i].Vendor_Id +"'/><input type='hidden' id='get_"+user_array[i].Vendor_Id+"' value='"+user_array[i].Mobile +"'/><input type='hidden' id='getn_"+user_array[i].Vendor_Id+"' value='"+user_array[i].Name+"'/></td>"          
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
      }
     $(document).ready(function ()   {
		 $("#view_customers").hide(); 
     $("#data_count_of_customers").hide();
       $("#data_vendors").hide();
        $("#data_products").hide();
        $("#data_products_of_vendor").hide();
		 $("#data_display_count_customers").hide();
		  $("#demo_data2").hide();
		  $("#data_count_of_customers_of_vendor").hide();
		 
		 
          var value;
           value=document.getElementById("id_display").value;
            if(value==1){
					
                   $("#demo_data").hide();
                   $("#demo_data1").hide();
                   $("#data_display1_vendor_product").hide(); 
                   $("#data_display_vendor").hide();
				  // $("#data_display_count_customers").hide();
				   $("#data_display_count_customers").show();
				   $("#demo_data2").show();
         get_count();
         get_product_count();
		 get_count_customers();
        
     }
     else if(value==2){
		$("#data_display_count_customers").show();
          $("#data_display1_vendor_product").show(); 
          $("#data_display_vendor").show();
          $("#data_display").hide();
          $("#data_display1").hide();
          $("#demo_data").hide();
          $("#demo_data1").hide();
		  $("#demo_data2").show();
		  $("#view_customers").show(); 
		  $("#customers_count").hide(); 		   
           get_approval();
           get_approval_products();
		   get_count_customers1();
     }
     else{
          $("#demo_data").show();
           $("#demo_data1").show();
           $("#data_display").hide();
           $("#data_display1").hide();         
           $("#data_display1_vendor_product").hide(); 
          $("#data_display_vendor").hide();
		  $("#data_display_count_customers").hide();
     }
 // }
              //    document.getElementById("pending_vendors").innerHTML = m+"   "+document.getElementById("pending_vendors").innerHTML;                            
                });
   
   function get_count_customers(){
        $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_customer_count/",                                                                     
				method:"POST",
			  //  data: "email="+mail,
				success: function(data)  
				   {
					   var m=data;
					if(m==1){
				 $("#customer_count11").hide();							   
					document.getElementById("customer_count").innerHTML = m+" Happy Customer"+document.getElementById("customer_count").innerHTML;   }
							else{
							$("#customer_count11").hide();							   
					document.getElementById("customer_count").innerHTML = m+" Happy Customers"+document.getElementById("customer_count").innerHTML;	
							}
				   }
		   });
   }
    function get_count_customers1(){
        $.ajax({	
				url: "<?php echo base_url(); ?>Welcome/get_customer_count11/",                                                                     
				method:"POST",
			  //  data: "email="+mail,
				success: function(data)  
				   {
					   var m=data;
					   if(m==1){
			    $("#customer_count").hide();
					   document.getElementById("customer_count11").innerHTML = m+" Happy Customer"+document.getElementById("customer_count11").innerHTML;
					   }   
else{
	 $("#customer_count").hide();
					   document.getElementById("customer_count11").innerHTML = m+" Happy Customers"+document.getElementById("customer_count11").innerHTML;
}					   
				   }
		   });
   }
   function get_count(){
        $.ajax({	
                                                                    url: "<?php echo base_url(); ?>Welcome/get_vendor_count/",                                                                     
                                                                    method:"POST",
                                                                  //  data: "email="+mail,
                                                                    success: function(data)  
                                                                       {
                                                                           var m=data;
                                                                           
                                                                             document.getElementById("pending_vendors").innerHTML = m+" Pending Vendors for approval"+document.getElementById("pending_vendors").innerHTML;                                                                          
                                                                       }
                                                               });
   }
    function get_approval(){
  //  alert("dd");
        $.ajax({	
                                                                    url: "<?php echo base_url(); ?>Welcome/get_vendor_approval/",                                                                     
                                                                    method:"POST",
                                                                  //  data: "email="+mail,
                                                                    success: function(data)  
                                                                       {
                                                                          
                                                                          if(data==0){
                                                                             document.getElementById("Vendor_approval").innerHTML = "You Are Not Approved Yet"+document.getElementById("Vendor_approval").innerHTML;
                                                                               $("#data_display1_vendor_product").hide(); 
                                                                                $("#demo_data1").show();
                                                                       }
                                                                       else{
                                                                           document.getElementById("Vendor_approval").innerHTML = "You Are Approved By Admin"+document.getElementById("Vendor_approval").innerHTML; 
                                                                       }
                                                                   }
                                                               });
   }
   function get_approval_products(){
  //  alert("dd");
        $.ajax({	
                                                                    url: "<?php echo base_url(); ?>Welcome/get_products_approval/",                                                                     
                                                                    method:"POST",
                                                                  
                                                                    success: function(data)  
                                                                       {
                                                                           var m=data;
                                                                        document.getElementById("product_vendor").innerHTML = m+" Pending products for approval by Admin"+document.getElementById("pending_vendors").innerHTML;  
                                                                        
                                                                   }
                                                               });
   }
    function get_product_count(){
    //var m=200;
    // document.getElementById("pending_vendors1").innerHTML = m+" Pending Vendors prduct for approval"+document.getElementById("pending_vendors1").innerHTML; 
        $.ajax({	
                                                                    url: "<?php echo base_url(); ?>Welcome/get_vendor_product_count/",                                                                     
                                                                    method:"POST",
                                                                  //  data: "email="+mail,
                                                                    success: function(data)  
                                                                       {
                                                                          // alert(data);
                                                                           var count=data;
                                                                           
                                                                              document.getElementById("pending_vendors1").innerHTML = count+" Pending  products for approval"+document.getElementById("pending_vendors1").innerHTML;                                                                           
                                                                       }
                                                               });
                                                           
                                                               
   }
   
    </script>