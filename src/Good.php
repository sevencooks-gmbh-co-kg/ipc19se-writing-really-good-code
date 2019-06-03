<?php declare(strict_types=1);
namespace ClansOfCaledonia;

abstract class Good
{
    public static function milk(): self
    {
        return new Milk;
    }

    public function isMilk(): bool
    {
        return false;
    }

    public static function wool(): self
    {
        return new Wool;
    }

    public function isWool(): bool
    {
        return false;
    }

    public static function grain(): self
    {
        return new Grain;
    }

    public function isGrain(): bool
    {
        return false;
    }

    public static function cheese(): self
    {
        return new Cheese;
    }

    public function isCheese(): bool
    {
        return false;
    }

    public static function whisky(): self
    {
        return new Whisky;
    }

    public function isWhisky(): bool
    {
        return false;
    }

    public static function bread(): self
    {
        return new Bread;
    }

    public function isBread(): bool
    {
        return false;
    }
}

