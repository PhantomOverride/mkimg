<?php

$path    = 'i/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));

$images = '';
$counter = 0;
foreach ($files as $file) {
	$images .= '<a href="/i/' . $file . '">';
	$images .= '<div class="img">' . '<img src="/i/' . $file . '" />' . "</div>\n";
	$images .= '</a>';
	$counter++;
	if ($counter > 2){
		$counter = 0;
		$images .= '<br class="clear" />';
	}
}

?>
<html>
	<head>
		<title>MK Herp Derp</title>
		<link rel="stylesheet" type="text/css" href="default.css">
	</head>
<body>
	<?=$images?>
</body>
</html>