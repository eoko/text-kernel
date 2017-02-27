<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Exception;


use Exception;

class ResponseException extends IOException
{
    /**
     * An unexpected exception occurred.
     */
    const DEFAULT_EXCEPTION = 'DEFAULT_EXCEPTION';
    /**
     * The requested method is not supported by Sourcebox.
     */
    const UNSUPPORTED_OPERATION_ERROR = 'UNSUPPORTED_OPERATION_ERROR';
    /**
     * The login credentials are invalid.
     */
    const INVALID_CREDENTIALS_ERROR = 'INVALID_CREDENTIALS_ERROR';
    /**
     * The allotted amount of usable processing units for the account has been exceed.
     */
    const LIMIT_EXCEEDED = 'LIMIT_EXCEEDED';
    /**
     * The resource is not visible to the user with the given credentials.
     */
    const NO_ACCESS = 'NO_ACCESS';
    /**
     * The session related to the users cookie has already been invalidated.
     */
    const SESSION_INVALID = 'SESSION_INVALID';
    /**
     * The document cannot be accessed because it is currently edited by another user/process.
     */
    const TRXML_LOCKED = 'TRXML_LOCKED';
    /**
     * The login credentials are invalid.
     */
    const WRONG_CREDENTIALS = 'WRONG_CREDENTIALS';
    /**
     * Sourcebox encountered a malformed code table or could not upload the code table to the normalizer.
     */
    const CODETABLE_ERROR = 'CODETABLE_ERROR';
    /**
     * The configuration for the account or user is invalid.
     */
    const CONFIGURATION_ERROR = 'CONFIGURATION_ERROR';
    /**
     * The model file contains invalid configuration options or the xml is not wel formed.
     */
    const MODEL_FILE_INVALID = 'MODEL_FILE_INVALID';
    /**
     * An error occurred processing an email.
     */
    const EMAIL_PARSING_ERROR = 'EMAIL_PARSING_ERROR';
    /**
     * An error occurred when Sourcebox attempted to send an email.
     */
    const EMAIL_SENDING_ERROR = 'EMAIL_SENDING_ERROR';
    /**
     * An email template could not be processed.
     */
    const TEMPLATE_FORMAT_ERROR = 'TEMPLATE_FORMAT_ERROR';
    /**
     * An email template could not be found in the templater configured for the account.
     */
    const TEMPLATE_READING_ERROR = 'TEMPLATE_READING_ERROR';
    /**
     * Sourcebox could not download or process a URL.
     */
    const AGENT_ERROR = 'AGENT_ERROR';
    /**
     * A request issued from Sourcebox to an external system could not be completed.
     */
    const EXTERNAL_SYSTEM_ERROR = 'EXTERNAL_SYSTEM_ERROR';
    /**
     * When communicating with an external system via HTTP an HTTP error occurred.
     */
    const HTTP_ERROR = 'HTTP_ERROR';
    /**
     * An error occured when trying to retrieve a resource protected by OAUTH.
     */
    const OAUTH_ERROR = 'OAUTH_ERROR';
    /**
     * The templating result could not be stored with the configured export method (product).
     */
    const STORE_ERROR = 'STORE_ERROR';
    /**
     * An error occurred when accessing the Sourcebox database.
     */
    const DATABASE_ERROR = 'DATABASE_ERROR';
    /**
     * The document cannot be edited because it has become corrupted.
     */
    const TRXML_INVALID = 'TRXML_INVALID';
    /**
     * The current trxml cannot be edited because it is corrupted.
     */
    const TRXML_RETRIEVAL_ERROR = 'TRXML_RETRIEVAL_ERROR';
    /**
     * Sourcebox could not access a resource on the file system.
     */
    const IO_ERROR = 'IO_ERROR';
    /**
     * An error occurred when processing an image with OCR functionality.
     */
    const OCR_ERROR = 'OCR_ERROR';
    /**
     * Highlights for a OCRed document as returned from textractor cannot be parsed.
     */
    const INVALID_HIGHLIGHT_COORDINATES = 'INVALID_HIGHLIGHT_COORDINATES';
    /**
     * An unexpected error occurred when processing the HTTP POST request.
     */
    const ATOMIC_POST_ERROR = 'ATOMIC_POST_ERROR';
    /**
     * An error occurred processing a file upload request.
     */
    const FILE_UPLOAD_ERROR = 'FILE_UPLOAD_ERROR';
    /**
     * A textractor error occurred when processing a document.
     */
    const TEXTRACTOR_ERROR = 'TEXTRACTOR_ERROR';
    /**
     * A code table or a trxml contains a byte sequence that is not UTF-8 encoded.
     */
    const ENCODING_ERROR = 'ENCODING_ERROR';
    /**
     * The mime type of a CV document could not be determined from the document or was missing from the request.
     */
    const MIME_TYPE_MISSING = 'MIME_TYPE_MISSING';
    /**
     * A required parameter has been omitted from a request.
     */
    const INPUT_MISSING = 'INPUT_MISSING';
    /**
     * A required parameter contains a invalid value.
     */
    const INVALID_INPUT = 'INVALID_INPUT';
    /**
     * No data were received from textractor.
     */
    const PROCESSING_INPUT_MISSING = 'PROCESSING_INPUT_MISSING';
    /**
     * An error occurred when reprocessing an already processed document.
     */
    const REPROCESSING_ERROR = 'REPROCESSING_ERROR';
    /**
     * The document is invalid according to the validation rules configured in the model file.
     */
    const VALIDATION_ERROR = 'VALIDATION_ERROR';
    /**
     * The supplied TMF could not be merged into the document.
     */
    const TMF_MERGE_ERROR = 'TMF_MERGE_ERROR';
    /**
     * An Ajax request from the CV editing UI caused an error.
     */
    const AJAX_ERROR = 'AJAX_ERROR';
    /**
     * An error occurred when editing a trxml document in the Sourcebox user interface.
     */
    const EDITING_ERROR = 'EDITING_ERROR';

    /**
     * @var string
     */
    private $type;

    public function __construct($type = self::DEFAULT_EXCEPTION, $message = "", $code = 0, Exception $previous = null)
    {
        $this->type = $type;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
