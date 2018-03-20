<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->

<!--------------------
LOGIN FORM
by: Amit Jakhu
www.amitjakhu.com
--------------------->

<!--META-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>

<!--STYLESHEETS-->
<link href="<?php echo base_url(); ?>css/login/style1.css" rel="stylesheet" type="text/css" />

<!--SCRIPTS-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<!--Slider-in icons-->


</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon" id="user-icon"></div>
    <div class="pass-icon" id="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="" method="post">

	<!--HEADER-->
    <div class="header" id="header">
    <!--TITLE--><h1> Admin Login Form</h1><!--END TITLE-->
    <!--DESCRIPTION--><span>please fill the username and password for successful login</span>
    <!--END DESCRIPTION-->
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content" id="content">
	<!--USERNAME--><input name="username" type="text" class="input username" id="txtUserID" name="txtUserID"  placeholder="Enter Username"onfocus="this.value=''" style="margin-left:25px"/><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password"  id="txtPassword" name="txtPassword" placeholder="Enter Password" onfocus="this.value=''" style="margin-left:25px"/><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer" id="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Login" class="button" onclick="userLogin();"/>
  <button name="submit" value="" class="button1"/><a href="<?php echo base_url(); ?>Welcome/register_admin">Register</a></button>
<!--     <div class="button"><a href="<?php echo base_url(); ?>Welcome/register_admin">Register</a></div>END LOGIN BUTTON-->
<!--<input type="button" name="submit" value="Register"<a href="<?php echo base_url(); ?>Welcome/register_admin" class="forgot"></a></input>   --> 
      
         <!--<div class="forgot"><a href="<?php echo base_url(); ?>Welcome/register_admin" class="forgot">Register</a></div> -->     
  <!--END REGISTER BUTTON-->
    
    <!--END FOOTER-->Forget Password <a href="" id="forget_pass">Click</a> Here.
</div>


<div id="pass_for" style="display: none">
 <div class="contentxx" id="content">
	<!--USERNAME--><input name="email" type="email" class="input email" id="email" name="email"  placeholder="Enter email"onfocus="this.value=''" style="margin-left:25px"/><!--END USERNAME-->
    <button name="submit" value="" class="button1"/><a href="<?php echo base_url(); ?>Welcome/register_admin">Forgot PASSWORD</a></button>

	</div>
</div>
<!--END LOGIN FORM-->
</form>
</div>
<!--END WRAPPER-->

<!--GRADIENT--><div class="gradient"></div><!--END GRADIENT-->
<script type="text/javascript">

$('#forget_pass').click(function(e){  
e.preventDefault();  
    $('#footer, #header,#content,#user-icon,#pass-icon').fadeOut('slow', function(){
        $('#pass_for').fadeIn('slow');
    });
});
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
<script type="text/javascript">
 $(document).ready(function(){

 });
              function userLogin()
        {
           
            event.preventDefault();
            var user_name = $("#txtUserID").val();
            var password = $("#txtPassword").val();
            //alert(user_name);
             var str="user_name=" + user_name + "&password=" + password; 
              $.ajax({
                            type: "POST",
                            url: "<?php echo base_url();?>Welcome/user_login_check_main", // Database name search 
                            data:str,
                            cache: false,
                            dataType: 'json',
                            success: function(response)
                            {
                             //   alert(JSON.stringify(response));
                                var url=response.redirect_path;
			//	window.location.href=url;
                            
                            }
                            });                    
        }
      
</script>
