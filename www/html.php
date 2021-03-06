<?php

function show_output() {
	$html = ob_get_clean();
	
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Crash Reports</title>
		<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		<script type="text/javascript" language="javascript">
	function setStatusAndGo(iid, stat, url) {
		$.get("ajax.php", { action: "update_status", status: stat, issue_id: iid }, function() {
			document.location=url;
		});
	}
		</script>
		<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="excanvas.js"></script><![endif]-->
		<script language="javascript" type="text/javascript" src="dist/jquery.jqplot.min.js"></script>
		<script type="text/javascript" src="dist/plugins/jqplot.pieRenderer.min.js"></script>
		<script type="text/javascript" src="dist/plugins/jqplot.dateAxisRenderer.min.js"></script>
		<script type="text/javascript" src="dist/plugins/jqplot.highlighter.min.js"></script>
		<script type="text/javascript" src="dist/plugins/jqplot.cursor.min.js"></script>

		<link rel="stylesheet" type="text/css" href="dist/jquery.jqplot.css" />
		<link rel="stylesheet" type="text/css" href="style.css"></link>
	</head>

	<body>
	<h1 style="text-align: center;"><a href="reports.php">Crash Reports</a></h1>
	<?php echo $html; ?>
	</body>
</html>
<?php
}

ob_start();
register_shutdown_function("show_output");

?>