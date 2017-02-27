<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class ProfilePictureModel extends XmlModelBase
{
    /**
     * @var string
     */
    private $base64Content;
    /**
     * @var string
     */
    private $filename;
    /**
     * @var string
     */
    private $contentType;

    /**
     * @return string
     */
    public function getBase64Content()
    {
        return $this->base64Content;
    }

    /**
     * @param string $base64Content
     * @return ProfilePictureModel
     */
    public function setBase64Content($base64Content)
    {
        $this->base64Content = $base64Content;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return ProfilePictureModel
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return ProfilePictureModel
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDecodedContent()
    {
        if (($b64Content = $this->getBase64Content()) !== null) {
            return base64_decode($b64Content);
        }
        return null;
    }
}
