<?php include("include/head.php")?>
            <div id="body">
                <img src="../res/image/top2.png">
                    <div id="content">
                        <center>
                        <?php
                            foreach (glob("poems/*.php") as $filename) {
                                $filename = str_replace(".php","", $filename);
                                $filename = str_replace("poems/","", $filename);
                                echo "<a href='show.php?id=".$filename."'>".$filename."</a><br>";
                            }
                        ?>
                        </center>
                    </div>
                <div id="cpr">Idlerus ©2015</div>
                <img src="../res/image/bot.png">
            </div>
        </div>
    </div>
</body>