<?php

namespace InFog\SimpleFinance\Entities;

class Movement
{
    /**
     * @var integer
     * @access private
     */
    private $id;

    /**
     * @var DateTime
     * @access private
     */
    private $date;

    /**
     * @var \InFog\SimpleFinance\Types\Money
     * @access private
     */
    private $amount;

    /**
     * @var string[20]
     * @access private
     */
    private $name;

    /**
     * @var string[255]
     * @access private
     */
    private $description;

    public static function createFromArray(array $data)
    {
        $movement = new self;

        $movement->setDate($data['date']);
        $movement->setAmount($data['amount']);
        $movement->setName($data['name']);
        $movement->setDescription($data['description']);

        return $movement;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setAmount(\InFog\SimpleFinance\Types\Money $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setName(\InFog\SimpleFinance\Types\SmallString $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription(\InFog\SimpleFinance\Types\Text $description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
