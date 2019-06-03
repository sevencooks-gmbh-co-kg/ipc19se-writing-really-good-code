<?php declare(strict_types=1);
namespace ClansOfCaledonia;

use PHPUnit\Framework\TestCase;

/**
 * @covers \ClansOfCaledonia\Good
 * @covers \ClansOfCaledonia\Milk
 * @covers \ClansOfCaledonia\Wool
 * @covers \ClansOfCaledonia\Cheese
 * @covers \ClansOfCaledonia\Whisky
 * @covers \ClansOfCaledonia\Bread
 */
final class GoodTest extends TestCase
{
    public function testCanBeWool(): void
    {
        $wool = Good::wool();

        $this->assertTrue($wool->isWool());
    }

    public function testCanBeGrain(): void
    {
        $grain = Good::grain();

        $this->assertTrue($grain->isGrain());
    }

    public function testCanBeMilk(): void
    {
        $milk = Good::milk();

        $this->assertTrue($milk->isMilk());
    }

    public function testCanBeBread(): void
    {
        $bread = Good::bread();

        $this->assertTrue($bread->isBread());
    }

    public function testCanBeCheese(): void
    {
        $cheese = Good::cheese();

        $this->assertTrue($cheese->isCheese());
    }

    public function testCanBeWhisky(): void
    {
        $whisky = Good::whisky();

        $this->assertTrue($whisky->isWhisky());
    }
}
