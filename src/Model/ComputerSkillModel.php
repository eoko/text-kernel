<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class ComputerSkillModel extends XmlModelBase
{
    /**
     * @var string
     */
    private $computerSkillName;
    /**
     * @var string
     */
    private $computerSkillDuration;

    /**
     * @return string
     */
    public function getComputerSkillName()
    {
        return $this->computerSkillName;
    }

    /**
     * @param string $computerSkillName
     * @return ComputerSkillModel
     */
    public function setComputerSkillName($computerSkillName)
    {
        $this->computerSkillName = $computerSkillName;
        return $this;
    }

    /**
     * @return string
     */
    public function getComputerSkillDuration()
    {
        return $this->computerSkillDuration;
    }

    /**
     * @param string $computerSkillDuration
     * @return ComputerSkillModel
     */
    public function setComputerSkillDuration($computerSkillDuration)
    {
        $this->computerSkillDuration = $computerSkillDuration;
        return $this;
    }
}
