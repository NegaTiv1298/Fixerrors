<?php

abstract class ShopProduct
{
    /** @var string */
    protected $info;

    /** @var string */
    private $title;

    /** @var string */
    private $producer;

    /** @var int */
    private $price;

    /**
     * @param string $title
     * @param string $producer
     * @param int    $price
     */
    public function __construct(
        string $title,
        string $producer,
        int    $price
    ) {
        $this->title = $title;
        $this->producer = $producer;
        $this->price = $price;
    }

    /**
     * @return string
     */
    abstract public function getProductType(): string;

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return $this->producer;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }
}
