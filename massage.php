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

            <h3><?= $massage['nom']; ?></h3>
            <p><?= $massage['prix'] . '€'; ?></p>
            <p><?= $massage['time']; ?></p>
            <span><?= $massage['description']; ?></span>

    </div>


<?php } ?>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="asset/js/main.js"></script>

<?php include('inc/footer.php');