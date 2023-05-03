<?php

namespace App\Service;

use App\Service\ConnectionInterface;

class DatabaseService
{
    public function __construct(private ConnectionInterface $connectionInterface) {
    }
}