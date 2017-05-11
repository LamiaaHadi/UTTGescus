<?php

namespace UTTGescusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * element
 *
 * @ORM\Table(name="element")
 * @ORM\Entity(repositoryClass="UTTGescusBundle\Repository\elementRepository")
 */
class element
{
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="sigle", inversedBy="element")
     * @ORM\JoinColumn(name="sigle_id", referencedColumnName="id")
     */
    private $sigle;
    /**
     * @ORM\ManyToOne(targetEntity="cursus", inversedBy="element")
     * @ORM\JoinColumn(name="cursus_id", referencedColumnName="id")
     */
    private $cursus;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="sem_seq", type="integer")
     */
    private $semSeq;

    /**
     * @var string
     *
     * @ORM\Column(name="sem_label", type="string", length=255)
     */
    private $semLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="utt", type="string", length=255)
     */
    private $utt;

    /**
     * @var string
     *
     * @ORM\Column(name="profil", type="string", length=255)
     */
    private $profil;

    /**
     * @var string
     *
     * @ORM\Column(name="affectation", type="string", length=255)
     */
    private $affectation;

    /**
     * @var string
     *
     * @ORM\Column(name="credit", type="string", length=255)
     */
    private $credit;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat", type="string", length=255)
     */
    private $resultat;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set semSeq
     *
     * @param integer $semSeq
     * @return element
     */
    public function setSemSeq($semSeq)
    {
        $this->semSeq = $semSeq;

        return $this;
    }

    /**
     * Get semSeq
     *
     * @return integer 
     */
    public function getSemSeq()
    {
        return $this->semSeq;
    }

    /**
     * Set semLabel
     *
     * @param string $semLabel
     * @return element
     */
    public function setSemLabel($semLabel)
    {
        $this->semLabel = $semLabel;

        return $this;
    }

    /**
     * Get semLabel
     *
     * @return string 
     */
    public function getSemLabel()
    {
        return $this->semLabel;
    }

    /**
     * Set utt
     *
     * @param string $utt
     * @return element
     */
    public function setUtt($utt)
    {
        $this->utt = $utt;

        return $this;
    }

    /**
     * Get utt
     *
     * @return string 
     */
    public function getUtt()
    {
        return $this->utt;
    }

    /**
     * Set profil
     *
     * @param string $profil
     * @return element
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return string 
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set affectation
     *
     * @param string $affectation
     * @return element
     */
    public function setAffectation($affectation)
    {
        $this->affectation = $affectation;

        return $this;
    }

    /**
     * Get affectation
     *
     * @return string 
     */
    public function getAffectation()
    {
        return $this->affectation;
    }

    /**
     * Set credit
     *
     * @param string $credit
     * @return element
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return string 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set resultat
     *
     * @param string $resultat
     * @return element
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string 
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set sigle
     *
     * @param \UTTGescusBundle\Entity\sigle $sigle
     * @return element
     */
    public function setSigle(\UTTGescusBundle\Entity\sigle $sigle = null)
    {
        $this->sigle = $sigle;

        return $this;
    }

    /**
     * Get sigle
     *
     * @return \UTTGescusBundle\Entity\sigle 
     */
    public function getSigle()
    {
        return $this->sigle;
    }

    /**
     * Set cursus
     *
     * @param \UTTGescusBundle\Entity\cursus $cursus
     * @return element
     */
    public function setCursus(\UTTGescusBundle\Entity\cursus $cursus = null)
    {
        $this->cursus = $cursus;

        return $this;
    }

    /**
     * Get cursus
     *
     * @return \UTTGescusBundle\Entity\cursus 
     */
    public function getCursus()
    {
        return $this->cursus;
    }
}
