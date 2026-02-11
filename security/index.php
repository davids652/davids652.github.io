<?php
session_start();
if(isset($_POST['flag'])){
    $flagAttempt = $_POST['flag'];
    if($flagAttempt=="JSC_84F2"){
        $_SESSION['flag1'] = 'True';
    } elseif($flagAttempt=="JSC_alea_iacta_est"){
        $_SESSION['flag2'] = 'True';
    } elseif($flagAttempt=="JSC_1010"){
        $_SESSION['flag3'] = 'True';
    } elseif($flagAttempt=="JSC_NietLiever010?"){
        $_SESSION['flag4'] = 'True';
    } elseif($flagAttempt=="JSC_youFoundIt!"){
        $_SESSION['flag5'] = 'True';
    } elseif($flagAttempt=="JSC_gehe!im_2026"){
        $_SESSION['flag6'] = 'True';
    } elseif($flagAttempt=="JSC_HetEchteBestand"){
        $_SESSION['flag7'] = 'True';
    }
    
}
?>
<html>
    <head>
        <title>Opdrachten UX</title>
        <style>
            body {
                margin: 0;
                overflow: hidden;
            }
            .menu {
                float: left;
                height: 100%;
                width: 15%;
                background-color: deepskyblue;
            }
            .frame {
                float: left;
                height: 100%;
                width: 80%;
            }
            a {
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="menu">
            <h2>Opdrachten UX</h2>
            <ul>
                <li><a href="demo.html" target="myframe">1 - Demo</a></li>
                <li><a href="encryptie.html" target="myframe">2 & 3 - Encryptie</a></li>
                <li><a href="hashing.php" target="myframe">4 - Hashing</a></li>
                <li><a href="RSA.php" target="myframe">5 - RSA</a></li>
                <li><a href="secret.php" target="myframe">6 - Geheimen</a></li>
                <li><a href="secret.php" target="myframe">7 - File hashes</a></li>

            </ul>

            <h2>Flag inleveren</h2>
            <form method="POST" action="index.php">
                <input type="text" name="flag" placeholder="Flag"/>
                <input type="Submit" value="Inleveren" />
            </form>

            <h2>Gevonden flags</h2>
            <?php
            if($_SESSION['flag1']=='True'){
                echo 'Flag 1';
            }
            if($_SESSION['flag2']=='True'){
                echo 'Flag 2';
            }
            if($_SESSION['flag3']=='True'){
                echo 'Flag 3';
            }
            if($_SESSION['flag4']=='True'){
                echo 'Flag 4';
            }
            if($_SESSION['flag5']=='True'){
                echo 'Flag 5';
            }
            if($_SESSION['flag6']=='True'){
                echo 'Flag 6';
            } 
            if($_SESSION['flag7']=='True'){
                echo 'Flag 7';
            }               
            ?>
            
        </div>
        <div class="frame">
            <iframe src="https://9292.nl" id="myframe" name="myframe" width="100%" height="100%"></iframe>
        </div>
    </body>
</html>