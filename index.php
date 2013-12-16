<?php
	$dir = dirname(__FILE__);
	include("$dir/lib/init.php");

	load_plugins();
	load_data();
?>

<h1>Slackware</h1>

<b>Add a new service</b>

<ul>
<?php foreach ($plugins as $k => $plugin){ ?>
	<li><a href="add.php?id=<?php echo urlencode($k); ?>"><?php echo $plugin->name; ?></a> - <?php echo $plugin->desc; ?> </li>
<?php } ?>
</ul>

<b>Existing services</b>

<ul>
<?php foreach ($data['instances'] as $k => $instance){ ?>
	<li><a href="edit.php?id=<?php echo urlencode($k); ?>"><?php echo $instance['plugin'].' '.$k; ?></a></li>
<?php } ?>
</ul>
