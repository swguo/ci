<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css');?>">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('public/css/mybootstrap.css');?>">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <!-- 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
-->      
<title>Pagination with CodeIgniter</title>
</head>
<body>
<div id="container">
	<h1 style="text-align:center">Page Navigation in PHP</h1>
	<table class="table min-size table-bordered table-condensed" align='center' >
		<tr style="background-color:#FFF">
			<td >標題</td>
			<td >日期</td>
		</tr>
		<h1 style="text-align:center">最新消息</h1>
 
		<?php
		foreach($results as $data) {
		?>
		<tr>
			<td class="col-sm-8"><?php echo $data->Title ?></td>
			<td class="col-sm-4"><?php echo $data->Date ?></td>
		</tr>
		<?php
		}
		?>
	</table>
	<div style="text-align:center"><?php echo $this->pagination->create_links(); ?></div>
</div>

</body>
</html>	