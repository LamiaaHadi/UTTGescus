<?php

namespace UTTGescusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sigle
 *
 * @ORM\Table(name="sigle")
 * @ORM\Entity(repositoryClass="UTTGescusBundle\Repository\sigleRepository")
 */
class sigle
{
    
    
    /**
     * @ORM\OneToMany(targetEntity="element", mappedBy="sigle")
     */
    private $element;
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
     * @ORM\Column(name="cat", type="string", length=255)
     */
    private $cat;


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
     * Set cat
     *
     * @param string $cat
     * @return sigle
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return string 
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return sigle
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
        $this->element = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add element
     *
     * @param \UTTGescusBundle\Entity\element $element
     * @return sigle
     */
    public function addElement(\UTTGescusBundle\Entity\element $element)
    {
        $this->element[] = $element;

        return $this;
    }

    /**
     * Remove element
     *
     * @param \UTTGescusBundle\Entity\element $element
     */
    public function removeElement(\UTTGescusBundle\Entity\element $element)
    {
        $this->element->removeElement($element);
    }

    /**
     * Get element
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getElement()
    {
        return $this->element;
    }
}
