<?php
session_start();

// Tableau des compétences par domaine
$competences = [
    "Gérer le patrimoine informatique" => [
        "Recenser et identifier les ressources numériques",
        "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
        "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
        "Vérifier les conditions de la continuité d’un service informatique",
        "Gérer des sauvegardes",
        "Vérifier le respect des règles d’utilisation des ressources numériques"
    ],

    "Répondre aux incidents et aux demandes d’assistance et d’évolution" => [
        "Collecter, suivre et orienter des demandes",
        "Traiter des demandes concernant les services réseau et système, applicatifs",
        "Traiter des demandes concernant les applications"
    ],

    "Développer la présence en ligne de l’organisation" => [
        "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
        "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
        "Participer à l’évolution d’un site Web exploitant les données de l’organisation"
    ],

    "Mettre à disposition des utilisateurs un service informatique" => [
        "Réaliser les tests d’intégration et d’acceptation d’un service",
        "Déployer un service",
        "Accompagner les utilisateurs dans la mise en place d’un service"
    ]

];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compétences BTS SIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container my-5">
    <h1 class="text-center mb-4">Tableau des compétences BTS SIO</h1>
    
    <?php
    // Affichage dynamique du tableau de compétences
    foreach ($competences as $domaine => $liste) {
        echo "<div class='card mb-3 shadow-sm'>";
        echo "<div class='card-header bg-primary text-white fw-bold'>$domaine</div>";
        echo "<div class='card-body'><ul class='list-group list-group-flush'>";
        foreach ($liste as $tache) {
            echo "<li class='list-group-item'>$tache</li>";
        }
        echo "</ul></div></div>";
    }
    ?>
</div>
</body>
</html>
