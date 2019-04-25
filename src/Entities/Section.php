<?php

namespace Codeception\TestRail\Entities;

/**
 * Class Milestone
 * @see http://docs.gurock.com/testrail-api2/reference-sections
 */
class Section
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
    private $parentId;

    /**
     * Section constructor.
     * @param int $id
     * @param int|null $suiteId
     * @param string $name
     * @param string|null $description
     * @param int|null $parentId
     */
    public function __construct(int $id, ?int $suiteId, string $name, ?string $description, ?int $parentId)
    {
        $this->id = $id;
        $this->suiteId = $suiteId;
        $this->name = $name;
        $this->description = $description;
        $this->parentId = $parentId;
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
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
}
