<?php declare(strict_types=1);
namespace ClansOfCaledonia;

final class PriceList
{
    /**
     * @var Pound[]
     */
    private $prices;

    /**
     * @var int
     */
    private $position = 3;

    public static function fromList(Pound ...$pounds): self
    {
        return new self($pounds);
    }

    /**
     * @param Pound[] $prices
     */
    private function __construct(array $prices)
    {
        $this->prices = $prices;
    }

    public function current(): Pound
    {
        return $this->prices[$this->position];
    }

    public function increase(int $factor): void
    {
        $newPosition = $this->position + $factor;
        $this->position = min($newPosition, $this->count());
    }

    public function reduce(int $factor): void
    {
        $newPosition = $this->position - $factor;
        $this->position = max(0, $newPosition);
    }

    public function first(): Pound
    {
        return $this->prices[0];
    }

    public function last(): Pound
    {
        return $this->prices[$this->count()];
    }

    private function count(): int
    {
        return \count($this->prices);
    }
}
