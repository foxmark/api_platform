<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Patch;
use App\Repository\WorkflowRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: WorkflowRepository::class)]
#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
        new Post(),
        new Patch(),
        new Delete()
    ],
    normalizationContext: [
        'groups' => ['workflow:read']
    ],
    denormalizationContext:[
        'groups' => ['workflow:write']
    ]
)]
class Workflow
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups('workflow:read')]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups('workflow:read')]
    private ?WorkflowBlueprint $WorkflowBlueprint = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups('workflow:read')]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups('workflow:read')]
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
