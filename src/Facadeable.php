<?php

namespace Mpietrucha\Support\Facade;

abstract class Facadeable
{
    abstract protected static function facadeable(Facade $facade): void;
}
