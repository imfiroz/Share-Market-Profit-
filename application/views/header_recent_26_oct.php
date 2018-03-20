<!DOCTYPE html> 
<html lang="en">
<head>
    <?php  
      $this->session->userdata('is_logged_in');
     $u_id = $this->session->userdata('un');
	$v_id=$this->session->userdata('Vendor_Id');	
	$role_id=$this->session->userdata('role_id');
	$branch_id=$this->session->userdata('branch_id');
	$company_id=$this->session->userdata('company_id');
?>
<?php
$_SESSION['previous'] = basename($_SERVER['PHP_SELF']);
 // $cust_id= $this->session->userdata('cust_id');
 if(isset($_SESSION['ca_id']))
         {
    //  unset($_SESSION['ca_id']); //session_destroy();
    $ca_id=$_SESSION['ca_id'];
 }
 else{
       //echo"Aaa";
      $ca_id="";
 }
  
  if(isset($_SESSION['cust_id']))
         {
    $cust_id=$_SESSION['cust_id'];
 }
 else{
    // echo"Aaa";
     $cust_id="";
 }
  
if (basename($_SERVER['PHP_SELF']) == $_SESSION['previous']) {
    
      // echo"a0";
      $invoice_generated=$this->session->userdata('invoice_generated');
   }
   else{
        unset($_SESSION['invoice_generated']);
        unset($_SESSION['ca_id']); //session_destroy();
   }
   ?>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Monarch UI - Bootstrap Frontend &amp; Admin Template </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/icons/favicon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css">
<!-- HELPERS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/helpers/colors.css">
<!-- ELEMENTS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/timeline.css">
<!-- ICONS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icons/spinnericon/spinnericon.css">
<!-- WIDGETS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/carousel/carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/charts/xcharts/xcharts.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/widgets/xeditable/xeditable.css">
<!-- SNIPPETS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/snippets/mobile-navigation.css">
<!-- APPLICATIONS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/applications/mailbox.css">
<!-- Admin theme -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/themes/admin/color-schemes/default.css">
<!-- Components theme -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/themes/components/border-radius.css">
<!-- Admin responsive -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/admin-responsive.css">
    <!-- JS Core -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url() ?>assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js-core/jquery-cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/datatable/datatable.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/datatable/datatable-fixedcolumns.js"></script>
     <script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/datatable/datatable-responsive.js"></script>
     <script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/datatable/datatable-tabletools.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/datatable/datatable-reorder.js"></script>
       <script type="text/javascript" src="<?php echo base_url() ?>assets/widgets/datatable/datatable-bootstrap.js"></script>
      <!--  <script type="text/javascript" src=" http://requirejs.org/docs/release/2.2.0/minified/require.js"></script>-->
       <!--<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.4.min.js"></script>-->
     

    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>
