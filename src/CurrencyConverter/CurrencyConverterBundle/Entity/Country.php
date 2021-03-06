<?php

namespace CurrencyConverter\CurrencyConverterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CurrencyConverter\CurrencyConverterBundle\Entity\Repository\CountryRepository")
 * @ORM\Table(name="countries")
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $currency_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $country;   

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
     * @ORM\OneToOne(targetEntity="Currency", inversedBy="country")
     * @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     */
    protected $currency;

    /**
     * Set currency_id
     *
     * @param integer $currencyId
     * @return Country
     */
    public function setCurrencyId($currencyId)
    {
        $this->currency_id = $currencyId;

        return $this;
    }

    /**
     * Get currency_id
     *
     * @return integer 
     */
    public function getCurrencyId()
    {
        return $this->currency_id;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set currency
     *
     * @param \CurrencyConverter\CurrencyConverterBundle\Entity\Currency $currency
     * @return Country
     */
    public function setCurrency(\CurrencyConverter\CurrencyConverterBundle\Entity\Currency $currency = null)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return \CurrencyConverter\CurrencyConverterBundle\Entity\Currency 
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
