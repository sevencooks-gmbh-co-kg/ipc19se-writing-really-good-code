<?php declare(strict_types=1);
namespace ClansOfCaledonia;

final class Market
{
    public function priceFor(Good $good): Pound
    {
        switch (get_class($good)) {
            case Milk::class:
                return self::getMilkPrices()->current();
                break;
        }

    }

    public function sellTo(Offer $offer): Pound
    {
        return new Pound(
            $offer->amount()->amount() *
            $this->priceFor($offer->good())->amount()
        );
    }

    public function buyFrom(Offer $offer): Pound
    {
        return new Pound(
            $offer->amount()->amount() *
            $this->priceFor($offer->good())->amount()
        );
    }

    public function getMilkPrices()
    {
        $listBuilder = new PriceListBuilder;

        return $listBuilder->milkPrices();
    }
}