</head>
    <body>
    <div id="sb-site">
    <div class="sb-slidebar bg-black sb-left sb-style-overlay">
    <div class="scrollable-content scrollable-slim-sidebar">
        <div class="pad10A">
            <div class="divider-header">Online</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial1.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Grace Padilla
                    </b>
                    <p>On the other hand, we denounce...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial2.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Carl Gamble
                    </b>
                    <p>Dislike men who are so beguiled...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial3.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Michael Poole
                    </b>
                    <p>Of pleasure of the moment, so...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial4.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Bill Green
                    </b>
                    <p>That they cannot foresee the...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial5.jpg" alt="">
                        <div class="small-badge bg-green"></div>
                    </div>
                    <b>
                        Cheryl Soucy
                    </b>
                    <p>Pain and trouble that are bound...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
            <div class="divider-header">Idle</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial6.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Jose Kramer
                    </b>
                    <p>Equal blame belongs to those...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial7.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Dan Garcia
                    </b>
                    <p>Weakness of will, which is same...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial8.jpg" alt="">
                        <div class="small-badge bg-orange"></div>
                    </div>
                    <b>
                        Edward Bridges
                    </b>
                    <p>These cases are perfectly simple...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
            <div class="divider-header">Offline</div>
            <ul class="chat-box">
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial1.jpg" alt="">
                        <div class="small-badge bg-red"></div>
                    </div>
                    <b>
                        Randy Herod
                    </b>
                    <p>In a free hour, when our power...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
                <li>
                    <div class="status-badge">
                        <img class="img-circle" width="40" src="<?php echo base_url() ?>assets/image-resources/people/testimonial2.jpg" alt="">
                        <div class="small-badge bg-red"></div>
                    </div>
                    <b>
                        Patricia Bagley
                    </b>
                    <p>when nothing prevents our being...</p>
                    <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
         <div class="modal fade" id="editUserPopUp" tabindex="-1" 
                                             role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit profile</h4>
                                                    </div>
                                                     <div class="modal-body">
                                                        <label class="col-md-2"> Name:</label>
                                                        <div class="col-md-10">
                                                            <input type="hidden" class="form-control"  name="cust_id" id="cust_id">
                                                            <input type="text"   class="form-control" name="customer_name" id="customer_name" onkeypress="return ValidateAlpha(event);" >

                                                        </div>
                                                    </div>  
                                                    <div class="modal-body">
                                                        <label class="col-md-2"> Email:</label>
                                                        <div class="col-md-10">                                
                                                            <input type="text"   class="form-control" name="txt_mail" id="txt_mail" onblur="Validate_email()"  > 
                                                                <div id="email"></div>
                                                        </div>
                                                    </div>  
                                                    </div>
                                                <div class="modal-footer" id="update_data">
                                                        <button type="button" onclick="update_customer_customer();" class="btn btn-default" name="btnCustLogin_bn_p" id="btnCustLogin_bn_p" data-dismiss="modal">Update</button><button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_model();">Close</button>
                                                    </div>
                                                </div>
             </div>

<div class="sb-slidebar bg-black sb-right sb-style-overlay">
<div class="scrollable-content scrollable-slim-sidebar">
<div class="pad15A">
<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
    Cloud status
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-1" class="collapse in">
    <div class="pad15A container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
            </div>
            <div class="col-md-4">
                <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
            </div>
        </div>
        <div class="divider mrg15T mrg15B"></div>
        <div class="text-center">
            <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                <i class="glyph-icon icon-refresh"></i>
                Update charts
            </a>
        </div>
    </div>
</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
    Latest transfers
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-6" class="collapse in">

    <ul class="files-box">
        <li>
            <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
            <div class="files-content">
                <b>blog_export.zip</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>22.10.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon icon-file-code-o"></i>
            <div class="files-content">
                <b>homepage-test.html</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added  <b>19.10.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
            <div class="files-content">
                <b>monthlyReport.jpg</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>10.9.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
        <li class="divider"></li>
        <li>
            <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
            <div class="files-content">
                <b>new_presentation.doc</b>
                <div class="files-date">
                    <i class="glyph-icon icon-clock-o"></i>
                    added on <b>5.9.2014</b>
                </div>
            </div>
            <div class="files-buttons">
                <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                    <i class="glyph-icon icon-cloud-download"></i>
                </a>
                <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                    <i class="glyph-icon icon-times"></i>
                </a>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
    Tasks for today
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-3" class="collapse in">

    <ul class="progress-box">
        <li>
            <div class="progress-title">
                New features development
                <b>87%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="87">
                <div class="progressbar-value bg-azure">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <b class="pull-right">66%</b>
            <div class="progress-title">
                Finishing uploading files
                
            </div>
            <div class="progressbar-smaller progressbar" data-value="66">
                <div class="progressbar-value bg-red">
                    <div class="progressbar-overlay"></div>
                </div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Creating tutorials
                <b>58%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="58">
                <div class="progressbar-value bg-blue-alt"></div>
            </div>
        </li>
        <li>
            <div class="progress-title">
                Frontend bonus theme
                <b>74%</b>
            </div>
            <div class="progressbar-smaller progressbar" data-value="74">
                <div class="progressbar-value bg-purple"></div>
            </div>
        </li>
    </ul>

</div>

<div class="clear"></div>

<a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
    Pending notifications
    <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
    <span class="caret"></span>
