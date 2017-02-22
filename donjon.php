<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jeu</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
</head>
<body>

    <div class="landing">
        <div class="content col-md-10 col-md-offset-1">
            <div class="character-list">
                <h1>Choisis ton héros</h1>
                <div class="radio col-md-4 col-sm-4 col-lg-4 col-xs-4">
                    <h3>Guerrier</h3>
                    <label for="guerrier"><input type="radio" name="guerrier" ></label>
                    <img src="img/classe_guerrier.png">
                    <div class="description">
                    <p>Les guerriers sont de puissants combattants de mêlée protégés par leurs lourdes armures qui aiment affronter le danger dès que l’occasion se présente.</p>
                    </div>
                    </div>
                <div class="radio col-md-4 col-sm-4 col-lg-4 col-xs-4">
                    <h3>Magicien</h3>
                    <label for="magicien"><input type="radio" name="magicien"><img src="img/classe_mage.png"></label>
                    <div class="description">
                    <p>Les Mages ont un grand savoir et d'étonnantes capacités. Leur fragilité physique ne doit pas vous tromper, car ils peuvent faire appel aux énergies cosmiques du Néant. Les Mages combattent rarement au corps à corps. Ils préfèrent attaquer à distance, lançant de puissants éclairs de feu et de glace sur leurs ennemis.</p>
                    </div>
                </div>
                <div class="radio col-md-4 col-sm-4 col-lg-4 col-xs-4">
                    <h3> Paladin</h3>
                    <label for="paladin"><input type="radio" name="paladin"><img src="img/classe_paladin.png"></label>
                    <div class="description">
                        <p>Défenseurs de la lumière sacrée et gardiens de l'Alliance, les Paladins sont de nobles guerriers de l’humanité combinant la force militaire à l’utilisation de la magie pour défendre leurs royaumes.</p>
                    </div>
                </div>
            </div>
    </div>
</div>

</body>
</html>