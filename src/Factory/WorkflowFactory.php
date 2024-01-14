<?php

namespace App\Factory;

use App\Entity\Workflow;
use App\Repository\WorkflowRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Workflow>
 *
 * @method        Workflow|Proxy                     create(array|callable $attributes = [])
 * @method static Workflow|Proxy                     createOne(array $attributes = [])
 * @method static Workflow|Proxy                     find(object|array|mixed $criteria)
 * @method static Workflow|Proxy                     findOrCreate(array $attributes)
 * @method static Workflow|Proxy                     first(string $sortedField = 'id')
 * @method static Workflow|Proxy                     last(string $sortedField = 'id')
 * @method static Workflow|Proxy                     random(array $attributes = [])
 * @method static Workflow|Proxy                     randomOrCreate(array $attributes = [])
 * @method static WorkflowRepository|RepositoryProxy repository()
 * @method static Workflow[]|Proxy[]                 all()
 * @method static Workflow[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Workflow[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Workflow[]|Proxy[]                 findBy(array $attributes)
 * @method static Workflow[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Workflow[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class WorkflowFactory extends ModelFactory
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
            'workflowBlueprint' => WorkflowBlueprintFactory::new(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Workflow $workflow): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Workflow::class;
    }
}
