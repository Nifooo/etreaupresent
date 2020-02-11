<?php 
include('inc/pdo.php');
include('inc/function.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM massages WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $massage = $query->fetch();

?>

    <div class="films">
        <img src="asset/img/logo.png" alt="logo">
        <div class="mass">
            <h3><?= $massage['nom']; ?></h3>
            <h4><?= $massage['prix'] . '€'; ?></h4>
            <h4><?= $massage['time']; ?></h4>
            <h4><?= $massage['description']; ?></h4>
            </div>
    <div class="clear"></div>
</div>



<?php include('inc/footer.php');
