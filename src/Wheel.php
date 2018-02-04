<?php

namespace Monster;

class Wheel
{
    const DIRECTION_LEFT = 'left';
    const DIRECTION_RIGHT = 'right';

    protected function getGpsSignal()
    {
        get_headers('http://www.googlesss.com.au');
    }

    public function right()
    {
        $this->getGpsSignal();
        return self::DIRECTION_RIGHT;
    }

    public function left()
    {
        $this->getGpsSignal();
        return self::DIRECTION_LEFT;
    }
}
