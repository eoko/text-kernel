<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


abstract class XmlModelBase implements XmlModelInterface
{
    protected $typeMapping = [];

    /**
     * @param string $name
     * @return mixed|null
     */
    public function getType($name)
    {
        return (isset($this->typeMapping[$name]) ? $this->typeMapping[$name] : null);
    }
}
