<?php
	$rtl              =	$this->db->get_where('settings' , array('type'=>'rtl'))->row()->description;
	$system_name        =	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
	$system_title       =	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
	$account_type       =	$this->session->userdata('login_type');
	?>
<!DOCTYPE html>
<html lang="en" dir="<?php if ($rtl == 'rtl') echo 'rtl';?>">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EduAppGT PRO - School Management System">
    <meta name="author" content="Web Studio Guatemala">
	<link rel="icon" type="ico" sizes="16x16" href="style/images/favicon.ico">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
	
	<link rel="stylesheet" href="style/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="style/bower_components/themify-icons/themify-icons.css" />
    
	<title><?php echo $page_title;?> | <?php echo $system_title;?></title>
	<?php include 'topcss.php';?>	
</head>

<body>
	<div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
		<?php include $account_type.'/navigation.php';?>	
		<?php include 'header.php';?>
		 <div id="page-wrapper">
            <div class="container-fluid">
		 	<?php include $account_type.'/'.$page_name.'.php';?>
		 	</div>
		 	<?php include 'footer.php';?>
    	</div>
    </div>
    <?php include 'modal.php';?>
    <?php include 'scripts.php';?>  
</body>
</html>