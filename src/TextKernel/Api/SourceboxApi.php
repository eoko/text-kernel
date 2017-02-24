<?php

/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Api;

use Eoko\TextKernel\Exception\IOException;
use Eoko\TextKernel\Service\XmlCvToModel;

class SourceboxApi extends ApiBase
{
    public function __construct()
    {
        $this->baseUri .= '/sourcebox/';
    }

    /**
     * @param string $file
     */
    public function extractFromFile($file)
    {
        $fp = fopen($file, 'r');
        if ($fp === null) {
            throw new IOException(sprintf(
                'Cannot open file %s',
                $file
            ));
        }

        $result = $this->extract($fp);

        fclose($fp);

        return $result;
    }

    public function extract($rawElement, $skipStore = false, $skipDeduplication = false, $doValidation = false)
    {
        $multipart = [
            [
                'name' => 'uploaded_file',
                'contents' => $rawElement
            ],
            [
                'name' => 'skipStore',
                'contents' => ($skipStore ? 'true' : 'false')
            ],
            [
                'name' => 'skipDeduplication',
                'contents' => ($skipDeduplication ? 'true' : 'false')
            ],
            [
                'name' => 'doValidation',
                'contents' => ($doValidation ? 'true' : 'false')
            ]
        ];

        $xmlData = $this->authenticatedRequest('POST', 'extract.do', [
            'multipart' => $multipart
        ]);

        return (new XmlCvToModel($xmlData))->getModel();
    }
}
