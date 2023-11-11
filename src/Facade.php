<?php

namespace Mpietrucha\Support\Facade;

use Mpietrucha\Support\Forward;
use Mpietrucha\Support\Concerns\Forwardable;

class Facade
{
    use Forwardable;

    public function __construct(Forward $forward)
    {
        $this->forward()->to($forward);
    }

    public static function handlers(array $handlers): void
    {

    }

    public static function handler(string $handler): Facade
    {

    }

    public static function source(string $source): Facade
    {

    }
}
