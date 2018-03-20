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
  //echo 
  
?>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Stock&Trading/title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicons -->

<link rel="shortcut icon" href="<?php echo base_url() ?>img/ico/owo-icon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.css">
<!-- HELPERS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/helpers/colors.css">
<!-- ELEMENTS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/elements/info-box.css">
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


</div>
 
        <script>
             $(document).ready(function () {
	   profile();
	   
   });
   function profile()
	 {
		 //alert(u_id);
		 var u_id=$("#u_id").val();
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
         </script>