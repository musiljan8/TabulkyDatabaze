<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Jan Musil Tabulky Databaze</title>
        <link rel="stylesheet" type="text/css" href="styly/styl.css"≥
    </head> 
        <body>
            <H1>Stranka Seznam</H1>
        </body>

 <?php

    require_once('Db.php');
    Db::connect('127.0.0.1', 'moje_databaze', 'root', '');
    if ($_GET)
    {
                        
    Db::query('
        INSERT INTO uzivatele (email, jmeno, prijmeni)
        VALUES (?, ?, ?)
     ', $_GET['email'], $_GET['jmeno'],$_GET['prijmeni'] );

        echo('<p>Byl jste zaregistrován.</p>');
        echo ($_GET["email"]);    
        echo($_GET["jmeno"]);
        echo($_GET["prijmeni"]);   
    }    
    
     
?>
</html>
 

 
 
 
