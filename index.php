<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lajayz Concession</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <?php include 'header.php';?>

    <section class="hero">
        <div class="TTC">
            <h2>TROUVE TON CATCH AVEC LAJAYZ</h2>
        </div>
        <div>
            <img id="png" src="image/bmw2.png" alt="">
            <figure>
                <img src="image/bm1.jpg" alt="Voiture" loading="lazy">
            </figure>
        </div>
    </section>
    <br>
    <hr>
    <br>
    <section class="best-sellers">
        <h2>Meilleures Ventes</h2>
        <br>
        <div class="product-list">
            <div class="product"><img src="image/audi2.png" alt="Voiture 1"></div>
            <div class="product"><img src="image/mercos1.png" alt="Voiture 2"></div>
            <div class="product"><img src="image/mercos2.png" alt="Voiture 3"></div>
            <div class="product"><img src="image/audi2.png" alt="Voiture 1"></div>
            <div class="product"><img src="image/mercos1.png" alt="Voiture 2"></div>
            <div class="product"><img src="image/mercos2.png" alt="Voiture 3"></div>
        </div>
        <hr>
        <section class="brands">
            <h2>Nos Marques</h2>
            <div class="brand-logos">
                <img src="image/bmw.png" alt="BMW">
                <img src="image/audi.png" alt="Audi">
                <img src="image/mercos.png" alt="Mercedes">
            </div>
        </section>
        <hr>
        <section class="social-media">
            <div class="social-content">
                <div class="socialicons">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                    <a href=""><i class="fa-brands fa-snapchat"></i></a>
                </div>
                
                <div class="separator"></div> <!-- Barre de séparation -->
                
                <div class="payment-methods">
                    <a href=""><i class="fa-brands fa-cc-visa"></i></a>
                    <a href=""><i class="fa-brands fa-cc-amex"></i></a>
                    <a href=""><i class="fa-brands fa-cc-mastercard"></i></a>
                    <a href=""><i class="fa-brands fa-cc-paypal"></i></a>
                </div>
            </div>
        </section>
    <footer>
        <div class="contact">
            <h3>Contact</h3>
            <p>Nom: Team Lafayz</p>
            <p>Email: contact@lafayz.com</p>
        </div>
        <div class="about">
            <h3>À Propos</h3>
            <p>La passion du sport automobile et des voitures de luxe.</p>
        </div>
    </footer>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const productList = document.querySelector(".product-list");
        let scrollAmount = 0;

        function autoScroll() {
            if (scrollAmount >= productList.scrollWidth / 2) {
                scrollAmount = 0;
                productList.style.transition = "none"; // Supprime l'animation pour éviter le retour brusque
                productList.style.transform = `translateX(0px)`;
            } else {
                scrollAmount += 1;
                productList.style.transition = "transform 0.05s linear";
                productList.style.transform = `translateX(-${scrollAmount}px)`;
            }
            requestAnimationFrame(autoScroll);
        }

        // Duplique les produits pour une animation fluide
        productList.innerHTML += productList.innerHTML;

        requestAnimationFrame(autoScroll);
    });
</script>

</html>