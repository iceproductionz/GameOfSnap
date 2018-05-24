<?php

namespace IceProductionz\GameOfSnap\Tests\Unit\Card;

use IceProductionz\GameOfSnap\Card\Card;
use IceProductionz\GameOfSnap\Card\Heart;
use IceProductionz\GameOfSnap\Exception\InvalidValue;
use PHPUnit\Framework\TestCase;

/**
 * Class TestHeart
 *
 * @package IceProductionz\GameOfSnap\Tests\Unit\Deck
 */
class TestHeart extends TestCase
{
    /**
     * @return array
     */
    public function provideConstruction(): array
    {
        return [
            [1, null],
            [2, null],
            [3, null],
            [4, null],
            [5, null],
            [6, null],
            [7, null],
            [8, null],
            [9, null],
            [10, null],
            ['J', null],
            ['Q', null],
            ['K', null],
            [11, InvalidValue::class],
            ['10', InvalidValue::class]
        ];
    }

    /**
     * Test Construction
     *
     * @dataProvider  provideConstruction
     * @param mixed $value
     * @param string $exception
     */
    public function testConstruction($value, $exception): void
    {
        if (null !== $exception) {
            $this->expectException($exception);
        }
        $sut = new Heart($value);

        $this->assertInstanceOf(Card::class, $sut);
        $this->assertInstanceOf(Heart::class, $sut);
    }

    /**
     *  Test Get Value
     */
    public function testGetValue(): void
    {
        $value = 1;
        $sut = new Heart($value);
        $this->assertSame( $value, $sut->getValue());
    }
}