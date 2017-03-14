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
use Eoko\TextKernel\Exception\ResponseException;
use Eoko\TextKernel\Exception\TextKernelException;
use Eoko\TextKernel\Exception\XmlParsingException;
use Eoko\TextKernel\Model\CvModel;
use Eoko\TextKernel\Service\XmlToModel;

class SourceboxApi extends ApiBase
{
    public function __construct()
    {
        $this->baseUri .= '/sourcebox/';
    }

    /**
     * @param string $file
     * @param bool $skipStore option to disable storing/export-ing the document after processing. Useful if a user logs in on Sourcebox at a later time to ed- it the results. Returns the String "OK" if no errors occurred. Possible values are true and false, default is false.
     * @param bool $skipDeduplication option to disable deduplicationon store. Possible values are true and false, default is false.
     * @param bool $doValidation option to force validation of a document. Possible values are true and false, default is false.
     * @return \Eoko\TextKernel\Model\XmlModelInterface
     * @throws TextKernelException
     * @throws XmlParsingException
     * @throws ResponseException
     * @throws IOException
     */
    public function extractFromFile($file, $skipStore = false, $skipDeduplication = false, $doValidation = false)
    {
        $fp = fopen($file, 'r');
        if ($fp === null) {
            throw new IOException(sprintf(
                'Cannot open file %s',
                $file
            ));
        }

        $result = $this->extract($fp, $skipStore, $skipDeduplication, $doValidation);

        //fclose($fp);

        return $result;
    }

    /**
     * @param mixed $rawElement File pointer or data buffer
     * @param bool $skipStore option to disable storing/export-ing the document after processing. Useful if a user logs in on Sourcebox at a later time to ed- it the results. Returns the String "OK" if no errors occurred. Possible values are true and false, default is false.
     * @param bool $skipDeduplication option to disable deduplicationon store. Possible values are true and false, default is false.
     * @param bool $doValidation option to force validation of a document. Possible values are true and false, default is false.
     * @return \Eoko\TextKernel\Model\XmlModelInterface
     * @throws TextKernelException
     * @throws XmlParsingException
     * @throws ResponseException
     */
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

        return (new XmlToModel($xmlData, CvModel::class))->getModel();
    }
}
