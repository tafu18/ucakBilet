<?php
include ("baslik.php");
include ("vtbaglan.php"); ?>
<div>
	<center>
		<form action="ucus_ekle.php" method="POST">
			<b>Uçuş Ekle</b><hr width="200">
			<table style="background: #f57c31; color: white;" border="1" cellspacing="0" cellpadding="0">
				<tr>
					<td>Kalkış Zamanı: </td><td> <input style="width: 100%;" type="time" name="kalkis_zamani"></td>
				</tr>
					<td>Varış Zamanı: </td><td> <input style="width: 100%;" type="time" name="varis_zamani"></td>
				</tr>
				<tr>
					<td>Şehir: </td><td> <input type="text" name="sehir"></td>
				</tr>
				<tr>
					<td>Kullanıcı Adı : </td><td> <input type="text" name="Kullanici_adi"></td>
				</tr>
					<td>Koltuklar : </td><td> <input type="text" name="koltuklar"></td>
				</tr>
				<tr>
					<td>kalkış Tarihi : </td><td> <input style="width: 100%;" type="date" name="kalkis_tarihi"></td>
				</tr>
					<td>Kalkış Şehir : </td><td> <input type="text" name="kalkis_sehir"></td>
				</tr>
					<td>Varşı Şehir : </td><td> <input type="text" name="varis_sehir"></td>
				</tr>
				<tr>
					<td>Kategori : </td>
					<td> 
						<select style="width: 100%;" name="kategori" id="">
							<option value="ekonomi">Ekonomi</option>
							<option value="business">Business</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Durum : </td>				
						<td> 
							<select style="width: 100%;" name="durum" id="">
								<option value="aktif">Aktif</option>
								<option value="pasif">Pasif</option>
							</select>
						</td>
				</tr>
					<td>Ücret : </td><td> <input type="text" name="ucret"></td>
				</tr>
			</table>
			<hr width="200">
			<input style="width: 15%;" type="submit" name="gonder" value="Gönder">
		</form>
	</center>
</div>
