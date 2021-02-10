<?php

namespace Model;

use Core\Database\QueryBuilder;

class Member extends QueryBuilder
{
    public function __construct($pdo, $parameters = null)
    {
        parent::__construct($pdo, $parameters);
    }
}