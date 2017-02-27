<?php

/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Factory;

use Eoko\TextKernel\Api\SourceboxApi;

class TextKernelFactory
{
    /**
     * @param string $account
     * @param string $username
     * @param string $password
     * @return SourceboxApi
     */
    public function createSourceboxApi($account, $username, $password)
    {
        return (new SourceboxApi())->setCredentials($account, $username, $password);
    }
}
