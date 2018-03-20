<?php
include('header.php');
$business_category_id=$this->session->userdata('business_category_id');
?>
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
<script type="text/javascript"  src=" https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"  src=" https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<div id="page-content-wrapper">
    <div id="page-content">                
        <div class="container">
            <div id="page-title">
                 <section>
                     <div class="container">
                         <div class="row">
                             <div class="col-md-12">
                                   <h3 style="margin-bottom:10px">Category Wise Products</h3>  
                                        <div class="col-md-9">
                                         <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                        </table>   
                                        </div>  
                                         <div class="col-md-3" style="border: 1px solid #9e9e9e">
                                             <input type="hidden" id="cat_id" value="<?php echo $business_category_id?>">
					<div id="chk_box">			
					</div>
					<input type="hidden" id="disply_ids"> 
					<div style="padding-bottom: 10px">
					 <button type="button" >Get Values</button>
                                         </div>
                                        </div>  
                                 </div>
                           </div>
                         </div>
                 </section>
               
				  
<!--					<div class="form-group">
					
					</div>-->
                </div>
             </div>
         </div>
    </div>
<!---update-->
										
<?php
include('footer.php');
?>
<script>

 $(document).ready(function() {
        $("button").click(function(){
            var favorite = [];
            $.each($("input[name='sport']:checked"), function(){            
                favorite.push($(this).val());
            });
           var ids= favorite.join(",")
		 $("#disply_ids").val(ids)
		   var a=  $("#disply_ids").val();
		  
		 //  alert($("#disply_ids").val(ids));
		   $.ajax({
					type:'POST',
					url: "<?php echo base_url(); ?>Categoury_Filter/display_filter_data/", 
					dataType: 'json',
					data:"ids="+a,
					//cache: false,
					success:function(data){
						//alert(data);
					
						
						  var len=data.length;
                                 var content = "";
                                 var user_array = data;
                                 content +="<thead><tr> <th>Sr No.</th><th>Product Name</th><th> Quantity Available</th><th> Price</th><th style='width: 100px;'>Edit</th></tr></thead>";
                                 content += '</tr></thead><tbody>';
                                     for (i = 0; i < user_array.length; i++)
                                     {

                                                    content += "<tr>" ;
                                                    content +=  "<td class='center black_font'>" + (i+1) + "</td>" +
                                                       "<td class='center black_font '>" + user_array[i].product_version_name + "</td>" +
                                                      	 "<td class='center black_font '>" + user_array[i].Quantity_available + "</td>" +			 
                                                        "<td class='center black_font '>" + user_array[i].final_price_of_product + "</td>" +
                                                        "<td class='center black_font'><button class='btn btn-danger' id='delete'onclick='edit_products_version(" + user_array[i].product_version_id + ")' style='width: 2px;'><span class='glyphicon glyphicon-edit' style='margin-left:-2px'></span></button><button class='btn btn-primary' id='delete' onclick='delete_product(" + user_array[i].product_version_id + ")'><span class='glyphicon glyphicon-trash'  style='width: 2px; margin-left:-12px; '></span></button></td>"+
                                                 "</tr>";                      
                                     }
                                  content += '</tbody>';
                               $('#example').html(content);

                                 $(document).ready(function () {
                                     $('#example').DataTable();

                                 });
						
						//alert(data.length);
				}
			});	
        });
    });
	

	  $(document).ready(function ()
    {
 var get_data = 1;
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url(); ?>" + "Create_Product/get_city1_new",
            data: 'city=' + get_data,
            dataType: 'json',
            success: function (res) { 
			
				
                var points = [];			
                points = convert(res);
				
				 $.ajax({
            type: 'POST',
            url: "<?php echo base_url(); ?>" + "Categoury_Filter/get_checkbox",
            data: 'ids=' + points,
           dataType: 'json',
            success: function (res) { 
		
			   for(var i=0;i<res.length;i++){		
		var title   =document.getElementById('test').value;
        var node = document.createElement('div');        
        node.innerHTML = '<input  type="checkbox" id="check_box' + res[i].product_category_id + '" name="sport" value='+ res[i].product_category_id +'><label for="check' + res[i].product_category_id + '">'+ res[i].Name +'</label>';       
        document.getElementById('chk_box').appendChild(node);    
			   }            
            }
        });
				              
            }
        });
		 
		function convert(array) {
      //  console.log(array);
         var id  = $("#cat_id").val();
         var iddata =[]; var temp=0;
         iddata.push(id);
         var length = array.length;
         var map = {}, node, roots = [];
            for (var m = 0; m < length; m++) {
             temp=0;
             for(var k=0;k<iddata.length;k++){          
            if (array[m].product_category_id == iddata[k] || array[m].category_id == iddata[k] )
            {           
                   temp=1;
                   iddata.push(array[m].product_category_id);
                   break;
               }}
           
            } 
             //console.log(roots);
        return iddata;
	   
	   //console.log(iddata);
    }
		  });
		
function filters(id)
{
	//alert(id);
	if( document.getElementById("filter_chk_"+id).checked)
	{
	/*$.ajax({
					type:'POST',
					url: "<?php echo base_url(); ?>Categoury_Filter/display_filter", 
					dataType: 'json',
					//data:"param="+parameter,
					cache: false,
					success:function(data){
						//alert(data.length);
	}*/
	}
		
	}
	
	

    var verification;
      
  
       
</script>    