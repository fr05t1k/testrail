<?php

namespace Codeception\TestRail\Entities;

/**
 * Class Suite
 * @see http://docs.gurock.com/testrail-api2/reference-suites
 */
class Suite
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var int
     */
    private $projectId;

    /**
     * @var bool
     */
    private $isMaster;

    /**
     * @var bool
     */
    private $isBaseline;

    /**
     * @var bool
     */
    private $isCompleted;

    /**
     * @var int|null
     */
    private $completedOn;

    /**
     * @var string
     */
    private $url;

    /**
     * Suite constructor.
     * @param int $id
     * @param string $name
     * @param string|null $description
     * @param int $projectId
     * @param bool $isMaster
     * @param bool $isBaseline
     * @param bool $isCompleted
     * @param int|null $completedOn
     * @param string $url
     */
    public function __construct(
        int $id,
        string $name,
        ?string $description,
        int $projectId,
        bool $isMaster,
        bool $isBaseline,
        bool $isCompleted,
        ?int $completedOn,
        string $url
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->projectId = $projectId;
        $this->isMaster = $isMaster;
        $this->isBaseline = $isBaseline;
        $this->isCompleted = $isCompleted;
        $this->completedOn = $completedOn;
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * @return bool
     */
    public function isMaster(): bool
    {
        return $this->isMaster;
    }

    /**
     * @return bool
     */
    public function isBaseline(): bool
    {
        return $this->isBaseline;
    }

    /**
     * @return bool
     */
    public function isCompleted(): bool
    {
        return $this->isCompleted;
    }

    /**
     * @return int|null
     */
    public function getCompletedOn(): ?int
    {
        return $this->completedOn;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
