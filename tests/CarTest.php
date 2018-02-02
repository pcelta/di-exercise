<?php

namespace Monster\Tests;

use Monster\Car;
use Monster\Wheel;

class CarTest extends \PHPUnit\Framework\TestCase
{
    public function testTurnShouldReturnRightWhenRightDirectionIsGiven()
    {
        $wheel = $this->getMockBuilder(Wheel::class)
            ->setMethods(['right'])
            ->getMock();

        $wheel->expects($this->once())
            ->method('right')
            ->will($this->returnValue('right'));

        $car = new Car($wheel);
        $result = $car->turn('right');
        $this->assertEquals(Wheel::DIRECTION_RIGHT, $result);
    }

    public function testTurnShouldReturnLeftWhenLeftDirectionIsGiven()
    {
        $wheel = $this->getMockBuilder(Wheel::class)
            ->setMethods(['left', 'right'])
            ->getMock();

        $wheel->expects($this->once())
            ->method('left')
            ->will($this->returnValue('left'));

        $wheel->expects($this->never())
            ->method('right');

        $car = new Car($wheel);
        $result = $car->turn('left');
        $this->assertEquals(Wheel::DIRECTION_LEFT, $result);
    }
}
