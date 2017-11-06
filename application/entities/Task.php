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

    private $task;
    private $priority;
    private $size;
    private $group;
    
    public function setPriority($value) 
    {
        if (is_int($value) && $value < 5 ) 
        {
            $this->priority = $value;
            return true;
        }
        return false;
    }
    
    public function setSize($value) 
    {
        if (is_int($value) && $value < 5)
        {
           $this->size = $value;
            return true;
        }
        return false;
    }
    
    public function setGroup($value)
    {
        if (is_int($value) && $value < 6)
        {
           $this->group = $value;
            return true;
        }
        return false;
    }
    
    public function setTask($value)
    {
      if (preg_match('/^[A-Z0-9 ]+$/i', $task) && strlen($task) <= 64) {
          $this->task = $task;
      }
      else{
          throw new Exception('Invalid task : cannot find method set'+$task);
      }
    }

    public function getTask(){
        return $this->task;
    }

    public function setPriority($priority)
    {
        if (is_int($priority) && $priority < 4 && $priority>0) {
            $this->priority = $priority;
        }
        else{
            throw new Exception('Invalid task : cannot find method set'+$priority);
        }
    }

    public function getPriority(){
        return $this->priority;
    }

    public function setSize($size)
    {
        if (is_int($size) && $size < 4 && $size>0) {
            $this->task = $size;
        }
        else{
            throw new Exception('Invalid task : no method set'+$size);
        }
    }

    public function getSize(){
        return $this->size;
    }

    public function setGroup($group)
    {
        if (is_int($group) && $group < 4 && $group>0) {
            $this->task = $group;
        }
        else{
            throw new Exception('Invalid task : no method set'+$group);
        }
    }

    public function getGroup(){
        return $this->group;
    }
}
