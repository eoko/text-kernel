<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class EmploymentModel extends XmlModelBase
{
    /**
     * @var string
     */
    private $jobTitle;
    /**
     * @var \DateTime
     */
    private $startDate;
    /**
     * @var \DateTime
     */
    private $endDate;
    /**
     * @var string
     */
    private $experienceYears;
    /**
     * @var string
     */
    private $employerName;
    /**
     * @var string
     */
    private $description;

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     * @return EmploymentModel
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return EmploymentModel
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return EmploymentModel
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExperienceYears()
    {
        return $this->experienceYears;
    }

    /**
     * @param string $experienceYears
     * @return EmploymentModel
     */
    public function setExperienceYears($experienceYears)
    {
        $this->experienceYears = $experienceYears;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployerName()
    {
        return $this->employerName;
    }

    /**
     * @param string $employerName
     * @return EmploymentModel
     */
    public function setEmployerName($employerName)
    {
        $this->employerName = $employerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return EmploymentModel
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
