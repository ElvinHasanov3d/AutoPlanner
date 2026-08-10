<?php
/**
 * Tests for AutoPlanner
 */

use PHPUnit\Framework\TestCase;
use Autoplanner\Autoplanner;

class AutoplannerTest extends TestCase {
    private Autoplanner $instance;

    protected function setUp(): void {
        $this->instance = new Autoplanner(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autoplanner::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
