<html>
<head>
	<meta charset="UTF-8">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<title>Kavárna na Lipanské</title>
</head>

<body>
<div id="brown">
	<div id="fit">
		<div id="head">
		</div>
	</div>
</div>
	<div id="fit">
	<div id="container">
		<div id="menu">
			<a href="#" ><div id="o_nas"></div></a>
			<a href="#" ><div id="co_nabizime"></div></a>
			<a href="#" ><div id="nase_kava"></div></a>
			<a href="#" ><div id="akce"></div></a>
			<a href="#" ><div id="fotogalerie"></div></a>
			<a href="#" ><div id="vase_vzkazy"></div></a>
			<a href="#" ><div id="kontakty"></div></a>
			
			<div id="menu_wrapper">
			<h3>Provozní doba</h3>
			<p>Pondělí - Pátek</p>
			<p> 8:00 - 20:00 </p>
			<p>Sobota - Neděle</p>
			<p> 9:00 - 21:00 </p>
			</div>
		</div>
	
		<div id="body">
		
			<?
				$jmeno = $_POST['jmeno'];
				$email = $_POST['email'];
				$spam = $_POST['spam'];
				$zprava = $_POST['zprava'];

				if ($jmeno!="" and $email!="" and $zprava!="" and $spam=="8")
				{
					Mail("vase@adresa.com", $jmeno, $zprava, "From: " . $email);
					echo "<p><strong>Váš e-mail byl úspěšně odeslán</strong>.</p>";
				}
				else
				{
					echo "<p>Váš e-mail se <strong>nepodařilo odeslat</strong> pravděpodobně jste nevyplnili všechny údaje, nebo nevíte kolik je 1 + 1.</p>";
				} 
			?>
			
		</div>
	</div>
		<div id="foot">
		
		</div>
	</div>
</body>

</html>