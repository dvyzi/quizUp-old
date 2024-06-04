@props([
"css" => ""
])

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizup</title>
    <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/' . $css) }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Racing+Sans+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9de8273207.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <header>
        <a href="/" class="header_logo">
            <img src="{{asset("assets/img/logo/quizup.png")}}" alt="">
            <p>quizUp</p>
        </a>

        <ul class="header_middle">
            <li><a href="/quiz/news">Nouveauté</a></li>
            <li><a href="">Divertissement</a></li>
            <li><a href="">Apprentissage</a></li>
        </ul>

        <div class="header_connexion">
            <a href="/auth/login"><i class="fa-regular fa-circle-user"></i></a>
        </div>
    </header>
    <main>
        {{$slot}}
    </main>
    <footer>
        <section class="footer_top">
            <section class="footer_aboutMe">
                <p class="footer_aboutMe_title">À propos de nous</p>
                <p class="footer_aboutMe_p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus dolor rem velit, sed praesentium saepe dolores recusandae dolore reprehenderit! Quia molestiae rerum, officiis vel ex neque eveniet nulla recusandae iusto, nesciunt quo commodi! Qui ex neque at labore quae eaque.</p>
            </section>
            <section class="footer_category">
                <p class="footer_category_title">Menu</p>
                <div class="footer_category_manager">
                    <a href="">Nouveauté</a>
                    <a href="">Divertissement</a>
                    <a href="">Avertissement</a>
                </div>
            </section>
            <section class="footer_policies">
                <p class="footer_policies_title">Nos politiques</p>
                <div class="footer_category">
                    <div class="footer_category_manager">
                        <a href="/policies/privacy-policy">Politique de confidentialité</a>
                        <a href="/policies/terms-of-service">Conditions d'utilisation</a>
                        <a href="/policies/shipping-policy">Besoin d'aide ?</a>
                    </div>
                </div>
            </section>
        </section>
        <div class="footer_separation"></div>
        <section class="footer_bottom">
            <p class="footer_bottom_copyright">Copyright © 2024 All Rights Reserved by quizUp.</p>
            <div class="footer_bottom_socialMedia">
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </section>
    </footer>
</body>

</html>