</a>
<div id="sidebar-toggle-4" class="collapse in">
    <ul class="notifications-box notifications-box-alt">
        <li>
            <span class="bg-purple icon-notification glyph-icon icon-users"></span>
            <span class="notification-text">This is an error notification</span>
            <div class="notification-time">
                a few seconds ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
        <li>
            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
            <span class="notification-text">This is a warning notification</span>
            <div class="notification-time">
                <b>15</b> minutes ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
        <li>
            <span class="bg-green icon-notification glyph-icon icon-random"></span>
            <span class="notification-text font-green">A success message example.</span>
            <div class="notification-time">
                <b>2 hours</b> ago
                <span class="glyph-icon icon-clock-o"></span>
            </div>
            <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</div>
</div>
</div>
</div>
        

    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div id="page-wrapper">
        <div id="page-header" class="bg-gradient-9">
    <div id="mobile-navigation">
        <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
        <input type="hidden" name="u_id" id="u_id" value="<?php echo $u_id;?>">
         <input type="hidden" name="v_id" id="v_id" value="<?php echo $v_id;?>">
        <a href="index.html" class="logo-content-small" title="MonarchUI"></a>
    </div>
    <div id="header-logo" class="logo-bg">
        <!--<a href="index.html" class="logo-content-big" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a href="index.html" class="logo-content-small" title="MonarchUI">
            Monarch <i>UI</i>
            <span>The perfect solution for user interfaces</span>
        </a>
        <a id="close-sidebar" href="#" title="Close sidebar">
            <i class="glyph-icon icon-angle-left"></i>
        </a>-->
    </div>
    <div id="header-nav-left">
        <div class="user-account-btn dropdown">
            <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">               
                <span id="u_name"></span>
                <span id="img_display"><img/></span>
                <i class="glyph-icon icon-angle-down"></i>
            </a>
            <div class="dropdown-menu float-left">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <div id="img_data1">
                                <img height="50" id="img_display" width="50" />
                            </div>
                          <!--<span id="img_data"></span>   -->
                        </div>
                        <div class="user-info">
                           
                           <a href='javascript:void(0);' onclick="Edit()">Edit profile</a>
                            <a href="#" title="View notifications">View notifications</a>
                        </div>
                        
                    </div>
                    <div class="divider"></div>
                    <ul class="reset-ul mrg5B">
                        <li>
                            <a href="#">
                                <i class="glyph-icon float-right icon-caret-right"></i>
                                View order
                                
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyph-icon float-right icon-caret-right"></i>
                                View delivery pending
                                
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyph-icon float-right icon-caret-right"></i>
                                View account details
                                
                            </a>
                        </li>
                    </ul>
                    <div class="pad5A button-pane button-pane-alt text-center">
                      <a href='javascript:void(0);' onclick="Logout_user()">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- #header-nav-left -->

    

    </div><!-- #header-nav-right -->

</div> 
         <div id="page-sidebar">
    <div class="scroll-sidebar">
        

    <ul id="sidebar-menu" style="list-style: none;">
   
	<li id="test">
       <!--  <a href="#" title="Product">
        
            <span style="color:red">PRODUCT</span>
        </a>
      

           <ul>
                <li><a href="<?php echo base_url(); ?>Create_Product" title=" Create Product"><span>Create Product</span></a></li>               
                <li><a href="<?php echo base_url(); ?>View_Product" title="View Product"><span>View Product</span></a></li>
                <li><a href="<?php echo base_url(); ?>upload_Product" title="Upload Product"><span>Upload Product</span></a></li>  
			<input type="hidden" name="ca_tbl_id" id="ca_tbl_id" value="<?php echo $ca_id;?>">  
          <input type="hidden" name="inv_no" id="inv_no" value="">  
          <input type="hidden" class="form-control" placeholder="Enter GSTIN"value="<?php echo $cust_id;?>" name="cust_id" id="cust_id">
            </ul>-->
       <!-- .sidebar-submenu -->
    </li>
  <li> 	<span style="color:red; display:none;">Invoices pending</span>	  
  <ul id="myList" > 
  
   </ul></li>
		</ul>
    </div>
