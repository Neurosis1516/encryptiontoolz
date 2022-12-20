<!--/* 

Created By HardSpirit
SecSpirit - 2020

*/-->
<?php $titre = 'SecSpirit'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../style.css">
        <title><?= $titre ?></title>
    </head>

    <body>
        <div id="identification">
        <div id="titrediv">
            <h1 id="titre" class="titre"><em class="titreem">S</em>ec<em class="titreem">S</em>pirit</h1>
			<p>A <a href="https://delta9.cc"> DELTA9 </a> Website</p>
        </div>
        <div id="formulaireCrypt">
        
            <p class="chiffre cle"> Clé : <?= $cle ?> </p>  <div id="messageChiffre"><textarea class="chiffre messagechiffre"><?=$messageC?></textarea></div>
            <br />
            <div id="deconnexion"><a href="?action=cryptage" class="button2">Recommencer</a><br/>
            <a href="?action=deconnect" class="button2">Deconnecter</a></div>
        
        </div>
        </div>
    </body>
</html>
<!--/* 

Created By HardSpirit
SecSpirit - 2020

*/-->