<?php

namespace Codeception\TestRail\Entities;

/**
 * Class Plan
 * @see http://docs.gurock.com/testrail-api2/reference-plans
 */
class Plan
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
    private $milestoneId;

    /**
     * @var int|null
     */
    private $assignedToId;

    /**
     * @var bool
     */
    private $isCompleted;

    /**
     * @var int|null
     */
    private $completedOn;

    /**
     * @var int|null
     */
    private $passedCount;

    /**
     * @var int|null
     */
    private $blockedCount;

    /**
     * @var int|null
     */
    private $untestedCount;

    /**
     * @var int|null
     */
    private $retestCount;

    /**
     * @var int|null
     */
    private $failedCount;

    /**
     * @var int|null
     */
    private $projectId;

    /**
     * @var int|null
     */
    private $createdOn;

    /**
     * @var int|null
     */
    private $createdBy;

    /**
     * @var string
     */
    private $url;

    /**
     * Plan constructor.
     * @param int $id
     * @param string $name
     * @param string|null $description
     * @param int|null $milestoneId
     * @param int|null $assignedToId
     * @param bool $isCompleted
     * @param int|null $completedOn
     * @param int|null $passedCount
     * @param int|null $blockedCount
     * @param int|null $untestedCount
     * @param int|null $retestCount
     * @param int|null $failedCount
     * @param int|null $projectId
     * @param int|null $createdOn
     * @param int|null $createdBy
     * @param string $url
     */
    public function __construct(
        int $id,
        string $name,
        ?string $description,
        ?int $milestoneId,
        ?int $assignedToId,
        bool $isCompleted,
        ?int $completedOn,
        ?int $passedCount,
        ?int $blockedCount,
        ?int $untestedCount,
        ?int $retestCount,
        ?int $failedCount,
        ?int $projectId,
        ?int $createdOn,
        ?int $createdBy,
        string $url
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->milestoneId = $milestoneId;
        $this->assignedToId = $assignedToId;
        $this->isCompleted = $isCompleted;
        $this->completedOn = $completedOn;
        $this->passedCount = $passedCount;
        $this->blockedCount = $blockedCount;
        $this->untestedCount = $untestedCount;
        $this->retestCount = $retestCount;
        $this->failedCount = $failedCount;
        $this->projectId = $projectId;
        $this->createdOn = $createdOn;
        $this->createdBy = $createdBy;
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
    public function getMilestoneId(): ?int
    {
        return $this->milestoneId;
    }

    /**
     * @return int|null
     */
    public function getAssignedToId(): ?int
    {
        return $this->assignedToId;
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
     * @return int|null
     */
    public function getPassedCount(): ?int
    {
        return $this->passedCount;
    }

    /**
     * @return int|null
     */
    public function getBlockedCount(): ?int
    {
        return $this->blockedCount;
    }

    /**
     * @return int|null
     */
    public function getUntestedCount(): ?int
    {
        return $this->untestedCount;
    }

    /**
     * @return int|null
     */
    public function getRetestCount(): ?int
    {
        return $this->retestCount;
    }

    /**
     * @return int|null
     */
    public function getFailedCount(): ?int
    {
        return $this->failedCount;
    }

    /**
     * @return int|null
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @return int|null
     */
    public function getCreatedOn(): ?int
    {
        return $this->createdOn;
    }

    /**
     * @return int|null
     */
    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