</div>
        <script>
             $(document).ready(function () {
				
				 left_menu();
	   profile();
	  image();
   });
   function left_menu()
   {
	    //alert(u_id);
                  var u_id=$("#v_id").val();
                  //alert(u_id);
		// var u_id=$("#u_id").val();
		  $.ajax({ 
		   url: "<?php echo base_url(); ?>Dashboard/get_side_menu1", 
			method:"POST",
			//data:"u_id="+u_id,
             dataType: "json",       
		   success: function(data)  
		   {	var content="";
                        var temp="";
		  // alert(data);
		   //  var data = JSON.parse(xmlhttp.responseText);
                              //  console.log(data);
                            //  alert(JSON.stringify(data));
							   for(var i=0;i<data.length;i++)
                                {
                                    if(data[i].parent==temp)
                                    {
                                        content+='<li ><a href="'+data[i].onclick+'"><img src="<?php echo base_url();?>icons/vendor.png" width="10px" height="12px"><span style="color:red;font-weight:bold;">'+data[i].child+'</span></a></li>';
                                    }
                                    else
                                    {
										//alert(data[i].fa_fa_icon);
                                        temp=data[i].parent;
                                        content+='<li >';
                                        content+='<a href="#">';
                                        content+='<i class="fa" ><img src="<?php echo base_url();?>icons/chaptermaster.png" width="16px" height="18px"><span style="color:red;font-weight:bold;">'+temp+'</span></i>';
                                        content+='<span class="pull-right-container">';
                                     //   content+='<i class="fa fa-angle-left pull-right"></i>';
                                        content+='</span>';        
                                        content+='</a>';   
										content+='<div class="sidebar-submenu">',
                                        content+='<ul style="list-style: none;">';
                                        content+='<li><a href="'+data[i].onclick+'"><img src="<?php echo base_url();?>icons/chaptermaster.png" width="10px" height="12px"><span style="color:red;font-weight:bold;">'+data[i].child+'</span></a></li>';

                                    }
                                    if(i!=data.length-1)
                                    {
                                        if(data[i+1].parent!=temp)
                                        {
                                            content+='</div></ul></li>';
                                        }
                                    }
                                    else
                                    {
                                        content+='</div></ul></li>';
                                    }
                                }
                                $("#test").html(content);
		   }
		  });
   }
   function left_menu_1()
   {
	    //alert(u_id);
                  var u_id=$("#v_id").val();
                  //alert(u_id);
		// var u_id=$("#u_id").val();
		  $.ajax({ 
		   url: "<?php echo base_url(); ?>Dashboard/get_side_menu1", 
			method:"POST",
			//data:"u_id="+u_id,
             dataType: "json",       
		   success: function(data)  
		   {	var content="";
                        var temp="";
		  // alert(data);
		   //  var data = JSON.parse(xmlhttp.responseText);
                              //  console.log(data);
                            //  alert(JSON.stringify(data));
							   for(var i=0;i<data.length;i++)
                                {//alert(data[i].fa_fa_icon);
                                    if(data[i].parent==temp)
                                    {
                                        content+='<li ><a href="'+data[i].onclick+'"><img src="<?php echo base_url();?>icons/'+data[i].fa_fa_icon+'" width="16px" height="18px"><span style="color:red;font-weight:bold;">'+data[i].child+'</span></a></li>';
                                    }
                                    else
                                    {
										
                                        temp=data[i].parent;
                                        content+='<li >';
                                        content+='<a href="#">';
                                        content+='<i class="fa" ><img src="<?php echo base_url();?>icons/'+data[i].fa_fa_icon+'" width="16px" height="18px"><span style="color:red;font-weight:bold;">'+temp+'</span></i>';
                                        content+='<span class="pull-right-container">';
                                     //   content+='<i class="fa fa-angle-left pull-right"></i>';
                                        content+='</span>';        
                                        content+='</a>';   
										content+='<div class="sidebar-submenu">',
                                        content+='<ul style="list-style: none;">';
                                      //  content+='<li><a href="'+data[i].onclick+'"><img src="<?php echo base_url();?>icons/'+product.png+'width="10px" height="12px"><span style="color:red;font-weight:bold;">'+data[i].child+'</span></a></li>';

                                    }
                                    if(i!=data.length-1)
                                    {
                                        if(data[i+1].parent!=temp)
                                        {
                                            content+='</div></ul></li>';
                                        }
                                    }
                                    else
                                    {
                                        content+='</div></ul></li>';
                                    }
                                }
                                $("#test").html(content);
		   }
		  });
   }
   function profile()
	 {
		 //alert(u_id);
                  var u_id=$("#v_id").val();
                  //alert(u_id);
		// var u_id=$("#u_id").val();
		  $.ajax({ 
		   url: "<?php echo base_url(); ?>Dashboard/fetch_user_details/", 
			method:"POST",
			data:"u_id="+u_id,
                        dataType: "json",       
		   success: function(data)  
		   {	
		 
			var u_name=data[0].Name;
			
			$("#u_name").html(u_name);
			
		   }
		  });
		
	 }
       
          function image()
	 {
		 //alert(u_id);
        var u_id=$("#v_id").val();  
     //   alert(u_id);
   /*   var directory ="<?php echo base_url(); ?>Image_file_container/Vendor/"+u_id+"/image/";
       var temp = document.createElement('div');
        var temp_img = document.createElement('div');
        var link = document.createElement("a");
          link.setAttribute("href", "javascript:void(0);");
          link.className = 'disp';
           temp_img.id = 'image_display';
           temp_img.className = 'image_display';
           temp_img.append(link);
            temp.id ='image_display1';
           temp.className = 'image_display1';
         //   temp.innerHTML = '<img height="50" id="img_display_'+i+'" width="50" src="' + data.im[i] + '"</a>';
            temp.appendChild(temp_img);
            $map = directory_map('./mydirectory/', FALSE, TRUE);
       // $.ajax({
       //          url : directory,
       //          success: function (data) {
       // $(data).find("a").attr("href", function (i, val) {
       //     if( val.match(/\.(jpe?g|png|gif)$/) ) { 
       //         $("#u_name").append( "<img src='"+ directory + val +"'>" );
       //     } 
       // });
 //   }*/
//});

 $.ajax({ 
		   url: "<?php echo base_url();?>Dashboard/fetch_image", 
			method:"POST",
			data:"u_id="+u_id,
                         dataType: "JSON",       
                        success: function(data)  
                        {
                        //    alert(data);
                          // alert(JSON.stringify(data));
                       //   $("#img_data".attr("src", "Image_file_container/Vendor/"+u_id+"/image/"+data));
                          //$("#output".attr("src", "images/profile/"+data[0].CUSTOMER_Image);
                         
                          var data_im="<?php echo base_url(); ?>Image_file_container/Vendor/"+u_id+"/image/"+data;
                         // alert(data_im);
                          $('<img src="' + data_im +'" width="50" height="50" />').appendTo('#img_display');
                          $('<img src="' + data_im +'" width="50" height="50" />').appendTo('#img_data1');
                           // $('#img_data').appendChild(temp);
                          //document.getElementById("#img_display").src=data_im;
                            //var temp = document.createElement('div');
//                            temp.innerHTML = '<a href="' + data_im+ '" download><img height="50" id="img_display" width="50" src="' + data_im + '"/></a>';
//                             $('#img_data').appendChild(temp);
                           // var temp_img = document.createElement('div');
                         /*     alert(data_im)  ;  
                           var temp = document.createElement('div');
        var temp_img = document.createElement('div');
        var link = document.createElement("a");
          link.setAttribute("href", "javascript:void(0);");
          link.className = 'disp';
           temp_img.id = 'image_display';
           temp_img.className = 'image_display';
           temp_img.append(link);
            temp.id ='image_display1';
           temp.className = 'image_display1';
           temp.innerHTML = '<img height="50" id="img_display2323" width="50" src="' + data_im[0] + '"</a>';
            temp.appendChild(temp_img);
            
            $('#img_data')[0].appendChild(temp);
            */
             /*  var elem = document.createElement("img");
               elem.setAttribute("src","<?php echo base_url(); ?>Image_file_container/Vendor/"+u_id+"/image/"+data);
                  if (container !== null) {
      document.getElementById("#user-img").appendChild(elem);
    } else console.log("aaaaa");
*/
             //  document.getElementById("#user-img").appendChild(elem);
                        }
		  });

	 }
        
         function Logout_user()
	 {
		 //alert("madhuri");
		  $.ajax({ 
		   url: "<?php echo base_url();?>Dashboard/user_logout", 
			method:"POST",
			//data:"u_id="+u_id,
                         dataType: "JSON",       
                        success: function(data)  
                        {	

                             var url=data.redirect_path;
                             window.location.href=url;

                        }
		  });
	 }
        
         
        function Edit()
	 {
		window.location = "<?php echo base_url()?>Dashboard/edit_vendor";
	 }
	 $(document).ready(function () {


   $.ajax({ 
		   url: "<?php echo base_url(); ?>Generate_Invoice/fetch_pending_invoice/", 
			method:"POST",
			//data:"ca_id="+CA_id+"&cust_id="+cust_id,
                     dataType: "json",       
		   success: function(data1)  
		   {	
                      // alert(JSON.stringify(data1));
                        var len=data1.length;
                        if(len<=10)
                        {
                        var array=[];
                      for (var m=len-1;m>=0;m--){
                           array.push(data1[m]);
                        }
                       var data=[];
                       data=array;
                     
                        	for(var i=0; i<len; i++){
//                          var node = document.createElement("LI");
//                var textnode = document.createTextNode("<a>"+data[i].Invoice_Number+"</a>");
//              node.appendChild(textnode);
//                document.getElementById("#myList").appendChild(node);
var options = [
    {href: "#", text:data[i].pending_Invoice_Number},
    
];
var options1 = [
    {href: "#", text:data[i].Customer_Agreement_Id},
    
];
           $.each(options, function(index) {
    $("#myList").append($("<li>").append($("<a>", { href: options[index].href, text : options[index].text})));
});
                     }
                    $("#myList").delegate("li", "click", function (e) {
  // alert($(this).text());
  display_added_product1($(this).text());
});
                   }
                   else{
                      // alert("ddd");
                       var loop=len-10;
                        var array=[];
                      for (var m=len-1;m>=loop;m--){
                           array.push(data1[m]);
                        }
                       var data=[];
                       data=array;
                     
                        	for(var i=0; i<len; i++){
//                          var node = document.createElement("LI");
//                var textnode = document.createTextNode("<a>"+data[i].Invoice_Number+"</a>");
//              node.appendChild(textnode);
//                document.getElementById("#myList").appendChild(node);
var options = [
    {href: "#", text:data[i].pending_Invoice_Number},
    
];
var options1 = [
    {href: "#", text:data[i].Customer_Agreement_Id},
    
];
           $.each(options, function(index) {
    $("#myList").append($("<li>").append($("<a>", { href: options[index].href, text : options[index].text})));
});
                     }
                    $("#myList").delegate("li", "click", function (e) {
  // alert($(this).text());
  display_added_product1($(this).text());
});
                   }
                    }
          });
          
          });
         
   function display_added_product1(Ca_id){
                                 var CA_id=Ca_id;
                                 $("#inv_no").val(CA_id);
                                   $.ajax
                                            (
                                                    {
                                                        url: "<?php echo base_url(); ?>Generate_Invoice/set_inv_no_in_session",
                                                        method: "POST",
                                                        data: "CA_id="+CA_id,
                                                        // processData: false,
                                                        //  contentType: false,
                                                        // type:"JSON",
                                                        success: function (data)
                                                        {
//                                                            alert("Ok");
//                                                            location.reload();
//                                                            
                                                        document.location.href="<?php echo base_url();?>"+"Generate_Invoice";
                                                       
                                                        }
                                                    });
                                // $.session.set("invoice_number", "storevalue");
                                 //document.location.href="<?php echo base_url();?>"+"admin/invoice_create/";
              
                                }
                              

         </script>