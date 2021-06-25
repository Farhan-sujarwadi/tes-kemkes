<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Kepegawaian</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="main_container">
<div id="header">
<h1>Sistem Kepegawaian KEMKES</h1>
</div>
<div id="navigation">
	<a href="index.php">Home</a> 
	<a href="index.php?page=input">Input Data Pegawai</a> 
	<a href="index.php?page=tampil">Tampil Data Pegawai</a>
</div>

<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'input': include "input_peg.php"; break;
	case 'edit'	: include "edit_peg.php"; break;
	case 'delete' : include "delete_peg.php"; break;
	case 'tampil' : include "tampil.php"; break;
	case 'foto' : include "foto.php"; break;
	case 'main' :
	default : include 'utama.php';	
}
?>

<div id="footer">&copy; 2021 <a href="mailto:farhansujarwadi@gmail.com">Farhan</a> | Design By Farhan </div>
</div>
</body>
</html>
