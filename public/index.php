<?php

use app\Classes\TaggedDeadlineTask;

include 'autoloader.php';

// Create first task
$task1 = new TaggedDeadlineTask( 'Task 1', 'Should be done within Friday', '2024-10-17', '2024-10-20' );
$task1->addTag( 'Frontend' );
$task1->addTag( 'Contact Page' );
$task1->addAssignee( 'Prince' );
$task1->addAssignee( 'Rakib' );

// Create second task with corrected date
$task2 = new TaggedDeadlineTask( 'Task 2', 'Should be done within Sunday', '2024-10-12', '2024-10-25' );
$task2->addAssignee( 'Tony' );

// Array of tasks
$tasks = [$task1, $task2];

// Iterate and print task details
foreach ( $tasks as $task ) {
    echo "Title: " . $task->getTitle() . PHP_EOL;
    echo "Description: " . $task->getDescription() . PHP_EOL;
    echo "Start Date: " . $task->getStartDate() . PHP_EOL;
    echo "Due Date: " . $task->getDueDate() . PHP_EOL;

    // Handle tags if it's an instance of TaggedDeadlineTask
    if ( $task instanceof TaggedDeadlineTask ) {
        echo "Tags: " . implode( ', ', $task->getTags() ) . PHP_EOL;
    }

    // Use implode to print assignees array
    echo "Assignee: " . implode( ', ', $task->getAssignees() ) . PHP_EOL;
    echo "Priority: " . $task->getPriority() . PHP_EOL;
    echo "Completed: " . ( $task->isCompleted() ? 'Yes' : 'No' ) . PHP_EOL;
}
