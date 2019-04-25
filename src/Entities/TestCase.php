<?php

namespace Codeception\TestRail\Entities;

/**
 * Class TestCase
 * @see http://docs.gurock.com/testrail-api2/reference-cases
 */
class TestCase
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int|null
     */
    private $sectionId;

    /**
     * @var int
     */
    private $templateId;

    /**
     * @var int|null
     */
    private $typeId;

    /**
     * @var int|null
     */
    private $priorityId;

    /**
     * @var int|null
     */
    private $milestoneId;

    /**
     * @var int|null
     */
    private $createdBy;

    /**
     * @var int|null
     */
    private $createdOn;

    /**
     * @var string|null
     */
    private $estimate;

    /**
     * @var string|null
     */
    private $estimateForecast;

    /**
     * @var int|null
     */
    private $suiteId;

    /**
     * @var string|null
     */
    private $customFilePath;

    /**
     * TestCase constructor.
     * @param int $id
     * @param string $title
     * @param int|null $sectionId
     * @param int $templateId
     * @param int|null $typeId
     * @param int|null $priorityId
     * @param int|null $milestoneId
     * @param int|null $createdBy
     * @param int|null $createdOn
     * @param string|null $estimate
     * @param string|null $estimateForecast
     * @param int|null $suiteId
     * @param string|null $customFilePath
     */
    public function __construct(
        int $id,
        string $title,
        ?int $sectionId,
        int $templateId,
        ?int $typeId,
        ?int $priorityId,
        ?int $milestoneId,
        ?int $createdBy,
        ?int $createdOn,
        ?string $estimate,
        ?string $estimateForecast,
        ?int $suiteId,
        ?string $customFilePath
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->sectionId = $sectionId;
        $this->templateId = $templateId;
        $this->typeId = $typeId;
        $this->priorityId = $priorityId;
        $this->milestoneId = $milestoneId;
        $this->createdBy = $createdBy;
        $this->createdOn = $createdOn;
        $this->estimate = $estimate;
        $this->estimateForecast = $estimateForecast;
        $this->suiteId = $suiteId;
        $this->customFilePath = $customFilePath;
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int|null
     */
    public function getSectionId(): ?int
    {
        return $this->sectionId;
    }

    /**
     * @return int
     */
    public function getTemplateId(): int
    {
        return $this->templateId;
    }

    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    /**
     * @return int|null
     */
    public function getPriorityId(): ?int
    {
        return $this->priorityId;
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
    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }

    /**
     * @return int|null
     */
    public function getCreatedOn(): ?int
    {
        return $this->createdOn;
    }

    /**
     * @return string|null
     */
    public function getEstimate(): ?string
    {
        return $this->estimate;
    }

    /**
     * @return string|null
     */
    public function getEstimateForecast(): ?string
    {
        return $this->estimateForecast;
    }

    /**
     * @return int|null
     */
    public function getSuiteId(): ?int
    {
        return $this->suiteId;
    }

    /**
     * @return string|null
     */
    public function getCustomFilePath(): ?string
    {
        return $this->customFilePath;
    }
}
