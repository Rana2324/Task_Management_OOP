<?php

namespace app\Classes;

use app\Classes\Task;
use app\Interfaces\HasDueDateInterface;
use app\Interfaces\HasStartDateInterface;
use app\Traits\HasAssigneeTrait;

class DeadlineTask extends Task implements HasStartDateInterface, HasDueDateInterface
{
    use HasAssigneeTrait;

    protected $startDate;
    protected $dueDate;

    //method

    public function __construct( $title, $description, $startDate, $dueDate )
    {
        parent::__construct( $title, $description );
        $this->startDate;
        $this->dueDate;
    }

    //Getters

    public function getStartDate()
    {
        return $this->startDate;
    }
    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function getPriority()
    {
        return 'Low';
    }
    public function marksAsComplete()
    {
        $this->completed = true;
    }
}
