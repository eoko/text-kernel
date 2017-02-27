<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class EducationItemModel  extends XmlModelBase
{
    /**
     * @var integer
     */
    private $educationLevelCode;
    /**
     * @var string
     */
    private $educationLevelCodeDescription;
    /**
     * @var string
     */
    private $degreeDirection;
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
    private $instituteName;
    /**
     * @var integer
     */
    private $diplomaCode;
    /**
     * @var string
     */
    private $diplomaCodeDescription;
    /**
     * @var string
     */
    private $gradePointAverage;

    /**
     * @return int
     */
    public function getEducationLevelCode()
    {
        return $this->educationLevelCode;
    }

    /**
     * @param int $educationLevelCode
     * @return EducationItemModel
     */
    public function setEducationLevelCode($educationLevelCode)
    {
        $this->educationLevelCode = $educationLevelCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getEducationLevelCodeDescription()
    {
        return $this->educationLevelCodeDescription;
    }

    /**
     * @param string $educationLevelCodeDescription
     * @return EducationItemModel
     */
    public function setEducationLevelCodeDescription($educationLevelCodeDescription)
    {
        $this->educationLevelCodeDescription = $educationLevelCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getDegreeDirection()
    {
        return $this->degreeDirection;
    }

    /**
     * @param string $degreeDirection
     * @return EducationItemModel
     */
    public function setDegreeDirection($degreeDirection)
    {
        $this->degreeDirection = $degreeDirection;
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
     * @return EducationItemModel
     */
    public function setStartDate(\DateTime $startDate = null)
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
     * @return EducationItemModel
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstituteName()
    {
        return $this->instituteName;
    }

    /**
     * @param string $instituteName
     * @return EducationItemModel
     */
    public function setInstituteName($instituteName)
    {
        $this->instituteName = $instituteName;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiplomaCode()
    {
        return $this->diplomaCode;
    }

    /**
     * @param int $diplomaCode
     * @return EducationItemModel
     */
    public function setDiplomaCode($diplomaCode)
    {
        $this->diplomaCode = $diplomaCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiplomaCodeDescription()
    {
        return $this->diplomaCodeDescription;
    }

    /**
     * @param string $diplomaCodeDescription
     * @return EducationItemModel
     */
    public function setDiplomaCodeDescription($diplomaCodeDescription)
    {
        $this->diplomaCodeDescription = $diplomaCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getGradePointAverage()
    {
        return $this->gradePointAverage;
    }

    /**
     * @param string $gradePointAverage
     * @return EducationItemModel
     */
    public function setGradePointAverage($gradePointAverage)
    {
        $this->gradePointAverage = $gradePointAverage;
        return $this;
    }
}
