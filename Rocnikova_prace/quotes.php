<?php include("res/include/head.php")?>
            <div id="body">
                <img src="res/image/top2.png">
                    <div id="content">
                        <center>
                            <?php 
                            try{
                            include("db.php");
                                $dotaz=$mysqli->query("SELECT * FROM quotes");
                                while($row=$dotaz->fetch_array())
                                {
                                    $quote = nl2br($row['quote']);
                                    echo "<div id='box'>";
                                    echo "<div id='text'>".$quote."</div>";
                                    echo "<div id='author'>-".$row['autor']."</div>";
                                    echo "</div>";
                                }
                            }
                            catch(exception $e) {
                                echo "Error found";
                            }
                            ?>
                        </center>
                    </div>
                <div id="cpr">Idlerus ©2015</div>
                <img src="res/image/bot.png">
            </div>
        </div>
    </div>
</body>