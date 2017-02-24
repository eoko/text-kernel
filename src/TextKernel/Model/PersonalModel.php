<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class PersonalModel extends XmlModelBase
{
    /**
     * @var array
     */
    protected $typeMapping = [
        'MobilePhones' => 'array',
        'HomePhones' => 'array',
        'Emails' => 'array',
        'SocialMedia' => 'array',
        'SocialMediaLink' => SocialMediaModel::class,
        'Address' => AddressModel::class
    ];

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;
    /**
     * @var \DateTime
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $nationalityCode;

    /**
     * @var string
     */
    private $nationalityCodeDescription;

    /**
     * @var string
     */
    private $genderCode;

    /**
     * @var string
     */
    private $genderCodeDescription;

    /**
     * @var string
     */
    private $driversLicence;

    /**
     * @var string
     */
    private $maritalStatusCode;

    /**
     * @var string
     */
    private $maritalStatusCodeDescription;
    /**
     * @var AddressModel
     */
    private $address;

    /**
     * @var array
     */
    private $mobilePhones = [];

    /**
     * @var array
     */
    private $homePhones = [];

    /**
     * @var array
     */
    private $emails = [];

    /**
     * @var array
     */
    private $socialMedia = [];

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return PersonalModel
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return PersonalModel
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return PersonalModel
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param \DateTime $dateOfBirth
     * @return PersonalModel
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationalityCode()
    {
        return $this->nationalityCode;
    }

    /**
     * @param string $nationalityCode
     * @return PersonalModel
     */
    public function setNationalityCode($nationalityCode)
    {
        $this->nationalityCode = $nationalityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationalityCodeDescription()
    {
        return $this->nationalityCodeDescription;
    }

    /**
     * @param string $nationalityCodeDescription
     * @return PersonalModel
     */
    public function setNationalityCodeDescription($nationalityCodeDescription)
    {
        $this->nationalityCodeDescription = $nationalityCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenderCode()
    {
        return $this->genderCode;
    }

    /**
     * @param string $genderCode
     * @return PersonalModel
     */
    public function setGenderCode($genderCode)
    {
        $this->genderCode = $genderCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenderCodeDescription()
    {
        return $this->genderCodeDescription;
    }

    /**
     * @param string $genderCodeDescription
     * @return PersonalModel
     */
    public function setGenderCodeDescription($genderCodeDescription)
    {
        $this->genderCodeDescription = $genderCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getDriversLicence()
    {
        return $this->driversLicence;
    }

    /**
     * @param string $driversLicence
     * @return PersonalModel
     */
    public function setDriversLicence($driversLicence)
    {
        $this->driversLicence = $driversLicence;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaritalStatusCode()
    {
        return $this->maritalStatusCode;
    }

    /**
     * @param string $maritalStatusCode
     * @return PersonalModel
     */
    public function setMaritalStatusCode($maritalStatusCode)
    {
        $this->maritalStatusCode = $maritalStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getMaritalStatusCodeDescription()
    {
        return $this->maritalStatusCodeDescription;
    }

    /**
     * @param string $maritalStatusCodeDescription
     * @return PersonalModel
     */
    public function setMaritalStatusCodeDescription($maritalStatusCodeDescription)
    {
        $this->maritalStatusCodeDescription = $maritalStatusCodeDescription;
        return $this;
    }

    /**
     * @return AddressModel
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param AddressModel $address
     * @return PersonalModel
     */
    public function setAddress(AddressModel $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return array
     */
    public function getMobilePhones()
    {
        return $this->mobilePhones;
    }

    /**
     * @param array $mobilePhones
     * @return PersonalModel
     */
    public function setMobilePhones(array $mobilePhones = [])
    {
        $this->mobilePhones = $mobilePhones;
        return $this;
    }

    /**
     * @return array
     */
    public function getHomePhones()
    {
        return $this->homePhones;
    }

    /**
     * @param array $homePhones
     * @return PersonalModel
     */
    public function setHomePhones(array $homePhones = [])
    {
        $this->homePhones = $homePhones;
        return $this;
    }

    /**
     * @return array
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param array $emails
     * @return PersonalModel
     */
    public function setEmails(array $emails = [])
    {
        $this->emails = $emails;
        return $this;
    }

    /**
     * @return array
     */
    public function getSocialMedia()
    {
        return $this->socialMedia;
    }

    /**
     * @param array $socialMedia
     * @return PersonalModel
     */
    public function setSocialMedia(array $socialMedia = [])
    {
        $this->socialMedia = $socialMedia;
        return $this;
    }

/*
<Title></Title>
<FirstName>Dan</FirstName>
<LastName>Ayasch</LastName>
<DateOfBirth></DateOfBirth>
<NationalityCode></NationalityCode>
<NationalityCodeDescription></NationalityCodeDescription>
<GenderCode>1</GenderCode>
<GenderCodeDescription>Male</GenderCodeDescription>
<DriversLicence></DriversLicence>
<MaritalStatusCode></MaritalStatusCode>
<MaritalStatusCodeDescription></MaritalStatusCodeDescription>

<Address>
</Address>
<MobilePhones>
<MobilePhone>0033(0)601350105</MobilePhone>

</MobilePhones>

<HomePhones>
<HomePhone></HomePhone>

</HomePhones>


<Emails>
<Email>danayasch@gmail.com</Email>

</Emails>
<SocialMedia>
<SocialMediaLink>
<SocialMediaURL>http://fr.linkedin.com/in/dan-ayasch-89281bb3</SocialMediaURL>
<SocialMediaType>linkedin</SocialMediaType>
</SocialMediaLink>

</SocialMedia>*/
}
