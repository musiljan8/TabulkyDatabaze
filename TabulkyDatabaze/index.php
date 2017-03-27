<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="styly/styl.css">
    </head>
        <body>
            <h1>Index</h1>
        <h2>Pripojeni k databazi</h2>
        <p>zobrazeni dat z tabulky uzivatele</p>
        </body>
<?php
    // Načtení wrapperu
    require_once('Db.php');
    Db::connect('127.0.0.1', 'moje_databaze', 'root', '');
    $uzivatele = Db::queryAll('
        SELECT *
        FROM uzivatele
             ');
        echo('<h2>Uzivatele</h2><table>');
    foreach ($uzivatele as $u)
    {
        echo('<tr><td>' . htmlspecialchars($u['email']) . ',' . '');
        
        echo( htmlspecialchars($u['jmeno']) . ',' . '    ');
        
        echo( htmlspecialchars($u['prijmeni']));
    }        
?>
</html>