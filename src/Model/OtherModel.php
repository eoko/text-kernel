<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class OtherModel extends XmlModelBase
{
    /**
     * @var array
     */
    protected $typeMapping = [
        'Hobbies' => 'array',
        'References' => 'array'
    ];

    /**
     * @var array
     */
    private $hobbies = [];

    /**
     * @var array
     */
    private $references = [];

    /**
     * @return array
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * @param array $hobbies
     * @return OtherModel
     */
    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;
        return $this;
    }

    /**
     * @return array
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param array $references
     * @return OtherModel
     */
    public function setReferences($references)
    {
        $this->references = $references;
        return $this;
    }
}
