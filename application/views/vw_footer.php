	<!-- Footer start -->
		  <footer id="footWrapper" class="footer-minimal">
		    	<div class="footer-middle no-bg sm-padding">
				    <div class="container">
					    <div class="row over-hidden">
						    <div class="tbl m-b-2">
						    	<a href="<?php echo base_url()?>welcome"><img alt="" src="<?php echo base_url()?>Main-Web/assets/images/footer_logo.png" width="180px" height="90px"></a>
						    </div>
						    
						    <!-- footer copyrights left cell -->
				    		<div class="copyrights over-hidden tbl">ɠCopyrights <b class="main-color">full2store</b> 2015. All rights reserved.</div>
				    						    						    		
				    		<!-- footer social links right cell start -->
						    <div class="tbl m-t-2 over-hidden">
						    	<ul class="footer-menu">
								    <li><a href="<?php echo base_url()?>welcome">Home</a></li>
								    <li><a href="<?php echo base_url()?>welcome/about">About</a></li>
								    <li><a href="<?php echo base_url()?>welcome/faq">FAQ</a></li>
								    <li><a href="<?php echo base_url()?>welcome/blogs">Blog</a></li>
								    <li><a href="<?php echo base_url()?>welcome/contact">Contact</a></li>
							    </ul>
						    </div>
						    <!-- footer social links right cell end -->
						    
					    </div>
				    </div>	
			    </div>
			    
		    </footer>
			<!-- Footer end -->

		</div>

		<!-- Back to top Link -->
	    <a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

		<!-- Load JS plugins -->
		
 		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/js/jquery-1.12.0.min.js"></script>
 		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/js/assets.js"></script>

 		<!-- SLIDER REVOLUTION  -->
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems !  +
			The following part can be removed on Server for On Demand Loading) -->
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<!-- END SLIDER REVOLUTION 5.0 EXTENSIONS -->
		<script type="text/javascript">
				var tpj=jQuery;			
				var revapi70;
				tpj(window).load(function() {
					if(tpj("#slider").revolution == undefined){
						revslider_showDoubleJqueryError("#slider");
					}else{
						revapi70 = tpj("#slider").show().revolution({
							sliderType:"standard",
							jsFileLocation:"Main-Web/assets/revolution/js/",
							sliderLayout:"fullwidth",
							dottedOverlay:"none",
							delay:9000,
							navigation: {
								keyboardNavigation:"off",
								keyboard_direction: "horizontal",
								mouseScrollNavigation:"off",
								onHoverStop:"off",
								touch:{
									touchenabled:"on",
									swipe_threshold: 75,
									swipe_min_touches: 1,
									swipe_direction: "horizontal",
									drag_block_vertical: false
								}
								,
								arrows: {
									style:"zeus",
									enable:true,
									hide_onmobile:true,
									hide_under:600,
									hide_onleave:true,
									hide_delay:200,
									hide_delay_mobile:1200,
									tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
									left: {
										h_align:"left",
										v_align:"center",
										h_offset:30,
										v_offset:0
									},
									right: {
										h_align:"right",
										v_align:"center",
										h_offset:30,
										v_offset:0
									}
								}
							},
							responsiveLevels:[1240,1024,778,480],
							visibilityLevels:[1240,1024,778,480],
							gridwidth:[1240,1024,778,480],
							gridheight:[600,600,600,600],
							lazyType:"smart",
							parallax: {
								type:"mouse+scroll",
								origo:"slidercenter",
								speed:2000,
								levels:[1,2,3,20,25,30,35,40,45,50],
								disable_onmobile:"on"
							},
							shadow:0,
							spinner:"spinner2",
							autoHeight:"off",
							disableProgressBar:"on",
							hideThumbsOnMobile:"off",
							hideSliderAtLimit:0,
							hideCaptionAtLimit:0,
							hideAllCaptionAtLilmit:0,
							debugMode:false,
							fallbacks: {
								simplifyAll:"off",
								disableFocusListener:false,
							}
						});
					}
				});	/*ready*/
				
		</script>

 		<!-- general script file -->
		<script type="text/javascript" src="<?php echo base_url()?>Main-Web/assets/js/script.js"></script>

	</body>

<!-- Mirrored from www.Reyank.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2017 07:56:02 GMT -->
</html>