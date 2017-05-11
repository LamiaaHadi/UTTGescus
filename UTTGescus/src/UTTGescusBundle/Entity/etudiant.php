<?php

namespace UTTGescusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="UTTGescusBundle\Repository\etudiantRepository")
 */
class etudiant
{
    
    /**
     * @ORM\OneToMany(targetEntity="cursus", mappedBy="etudiant")
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;


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
     * Set nom
     *
     * @param string $nom
     * @return etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cursus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return etudiant
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Add cursus
     *
     * @param \UTTGescusBundle\Entity\cursus $cursus
     * @return etudiant
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
