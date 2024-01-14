<?php

namespace App\Factory;

use App\Entity\WorkflowBlueprint;
use App\Repository\WorkflowBlueprintRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;
use Symfony\Component\Uid\Uuid;

/**
 * @extends ModelFactory<WorkflowBlueprint>
 *
 * @method        WorkflowBlueprint|Proxy                     create(array|callable $attributes = [])
 * @method static WorkflowBlueprint|Proxy                     createOne(array $attributes = [])
 * @method static WorkflowBlueprint|Proxy                     find(object|array|mixed $criteria)
 * @method static WorkflowBlueprint|Proxy                     findOrCreate(array $attributes)
 * @method static WorkflowBlueprint|Proxy                     first(string $sortedField = 'id')
 * @method static WorkflowBlueprint|Proxy                     last(string $sortedField = 'id')
 * @method static WorkflowBlueprint|Proxy                     random(array $attributes = [])
 * @method static WorkflowBlueprint|Proxy                     randomOrCreate(array $attributes = [])
 * @method static WorkflowBlueprintRepository|RepositoryProxy repository()
 * @method static WorkflowBlueprint[]|Proxy[]                 all()
 * @method static WorkflowBlueprint[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static WorkflowBlueprint[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static WorkflowBlueprint[]|Proxy[]                 findBy(array $attributes)
 * @method static WorkflowBlueprint[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static WorkflowBlueprint[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class WorkflowBlueprintFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'data' => [],
            'name' => self::faker()->text(255),
            'uuid' => Uuid::v4()
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(WorkflowBlueprint $workflowBlueprint): void {})
        ;
    }

    protected static function getClass(): string
    {
        return WorkflowBlueprint::class;
    }
}
