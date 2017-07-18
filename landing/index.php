<head>
    <title>Landing page</title>
    <script src="../_Addons/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../_Addons/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="left-img" class="bg-img" style="background-image: url(bg/1.jpg);"></div>
    <div id="right-img" class="bg-img" style="background-image: url(bg/2.jpg);"></div>
    <div id="bg-fade">
        <div id="body">
            <img class="logo" src="img/blackmetal.jpg">
            <form>
                <input class="input" placeholder="Username..." type="text">
                <input class="input2" placeholder="Password..." type="password">
                <button style="padding: 0" class="input3" type="submit" href="#"><img src="img/cross.png"><b>Login</b><img src="img/cross.png"></button>   
            </form>
            
        </div>
    </div>
</body>
<script>
var iLeft = 1;
var iRight = 2;
var max = '<?php echo count(glob("bg/*")); ?>';

function backgroundLeft() {
    if(iLeft > max-2) {
        iLeft = 1;
    }

    $( "#left-img" ).fadeToggle( 1000, function() {
        $("#left-img").css('background-image','url(bg/'+ iLeft +'.jpg)');
    } );
    
    $( "#left-img" ).fadeToggle( 1000 );
    iLeft += 2;
    setTimeout(backgroundLeft, 10000);
    
};

function backgroundRight() {
    if(iRight > max-2) {
        iRight = 2;
    }
    
    $( "#right-img" ).fadeToggle( 1000, function() {
        $("#right-img").css('background-image','url(bg/'+ iRight +'.jpg)');
    } );
    $( "#right-img" ).fadeToggle( 1000 );
    iRight += 2;
    setTimeout(backgroundRight, 10000);
}

$( document ).ready(function() {
    console.log( "ready!" );
    setTimeout(backgroundLeft, 10000);
    setTimeout(backgroundRight, 5000);
});
</script>