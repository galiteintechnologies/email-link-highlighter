<?php

namespace LinkEmailHighLighter\Tests\src\Services;

use LinkEmailHighLighter\src\Services\MailToHighLighter;

class MailToLighterTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function replaceMailToTest() 
    {
        $output = MailToHighLighter::replaceMailTo('Lorem Ipsum test@gmail.com Lorem Ipsum');
        $expectedOutPut = 'Lorem Ipsum <a href="mailto:test@gmail.com">test@gmail.com</a> Lorem Ipsum';
        $this->assertEquals($expectedOutPut, $output);
    }

}
