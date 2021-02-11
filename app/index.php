<?php

$mysqli = new mysqli('db', 'root','root', 'projet-docker');
$results = $mysqli->query('SELECT id, nom, prenom, email, age FROM user');
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
            <a href="index.php"><img class="esgi-logo" src="images/esgi.png" alt="logo"></a>
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
                            <h1>Bonjour Monde !</h1>

                            <p>
                                Voici la liste exhaustive de tous nos utilisateurs répertoriés dans notre base de données.
                            </p>

                            <a href="formulaire.php">Suivez ce lien pour vous ajouter à cette liste !</a>
                        </div>

                        <div id="esgi-app-content">
                            <table id="esgi-app-users">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom de famille</th>
                                        <th>Prénom</th>
                                        <th>Adresse électronique</th>
                                        <th>Àge</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($results as $key => $user) :?>
                                        
                                            <tr>
                                                <td><a href="user.php?user=<?=$user['id']?>"><?=$user['id']?></a></td>
                                                <td><a href="user.php?user=<?=$user['id']?>"><?=$user['nom']?></a></td>
                                                <td><a href="user.php?user=<?=$user['id']?>"><?=$user['prenom']?></a></td>
                                                <td><a href="user.php?user=<?=$user['id']?>"><?=$user['email']?></a></td>
                                                <td><a href="user.php?user=<?=$user['id']?>"><?=$user['age']?></a></td>
                                            </tr>
                                        
                                    <?php endforeach ?>
                                </tbody>
                            </table>
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

