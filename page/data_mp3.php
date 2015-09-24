<?php
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<audio controls="controls" autostart="true" height="50px" width="100px">
<source src="page/<?php echo ''.$id.'' ?>" type="audio/mpeg"/>
<source src="page/<?php echo ''.$id.'' ?>" type="audio/ogg"/>
<embed src="page/<?php echo ''.$id.'' ?>" width="100px" height="50px"  autostart="true">
</audio>
</body>
</html>
