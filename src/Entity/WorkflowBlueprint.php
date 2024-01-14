<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Patch;
use App\Repository\WorkflowBlueprintRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: WorkflowBlueprintRepository::class)]
#[ApiResource(
    operations: [
        new Get(),
        new GetCollection(),
        new Post(),
        new Patch(),
        new Delete()
    ],
    normalizationContext: [
        'groups' => ['workflow_blueprint:read']
    ],
    denormalizationContext:[
        'groups' => ['workflow_blueprint:write']
    ]
)]
class WorkflowBlueprint implements NotifiableEntityEventInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups('workflow_blueprint:read')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['workflow_blueprint:read', 'workflow_blueprint:write'])]
    private ?string $name = null;

    #[ORM\Column(type: Types::GUID)]
    #[Groups(['workflow_blueprint:read'])]
    private ?string $uuid = null;

    #[ORM\Column]
    #[Groups(['workflow_blueprint:read', 'workflow_blueprint:write'])]
    private array $data = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): static
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): static
    {
        $this->data = $data;

        return $this;
    }
}
