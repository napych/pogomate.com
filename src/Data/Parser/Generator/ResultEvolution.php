<?php

namespace Pogo\Data\Parser\Generator;

class ResultEvolution
{
    const GENDER_ANY = null;
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    /** @var int */
    protected $code = null;

    /** @var int|null */
    protected $costCandy = null;
    /** @var string|null */
    protected $requiredItem = null;
    /** @var string|null */
    protected $requiredLure = null;
    /** @var float|null */
    protected $requireWalk = null;
    /** @var int|null */
    protected $requireGender = self::GENDER_ANY;
    /** @var bool */
    protected $requireBuddy = false;
    /** @var bool */
    protected $requireNight = false;
    /** @var bool */
    protected $requireDay = false;
    /** @var bool */
    /** @var int|null */
    protected $priority = null;
    /** @var bool */
    protected $tradedNoCandy = false;

    /** @var bool */
    protected $temporary = false;
    /** @var int|null */
    protected $requireEnergyFirst = null;
    /** @var int|null */
    protected $requireEnergy = null;

    public function __construct(int $code)
    {
        $this->code = $code;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return int|null
     */
    public function getCostCandy(): ?int
    {
        return $this->costCandy;
    }

    /**
     * @param int|null $costCandy
     * @return ResultEvolution
     */
    public function setCostCandy(?int $costCandy): ResultEvolution
    {
        $this->costCandy = $costCandy;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequiredItem(): ?string
    {
        return $this->requiredItem;
    }

    /**
     * @param string|null $requiredItem
     * @return ResultEvolution
     */
    public function setRequiredItem(?string $requiredItem): ResultEvolution
    {
        $this->requiredItem = $requiredItem;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRequiredLure(): ?string
    {
        return $this->requiredLure;
    }

    /**
     * @param string|null $requiredLure
     * @return ResultEvolution
     */
    public function setRequiredLure(?string $requiredLure): ResultEvolution
    {
        $this->requiredLure = $requiredLure;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRequireWalk(): ?float
    {
        return $this->requireWalk;
    }

    /**
     * @param float|null $requireWalk
     * @return ResultEvolution
     */
    public function setRequireWalk(?float $requireWalk): ResultEvolution
    {
        $this->requireWalk = $requireWalk;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRequireGender(): ?int
    {
        return $this->requireGender;
    }

    /**
     * @param int|null $requireGender
     * @return ResultEvolution
     */
    public function setRequireGender(?int $requireGender): ResultEvolution
    {
        $this->requireGender = $requireGender;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequireBuddy(): bool
    {
        return $this->requireBuddy;
    }

    /**
     * @param bool $requireBuddy
     * @return ResultEvolution
     */
    public function setRequireBuddy(bool $requireBuddy): ResultEvolution
    {
        $this->requireBuddy = $requireBuddy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequireNight(): bool
    {
        return $this->requireNight;
    }

    /**
     * @param bool $requireNight
     * @return ResultEvolution
     */
    public function setRequireNight(bool $requireNight): ResultEvolution
    {
        $this->requireNight = $requireNight;
        return $this;
    }

    /**
     * @return bool
     */
    public function isRequireDay(): bool
    {
        return $this->requireDay;
    }

    /**
     * @param bool $requireDay
     * @return ResultEvolution
     */
    public function setRequireDay(bool $requireDay): ResultEvolution
    {
        $this->requireDay = $requireDay;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * @param int|null $priority
     * @return ResultEvolution
     */
    public function setPriority(?int $priority): ResultEvolution
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTradedNoCandy(): bool
    {
        return $this->tradedNoCandy;
    }

    /**
     * @param bool $tradedNoCandy
     * @return ResultEvolution
     */
    public function setTradedNoCandy(bool $tradedNoCandy): ResultEvolution
    {
        $this->tradedNoCandy = $tradedNoCandy;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTemporary(): bool
    {
        return $this->temporary;
    }

    /**
     * @param bool $temporary
     * @return ResultEvolution
     */
    public function setTemporary(bool $temporary): ResultEvolution
    {
        $this->temporary = $temporary;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRequireEnergyFirst(): ?int
    {
        return $this->requireEnergyFirst;
    }

    /**
     * @param int|null $requireEnergyFirst
     * @return ResultEvolution
     */
    public function setRequireEnergyFirst(?int $requireEnergyFirst): ResultEvolution
    {
        $this->requireEnergyFirst = $requireEnergyFirst;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRequireEnergy(): ?int
    {
        return $this->requireEnergy;
    }

    /**
     * @param int|null $requireEnergy
     * @return ResultEvolution
     */
    public function setRequireEnergy(?int $requireEnergy): ResultEvolution
    {
        $this->requireEnergy = $requireEnergy;
        return $this;
    }
}