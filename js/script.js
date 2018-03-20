         var abc = 0;   var i=0;     // Declaring and defining global increment variable.
            $(document).ready(function() {
            //  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
            $('#add_more').click(function() {
			if(i!=0){alert("Only One Image Valid");}
			else{
            $("#test").append($("<div/>", {
            id: 'filediv222',
           }).append($("<input/>", {
			name: 'file[]',
			type: 'file',
			id: 'file',
			
			})));
			}
			});
			
		$('body').on('change', '#file', function() {
			i=i+1;
							
		if (this.files && this.files[0]) {
		abc += 1; // Incrementing global variable by 1.
		var z = abc - 1;
		var x = $(this).parent().find('#previewimg' + z).remove();
		$(this).before("<div class='row column'><div id='abcd" + abc + "' class='abcd'><input type='hidden' id='img_txt[]' name='img_txt[]'><img id='previewimg" + abc + "' src=''/></div></div>");
		var reader = new FileReader();
		reader.onload = imageIsLoaded;
		reader.readAsDataURL(this.files[0]);
		$(this).hide();
		$("#abcd" + abc).append($("<img/>", {
		id: 'img',
		src: 'http://localhost/gigaadm/icons/close.png',
		alt: 'delete'
		}).click(function() {
		$(this).parent().parent().remove();
		}));
			}
			
		});
		// To Preview Image
		function imageIsLoaded(e) {
		$('#previewimg' + abc).attr('src', e.target.result);
		};
		$('#upload').click(function(e) {
		var name = $(":file").val();
		if (!name) {
		alert("First Image Must Be Selected");
		e.preventDefault();
		}
		});
		});
