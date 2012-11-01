<? global $globals ?>

<? if($_SESSION[$globals['auth']] ) {  ?>
	
	<ul class="menu">
		
		<li <?= ($_GET['page'] == 'users') ? 'class="selected"' : ''; ?>> 
			<a href='<?=apppath?>admin/users/' /><?=_USERS_?></a>
		</li>
		
		<li <?= ($_GET['page'] == 'modules') ? 'class="selected"' : ''; ?>> 
			<a href='<?=apppath?>admin/modules/' /><?=_MODULES_?></a>
		</li>	
		
		<li <?= ($_GET['page'] == 'configs') ? 'class="selected"' : ''; ?>> 
			<a href='<?=apppath?>admin/configs/' /><?=_CONFIG_?></a>
		</li>		
		
		<li class="<?= ($_GET['page'] == 'news') ? 'selected' : ''; ?>">
			<a href='<?=apppath?>admin/news/'><?=_NEWS_?></a>
		</li>
			
	</ul>
			
<? } ?>
