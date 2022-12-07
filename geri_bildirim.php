<?php include 'baslik.php';?>
<table border="1" class="ust forum">
    <caption>Geri Bildirimleri</caption>
		<?php
			for ($i=1;$i<6;$i++){
				$zaman = mktime(rand(0,11), rand(0,59), rand(0,59), rand(1,12), rand(1,28), rand(2005,2018));
				echo "<tr class='forum'><th class='forum' colspan='5' align=left    > #" . $i . "</th></tr>";
				echo("<tr class='forum'>");
				echo("<td class='forum' colspan='4' height='110'> Bu kısımda üyenin yorumları var....");
				echo("</td>");
                echo("<td class='forum'  height='160'> <center><img src='$i.jpg' width=138 height=158> </center>");
				echo("</td>");
				echo("</tr>");

				echo("<tr class='forum'>");
				echo("<td colspan='4' class='forum'> e-mail to: <a href src=''>Adı Soyadı</a>");
                echo("<td class='forum' width='140' align=left>" . date('d.m.Y H:i:s', $zaman). "</td>");
				echo("</td>");
				echo("</tr>");
		?>
		<?php	
			}
		?>
		</table>
