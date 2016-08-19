<?php

namespace LinkEmailHighLighter\Tests;

use LinkEmailHighLighter\HighLighter;

class HighLighterTest extends \PHPUnit_Framework_TestCase{
    
    /**
     * @test
     */
    public function HighLightTest()
    {
        $highlighter = new HighLighter('');
        $output = $highlighter->HighLight('Lorem Ipsum http://www.google.co.in lorem ipsum dummy text added for the testing purpose by test@gmail.com');
        $expectedOutPut = 'Lorem Ipsum <a href="http://www.google.co.in" target="_blank">http://www.google.co.in</a> lorem ipsum dummy text added for the testing purpose by <a href="mailto:test@gmail.com">test@gmail.com</a>';
        $this->assertEquals($expectedOutPut, $output);
    }
}
