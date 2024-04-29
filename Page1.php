<?php
// Données factices des produits (à remplacer par des données réelles depuis une base de données)
$products = array(
    array(
        "name" => "Nom du produit 1",
        "description" => "Description du produit 1",
        "price" => 19.99,
        "image" => "chemin/vers/image1.jpg"
    ),
    array(
        "name" => "Nom du produit 2",
        "description" => "Description du produit 2",
        "price" => 29.99,
        "image" => "chemin/vers/image2.jpg"
    )
    // Ajoutez plus de produits ici selon vos besoins
);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma boutique en ligne</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Ma Boutique en ligne</h1>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Produits</a></li>
                <li><a href="#">Panier</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="produits">
            <?php foreach ($products as $product) : ?>
                <article class="produit">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h2><?php echo $product['name']; ?></h2>
                    <p><?php echo $product['description']; ?></p>
                    <p>Prix : $<?php echo $product['price']; ?></p>
                    <button>Ajouter au panier</button>
                </article>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Ma Boutique en ligne. Tous droits réservés.</p>
    </footer>
</body>
</html>