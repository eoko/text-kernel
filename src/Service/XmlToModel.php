<?php

/**
 * Copyright (c) 2013-present, EOKO SAS, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT-style license found in the
 * LICENSE file in the root directory of this source tree.
 **/

namespace Eoko\TextKernel\Service;

use Eoko\TextKernel\Exception\TextKernelException;
use Eoko\TextKernel\Exception\XmlParsingException;
use Eoko\TextKernel\Model\XmlModelInterface;

class XmlToModel
{
    /**
     * @var \SimpleXMLElement
     */
    private $doc;

    /**
     * @var string|null
     */
    private $modelClass;

    /**
     * @var XmlModelInterface
     */
    private $model;

    /**
     * XmlToModel constructor.
     * @param string $data
     * @param string $modelClass
     */
    public function __construct($data, $modelClass)
    {
        $this->modelClass = $modelClass;
        $this->doc = ($data instanceof \SimpleXMLElement ? $data : simplexml_load_string($data));
    }

    /**
     * @return XmlModelInterface
     * @throws TextKernelException
     * @throws XmlParsingException
     */
    protected function parseDocument()
    {
        $this->model = new $this->modelClass();

        if ($this->doc === false) {
            throw new XmlParsingException('Cannot read xml');
        }

        if (!($this->model instanceof XmlModelInterface)) {
            throw new TextKernelException(sprintf('Model class must implements "%s"', XmlModelInterface::class));
        }

        foreach ($this->doc as $key => $value) {
            $setter = 'set' . $key;
            if (method_exists($this->model, $setter)) {
                $this->model->$setter($this->parseElement($key, $value));
            }
        }

        return $this->model;
    }

    /**
     * @param $key
     * @param $value
     * @return array|bool|\DateTime|XmlModelInterface|int|null|string
     */
    private function parseElement($key, $value)
    {
        $type = $this->model->getType($key);

        if ($type === 'array') {
            $result = [];
            $elements = $value->children();
            foreach ($elements as $cKey => $cValue) {
                $el = $this->parseElement($cKey, $cValue);
                if ($el !== null) {
                    $result[] = $el;
                }
            }
            return $result;
        } else if (!empty($type)) {
            return (new XmlToModel($value, $type))->getModel();
        } else if ($value->count() === 1) {
            $value = $value->children();
        }

        $value = trim((string)$value);

        if (strlen($value) <= 0) {
            return null;
        } else if (preg_match('/Code$/i', $key)) {
            return (int)$value;
        } else if (preg_match('/Date$/i', $key) || preg_match('/^Date/i', $key)) {
            if (($value = \DateTime::createFromFormat('Y-m-d', $value)) !== false) {
                return $value;
            } else {
                return null;
            }
        } else {
            return $value;
        }
    }

    /**
     * @return XmlModelInterface
     * @throws TextKernelException
     * @throws XmlParsingException
     */
    public function getModel()
    {
        if ($this->model === null) {
            $this->parseDocument();
        }

        return $this->model;
    }
}
