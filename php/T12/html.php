<!doctype html>
<html lang="fr,ar">

<head>
    <meta charset="UTF-8">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <header class="header-page">
        <nav class="lien-header">
            <div class="portfolio"><span class="port">PORT</span>FOLIO</div>
            <ul class="liens-navigation">
                <li><a href="Catégorie">Catégorie</a></li>
                <li><a href="#moi">A propos--></a></li>
                <li><a href="Accueil">Accueil</a></li>
            </ul>
            <a class="espace-prive" href="prive">Espace Privée</a>
        </nav>
    </header>
    <section class="titre">
        <h2>PORTFOLIO PERSONNEL</h2>
        <span class="titre-explique">Portfolio personnelle presente<a href="#moi"> moi</a> <br>et <a href="#projets">
                les projets</a> et <a href="#compétences">les compétences</a></span>
    </section>

    <main class="main-page">
        <div id="moi" class="presente">

            <section>
                <h2>A propos</h2>Je m'appelle moussab el ouardaki, j'ai 20ans et j'habite à tanger;
                je suis à etudient a <strong>Solicode</strong> pour <strong>Développement web</strong>

            </section> <img src="images/image2.png" alt="image">
        </div>
        <div id="projets" class="projets">
            <h2>Mes projets</h2>
            <ul class="liste-projets">
                <?php foreach ($projets as $projet): ?>
                    <li class="liste">
                        <h3><a href="<?= $projet['link-titre'] ?>"><?= $projet['titre'] ?></a> </h3>
                        <img src="images/<?= htmlspecialchars($projet['img']) ?>" alt="image projet">
                        <?= $projet['contenu'] ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div id="compétences" class=" Compétence">
            <h2>Mes compétences</h2>
            <ul class="liste-compétences">
                <?php foreach($compétences as $compétence): ?>
                <li class="HTML"><strong><?=$compétence['titre'] ?> </strong>
                    <br><?=$compétence['contenu'] ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>



    <footer class="footer">
        <section class="1ére-footer">
            <strong>Mon PORTFOLIO</strong><br>
            Un site presentation
        </section>
        <section class="2éme">
            <strong>Navigation</strong><br>
            <a href="#moi">Accueil</a> <br>
            <a href="#projets">Projets</a><br>
            <a href="#compétences">Compétences</a>
        </section>
        <section class="3éme">
            <strong>Contact</strong>
            <ul class="contact">
                <li>Instagram</li>
                <li>X.com</li>
                <li>Email</li>
            </ul>
        </section>
    </footer>
</body>

</html>