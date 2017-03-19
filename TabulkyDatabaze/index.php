
  
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Jan Musil Tabulky Databaze</title>
        <link rel="stylesheet" type="text/css" href="styly/styl.css"
    </head>


<H1>Pripojeni k databazi - Moje Databaze</H1>



<?php
// Načtení wrapperu
require_once('Db.php');
Db::connect('127.0.0.1', 'moje_databaze', 'root', '');
Db::query('
        INSERT INTO uzivatele (email, jmeno, prijmeni)
        VALUES ("vaclav.musilova@gmail.com", "Jana",  "Musilova")
        
');
echo('zapsano');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
