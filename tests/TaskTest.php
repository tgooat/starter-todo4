<?php
use PHPUnit\Framework\TestCase;
require '../application/entities/Task.php';

 class TaskTest extends TestCase {
  private $task;
  public function setUp()
  {
      $this->task = new Task();
  }
  public function testSetTask()
  {
     $taskIsSet = $this->task->task = "fuck";
     $this->assertTrue($taskIsSet);
  }
}