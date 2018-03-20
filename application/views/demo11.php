<?php
include('header.php');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/script.js"></script>   
<!------- Including CSS File ------>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/abc.css">

<h2>Multiple Image Upload Form</h2>
<form enctype="multipart/form-data" action="" method="post" id="bbbb" name="bbbb">
First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 100KB.
<div id="filediv"><input name="file[]" type="file" id="file" /></div>
<input type="button" id="add_more" class="upload" value="Add More Files"/>
<input type="submit" value="submit" name="aaaa" id="aaaa" class="upload"/>
</form>
<!------- Including PHP Script here ------>


<script>
    $("form[name='bbbb']").submit(function (e)
    {
      //  alert("dsa");
         e.preventDefault();
          var formData = new FormData($(this)[0]);       
           $.ajax({
                url: "<?php echo base_url(); ?>" +"Demo/data11",
                type: "post",
                 data: formData,               
                success: function (msg)        
                {
                    alert(msg);
                    if(msg){
                        alert("success");
                    }
                }, 
        cache: false,
        contentType: false,
        processData: false    
       
    });
    });
</script><?php
include('footer.php');
?>

