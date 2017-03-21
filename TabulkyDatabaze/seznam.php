 

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Jan Musil Tabulky Databaze</title>
        <link rel="stylesheet" type="text/css" href="styly/styl.css"
    </head>


<H1>Stranka Seznam</H1>



       <?php      
                 
        
    if(isset($_GET["email"]) && isset($_GET["jmeno"]) && isset($_GET["prijmeni"])) {
        $email = $_GET["email"];             
        $jmeno = $_GET["jmeno"];
        $prijmeni = $_GET["prijmeni"];
     } 
        require_once('Db.php');
        Db::connect('127.0.0.1', 'moje_databaze', 'root', '');        
        $uzivatele = Db::queryAll('
        SELECT *
        FROM uzivatele
');
    echo('<h2>Uživatelé</h2><table border="1">');
    foreach ($uzivatele as $u)
{
        echo('<tr><td>' . htmlspecialchars($u['email']));
        echo('</td><td>' . htmlspecialchars($u['jmeno']));      
        echo('</td><td>' . htmlspecialchars($u['prijmeni'])); 
       
        echo('</td></tr>');
}
    echo('</table>');        
                ?>
