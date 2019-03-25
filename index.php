<?php
require "vendor/autoload.php";
use Tasker\Task;
use Tasker\Database;
use Tasker\QueryBuilder;

$config = require 'config.php';
$pdo = Database::connect($config['database']);
$task = new Task();

$query = new QueryBuilder($pdo);

$query->selectAll('tasks');

return $statement->fetchAll(PDO::FETCH_CLASS, Task::class);

$task = new Task();

$task->showAll();