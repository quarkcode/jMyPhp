<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		    
   	<title><?=$this->Title . " | ". $this->AppTitle ?> | Sistema de gesti&oacute;n de contenidos</title>
    
	<link type="text/css" href="<?=apppath ?>themes/<?=$this->Theme?>/style.css" rel="stylesheet" />
	
	<script type="text/javascript" src="<?=apppath?>js/funciones.js"></script>
	<script type="text/javascript" src="<?=apppath?>js/jquery.js"></script>
	<script type="text/javascript" src="<?=apppath?>js/jquery.form.js"></script>
	<script type="text/javascript" src="<?=apppath?>js/jquery.qtip.js"></script>
	<script type="text/javascript" src="<?=apppath?>js/jquery.datepicker.js"></script>
	<script type="text/javascript" src="<?=apppath?>js/tiny_mce/tiny_mce.js"></script>    
	
	<?=$this->Head ?>
		   
</head>

<body>

	<div id="header">
		<? $this->getLayer('header'); ?>
	</div>
	
	<table width="100%" cellpadding="0" cellspacing="0">
		<tr>
			<td id="sidebar"><? $this->getLayer('sidebar'); ?></td>
			<td id="main"><?=$this->Body ?></td>
		</tr>
	</table>

	<div id="footer">
		<? $this->getLayer('footer'); ?>
	</div>
	
</body>
</html>
