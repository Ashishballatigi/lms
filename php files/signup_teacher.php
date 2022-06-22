<?php include('header.php'); ?>
<style>
	body#login::before {
    content: "";
    background:#42c7c9;
    position: absolute;
    top: 0;
    /* z-index: 1; */
    left: 0;
    width: 100%;
    height: 100%;
}



</style>
  <body id="login">
    <div class="container">
	<div class="row-fluid">
	
	<div class="span6">
		<div class="pull-right">
		
				<?php include('signup_teacher_form.php'); ?>
				
		</div>
	</div>
    </div>
	<div class="row-fluid">
		
	
<?php include('script.php'); ?>
  </body>
</html>