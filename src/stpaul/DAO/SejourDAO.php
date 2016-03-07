<?php

namespace stpaul\DAO;

use Doctrine\DBAL\Connection;
use stpaul\Domain\Sejour;

/**
 * Class SejourDAO
 * @package stpaul\DAO
 * classe permettant la création d'objets sejour en fonction d'une base de données
 */
class SejourDAO
/**  */
{

    /**
     * @var Connection
     */
    private $db;

    /**
     * @param Connection $db
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * @return array
     */
    public function findAll() {
        $sql = "select * from sejour order by sejno";
        $result = $this->db->fetchAll($sql);

        $sejours = array();
        foreach ($result as $row) {
            $sejourNo = $row['sejno'];
            $sejours[$sejourNo] = $this->buildSejour($row);
        }
        return $sejours;
    }

    /**
     * @param array $row
     * @return Sejour
     */
    private function buildSejour(array $row) {

        $sejour = new Sejour($row['sejno'],$row['sejintitule'],$row['sejmontantmbi'],$row['sejdtedeb'],$row['sejduree']);
        return $sejour;
    }
}