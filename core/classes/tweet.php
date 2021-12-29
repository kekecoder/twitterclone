<?php

class Tweet extends Base
{
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
}
