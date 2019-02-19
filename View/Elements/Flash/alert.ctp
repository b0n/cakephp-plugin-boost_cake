<?php
if (!isset($params['class'])) {
	$class = false;
} else {
    $class = $params['class'];
}
if (!isset($params['close'])) {
	$close = true;
} else {
    $class = $params['close'];
}
?>
<div class="alert<?php echo ($class) ? ' ' . $class : null; ?>">
<?php if ($close): ?>
	<a class="close" data-dismiss="alert" href="#">×</a>
<?php endif; ?>
	<?php echo $message; ?>
</div>
