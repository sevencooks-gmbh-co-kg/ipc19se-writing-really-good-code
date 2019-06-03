<?php declare(strict_types=1);
namespace ClansOfCaledonia;

use PHPUnit\Framework\TestCase;

/**
 * @covers \ClansOfCaledonia\PriceList
 *
 * @uses \ClansOfCaledonia\Pound
 */
final class PriceListTest extends TestCase
{
    public function testHasInitialPrice(): PriceList
    {
        $prices = PriceList::fromList(
            new Pound(1),
            new Pound(2),
            new Pound(3),
            new Pound(4),
            new Pound(5),
            new Pound(6),
            new Pound(7),
            new Pound(8),
            new Pound(9),
            new Pound(10)
        );

        $this->assertEquals(new Pound(4), $prices->current());

        return $prices;
    }

    /**
     * @depends testHasInitialPrice
     */
    public function testPriceCouldBeIncreased(PriceList $prices): void
    {
        $prices->increase(1);

        $this->assertEquals(new Pound(5), $prices->current());
    }

    /**
     * @depends testHasInitialPrice
     */
    public function testPriceCouldBeReduced(PriceList $prices): void
    {
        $prices->reduce(1);

        $this->assertEquals(new Pound(3), $prices->current());
    }

    /**
     * @depends testHasInitialPrice
     */
    public function testPriceCouldBeReducedButNotBeLessThanPriceAtFirstPosition(PriceList $prices): void
    {
        $prices->reduce(4);

        $this->assertEquals($prices->first(), $prices->current());
    }

    /**
     * @depends testHasInitialPrice
     */
    public function testPriceCouldBeIncreasedButNotBeMoreThanAtLastPosition(PriceList $prices): void
    {
        $prices->increase(7);

        $this->assertEquals($prices->last(), $prices->current());
    }
}
