<!DOCTYPE html>
<html>
<head>
  <title></title>
 
 	@include('layout.head')
  
</head>
<header>
	@include('layout.header')
	@include('layout.left')	 @include('layout.right')
</header>
<body>

@include('layout.importancia')
<div align="center">
<?php echo $fecha; ?></div>
</body>

</html>
<footer>
	@include('layout.footer')
</footer>
<header>