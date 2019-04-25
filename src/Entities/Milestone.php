<?php

namespace Codeception\TestRail\Entities;

/**
 * Class Milestone
 * @see http://docs.gurock.com/testrail-api2/reference-milestones
 */
class Milestone
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
     * @var int|null
     */
    private $startOn;

    /**
     * @var int|null
     */
    private $startedOn;

    /**
     * @var bool
     */
    private $isStarted;

    /**
     * @var int|null
     */
    private $dueOn;

    /**
     * @var bool
     */
    private $isCompleted;

    /**
     * @var int|null
     */
    private $completedOn;

    /**
     * @var int
     */
    private $projectId;

    /**
     * @var int|null
     */
    private $parentId;

    /**
     * @var string
     */
    private $url;

    /**
     * Milestone constructor.
     * @param int $id
     * @param string $name
     * @param string|null $description
     * @param int|null $startOn
     * @param int|null $startedOn
     * @param bool $isStarted
     * @param int|null $dueOn
     * @param bool $isCompleted
     * @param int|null $completedOn
     * @param int $projectId
     * @param int|null $parentId
     * @param string $url
     */
    public function __construct(
        int $id,
        string $name,
        ?string $description,
        ?int $startOn,
        ?int $startedOn,
        bool $isStarted,
        ?int $dueOn,
        bool $isCompleted,
        ?int $completedOn,
        int $projectId,
        ?int $parentId,
        string $url
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->startOn = $startOn;
        $this->startedOn = $startedOn;
        $this->isStarted = $isStarted;
        $this->dueOn = $dueOn;
        $this->isCompleted = $isCompleted;
        $this->completedOn = $completedOn;
        $this->projectId = $projectId;
        $this->parentId = $parentId;
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
     * @return int|null
     */
    public function getStartOn(): ?int
    {
        return $this->startOn;
    }

    /**
     * @return int|null
     */
    public function getStartedOn(): ?int
    {
        return $this->startedOn;
    }

    /**
     * @return bool
     */
    public function isStarted(): bool
    {
        return $this->isStarted;
    }

    /**
     * @return int|null
     */
    public function getDueOn(): ?int
    {
        return $this->dueOn;
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
     * @return int
     */
    public function getProjectId(): int
    {
        return $this->projectId;
    }

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
