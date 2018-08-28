<?php
	$language['PHP'] = 90;
	$language['HTML'] = 95;
	$language['CSS'] = 95;
	$language['Javascript'] = 85;
	$language['SQL'] = 90;
?>
<?php foreach($language as $skill_name => $percent){ ?>
<div class="container-fluid">
	<div class="skill_name"><?php echo $skill_name; ?></div>
	<div class="progress">
		<div class="progress-bar" style="width: <?php echo $percent; ?>%;">
			<?php echo $percent; ?>%
		</div>
	</div>
</div>
<?php } ?>

	
