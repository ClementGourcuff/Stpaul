<?php
$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');


    function getAllSejours($bdd){
        return $bdd->query('select * from sejour order by sejno');
    }


?>