<?php

namespace UTTGescusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * regle
 *
 * @ORM\Table(name="regle")
 * @ORM\Entity(repositoryClass="UTTGescusBundle\Repository\regleRepository")
 */
class regle
{
    
    /**
     * @ORM\ManyToOne(targetEntity="reglement", inversedBy="regle")
     * @ORM\JoinColumn(name="reglement_id", referencedColumnName="id")
     */
    private $reglement;
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="agregat", type="string", length=255)
     */
    private $agregat;

    /**
     * @var string
     *
     * @ORM\Column(name="cible", type="string", length=255)
     */
    private $cible;

    /**
     * @var string
     *
     * @ORM\Column(name="etape", type="string", length=255)
     */
    private $etape;

    /**
     * @var int
     *
     * @ORM\Column(name="seuil", type="integer")
     */
    private $seuil;


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set agregat
     *
     * @param string $agregat
     * @return regle
     */
    public function setAgregat($agregat)
    {
        $this->agregat = $agregat;

        return $this;
    }

    /**
     * Get agregat
     *
     * @return string 
     */
    public function getAgregat()
    {
        return $this->agregat;
    }

    /**
     * Set cible
     *
     * @param string $cible
     * @return regle
     */
    public function setCible($cible)
    {
        $this->cible = $cible;

        return $this;
    }

    /**
     * Get cible
     *
     * @return string 
     */
    public function getCible()
    {
        return $this->cible;
    }

    /**
     * Set etape
     *
     * @param string $etape
     * @return regle
     */
    public function setEtape($etape)
    {
        $this->etape = $etape;

        return $this;
    }

    /**
     * Get etape
     *
     * @return string 
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * Set seuil
     *
     * @param integer $seuil
     * @return regle
     */
    public function setSeuil($seuil)
    {
        $this->seuil = $seuil;

        return $this;
    }

    /**
     * Get seuil
     *
     * @return integer 
     */
    public function getSeuil()
    {
        return $this->seuil;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return regle
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set reglement
     *
     * @param \UTTGescusBundle\Entity\reglement $reglement
     * @return regle
     */
    public function setReglement(\UTTGescusBundle\Entity\reglement $reglement = null)
    {
        $this->reglement = $reglement;

        return $this;
    }

    /**
     * Get reglement
     *
     * @return \UTTGescusBundle\Entity\reglement 
     */
    public function getReglement()
    {
        return $this->reglement;
    }
}
