<?php
/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Model;


class PerformanceModel extends XmlModelBase
{
    /**
     * @var string
     */
    private $preProcessingTime;

    /**
     * @var string
     */
    private $processingTime;

    /**
     * @var string
     */
    private $normalizationTime;

    /**
     * @var string
     */
    private $templatingTime;

    /**
     * @var string
     */
    private $totalTime;

    /**
     * @return string
     */
    public function getPreProcessingTime()
    {
        return $this->preProcessingTime;
    }

    /**
     * @param string $preProcessingTime
     * @return PerformanceModel
     */
    public function setPreProcessingTime($preProcessingTime)
    {
        $this->preProcessingTime = $preProcessingTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessingTime()
    {
        return $this->processingTime;
    }

    /**
     * @param string $processingTime
     * @return PerformanceModel
     */
    public function setProcessingTime($processingTime)
    {
        $this->processingTime = $processingTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getNormalizationTime()
    {
        return $this->normalizationTime;
    }

    /**
     * @param string $normalizationTime
     * @return PerformanceModel
     */
    public function setNormalizationTime($normalizationTime)
    {
        $this->normalizationTime = $normalizationTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplatingTime()
    {
        return $this->templatingTime;
    }

    /**
     * @param string $templatingTime
     * @return PerformanceModel
     */
    public function setTemplatingTime($templatingTime)
    {
        $this->templatingTime = $templatingTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * @param string $totalTime
     * @return PerformanceModel
     */
    public function setTotalTime($totalTime)
    {
        $this->totalTime = $totalTime;
        return $this;
    }
}
