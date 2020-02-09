<?php
include('inc/header.php');

 ?>

<div class="container">
    <img src="asset/img/massage1.jpeg" alt="Massage" style="width:100%;">
    <div class="centered">Être au présent</div>
    <div class="centered2"><img src="asset/img/separation.png" alt=""></div>
    <div class="centered3">Venez pour vous détendre durant un temps infini</div>
    <a href="index.php#qui"><div class="centered4"><img src="asset/img/arrow.svg" alt="fleche"></div></a>
</div>

<div class="wrap">
    <section id="who">
        <h2 class="titlewho">Qui suis-je ?</h2>
        <div class="bar1"></div>
        <h3>Apprenez à me connaître à travers mon univers.</h3>
        <div class="bar1"></div>
        <div class="containerwho">
            <div class="textwho"><p>Praticienne en massage bien être certifié membre de la federation francaise de massage bien être (inclure le logo ffmbe c est une main...)

                    <br>
                    Loin des grandes instituts, je vous acceuille dans un endroit cosy sans stress, et se déroule dans un cadre de confidentialité, de bienveillance et de non jugement.
                    <br>

                    Infirmiere de formation c'est tout naturellement que la massage bien être s'offre à moi. Les douleurs (doux leure) du corps de l'être soigné ne sont généralement pas pris en compte en occident. Je desire donner une autre dimention à ma vie profesionnelle, disons un peu plus humaniste, c'est pour moi une véritable passion de pouvoir allier le corps et l'esprit.
                    </p></div>
            <div class="centerdiv"><div class="bar2"></div> </div>
            <div class="imgwho"><img src="asset/img/woman.jpg"></div>
        </div>

    </section>
</div>













































<section id="massage">
    <div class="textMassage">
        <h2>Faites-vous plaisir</h2>
        <p>N’attendez plus le voyage annuel pour retrouver le sable blanc et le bois flotté, la douce odeur des huiles de massage et les mains expertes d’un spécialiste du bien être. Être au présent a réuni ces ingrédients pour offrir à votre corps un instant privilégié de détente, avec une professionnel à votre écoute.</p>
    </div>
    <div class="imgMassage">
        <img src="asset/img/massage2.jpg" alt="massage">
        <div class="hoverlay"><a href="#">Découvrez mes massages</a></div>
    </div>
</section>

<section id="formulaire">
    <div class="bg-img">
        <form action="/action_page.php" class="containerx" novalidate>
            <h1>Contactez-moi :</h1>

            <label for="email"><b>Nom</b></label>
            <input type="text" placeholder="Enter nom" name="nom" required>

            <label for="psw"><b>Prénom</b></label>
            <input type="text" placeholder="Entrer prénom" name="prenom" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="email"><b>Objet</b></label>
            <input type="text" placeholder="Enter objet" name="objet" required>

            <label for="email"><b>Message</b></label>
            <textarea name="message" id="message">Entrer message ici...</textarea>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</section>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="asset/js/main.js"></script>

