<?php

namespace UTTGescusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reglement
 *
 * @ORM\Table(name="reglement")
 * @ORM\Entity(repositoryClass="UTTGescusBundle\Repository\reglementRepository")
 */
class reglement
{
    
    
    /**
     * @ORM\OneToMany(targetEntity="regle", mappedBy="reglement")
     */
    private $regle;
    
    /**
    * @ORM\ManyToMany(targetEntity="cursus", inversedBy="reglement")
    * @ORM\JoinColumn(name="gescus")
    */
    private $cursus;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="labelrgl", type="string", length=255)
     */
    private $labelrgl;


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
     * Set labelrgl
     *
     * @param string $labelrgl
     * @return reglement
     */
    public function setLabelrgl($labelrgl)
    {
        $this->labelrgl = $labelrgl;

        return $this;
    }

    /**
     * Get labelrgl
     *
     * @return string 
     */
    public function getLabelrgl()
    {
        return $this->labelrgl;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return reglement
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add regle
     *
     * @param \UTTGescusBundle\Entity\regle $regle
     * @return reglement
     */
    public function addRegle(\UTTGescusBundle\Entity\regle $regle)
    {
        $this->regle[] = $regle;

        return $this;
    }

    /**
     * Remove regle
     *
     * @param \UTTGescusBundle\Entity\regle $regle
     */
    public function removeRegle(\UTTGescusBundle\Entity\regle $regle)
    {
        $this->regle->removeElement($regle);
    }

    /**
     * Get regle
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegle()
    {
        return $this->regle;
    }

    /**
     * Add cursus
     *
     * @param \UTTGescusBundle\Entity\cursus $cursus
     * @return reglement
     */
    public function addCursus(\UTTGescusBundle\Entity\cursus $cursus)
    {
        $this->cursus[] = $cursus;

        return $this;
    }

    /**
     * Remove cursus
     *
     * @param \UTTGescusBundle\Entity\cursus $cursus
     */
    public function removeCursus(\UTTGescusBundle\Entity\cursus $cursus)
    {
        $this->cursus->removeElement($cursus);
    }

    /**
     * Get cursus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCursus()
    {
        return $this->cursus;
    }
}
