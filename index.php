<?php

try {
    $connexion = new PDO('mysql:host=localhost;dbname=geek;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog de Recettes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <div>
            <h1 class="title">
                Notre catalogue pour geek
            </h1>
            <p>
                Bienvenue sur notre catalogue d'objets geek
            </p>
        </div>
        <div class="nav-bar">
            <div class="search">
            <form action="">
                <input type="text" placeholder="search" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>

            </form>
            </div>
        </div>
    </header>

    <main>
        <div><br>
            <hr>
            <div>
                <div class="filtre margFiltre">
                <div class="margFiltreTitre"><h3>Filtres</h3></div>
                <div class="filtreTexteIcons">
                    <i class="fa-solid fa-money-bill filtreIcons"></i>
                    <div>Prix</div>
                </div>
                <div class="filtreTexteIcons">
                    <i class="fa-solid fa-shop filtreIcons"></i>
                    <div>Site d'achat</div>
                </div>
            </div>
            <div class="text">
                <?php

                $sql = "SELECT * FROM produit";

                $reponse = $connexion->query($sql);

                while ($data = $reponse->fetch()) {
                ?>
                                
                                <div id="titre">
                                        <?php
                                            echo $data['nom'];
                                        ?>
                                </div>
                                <img src="img/<?php echo $data['img']; ?>" /><br>
                                </a>
                <?php
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>
