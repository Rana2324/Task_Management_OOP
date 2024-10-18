<?php
namespace app\Classes;

abstract class Task
{
    protected $title;
    protected $description;
    protected $completed;

    //methods
    public function __construct( $title, $description )
    {
        $this->title       = $title;
        $this->description = $description;
        $this->completed   = false;
    }

    //abastract method
    abstract public function getPriority();
    abstract public function marksAsComplete();

    //Getters
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function isCompleted()
    {
        return $this->completed;
    }
};