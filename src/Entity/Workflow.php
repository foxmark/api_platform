<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\WorkflowRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WorkflowRepository::class)]
#[ApiResource]
class Workflow
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?WorkflowBlueprint $WorkflowBlueprint = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $complitionDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkflowBlueprint(): ?WorkflowBlueprint
    {
        return $this->WorkflowBlueprint;
    }

    public function setWorkflowBlueprint(WorkflowBlueprint $WorkflowBlueprint): static
    {
        $this->WorkflowBlueprint = $WorkflowBlueprint;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getComplitionDate(): ?\DateTimeInterface
    {
        return $this->complitionDate;
    }

    public function setComplitionDate(?\DateTimeInterface $complitionDate): static
    {
        $this->complitionDate = $complitionDate;

        return $this;
    }
}
