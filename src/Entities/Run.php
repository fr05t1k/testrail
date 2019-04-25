<?php

namespace Codeception\TestRail\Entities;

/**
 * Class Suite
 * @see http://docs.gurock.com/testrail-api2/reference-runs
 */
class Run
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $suiteId;

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
    private $includeAll;

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
    private $planId;

    /**
     * @var int|null
     */
    private $entryIndex;

    /**
     * @var string|null
     */
    private $entryId;

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
     * Run constructor.
     * @param int $id
     * @param int|null $suiteId
     * @param string $name
     * @param string|null $description
     * @param int|null $milestoneId
     * @param int|null $assignedToId
     * @param bool $includeAll
     * @param bool $isCompleted
     * @param int|null $completedOn
     * @param int|null $passedCount
     * @param int|null $blockedCount
     * @param int|null $untestedCount
     * @param int|null $retestCount
     * @param int|null $failedCount
     * @param int|null $projectId
     * @param int|null $planId
     * @param int|null $entryIndex
     * @param string|null $entryId
     * @param int|null $createdOn
     * @param int|null $createdBy
     * @param string $url
     */
    public function __construct(
        int $id,
        ?int $suiteId,
        string $name,
        ?string $description,
        ?int $milestoneId,
        ?int $assignedToId,
        bool $includeAll,
        bool $isCompleted,
        ?int $completedOn,
        ?int $passedCount,
        ?int $blockedCount,
        ?int $untestedCount,
        ?int $retestCount,
        ?int $failedCount,
        ?int $projectId,
        ?int $planId,
        ?int $entryIndex,
        ?string $entryId,
        ?int $createdOn,
        ?int $createdBy,
        string $url
    ) {
        $this->id = $id;
        $this->suiteId = $suiteId;
        $this->name = $name;
        $this->description = $description;
        $this->milestoneId = $milestoneId;
        $this->assignedToId = $assignedToId;
        $this->includeAll = $includeAll;
        $this->isCompleted = $isCompleted;
        $this->completedOn = $completedOn;
        $this->passedCount = $passedCount;
        $this->blockedCount = $blockedCount;
        $this->untestedCount = $untestedCount;
        $this->retestCount = $retestCount;
        $this->failedCount = $failedCount;
        $this->projectId = $projectId;
        $this->planId = $planId;
        $this->entryIndex = $entryIndex;
        $this->entryId = $entryId;
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
     * @return int|null
     */
    public function getSuiteId(): ?int
    {
        return $this->suiteId;
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
    public function isIncludeAll(): bool
    {
        return $this->includeAll;
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
    public function getPlanId(): ?int
    {
        return $this->planId;
    }

    /**
     * @return int|null
     */
    public function getEntryIndex(): ?int
    {
        return $this->entryIndex;
    }

    /**
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
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
