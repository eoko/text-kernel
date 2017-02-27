<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class SocialMediaModel extends XmlModelBase
{
    /**
     * @var string
     */
    private $socialMediaURL;

    /**
     * @var string
     */
    private $socialMediaType;

    /**
     * @return string
     */
    public function getSocialMediaURL()
    {
        return $this->socialMediaURL;
    }

    /**
     * @param string $socialMediaURL
     * @return SocialMediaModel
     */
    public function setSocialMediaURL($socialMediaURL)
    {
        $this->socialMediaURL = $socialMediaURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getSocialMediaType()
    {
        return $this->socialMediaType;
    }

    /**
     * @param string $socialMediaType
     * @return SocialMediaModel
     */
    public function setSocialMediaType($socialMediaType)
    {
        $this->socialMediaType = $socialMediaType;
        return $this;
    }
}
