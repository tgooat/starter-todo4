<?php
require_once 'PHPUnit/Autoload.php';


use PHPUnit\Framework\TestCase;


class TaskListTest extends TestCase {

    private $CI;

    public function setUp() {
        $this->CI = & get_instance();
    }

    public function testSet() {
        $tasks = $this->CI->tasks->all();

        try {
            $completeTasks = 0;
            $incompleteTasks = 0;
            foreach ($tasks as $task) {
                if ($task->status != 2) {
                    $incompleteTasks++;
                } else {
                    $completeTasks++;
                }
            }
            $this->assertGreaterThan($completeTasks, $incompleteTasks);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            //$this->assertEquals(null, $this->task->$key);
        }
    }

}
