<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Api;

use Eoko\TextKernel\Exception\AccessException;
use Eoko\TextKernel\Exception\ConfigurationException;
use Eoko\TextKernel\Exception\EmailException;
use Eoko\TextKernel\Exception\GeneralException;
use Eoko\TextKernel\Exception\IOException;
use Eoko\TextKernel\Exception\OCRException;
use Eoko\TextKernel\Exception\ProcessingException;
use Eoko\TextKernel\Exception\ProductException;
use Eoko\TextKernel\Exception\ResponseException;
use Eoko\TextKernel\Exception\SourceboxException;
use Eoko\TextKernel\Exception\TextKernelException;
use Eoko\TextKernel\Exception\TMFException;
use Eoko\TextKernel\Exception\UIException;
use Eoko\TextKernel\Exception\XmlParsingException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class ApiBase
{
    /**
     * @var string
     */
    protected $baseUri = 'https://home.textkernel.nl';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var array
     */
    private $credentials;

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    protected function authenticatedRequest($method, $uri, array $options = [])
    {
        //add credentials to request
        if ($this->credentials) {
            $method = strtoupper($method);

            if ($method === 'POST') {
                if (isset($options['multipart'])) {
                    $multipart = $this->setMultipartField('username', $this->credentials['username'], $options['multipart']);
                    $multipart = $this->setMultipartField('account', $this->credentials['account'], $multipart);
                    $options['multipart'] = $this->setMultipartField('password', $this->credentials['password'], $multipart);
                } else {
                    $options['form_params'] = array_replace(
                        $this->credentials,
                        (isset($options['form_params']) ? $options['form_params'] : [])
                    );
                }
            } else if ($method === 'GET') {
                $options['query'] = array_replace(
                    $this->credentials,
                    (isset($options['query']) ? $options['query'] : [])
                );
            }
        }
        return $this->request($method, $uri, $options);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return string
     * @throws ResponseException
     * @throws AccessException
     * @throws ConfigurationException
     * @throws EmailException
     * @throws GeneralException
     * @throws IOException
     * @throws OCRException
     * @throws ProcessingException
     * @throws ProductException
     * @throws SourceboxException
     * @throws TMFException
     * @throws UIException
     */
    protected function request($method, $uri, array $options = [])
    {
        if (!isset($options['query'])) {
            $options['query'] = [];
        }
        $options['query']['useJsonErrorMsg'] = 'true';
        $options['query']['useHttpErrorCodes'] = 'true';
        //$options['debug'] = true;

        try {
            $response = ($this->getClient()->request($method, $uri, $options));

            if ($response->getStatusCode() !== 200) {
                throw new ResponseException(
                    ResponseException::DEFAULT_EXCEPTION,
                    sprintf('Invalid status code received (%d)', $response->getStatusCode())
                );
            }
            return $response->getBody()->getContents();
        } catch(RequestException $e) {
            $this->processException($e);
        }
    }

    /**
     * @param RequestException $e
     * @throws AccessException
     * @throws ConfigurationException
     * @throws EmailException
     * @throws GeneralException
     * @throws IOException
     * @throws OCRException
     * @throws ProcessingException
     * @throws ProductException
     * @throws SourceboxException
     * @throws TMFException
     * @throws UIException
     */
    private function processException(RequestException $e)
    {
        $response = $e->getResponse();
        $exception = json_decode($response->getBody()->getContents(), true);

        if ($exception === null) {
            throw new IOException('Invalid server response');
        }

        switch($exception['errorType']) {
            case ResponseException::DEFAULT_EXCEPTION:
            case ResponseException::UNSUPPORTED_OPERATION_ERROR:
                throw new GeneralException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::INVALID_CREDENTIALS_ERROR:
            case ResponseException::LIMIT_EXCEEDED:
            case ResponseException::NO_ACCESS:
            case ResponseException::SESSION_INVALID:
            case ResponseException::TRXML_LOCKED:
            case ResponseException::WRONG_CREDENTIALS:
                throw new AccessException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::CODETABLE_ERROR:
            case ResponseException::CONFIGURATION_ERROR:
            case ResponseException::MODEL_FILE_INVALID:
                throw new ConfigurationException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::EMAIL_PARSING_ERROR:
            case ResponseException::EMAIL_SENDING_ERROR:
            case ResponseException::TEMPLATE_FORMAT_ERROR:
            case ResponseException::TEMPLATE_READING_ERROR:
                throw new EmailException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::AGENT_ERROR:
            case ResponseException::EXTERNAL_SYSTEM_ERROR:
            case ResponseException::HTTP_ERROR:
            case ResponseException::OAUTH_ERROR:
            case ResponseException::STORE_ERROR:
                throw new ProductException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::DATABASE_ERROR:
            case ResponseException::TRXML_INVALID:
            case ResponseException::TRXML_RETRIEVAL_ERROR:
            case ResponseException::IO_ERROR:
                throw new SourceboxException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::OCR_ERROR:
            case ResponseException::INVALID_HIGHLIGHT_COORDINATES:
                throw new OCRException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::ATOMIC_POST_ERROR:
            case ResponseException::FILE_UPLOAD_ERROR:
            case ResponseException::TEXTRACTOR_ERROR:
            case ResponseException::ENCODING_ERROR:
            case ResponseException::MIME_TYPE_MISSING:
            case ResponseException::INPUT_MISSING:
            case ResponseException::INVALID_INPUT:
            case ResponseException::PROCESSING_INPUT_MISSING:
            case ResponseException::REPROCESSING_ERROR:
            case ResponseException::VALIDATION_ERROR:
                throw new ProcessingException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::TMF_MERGE_ERROR:
                throw new TMFException($exception['errorType'], $exception['errorMessage']);

            case ResponseException::AJAX_ERROR:
            case ResponseException::EDITING_ERROR:
                throw new UIException($exception['errorType'], $exception['errorMessage']);

            default:
                throw new ResponseException($exception['errorType'], $exception['errorMessage']);
        }
    }

    /**
     * @param string $account
     * @param string $username
     * @param string $password
     * @return $this
     */
    public function setCredentials($account, $username, $password)
    {
        $this->credentials = [
            'account' => $account,
            'username' => $username,
            'password' => $password
        ];
        return $this;
    }
    /**
     * @param string $baseUri
     * @return $this
     */
    public function setBaseUri($baseUri) {
        if($baseUri) {
            $this->baseUri = $baseUri;
        }
        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @param array $multipart
     * @return array
     */
    private function setMultipartField($name, $value, $multipart)
    {
        foreach($multipart as $item) {
            if ($item['name'] === $name) {
                return $multipart;
            }
        }

        $multipart[] = [
            'name' => $name,
            'contents' => $value
        ];

        return $multipart;
    }

    /**
     * @return Client
     */
    protected function getClient()
    {
        if ($this->client === null) {
            $this->client = new Client([
               'base_uri' => $this->baseUri
            ]);
        }
        return $this->client;
    }
}
