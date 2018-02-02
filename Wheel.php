<?php


class Wheel
{
    protected function getGpsSignal()
    {
        get_headers('http://www.googlesss.com.au');
    }

    public function right()
    {
        $this->getGpsSignal();
        return 'right';
    }

    public function left()
    {
        $this->getGpsSignal();
        return 'left';
    }
}
