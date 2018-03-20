function   generate_customer_satisfaction(){
	 value=document.getElementById("id_display").value;
	 if(value==1){
	  $.ajax({	
				url: "Welcome/get_satisfaction/",                                                          
				method:"POST",	
				// dataType: 'json',        
				success: function(data)  
	  {	
		var percentage=(parseFloat(data)*100)/5;	
		var content='<div class="chart-alt-10 easyPieChart" id="customer_percent" data-percent="'+(Math.round(percentage)+parseFloat(1))+'" ';
		 content+='style="width:100px; height: 100px; line-height: 100px;"><span>'+Math.round(percentage)+'</span>%<canvas width="100" height="100"></canvas><canvas width="100" height="100"></canvas></div>';
		document.getElementById("customer_gauge_meter").innerHTML=content;
	  }
	
	  });
   }
}