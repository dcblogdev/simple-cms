<?php 
/*-------------------------------------------------------+
| Content Management System 
| http://www.phphelptutorials.com/
+--------------------------------------------------------+
| Author: David Carr  Email: dave@daveismyname.co.uk
+--------------------------------------------------------+*/
require('../includes/config.php'); 

if(isset($_POST['submit'])){

	$title = $_POST['pageTitle'];
	$content = $_POST['pageCont'];
	
	$title = mysql_real_escape_string($title);
	$content = mysql_real_escape_string($content);
	
	mysql_query("INSERT INTO pages (pageTitle,pageCont) VALUES ('$title','$content')")or die(mysql_error());
	$_SESSION['success'] = 'Page Added';
	header('Location: '.DIRADMIN);
	exit();

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo SITETITLE;?></title>
<link href="<?php echo DIR;?>style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">

<div id="logo"><a href="<?php echo DIR;?>"><img src="images/logo.png" alt="<?php echo SITETITLE;?>" title="<?php echo SITETITLE;?>" border="0" /></a></div><!-- close logo -->

<!-- NAV -->
<div id="navigation">
<ul class="menu">
<li><a href="<?php echo DIRADMIN;?>">Admin</a></li>
<li><a href="<?php echo DIRADMIN;?>?logout">Logout</a></li>
<li><a href="<?php echo DIR;?>" target="_blank">View Website</a></li>
</ul>
</div>
<!-- END NAV -->

<div id="content">

<h1>Add Page</h1>

<form action="" method="post">
<p>Title:<br /> <input name="pageTitle" type="text" value="" size="103" /></p>
<p>content<br /><textarea name="pageCont" cols="100" rows="20"></textarea></p>
<p><input type="submit" name="submit" value="Submit" class="button" /></p>
</form>

</div>

<div id="footer">	
		<div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>