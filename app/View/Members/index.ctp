<div>
	<?php foreach ($all_member as $member): ?>
	<div><?php echo $member['Member']['id'] . ' : ' . $member['Member']['first_name'] . ' ' . $member['Member']['last_name']; ?></div>
	<div><?php echo $member['Member']['email']; ?></div>
	<?php endforeach; ?>
</div>