<?php

namespace Web\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $secondName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $countryId;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $addressFL;

    /**
     * @var string
     */
    private $addressSL;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $mobilePhone;

    /**
     * @var string
     */
    private $addressType;


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
     * Set firstName
     *
     * @param string $firstName
     * @return Address
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     * @return Address
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string 
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Address
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set countryId
     *
     * @param integer $countryId
     * @return Address
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set addressFL
     *
     * @param string $addressFL
     * @return Address
     */
    public function setAddressFL($addressFL)
    {
        $this->addressFL = $addressFL;

        return $this;
    }

    /**
     * Get addressFL
     *
     * @return string 
     */
    public function getAddressFL()
    {
        return $this->addressFL;
    }

    /**
     * Set addressSL
     *
     * @param string $addressSL
     * @return Address
     */
    public function setAddressSL($addressSL)
    {
        $this->addressSL = $addressSL;

        return $this;
    }

    /**
     * Get addressSL
     *
     * @return string 
     */
    public function getAddressSL()
    {
        return $this->addressSL;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Address
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return Address
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string 
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set addressType
     *
     * @param string $addressType
     * @return Address
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * Get addressType
     *
     * @return string 
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    public function __toString()
    {
        return $this->getAddressFL() ?: '-';
    }
}
