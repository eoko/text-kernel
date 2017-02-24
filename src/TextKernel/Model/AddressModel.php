<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class AddressModel extends XmlModelBase
{
    /**
     * @var string
     */
    private $streetName;
    /**
     * @var string
     */
    private $streetNumberBase;
    /**
     * @var string
     */
    private $postalCode;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $regionCode;
    /**
     * @var string
     */
    private $regionCodeDescription;
    /**
     * @var string
     */
    private $countryCode;
    /**
     * @var string
     */
    private $countryCodeDescription;

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return AddressModel
     */
    public function setStreetName($streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumberBase()
    {
        return $this->streetNumberBase;
    }

    /**
     * @param string $streetNumberBase
     * @return AddressModel
     */
    public function setStreetNumberBase($streetNumberBase)
    {
        $this->streetNumberBase = $streetNumberBase;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return AddressModel
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return AddressModel
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     * @return AddressModel
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionCodeDescription()
    {
        return $this->regionCodeDescription;
    }

    /**
     * @param string $regionCodeDescription
     * @return AddressModel
     */
    public function setRegionCodeDescription($regionCodeDescription)
    {
        $this->regionCodeDescription = $regionCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return AddressModel
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCodeDescription()
    {
        return $this->countryCodeDescription;
    }

    /**
     * @param string $countryCodeDescription
     * @return AddressModel
     */
    public function setCountryCodeDescription($countryCodeDescription)
    {
        $this->countryCodeDescription = $countryCodeDescription;
        return $this;
    }
}
