<?php 
declare(strict_types=1);

namespace App\Tests\Unit\Entity;

use App\Entity\WorkflowBlueprint;
use PHPUnit\Framework\TestCase;

final class WorkflowBlueprintTest extends TestCase
{
    public function testWorkflowBlueprintStructure(): void
    {
        $blueprint = new WorkflowBlueprint();
        $this->assertObjectHasProperty('name', $blueprint);
        $this->assertObjectHasProperty('uuid', $blueprint);
        $this->assertObjectHasProperty('data', $blueprint);
        $this->assertIsArray($blueprint->getData());
    }

    public function testIfCanSetName(): void
    {
        $blueprint = new WorkflowBlueprint();
        $test_name = 'test_name';
        $blueprint->setName($test_name);
        $this->assertSame($test_name, $blueprint->getName());
    }

    public function testIfCanSetUUID(): void
    {
        $blueprint = new WorkflowBlueprint();
        $uuid = 'd08475a5-554b-4a08-8160-efa0c0a9bbec';
        $blueprint->setUuid($uuid);
        $this->assertSame($uuid, $blueprint->getUuid());
    }

    public function testIfCanSetDataFromJson(): void
    {
        $blueprint = new WorkflowBlueprint();
        $arr = [
            "key1" => "value1",
            "key2" => true,
            "key3" => ["Nkey" => "value1"]
        ];
        $blueprint->setData($arr);
        $this->assertSame($arr, $blueprint->getData());
    }
}