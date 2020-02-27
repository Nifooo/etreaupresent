<?php
include('inc/pdo.php');
include('inc/function.php');

$sql = "SELECT * FROM massages";
$query = $pdo->prepare($sql);
$query->execute();
$massages = $query->fetchAll();

//debug($massages);

include('inc/header.php'); ?>

<div id="explicationMassage">
    <div class="rond">
        <h2>Les massages Bien- Etre</h2>
        <div class="barMassage"></div>
        <p>Massage à but non thérapeutiques à l huile biologique exclusivement</p>

        <p>Les bienfaits du massage</p>
        <div class="barMassage"></div>

        <h3>Le massage est une technique de relaxation dont l’origine est ancestrale. Il apporte de nombreux effets positifs pour le corps. Le massage a pour  but de détendre et d'apporter bien-être et relaxation.La principale vertu du massage est de réduire le stress, car neuf maladies sur dix y sont liées. En réduisant l’anxiété, il aidera à mieux dormir, et à avoir ainsi un meilleur réveil le matin. Vous serez ainsi plus motivés et surtout plus concentrés sur vos tâches quotidiennes. Le massage améliore également votre circulation sanguine et lymphatique et stimule vos défenses immunitaires. Il permet de soulager les tensions musculaires et émotionnelles.</h3>
    </div>
</div>

<?php foreach ($massages as $massage) {

    ?>
    
    <div id="listeMassage">
        <div class="wrapX">
            <a href="infomassage.php?id=<?php echo $massage['id']; ?>" class="imgMassage"><img src="asset/img/logo.png" alt="logo du site"></a>

            <a href="infomassage.php?id=<?php echo $massage['id']; ?>"><div class="mass">
            <h3><?= $massage['nom']; ?></h3>
            <h4><?= $massage['prix'] . '€'; ?></h4>
            <h4><?= $massage['time']; ?></h4>
            <p>Voir plus -></p>
            </div></a>
        </div>
    </div>


<?php } ?>

<div class="clear"></div>

<?php include('inc/footer.php');