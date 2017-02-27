<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class CustomAreaModel extends XmlModelBase
{
    /**
     * @var array
     */
    protected $typeMapping = [
        'ProfilePicture' => ProfilePictureModel::class
    ];

    /**
     * @var string
     */
    private $CVTitle;

    /**
     * @var string
     */
    private $totalExperienceYears;

    /**
     * @var string
     */
    private $currentJob;

    /**
     * @var string
     */
    private $currentEmployer;

    /**
     * @var string
     */
    private $last3Experiences;

    /**
     * @var string
     */
    private $highestEducationLevelCode;

    /**
     * @var string
     */
    private $highestEducationLevelCodeDescription;

    /**
     * @var string
     */
    private $salaryCode;

    /**
     * @var string
     */
    private $salaryCodeDescription;

    /**
     * @var integer
     */
    private $candidateStatusCode;

    /**
     * @var string
     */
    private $candidateStatusCodeDescription;

    /**
     * @var integer
     */
    private $availabilityCode;

    /**
     * @var string
     */
    private $availabilityCodeDescription;

    /**
     * @var string
     */
    private $CVComment;

    /**
     * @var string
     */
    private $candidatePermission;

    /**
     * @var string
     */
    private $externalID;

    /**
     * @var ProfilePictureModel
     */
    private $profilePicture;

    /**
     * @return string
     */
    public function getCVTitle()
    {
        return $this->CVTitle;
    }

    /**
     * @param string $CVTitle
     * @return CustomAreaModel
     */
    public function setCVTitle($CVTitle)
    {
        $this->CVTitle = $CVTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getTotalExperienceYears()
    {
        return $this->totalExperienceYears;
    }

    /**
     * @param string $totalExperienceYears
     * @return CustomAreaModel
     */
    public function setTotalExperienceYears($totalExperienceYears)
    {
        $this->totalExperienceYears = $totalExperienceYears;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentJob()
    {
        return $this->currentJob;
    }

    /**
     * @param string $currentJob
     * @return CustomAreaModel
     */
    public function setCurrentJob($currentJob)
    {
        $this->currentJob = $currentJob;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentEmployer()
    {
        return $this->currentEmployer;
    }

    /**
     * @param string $currentEmployer
     * @return CustomAreaModel
     */
    public function setCurrentEmployer($currentEmployer)
    {
        $this->currentEmployer = $currentEmployer;
        return $this;
    }

    /**
     * @return string
     */
    public function getLast3Experiences()
    {
        return $this->last3Experiences;
    }

    /**
     * @param string $last3Experiences
     * @return CustomAreaModel
     */
    public function setLast3Experiences($last3Experiences)
    {
        $this->last3Experiences = $last3Experiences;
        return $this;
    }

    /**
     * @return string
     */
    public function getHighestEducationLevelCode()
    {
        return $this->highestEducationLevelCode;
    }

    /**
     * @param string $highestEducationLevelCode
     * @return CustomAreaModel
     */
    public function setHighestEducationLevelCode($highestEducationLevelCode)
    {
        $this->highestEducationLevelCode = $highestEducationLevelCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getHighestEducationLevelCodeDescription()
    {
        return $this->highestEducationLevelCodeDescription;
    }

    /**
     * @param string $highestEducationLevelCodeDescription
     * @return CustomAreaModel
     */
    public function setHighestEducationLevelCodeDescription($highestEducationLevelCodeDescription)
    {
        $this->highestEducationLevelCodeDescription = $highestEducationLevelCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalaryCode()
    {
        return $this->salaryCode;
    }

    /**
     * @param string $salaryCode
     * @return CustomAreaModel
     */
    public function setSalaryCode($salaryCode)
    {
        $this->salaryCode = $salaryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalaryCodeDescription()
    {
        return $this->salaryCodeDescription;
    }

    /**
     * @param string $salaryCodeDescription
     * @return CustomAreaModel
     */
    public function setSalaryCodeDescription($salaryCodeDescription)
    {
        $this->salaryCodeDescription = $salaryCodeDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getCandidateStatusCode()
    {
        return $this->candidateStatusCode;
    }

    /**
     * @param int $candidateStatusCode
     * @return CustomAreaModel
     */
    public function setCandidateStatusCode($candidateStatusCode)
    {
        $this->candidateStatusCode = $candidateStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCandidateStatusCodeDescription()
    {
        return $this->candidateStatusCodeDescription;
    }

    /**
     * @param string $candidateStatusCodeDescription
     * @return CustomAreaModel
     */
    public function setCandidateStatusCodeDescription($candidateStatusCodeDescription)
    {
        $this->candidateStatusCodeDescription = $candidateStatusCodeDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvailabilityCode()
    {
        return $this->availabilityCode;
    }

    /**
     * @param int $availabilityCode
     * @return CustomAreaModel
     */
    public function setAvailabilityCode($availabilityCode)
    {
        $this->availabilityCode = $availabilityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAvailabilityCodeDescription()
    {
        return $this->availabilityCodeDescription;
    }

    /**
     * @param string $availabilityCodeDescription
     * @return CustomAreaModel
     */
    public function setAvailabilityCodeDescription($availabilityCodeDescription)
    {
        $this->availabilityCodeDescription = $availabilityCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getCVComment()
    {
        return $this->CVComment;
    }

    /**
     * @param string $CVComment
     * @return CustomAreaModel
     */
    public function setCVComment($CVComment)
    {
        $this->CVComment = $CVComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getCandidatePermission()
    {
        return $this->candidatePermission;
    }

    /**
     * @param string $candidatePermission
     * @return CustomAreaModel
     */
    public function setCandidatePermission($candidatePermission)
    {
        $this->candidatePermission = $candidatePermission;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
        return $this->externalID;
    }

    /**
     * @param string $externalID
     * @return CustomAreaModel
     */
    public function setExternalID($externalID)
    {
        $this->externalID = $externalID;
        return $this;
    }

    /**
     * @return ProfilePictureModel
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param ProfilePictureModel $profilePicture
     * @return CustomAreaModel
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
        return $this;
    }
}
