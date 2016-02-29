<?php
$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
$sejours = $bdd->query('select * from sejour order by sejno');
foreach ($sejours as $sejour): ?>
    <sejour>
        <h2><p><?php echo $sejour['SEJINTITULE'] ?></p></h2>
        <?php echo $sejour['SEJMONTANTMBI'].'€' ?><BR/>
        <?php echo 'A partir du '.$sejour['SEJDTEDEB'] ?>
        <?php echo $sejour['SEJDUREE'].' nuits' ?>
    </sejour>
<?php endforeach ?>