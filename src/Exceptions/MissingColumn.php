<?php

namespace SextaNet\LaravelChileGeo\Exceptions;

class MissingColumn extends \Exception
{
    public function __construct($column_name, $table_name)
    {
        parent::__construct('Column "'.$column_name.'" on table "'.$table_name.'" does not exist.');
    }
}
