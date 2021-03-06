<?php


namespace VideoRental;


class Customer
{
    protected $orders = [];

    /**
     * Customer constructor.
     */
    public function __construct()
    {
    }

    /**
     * 新增訂單
     *
     * @param Order $order
     */
    public function addOrder(Order $order)
    {
        $this->orders[] = $order;
    }

    /**
     * 計算一位顧客所有訂單金額
     *
     * @return int
     */
    public function calculateTotalPrice() : int
    {
        $totalPrice = 0;

        foreach ($this->orders as $order) {
            /** @var Order $order */
            $totalPrice += $order->calculatePrice();
        }

        return $totalPrice;
    }
}