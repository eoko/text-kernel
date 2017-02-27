<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class LanguageSkillModel extends XmlModelBase
{
    /**
     * @var integer
     */
    private $languageSkillCode;
    /**
     * @var string
     */
    private $languageSkillCodeDescription;
    /**
     * @var integer
     */
    private $languageProficiencyCode;
    /**
     * @var string
     */
    private $languageProficiencyCodeDescription;

    /**
     * @return int
     */
    public function getLanguageSkillCode()
    {
        return $this->languageSkillCode;
    }

    /**
     * @param int $languageSkillCode
     * @return LanguageSkillModel
     */
    public function setLanguageSkillCode($languageSkillCode)
    {
        $this->languageSkillCode = $languageSkillCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageSkillCodeDescription()
    {
        return $this->languageSkillCodeDescription;
    }

    /**
     * @param string $languageSkillCodeDescription
     * @return LanguageSkillModel
     */
    public function setLanguageSkillCodeDescription($languageSkillCodeDescription)
    {
        $this->languageSkillCodeDescription = $languageSkillCodeDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getLanguageProficiencyCode()
    {
        return $this->languageProficiencyCode;
    }

    /**
     * @param int $languageProficiencyCode
     * @return LanguageSkillModel
     */
    public function setLanguageProficiencyCode($languageProficiencyCode)
    {
        $this->languageProficiencyCode = $languageProficiencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageProficiencyCodeDescription()
    {
        return $this->languageProficiencyCodeDescription;
    }

    /**
     * @param string $languageProficiencyCodeDescription
     * @return LanguageSkillModel
     */
    public function setLanguageProficiencyCodeDescription($languageProficiencyCodeDescription)
    {
        $this->languageProficiencyCodeDescription = $languageProficiencyCodeDescription;
        return $this;
    }
}
