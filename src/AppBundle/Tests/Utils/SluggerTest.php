<?php

namespace AppBundle\Tests\Utils;

use AppBundle\Utils\Slugger;
use PHPUnit\Framework\TestCase;

class SluggerTest extends TestCase
{
    /**
     * @dataProvider provideStrings
     */
    public function testSlugify($expected, $actual)
    {
        $slugger = new Slugger();

        $this->assertSame($expected, $slugger->slugify($actual));
    }

    public function provideStrings()
    {
        return [
            ['lorem-ipsum', 'Lorem Ipsum'],
            ['lorem-ipsum', 'Lorem!Ipsum'],
            ['lorem-ipsum', '*Lorem Ipsum'],
            ['lorem-ipsum', 'lorem-ipsum']
        ];
    }
}
