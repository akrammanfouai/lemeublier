<script>
    // Fonction pour ajouter un produit au panier
    function addToCart(productName) {
        // Vous pouvez ajouter ici la logique pour ajouter le produit au panier
        alert("Le produit '" + productName + "' a été ajouté au panier !");
    }

    // Attacher un gestionnaire d'événement à tous les boutons "Ajouter au panier"
    var addToCartButtons = document.querySelectorAll('.produit button');
    addToCartButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var productName = this.parentNode.querySelector('h2').innerText;
            addToCart(productName);
        });
    });
</script>