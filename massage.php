<?php
include('inc/pdo.php');
include('inc/function.php');

$sql = "SELECT * FROM massages";
$query = $pdo->prepare($sql);
$query->execute();
$massages = $query->fetchAll();

//debug($massages);

include('inc/header.php');

foreach ($massages as $massage) {

    ;; ?>
    <div id="listeMassage">
            <a href="details.php"><img src="asset/img/logo.png" alt="logo du site"></a>

            <div class="mass">
            <a href="details.php"><h3><?= $massage['nom']; ?></h3></a>
            <h4><?= $massage['prix'] . '€'; ?></h4>
            <h4><?= $massage['time']; ?></h4>
            <a href="details.php"><p>Voir plus -></p></a>
            </div>
    </div>


<?php } ?>

<div class="clear"></div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="asset/js/main.js"></script>

<?php include('inc/footer.php');