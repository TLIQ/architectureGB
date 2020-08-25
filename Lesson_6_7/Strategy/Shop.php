<?php


class Shop
{
    private $socks = [];

    public function addSocks(ISocks $type)
    {
        $this->socks[] = $type;
    }

    public function payment(Billing $billing, $phone): void
    {
        $total = 0;

        foreach ($this->socks as $sock)
        {
            $total += $sock->getPrice();
        }

        if ($billing->bill($total, $phone) == true)
        {
            $this->socks = [];
        }
    }
}