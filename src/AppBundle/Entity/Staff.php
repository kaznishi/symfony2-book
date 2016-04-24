<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inquiry
 *
 * @ORM\Table(name="staff")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\StaffRepository")
 */
class Staff
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="is_inquiry_staff", type="boolean", nullable=false, options={"default" = false})
     */
    private $isInquiryStaff;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     * @return Inquiry
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param boolean $isInquiryStaff
     * @return Inquiry
     */
    public function setIsInquiryStaff($isInquiryStaff)
    {
        $this->isInquiryStaff = $isInquiryStaff;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInquiryStaff()
    {
        return $this->isInquiryStaff;
    }

}
