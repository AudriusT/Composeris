<?php
namespace Tasker;
use PDO;
class QueryBuilder
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $pdo){
        $statment = $pdo->prepeare('select * from $table');

        $statment->execute();

        return $statment ->fetchAll(PDO::FETCH_CLASS, Task::class);
    }
}