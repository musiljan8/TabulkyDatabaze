
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Tabulky Databaze</title>
        <link rel="stylesheet" type="text/css" href="styly/styl.css"
    </head>


<H1>Registrace uzivatele</H1>



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
                }
                ?>

<form method="GET"; action="form_sent.php" >
                        Email:<br />
                        <input type="text" name="email" /><br />
                        Jmeno:<br />
                        <input type="text" name="jmeno" /><br />
                        Prijmeni:<br />
                        <input type="text" name="prijmeni" /><br />
                        <input type="submit" value="Registrovat" />
                </form>

        </body>
</html>