<?php 
declare(strict_types=1);

namespace App\Tests\Unit\Entity;

use App\Entity\Workflow;
use App\Entity\WorkflowBlueprint;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

final class WorkflowTest extends TestCase
{
    public function testWorkflowStructure(): void
    {
        $workflow = new Workflow();
        $this->assertObjectHasProperty('startDate', $workflow);
        $this->assertObjectHasProperty('complitionDate', $workflow);
        $this->assertObjectHasProperty('WorkflowBlueprint', $workflow);
    }

    public function testIfCanSetName(): void
    {
        $workflow = new Workflow();
        $dt = new DateTimeImmutable();
        $workflow->setStartDate($dt);
        $this->assertSame($dt, $workflow->getStartDate());
    }

    public function testIfCanSetUUID(): void
    {
        $workflow = new Workflow();
        $dt = new DateTimeImmutable();
        $workflow->setComplitionDate($dt);
        $this->assertSame($dt, $workflow->getComplitionDate());
    }

    public function testIfCanSetDataFromJson(): void
    {
        $blueprint = new WorkflowBlueprint();
        $workflow = new Workflow();
        $workflow->setWorkflowBlueprint($blueprint);
        $this->assertSame($blueprint, $workflow->getWorkflowBlueprint());
    }
}