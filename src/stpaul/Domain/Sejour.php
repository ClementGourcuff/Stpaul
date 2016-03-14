<?php

namespace stpaul\Domain;

/**
 * Class Sejour
 * @package stpaul\Domain
 * classe permettant l'instanciation d'un objet sejour
 */
class Sejour
/**  */
{
    /**
     * @var numéro du sejour
     */
    private $sejno;
    /**
     * @var intitulé du sejour
     */
    private $sejintitule;
    /**
     * @var montant du sejour
     */
    private $sejmontant;
    /**
     * @var date de début du sejour
     */
    private $sejdebut;
    /**
     * @var durée du sejour
     */
    private $sejduree;

    function __construct($sejno, $sejintitule, $sejmontant, $sejdebut, $sejduree)
    {
        $this->sejno = $sejno;
        $this->sejintitule = $sejintitule;
        $this->sejmontant = $sejmontant;
        $this->sejdebut = new \DateTime($sejdebut);
        $this->sejduree = $sejduree;
    }

    /**
     * @return numéro
     */
    public function getSejno()
    {
        return $this->sejno;
    }

    /**
     * @param numéro $sejno
     */
    public function setSejno($sejno)
    {
        $this->sejno = $sejno;
    }

    /**
     * @return intitulé
     */
    public function getSejintitule()
    {
        return $this->sejintitule;
    }

    /**
     * @param intitulé $sejintitule
     */
    public function setSejintitule($sejintitule)
    {
        $this->sejintitule = $sejintitule;
    }

    /**
     * @return montant
     */
    public function getSejmontant()
    {
        return $this->sejmontant;
    }

    /**
     * @param montant $sejmontant
     */
    public function setSejmontant($sejmontant)
    {
        $this->sejmontant = $sejmontant;
    }

    /**
     * @return date
     */
    public function getSejdebut()
    {
        return $this->sejdebut;
    }

    /**
     * @param date $sejdebut
     */
    public function setSejdebut($sejdebut)
    {
        $this->sejdebut = $sejdebut;
    }

    /**
     * @return durée
     */
    public function getSejduree()
    {
        return $this->sejduree;
    }

    /**
     * @param durée $sejduree
     */
    public function setSejduree($sejduree)
    {
        $this->sejduree = $sejduree;
    }

    /**
     * Retourne la date de fin de séjour
     * @return mixed
     */

    /**
     * Retourne la date de fin de séjour
     * @return mixed
     */
    public function getSejDteFin()
    {
        $date = $this->sejdebut;
        $date->add(new \DateInterval('P'.$this->sejduree.'D'));
        return $date->format('Y-m-d');
    }

    /**
     * Formatage jj-mm-aaaa
     * @param $pDte : date à formater
     * @return mixed
     */
    public function getSejDteFormatFR($pDte)
    {
        $date = new \DateTime($pDte);
        $dateFr = $date->format('d-m-Y');
        return $dateFr;
    }


}