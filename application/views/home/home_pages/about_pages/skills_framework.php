<?php
	$framework['GitHub'] = 80;
	$framework['Jquery and Jquery UI'] = 95;
	$framework['Codeigniter'] = 90;
	$framework['Bootstrap'] = 85;
	$framework['AngularJS'] = 50;
	$framework['Laravel'] = 40;
?>
<?php foreach($framework as $skill_name => $percent){ ?>
<div class="container-fluid">
	<div class="skill_name"><?php echo $skill_name; ?></div>
	<div class="progress">
		<div class="progress-bar" style="width: <?php echo $percent; ?>%;">
			<?php echo $percent; ?>%
		</div>
	</div>
</div>
<?php } ?>