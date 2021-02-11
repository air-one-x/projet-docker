<?php

$mysqli = new mysqli('db', 'root','root', 'projet-docker');

if( count($_GET) > 0 ) 
{
    $sql = "INSERT INTO `user`(`prenom`, `nom`, `email`, `age`, `color`, `gender`, `password`) VALUES (?,?,?,?,?,?,?);";
    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param('sssssss', $nom,$prenom,$email,$age,$color,$gender,$password);
    $nom = $_GET['Lastname'];
    $prenom = $_GET['Name'];
    $email = $_GET['E-mail'];
    $age = $_GET['Brithday'];
    $color= $_GET['favcolor'];
    $password = password_hash($_GET['Password'], PASSWORD_BCRYPT);
    $gender = $_GET['Gender'];
    $stmt->execute();
    $stmt->close();

}
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/Moby-logo.ico" />
    <title>Projet Docker</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/esgi-styles.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/esgi-scripts.js"></script>
</head>

<body>
    <header id="esgi-header">
        <div id="esgi-straightLine"></div>

        <div class="esgi-section">
            <img class="esgi-logo" src="images/esgi.png" alt="">
        </div>
    </header>
    
    <main id="esgi-main">
        <div class="esgi-section">
            <div class="esgi-grid">
                <div class="esgi-grid-cell esgi-grid1">
                    <div class="esgi-grid-gutter">
                        &nbsp;
                    </div>
                </div>

                <div class="esgi-grid-cell esgi-grid10">
                    <div class="esgi-grid-gutter">
                        <div id="esgi-app-header">
                            <h1>Rejoins nous !</h1>

                            <p>
                                En renseignant tes informations ici tu rejoindras celles des autres et tu feras partie de notre base de données.
                            </p>

                            <a href="index.php">Suivez ce lien pour accéder à la liste des utilisateurs présents</a>
                        </div>

                        <div id="esgi-app-form">
                            <form action="" method="">
                                <input required id="esgi-form-Name" type="text" name="Name" placeholder="Prénom">
                                <input required id="esgi-form-Lastname" type="text" name="Lastname" placeholder="Nom">
                                <input required id="esgi-form-E-mail" type="email" name="E-mail" placeholder="E-mail">
                                <input required id="esgi-form-Brithday" type="date" name="Brithday" placeholder="Date de naissance">
                                <input required id="esgi-form-Password" type="password" name="Password" placeholder="Mot de passe">
                                <label required for="Gender">Homme</label>
                                <input required class="esgi-form-Gender" type="radio" name="Gender" value="M">
                                <label required for="Gender">Femme</label>
                                <input required class="esgi-form-Gender" type="radio" name="Gender" value="F">
                                <select required id="esgi-form-favColor" name="favcolor">
                                    <option disabled selected hidden value="">Couleur favorite</option>
                                    <option value="red">Rouge</option>
                                    <option value="green">Vert</option>
                                    <option value="blue">Bleu</option>
                                    <option value="yellow">Jaune</option>
                                    <option value="orange">Orange</option>
                                    <option value="pink">Rose</option>
                                    <option value="purple">Violet</option>
                                    <option value="brown">Marron</option>
                                    <option value="camel">Beige</option>
                                    <option value="black">Noir</option>
                                    <option value="grey">Gris</option>
                                    <option value="white">Blanc</option>
                                </select>
                                <input id="esgi-form-submit" type="submit" value="Confirmer">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="esgi-grid-cell esgi-grid1">
                    <div class="esgi-grid-gutter">
                        &nbsp;
                    </div>
                </div>
                <div class="esgi-clear"></div>
            </div>
            <div class="esgi-clear"></div>
        </div>
    </main>

    <footer id="esgi-footer">
        <div class="esgi-section">
            <img class="esgi-logo" src="images/esgi.png" alt="">

            <div id="esgi-credits">
                <span class="esgi-slogan">École supérieure de génie informatique</span>

                <span>Erwan XAVIER</span>
                <span>Nicolas LEBERT</span>
            </div>

            <div class="esgi-clear"></div>
        </div>
    </footer>
</body>
</html>