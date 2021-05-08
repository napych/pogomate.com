<?php

namespace Pogo\Data\Parser\Generator;

class Common
{
    /** @var string */
    protected $className = null;
    /** @var string */
    protected $constName = null;
    /** @var array */
    protected $data = null;
    /** @var string */
    protected $useString = null;

    /**
     * @param string $className
     * @return Common
     */
    public function setClassName(string $className): Common
    {
        $this->className = $className;
        return $this;
    }

    /**
     * @param string $constName
     * @return Common
     */
    public function setConstName(string $constName): Common
    {
        $this->constName = $constName;
        return $this;
    }

    /**
     * @param array $data
     * @return Common
     */
    public function setData(array $data): Common
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $useString
     * @return Common
     */
    public function setUseString(string $useString): Common
    {
        $this->useString = $useString;
        return $this;
    }

    protected function prepare()
    {
        if (!$this->constName) {
            $this->constName = strtoupper($this->className);
        }
    }
}
