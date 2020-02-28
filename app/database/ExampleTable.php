<?php


use base\database\Table;

class ExampleTable extends Table
{
    public $tableName;

    /**
     * ExampleTable constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->tableName = 'example';
    }
}