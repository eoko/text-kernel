<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class SkillsModel extends XmlModelBase
{
    /**
     * @var array
     */
    protected $typeMapping = [
        'ComputerSkills' => 'array',
        'LanguageSkills' => 'array',
        'SoftSkills' => 'array',
        'LanguageSkill' => LanguageSkillModel::class,
        'ComputerSkill' => ComputerSkillModel::class
    ];

    /**
     * @var array
     */
    private $computerSkills = [];
    /**
     * @var array
     */
    private $languageSkills = [];
    /**
     * @var array
     */
    private $softSkills = [];

    /**
     * @return array
     */
    public function getComputerSkills()
    {
        return $this->computerSkills;
    }

    /**
     * @param array $computerSkills
     * @return SkillsModel
     */
    public function setComputerSkills(array $computerSkills = [])
    {
        $this->computerSkills = $computerSkills;
        return $this;
    }

    /**
     * @return array
     */
    public function getLanguageSkills()
    {
        return $this->languageSkills;
    }

    /**
     * @param array $languageSkills
     * @return SkillsModel
     */
    public function setLanguageSkills(array $languageSkills = [])
    {
        $this->languageSkills = $languageSkills;
        return $this;
    }

    /**
     * @return array
     */
    public function getSoftSkills()
    {
        return $this->softSkills;
    }

    /**
     * @param array $softSkills
     * @return SkillsModel
     */
    public function setSoftSkills(array $softSkills = [])
    {
        $this->softSkills = $softSkills;
        return $this;
    }
}
