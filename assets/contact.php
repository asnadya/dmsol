<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://sochme.com/mailer.php?name=".$_GET["name"]."&email=".$_GET["email"]."&mobile=".$_GET["mobile"]."&message=".$_GET[message]);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
header("Location: https://www.dmsol.in?mail=submitted");
exit();
?>
	