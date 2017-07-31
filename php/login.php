<?php
if (!isset($_SESSION)){session_start();}//za startovanje bilo koje sesije kad se pokrene stranica

//include_once ('functions.php');

/*if (isset($_POST) && !empty($_POST))
{*/
    //primanje podataka sa index.html
    if(isset($_POST['email1'])) {
        $emaillog = $_POST['email1'];
        echo $emaillog;
    }
    //$passwordlog = $_POST['password1'];

    //temp
    //if($emaillog == "admin@admin.com" && $passwordlog == "admin")
    //{
       //$message = "Sifra je ispravna!";
       echo 'provera';
       /*.' i sifrom '.$passwordlog;*/

        //header("Location: ../index.html");
        //die();
    //}
//}