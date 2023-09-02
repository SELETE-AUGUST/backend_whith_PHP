<?php
require_once'./db.php';
require_once'./fonction.php';

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $password = $_POST['password'];
//....................test
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
//.................
    $date_naiss = $day.' '.$month.' '.$year;
    $genre = $_POST['genre'];

    $bool = register($surname, $name, $adress, $password, $date_naiss, $genre);

    var_dump($bool);
        
        if ($bool) {

            header('location: login');
    
        }else {
            header('location: exo-formulaire');
        }

    }



?>

    <link rel="stylesheet" href="/feuilles_css/userstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>


    <h1 id="Facebook">facebook</h1>
    <div class="form">

    <form class="form1" method="post" action="exo-formulaire">

        <p class="form-header">
            <h1>Créer un compte</h1>
            <h3 id="h3">c'est rapide et facile</h3>
        </p>
        
        <div class="id11">
            <input class="id" type="text" name="surname" placeholder="prenom" required>

            <input class="id" type="text" name="name" placeholder="nom de famille" required>
        </div>

        <div class="id22">
            <input class="class1" type="e-mail" type="number" name="adress" placeholder="numero mobile ou email" required>
        </div>

        <div class="id22">
            <input class="class1" type="password" name="password" id="mdp" placeholder="nouveau mot de passe" required>
        </div>


        <p>
            <p class="span2">date de naissance <i class="fa-solid fa-circle-question"></i></p>
            <div class="date">

                <select name="day" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option> 
                </select>

                <select name="month">
                    <option value="janvier">janvier</option>
                    <option value="fevrier">fevrier</option>
                    <option value="mars">mars</option>
                    <option value="avril">avril</option>
                    <option value="MAI">MAI</option>
                    <option value="juin">juin</option>
                    <option value="juillet">juillet</option>
                    <option value="aout">aout</option>
                    <option value="septembre">septembre</option>
                    <option value="Octobre">Octobre</option>
                    <option value="Novembre">Novembre</option>
                    <option value="Decembre">Decembre</option>
                </select>

                <select name="year">
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                </select>
                </div>
        </p>


        <p class="">
            
            <p class="span">genre <i class="fa-solid fa-circle-question"></i></p>

            <div class="class2">

                <div>
                    <label id="label" for="homme">Homme</label>
                    <input id="homme" type="radio" name="genre"/>
                </div>

               <div>
                    <label id="label" for="femme">Femme</label>
                    <input id="femme" type="radio" name="genre"/>
               </div>

                <div id="pers1">
                    <label id="label" for="pers">presonnalisé</label>
                   <input id="pers" type="radio" name="genre"/>
                </div>

            </div>
        </p>

        <p>les personnes qui utilisent notre service ont pu importer vos coordonnées sur Facebook. <a id="info" href="">en s'avoir plus</a></p>

        <p>En cliquant sur S'inscrire, vous acceptez nos <a id="info" href="">Conditions Générales</a>, notre <a id="info" href="">Politique de Confidentialité</a> et notre <a id="info" href="">Politique d'utilisation de cookies</a>. vous recevrez peut-etre des notifications par texo de notre part et vous pourrez a tout moment vous desabonner</p>

        <div class="buttonp">
            <button class="button" type="submit" name="s'inscrire">s'inscrire</button>
        </div>

        <footer>
            <a class="a" href="">vous avez deja un compte ?</a>
        </footer>
        
    </form>
</div>
