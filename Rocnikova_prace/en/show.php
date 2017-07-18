<?php include("include/head.php")?>
            <div id="body">
                <img src="../res/image/top2.png">
                    <div id="content">
                        <center>
                            <pre>
                            <?php 
                            $id = $_GET['id'];
                            echo "<br>";
                                include("poems/".$id.".php");
                            echo "<br>";
                            ?>
                            </pre>
                        </center>
                    </div>
                <div id="cpr">Idlerus ©2015</div>
                <img src="../res/image/bot.png">
            </div>
        </div>
    </div>
</body>
