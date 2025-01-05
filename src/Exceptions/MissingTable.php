<?php

namespace SextaNet\LaravelChileGeo\Exceptions;

class MissingTable extends \Exception
{
    public function __construct($table_name)
    {
        parent::__construct('Table "'.$table_name.'" does not exist.');
    }
}
