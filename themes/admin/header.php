<? global $globals ?>

	<h1>
		Sistema de gesti&oacute;n de contenidos <a href="<?=apppath?>">ir a la web</a>
	</h1>

<? if($_SESSION[$globals['auth']] ) {  ?>
		
	<div class="userPanel">
		<a href='<?=apppath?>account/'><?=$_SESSION['user_nom']?></a>  |  
		<a href='<?=apppath?>logout/'><?=_EXIT_?></a>
	</div>
			
<? } ?>
