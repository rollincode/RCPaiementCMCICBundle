<?php
namespace RC\PaiementCMCICBundle\Entity;

class Paiement
{
    private $version;
    private $TPE;
    private $date;
    private $montant;
    private $montantNum;
    private $reference;
    private $MAC;
    private $url_retour;
    private $url_retour_ok;
    private $url_retour_err;
    private $lgue;
    private $societe;
    private $mail;
    private $devise;

    private $texteLibre;
    private $nbr_ech;
    private $date_ech_1;
    private $montant_ech_1;
    private $date_ech_2;
    private $montant_ech_2;
    private $date_ech_3;
    private $montant_ech_3;
    private $date_ech_4;
    private $montant_ech_4;
    private $options;

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getTPE()
    {
        return $this->TPE;
    }

    /**
     * @param mixed $TPE
     */
    public function setTPE($TPE)
    {
        $this->TPE = $TPE;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getMAC()
    {
        return $this->MAC;
    }

    /**
     * @param mixed $MAC
     */
    public function setMAC($MAC)
    {
        $this->MAC = $MAC;
    }

    /**
     * @return mixed
     */
    public function getUrlRetour()
    {
        return $this->url_retour;
    }

    /**
     * @param mixed $url_retour
     */
    public function setUrlRetour($url_retour)
    {
        $this->url_retour = $url_retour;
    }

    /**
     * @return mixed
     */
    public function getUrlRetourOk()
    {
        return $this->url_retour_ok;
    }

    /**
     * @param mixed $url_retour_ok
     */
    public function setUrlRetourOk($url_retour_ok)
    {
        $this->url_retour_ok = $url_retour_ok;
    }

    /**
     * @return mixed
     */
    public function getUrlRetourErr()
    {
        return $this->url_retour_err;
    }

    /**
     * @param mixed $url_retour_err
     */
    public function setUrlRetourErr($url_retour_err)
    {
        $this->url_retour_err = $url_retour_err;
    }

    /**
     * @return mixed
     */
    public function getLgue()
    {
        return $this->lgue;
    }

    /**
     * @param mixed $lgue
     */
    public function setLgue($lgue)
    {
        $this->lgue = $lgue;
    }

    /**
     * @return mixed
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * @param mixed $societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * @param mixed $devise
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;
    }

    /**
     * @return mixed
     */
    public function getTexteLibre()
    {
        return $this->texteLibre;
    }

    /**
     * @param mixed $texteLibre
     */
    public function setTexteLibre($texteLibre)
    {
        $this->texteLibre = $texteLibre;
    }

    /**
     * @return mixed
     */
    public function getNbrEch()
    {
        return $this->nbr_ech;
    }

    /**
     * @param mixed $nbr_ech
     */
    public function setNbrEch($nbr_ech)
    {
        $this->nbr_ech = $nbr_ech;
    }

    /**
     * @return mixed
     */
    public function getDateEch1()
    {
        return $this->date_ech_1;
    }

    /**
     * @param mixed $date_ech_1
     */
    public function setDateEch1($date_ech_1)
    {
        $this->date_ech_1 = $date_ech_1;
    }

    /**
     * @return mixed
     */
    public function getMontantEch1()
    {
        return $this->montant_ech_1;
    }

    /**
     * @param mixed $montant_ech_1
     */
    public function setMontantEch1($montant_ech_1)
    {
        $this->montant_ech_1 = $montant_ech_1;
    }

    /**
     * @return mixed
     */
    public function getDateEch2()
    {
        return $this->date_ech_2;
    }

    /**
     * @param mixed $date_ech_2
     */
    public function setDateEch2($date_ech_2)
    {
        $this->date_ech_2 = $date_ech_2;
    }

    /**
     * @return mixed
     */
    public function getMontantEch2()
    {
        return $this->montant_ech_2;
    }

    /**
     * @param mixed $montant_ech_2
     */
    public function setMontantEch2($montant_ech_2)
    {
        $this->montant_ech_2 = $montant_ech_2;
    }

    /**
     * @return mixed
     */
    public function getDateEch3()
    {
        return $this->date_ech_3;
    }

    /**
     * @param mixed $date_ech_3
     */
    public function setDateEch3($date_ech_3)
    {
        $this->date_ech_3 = $date_ech_3;
    }

    /**
     * @return mixed
     */
    public function getMontantEch3()
    {
        return $this->montant_ech_3;
    }

    /**
     * @param mixed $montant_ech_3
     */
    public function setMontantEch3($montant_ech_3)
    {
        $this->montant_ech_3 = $montant_ech_3;
    }

    /**
     * @return mixed
     */
    public function getDateEch4()
    {
        return $this->date_ech_4;
    }

    /**
     * @param mixed $date_ech_4
     */
    public function setDateEch4($date_ech_4)
    {
        $this->date_ech_4 = $date_ech_4;
    }

    /**
     * @return mixed
     */
    public function getMontantEch4()
    {
        return $this->montant_ech_4;
    }

    /**
     * @param mixed $montant_ech_4
     */
    public function setMontantEch4($montant_ech_4)
    {
        $this->montant_ech_4 = $montant_ech_4;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }

    /**
     * @return mixed
     */
    public function getMontantNum()
    {
        return $this->montantNum;
    }

    /**
     * @param mixed $montantNum
     */
    public function setMontantNum($montantNum)
    {
        $this->montantNum = $montantNum;
    }

}