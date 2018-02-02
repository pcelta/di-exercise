<?php

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

    public function turn($direction): string
    {
        if ($direction == 'right') {
            return $this->wheel->right();
        }

        return $this->wheel->left();
    }
}
