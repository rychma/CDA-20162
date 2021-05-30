<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Accueil</title>
</head>

<body>


    <div class="bg-image fond">
        <div class="container">
        <div class="bg-image fond2">

<header>

<!--  Logo en liens pour la page daccueil  -->
<div class="row">
    <div class="col-3 logo">
        <a href="../index.php"><img src="../assets/img/HEADER/logo%20village%20green.png" alt="logo" title="logo"></a>
    </div>

<!--  Première bande  -->
        <div class="col-9">
            <div class="row bandeUn">
                <div class="col-5"></div>
                <div class="col">
                    <span class="bandeUnEspace"><a href="views/infos.php">Infos</a></span>
                    <span class="bandeUnEspace"><a href="views/espaceClient.php">Espace client</a></span>
                    <span class="bandeUnEspace"><a href="views/panier.php"><img src="../assets/img/HEADER/picto%20panier.png" alt="pictopanier" title="pictopanier"></a></span>
                    <span class="bandeUnEspace"><a href="views/.php"><img src="../assets/img/HEADER/picto%20pays.png" alt="pictopays" title="pictopays"></a></span>
                </div>
        </div>

<!--  Deuxième bande  -->
            <div class="row bandeDeux">
                <div class="col">
                    <span class="bandeDeuxEspace"><a href="views/produits.php">Produits</a></span>
                    <span class="bandeDeuxEspace"><a href="views/service.php">Service</a></span>
                    <span class="bandeDeuxEspace"><a href="views/aide.php">Aide</a></span>
                    <span class="bandeDeuxEspace"><a href="views/aPropos.php">A propos</a></span>
                </div>
            </div>

<!--  Troisième bande  -->
            <div class="row bandeTrois">
                <div class="col">
                    <span class="bandeTroisEspace"><a href="views/.php">Guit/Bass</a></span>
                    <span class="bandeTroisEspace"><a href="views/.php">Batteries</a></span>
                    <span class="bandeTroisEspace"><a href="views/.php">Clavier</a></span>
                    <span class="bandeTroisEspace"><a href="views/.php">Studio</a></span>
                    <span class="bandeTroisEspace"><a href="views/.php">Sono</a></span>
                    <span class="bandeTroisEspace"><a href="views/.php">Eclairage</a></span>
                    <span class="bandeTroisEspace"><a href="views/.php">DJ</a></span>
                    <span class="bandeTroisEspace"><a href="views/.php">Cases</a></span>
                    <span class="bandeTroisEspace"><a href="views/.php">Accessoires</a></span>
                </div>
            </div>

        </div>
</div>
</header>

<h1 class="h1Inscription">Créez vos identifiants</h1>


<!--  Formulaire  --!>
<form action="../controllers/inscriptionForms.php" method="POST" id="formulaire_contact">

<!--  E-mail  --!>
<div class="mb-3 row text-end">
<div class="col-1"></div>
    <label for="email" class="col-2 col-form-label">Email</label>
    <div class="col-3">
        <input type="text" class="form-control" id="email">
    </div>
    <div class="col-auto"></div>
    <div class="col-1"></div>
</div>

<!--  Mot de passe  --!>
<div class="mb-3 row text-end">
    <div class="col-1"></div>
    <label for="mdp" class="col-2 col-form-label">Créez votre mot de passe</label>
    <div class="col-3">
        <input type="password" class="form-control" id="mdp">
    </div>
    <label for="confirmMdp" class="col-2 col-form-label">Confirmez votre mot de passe</label>
    <div class="col-3">
        <input type="password" class="form-control" id="confirmMdp">
    </div>
    <div class="col-1"></div>
</div>

<h1 class="h1Inscription">Créez vos identifiants</h1>

<!--  Prénom  --!>
<div class="row">
<div class="col">
<div class="mb-3 row text-end">
<div class="col-1"></div>
    <label for="prenom" class="col-2 col-form-label">Prénom</label>
    <div class="col">
        <input type="text" class="form-control" id="prenom">
    </div>
</div>

<!--  Nom  --!>
<div class="mb-3 row text-end">
    <div class="col-1"></div>
    <label for="nom" class="col-2 col-form-label">Nom</label>
    <div class="col">
        <input type="text" class="form-control" id="nom">
    </div>
</div>

<!--  Adresse  --!>
<div class="mb-3 row text-end">
    <div class="col-1"></div>
    <label for="adresse" class="col-2 col-form-label">Adresse</label>
    <div class="col">
        <input type="text" class="form-control" id="adresse">
    </div>
</div>

<!--  Complément dadresse  --!>
<div class="mb-3 row text-end">
    <div class="col-1"></div>
    <label for="complementAdresse" class="col-2 col-form-label">Complément dadresse</label>
    <div class="col">
        <input type="text" class="form-control" id="complementAdresse">
    </div>
</div>

<!--  CP  --!>
<div class="mb-3 row text-end">
    <div class="col-1"></div>
    <label for="cp" class="col-2 col-form-label">Code postal</label>
    <div class="col">
        <input type="number" class="form-control" id="cp">
    </div>
</div>

<!--  Ville  --!>
<div class="mb-3 row text-end">
    <div class="col-1"></div>
    <label for="ville" class="col-2 col-form-label">Ville</label>
    <div class="col">
        <input type="text" class="form-control" id="ville">
    </div>
</div>

<!--  Pays  --!>
<div class="mb-3 row text-end">
    <div class="col-1"></div>
    <label for="pays" class="col-2 col-form-label">Pays</label>
    <div class="col">
        <input type="text" class="form-control" id="pays">
    </div>
</div>
</div>

<!--  Image numéro  --!>
<div class="col">
    <img src="../assets/img/BODY/ESPACECLIENT/cadre_numero.png" alt="cadreNum" title="cadreNum">
</div>
</div>

<!--  Bouton valider  --!>
<div class="row">
<div class="col"></div>
<div class="col-1 m-5 rounded boutonSub">
<button type="submit" class="btn" id="envoie">Valider</button>
</div>
<div class="col"></div>

</div>
</form>


<!--  Footer  --!>
<img src="../assets/img/BODY/ESPACECLIENT/bdp.png" alt="bdp" title="bdp">
</div>

<div class="footer">
    <img src="../assets/img/FOOTER/footer%20SIMPLE.png" alt="footer" title="footer">
</div>


</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>