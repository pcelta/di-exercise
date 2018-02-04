<?php

namespace Monster;

class Car
{
    /**
     * @var Wheel
     */
    protected $wheel;

    public function __construct(Wheel $wheel)
    {
        $this->wheel = $wheel;
    }

    public function turn(string $direction): string
    {
        if ($direction == Wheel::DIRECTION_RIGHT) {
            return $this->wheel->right();
        }

        return $this->wheel->left();
    }
}
