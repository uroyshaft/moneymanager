<?php
$this->load->helper('html');
?>
<?php print doctype() . "\n";?>
<html>
	<head>
		<title>Welcome to the Money Manager</title>
		
		<!-- Adding the CSS files here -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/960_24_col.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen"/>
	</head>
	
	<body>
		<div class="container_24 container">
			<div class="main-section grid_17">This is the main section</div>
			<div class="sidebar grid_7">This is the side bar</div>
		</div>
	</body>
</html>