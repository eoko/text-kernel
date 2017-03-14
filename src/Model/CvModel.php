<?php

/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;

class CvModel extends XmlModelBase
{
    /**
     * @var array
     */
    protected $typeMapping = [
        'EducationHistory' => 'array',
        'EmploymentHistory' => 'array',
        'Other' => OtherModel::class,
        'Skills' => SkillsModel::class,
        'EmploymentItem' => EmploymentModel::class,
        'EducationItem' => EducationItemModel::class,
        'Personal' => PersonalModel::class,
        'CustomArea' => CustomAreaModel::class,
        'Performance' => PerformanceModel::class
    ];

    /**
     * @var array
     */
    private $educationHistory = [];

    /**
     * @var PersonalModel
     */
    private $personal;

    /**
     * @var array
     */
    private $employmentHistory = [];

    /**
     * @var SkillsModel
     */
    private $skills;

    /**
     * @var OtherModel
     */
    private $other;

    /**
     * @var CustomAreaModel
     */
    private $customArea;

    /**
     * @var string
     */
    private $documentText;

    /**
     * @var string
     */
    private $documentHtml;

    /**
     * @var PerformanceModel
     */
    private $performance;

    /**
     * @return PersonalModel
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * @param PersonalModel|null $personal
     * @return $this
     */
    public function setPersonal(PersonalModel $personal = null)
    {
        $this->personal = $personal;
        return $this;
    }

    /**
     * @param array $educationHistory
     * @return $this
     */
    public function setEducationHistory(array $educationHistory = [])
    {
        $this->educationHistory = $educationHistory;
        return $this;
    }

    /**
     * @return EducationItemModel[]|null
     */
    public function getEducationHistory()
    {
        return $this->educationHistory;
    }

    /**
     * @return EmploymentModel[]|null
     */
    public function getEmploymentHistory()
    {
        return $this->employmentHistory;
    }

    /**
     * @param array $employmentHistory
     * @return CvModel
     */
    public function setEmploymentHistory(array $employmentHistory = [])
    {
        $this->employmentHistory = $employmentHistory;
        return $this;
    }

    /**
     * @return SkillsModel
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param SkillsModel|null $skills
     * @return CvModel
     */
    public function setSkills(SkillsModel $skills = null)
    {
        $this->skills = $skills;
        return $this;
    }

    /**
     * @return OtherModel
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param OtherModel|null $other
     * @return CvModel
     */
    public function setOther(OtherModel $other = null)
    {
        $this->other = $other;
    }

    /**
     * @return CustomAreaModel
     */
    public function getCustomArea()
    {
        return $this->customArea;
    }

    /**
     * @return string
     */
    public function getDocumentText()
    {
        return $this->documentText;
    }

    /**
     * @param string $documentText
     * @return CvModel
     */
    public function setDocumentText($documentText)
    {
        $this->documentText = $documentText;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentHtml()
    {
        return $this->documentHtml;
    }

    /**
     * @param string $documentHtml
     * @return CvModel
     */
    public function setDocumentHtml($documentHtml)
    {
        $this->documentHtml = $documentHtml;
        return $this;
    }

    /**
     * @param CustomAreaModel|null $customArea
     * @return CvModel
     */
    public function setCustomArea(CustomAreaModel $customArea = null)
    {
        $this->customArea = $customArea;
        return $this;
    }

    /**
     * @return PerformanceModel
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * @param PerformanceModel|null $performance
     * @return CvModel
     */
    public function setPerformance(PerformanceModel $performance = null)
    {
        $this->performance = $performance;
        return $this;
    }
}
