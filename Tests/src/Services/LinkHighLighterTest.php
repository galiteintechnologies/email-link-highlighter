<?php

namespace LinkEmailHighLighter\Tests\src\Services;

use LinkEmailHighLighter\src\Services\LinkHighLighter;

class LinkHighLighterTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function replaceWebLinksTest() 
    {
        $output = LinkHighLighter::replaceWebLinks('Lorem Ipsum http://www.google.co.in Lorem Ipsum');
        $expectedOutPut = 'Lorem Ipsum <a href="http://www.google.co.in" target="_blank">http://www.google.co.in</a> Lorem Ipsum';
        $this->assertEquals($expectedOutPut, $output);
    }

}
