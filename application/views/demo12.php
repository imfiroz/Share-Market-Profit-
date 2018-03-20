<?php
include('header.php');
?>
<script src="<?php echo base_url()?>assets/js/validate.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
       				<div class="panel">
					<div class="panel-body">
						<h3 class="title-hero">
						   FILL HSN DETAILS
						</h3>
						<div class="example-box-wrapper">
							<form class="form-horizontal bordered-row" id="button_submit" name="button_submit" method="post">
								
                                                             <div class="form-group">
                    <label class="col-sm-3 control-label">Multiselect</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder=""  name="swSearch" id="swSearch">                               
                            </div>
                           
                        </div>
                    </div>
                </div>
								
													
								<div>
                                                                    <button class="btn btn-alt btn-hover btn-black" href="#" style="margin-left:450px" type="submit">
										<span>Submit</span>
											<i class="glyph-icon icon-arrow-right"></i>
                                                                    </button>
                                                                  
									
								</div>
							</form>
						</div>
					
                                </div>
                         </div>
<?php
include('footer.php');
?>
<script>
    $("#swSearch").autocomplete({
	minLength: 1,
	source: function(req, add){
		$.ajax({
                         url: "<?php echo base_url(); ?>"+"Demo/autocomplete", 
			//url: '/search', //Controller where search is performed
			dataType: 'json',
			type: 'POST',
			data: req,
			success: function(data){
				if(data.response =='true'){
				   add(data.message);
				}
			}
		});
	}
});
 
    </script>