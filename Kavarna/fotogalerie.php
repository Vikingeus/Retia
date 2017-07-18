<html>
<head>
	<meta charset="UTF-8">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/gal.css" rel="stylesheet" type="text/css" />
	<script language="javascript" type="text/javascript" src="js/js.js"></script>
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
		
			<?php
			$folder = 'gal/';
			$filetype = '*.*';
			$files = glob($folder.$filetype);
			$count = count($files);
			for ($i = 0; $i < $count; $i++) {
				echo '<a href="#'.$i.'" onclick="newPopup(\''.$files[$i].'\')";/><img class="thumb" src="'.$files[$i].'"></a>';
				}
			?>
			
		</div>
	</div>
		<div id="foot">
		
		</div>
	</div>
</body>

</html>