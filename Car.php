<?php

class Car
{
    /**
     * @var Wheel
     */
    protected $wheel;

    public function setWheel(Wheel $wheel)
    {
        $this->wheel = $wheel;
    }

    public function turn($direction): string
    {
        if ($direction == 'right') {
            return $this->wheel->right();
        } else {
            return $this->wheel->left();
        }
    }
}
