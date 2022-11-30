<?php

namespace Tests\Unit;

use App\Console\Work;
use Tests\TestCase;

class WorkTest extends TestCase
{
    private Work $work;

    public function setUp(): void
    {
        parent::setUp();
        $this->work = new Work();
    }

    /**
     * @test
     * @dataProvider dataProvider_st2
     */
    public function st2(mixed $input, string $expected): void
    {
        $actual = $this->work->st2($input);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider_st2(): array
    {
        return [
            [0, 'zero'],
            ['1', 'foo'],
            [1, 'bar'],
            [2, 'baz'],
            [3, 'baz'],
            ['2', 'baz'],
            ['0', 'others'],
            [null, 'others'],
            [false, 'others'],
        ];
    }

    /**
     * @dataProvider dataProvider_st3
     */
    public function st3(mixed $input, string $expected): void
    {
        $actual = $this->work->st3($input);

        $this->assertEquals($expected, $actual);
    }

    public function dataProvider_st3(): array
    {
        return [
            [1, 'りんご'],
            [2, 'みかん'],
            [3, 'みかん'],
            [4, 'さくらんぼ'],
            ['1', 'さくらんぼ'],
            ['test', 'さくらんぼ'],
        ];
    }

    /**
     */
    public function st4(): void
    {
        $actual = $this->work->st4();
        $this->assertEquals(1+2+3+4+5+6+7, $actual);
    }

    /**
     */
    public function st5(): void
    {
        $actual = $this->work->st5();
        $this->assertEquals(1+2+4+5+6, $actual);
    }

    /**
     */
    public function st6(): void
    {
        $this->work->st6();
    }
}
