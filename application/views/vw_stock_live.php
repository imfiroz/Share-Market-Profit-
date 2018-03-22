<?php include('header.php') ?>
<div id="page-content-wrapper">
    <div id="page-content">                
        <div class="container">
            <div id="page-title">
                 <h2 align="center" style="border-bottom:1px solid #606f8d; padding-bottom:15px; margin-bottom:15px">Live Script Status</h2>
                 <!--Access Token Button-->
                 <lable>Note: Upstox access token has a validity of 24 hours so you only have to authenticate yourself once during the day</lable>
                 <input type="button" class="pushnotification" OnClick="PopupCenter()" value="Authenticate Upstox" />
                 
                 <div class="row" style="margin-top :15px; padding: 10px;"> 
					 
						<div class="tile-box tile-box-alt bg-primary" style="background:#4f536d">
							<div class="tile-header">TATA</div>
							<div style="text-align:left; margin-left:10px; ">
										Equity Buy
							</div>
							<h3><i class="glyphicon glyphicon-stats">&nbsp;</i>LTP : 456</h3>
							<div class="tile-content-wrapper">
								<div class="tile-content" id="total_cust_rw">
									<span>
										Target 1 = 1222 
										Target 2 = 4555 
										Stop Loss = 123
									</span>
								</div>
							</div>
							<a href="<?php echo base_url("View_Script");?>" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
								view details
							<i class="glyph-icon icon-arrow-right"></i>
							</a>
						</div>
               			<div class="tile-box tile-box-alt bg-primary" style="background:#4f536d">
							<div class="tile-header">TATA</div>
							<div style="text-align:left; margin-left:10px; ">
										Equity Buy
							</div>
							<h3><i class="glyphicon glyphicon-stats">&nbsp;</i>LTP : 456</h3>
							<div class="tile-content-wrapper">
								<div class="tile-content" id="total_cust_rw">
									<span>
										Target 1 = 1222 
										Target 2 = 4555 
										Stop Loss = 123
									</span>
								</div>
							</div>
							<a href="<?php echo base_url("View_Script");?>" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="This is a link example!">
								view details
							<i class="glyph-icon icon-arrow-right"></i>
							</a>
						</div>
                	
                
                 </div>
               
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
<script type="text/javascript">
	function PopupCenter() 
	{
		var url = "https://api.upstox.com/index/dialog/authorize?apiKey=3tAI6YEbd48Hqw5zEV2YM9brEDNaps4V7dRcblQM&redirect_uri=<?php echo base_url(); ?>Stock_Live&response_type=code";
		var title = "Upstox";
		var w = "500";
		var h = "270";
    	// Fixes dual-screen position                         Most browsers      Firefox
		var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : window.screenX;
		var dualScreenTop = window.screenTop != undefined ? window.screenTop : window.screenY;

		var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
		var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

		var left = ((width / 2) - (w / 2)) + dualScreenLeft;
		var top = ((height / 2) - (h / 2)) + dualScreenTop;
		
		
		var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

		// Puts focus on the newWindow
		if (window.focus) {
			newWindow.focus();
		}
	}
	
</script>