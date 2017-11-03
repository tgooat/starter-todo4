<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Task
 *
 * @author Connor
 */
require(dirname(__FILE__).'/'.'Entity.php'); 
class Task extends Entity {
    //put your code here
    private $task;
    private $priority;
    private $size;
    private $group;
    
    public function setTask($value)
    {
      if (preg_match('/^[A-Z0-9 ]+$/i', $value) && strlen($value) <= 64) {
        $this->task = $value;
        return true;
      }
      return false;
    }
}
