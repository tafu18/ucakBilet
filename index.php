<?php
include ("vtbaglan.php");
include ("baslik.php");
?>



<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<style>
			a{
				text-decoration: none;
			}
			body{
				padding: 0;
				margin: 0;
			}
			div.button{
				height: 100px;
				width: 200px;
				text-align: center;
				top: 30%;
				left: 45%;
				position: absolute;
			}
			.btn{
				border-radius: 0.5rem;
				margin: 1rem;
				padding: 0.5rem;
				background-color: #d9534f;
				box-shadow: 0 20px 20px rgb(0 0 0 / 10%);
			}
		</style>
</head>


		<div class="button">
			<button class="btn"><a style="color: white;" href="ekle.php">Uçuş Ekle</a></button>
			<button class="btn"><a style="color: white;" href="listele.php">Uçuşları Görüntüle</a></button>
		</div>
</body>
</html>

