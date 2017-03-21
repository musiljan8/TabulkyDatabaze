

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

 
Dusan Drak
pepa@pepa.czPepa Nos
pepa@pepa.czPepa Nos
pepa@pepa.czPepa Nos
pepa@pepa.czPepa Nos
john@johnJonh Lennon

john@johnJonh Lennon
alois@alois.czAlois Slama
alois@alois.czAlois Slama
petr@pavel.czPetr  Pavel
kuba@kuba.czKuba Kubikula
petr@pavel.czPetr  Pavel
petr@pavel.czPetr  Pavel
Pavel@pavel.czPavel Kos
 
