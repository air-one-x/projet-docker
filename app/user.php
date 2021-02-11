<?php

$url = $_SERVER['REQUEST_URI'];
$parseUrl = parse_url($url)['query'];
$idUser = explode('=',$parseUrl)[1];
$idNumber = intval($idUser);

$mysqli = new mysqli('db', 'root','root', 'projet-docker');
$sql = "SELECT * FROM user WHERE id=$idNumber;";
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();

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
                            <h1>Vos informations !</h1>

                            <p>
                                Consulte tes renseignant dès que tu le souhaites, tu peux aussi les modifier ou les supprimer de notre base de données.
                            </p>

                            <a href="index.php">Suivez ce lien pour revenir à la liste des utilisateurs</a>
                        </div>

                        <div id="esgi-app-user">
                            <div id="esgi-app-form" class="form-<?= $user['color']?>">
                                <form action="update-user.php" method="POST">
                                    <input hidden type="text" name="Id" value="<?= $user['id']?>">
                                    <input required id="esgi-form-Name" type="text" name="Name" placeholder="Prénom" value="<?=$user['prenom']?>">
                                    <input required id="esgi-form-Lastname" type="text" name="Lastname" placeholder="Nom" value="<?=$user['nom']?>">
                                    <input required id="esgi-form-E-mail" type="email" name="E-mail" placeholder="E-mail" value="<?=$user['email']?>">
                                    <input required id="esgi-form-Brithday" type="number" name="Brithday" placeholder="Date de naissance" value="<?=$user['age']?>">
                                    <label required for="Gender">Homme</label>
                                    <input required class="esgi-form-Gender" type="radio" name="Gender" value="M" <?php if($user['gender'] == "M"){echo "checked";}?>>
                                    <label required for="Gender">Femme</label>
                                    <input required class="esgi-form-Gender" type="radio" name="Gender" value="F" <?php if($user['gender'] == "F"){echo "checked";}?>>
                                    <select required id="esgi-form-favColor" name="favcolor">
                                        <option disabled hidden value="">Couleur favorite</option>
                                        <option <?php if($user['color'] == "red"){echo "selected";}?> value="red">Rouge</option>
                                        <option <?php if($user['color'] == "green"){echo "selected";}?> value="green">Vert</option>
                                        <option <?php if($user['color'] == "blue"){echo "selected";}?> value="blue">Bleu</option>
                                        <option <?php if($user['color'] == "yellow"){echo "selected";}?> value="yellow">Jaune</option>
                                        <option <?php if($user['color'] == "orange"){echo "selected";}?> value="orange">Orange</option>
                                        <option <?php if($user['color'] == "prink"){echo "selected";}?> value="pink">Rose</option>
                                        <option <?php if($user['color'] == "purple"){echo "selected";}?> value="purple">Violet</option>
                                        <option <?php if($user['color'] == "brown"){echo "selected";}?> value="brown">Marron</option>
                                        <option <?php if($user['color'] == "camel"){echo "selected";}?> value="camel">Beige</option>
                                        <option <?php if($user['color'] == "black"){echo "selected";}?> value="black">Noir</option>
                                        <option <?php if($user['color'] == "grey"){echo "selected";}?> value="grey">Gris</option>
                                        <option <?php if($user['color'] == "white"){echo "selected";}?> value="white">Blanc</option>
                                    </select>
                                    <input id="esgi-form-submit" type="submit" value="Modifier">
                                </form>
                            </div>
                            <form action="delete-user.php?user=<?=$idNumber?>" method="POST">
                            <input id="esgi-user-delete" type="submit" value="Effacer mes informations">
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