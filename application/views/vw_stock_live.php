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
					 <?php
					 $count = 0;
					 foreach($script_data as $script):
					 ?>
						<div class="tile-box tile-box-alt bg-primary" style="background:#4f536d">
							<div class="tile-header"><?= $script->Name ?></div>
							<div style="text-align:left; margin-left:10px; ">
								Trading Type : <?php
									if($script->trading_type == 1):
										echo 'Equity';
									elseif($script->trading_type == 2):
										echo 'Future & Option';
									elseif($script->trading_type == 3):
										echo 'BTST';
									else:
										echo 'Commodity'; 
									endif;
								?> &#126;&nbsp;Transaction Type : <?= ($script->transaction_type == 1) ? 'BUY' : 'SELL' ;  ?>
							</div>
							<i class="glyphicon glyphicon-stats">&nbsp;</i>
							<h3 id="stock_show<?php echo $count; ?>"></h3>
							<div class="tile-content-wrapper">
								<div class="tile-content" id="total_cust_rw">
									<span>
										Target 1 = <?= $script->Target1?> 
										Target 2 = <?= $script->Target2?> 
										Stop Loss = <?= $script->Toploss?>
									</span>
								</div>
							</div>
							<a href="<?php echo base_url("View_Script");?>" class="tile-footer tooltip-button" data-placement="bottom" title="" data-original-title="View this script in details!">
								view details
							<i class="glyph-icon icon-arrow-right"></i>
							</a>
						</div>
                	<?php
					 $count++;
					 endforeach;
					?>
                 </div>
               
			</div>
		</div>
	</div>
</div>
<?php include('footer.php') ?>
<script type="text/javascript">
	
$(document).ready(function() {
<?php $ct = 0; foreach($script_data as $script_ct): ?>
		   setInterval(fetchdata<?=  $ct ?>, 1000);
<?php $ct++; endforeach;  ?>
	   });
<?php
	$count = 0;
	foreach($script_data as $script_count):
?>
	
						
	function fetchdata<?=  $count ?>()
	{

		$.ajax({
			url: "<?php echo base_url(); ?>Stock_Feed/real_time_automation",
			type: 'post',
			success: function(response)
			{
				// Perform operation on the return value
				//alert(response);
				var content = ""; 
				//var len = response.length;
				var json_obj = $.parseJSON(response);
				var len = json_obj.length;
				//alert(len);
				//for (var i = 0; i < len; i++) 
				//{
				content += "LTP : <b>" + json_obj[<?php echo $count; ?>]+ "</b>";

				//content += 'LTP'; 
				//}
				$('#stock_show<?php echo $count; ?>').html(content);

				//$('#stock_show').html(content);
				//document.getElementById('result').textContent = response.data;
			}
		});
	}
<?php
	$count++;
	endforeach; 
?>			
	
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