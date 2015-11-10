<?php
/**
 * Generated by build/gen_test
 */
use LightnCandy\LightnCandy;
use LightnCandy\Runtime;

class ParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy\Parser::getExpression
     */
    public function testOn_getExpression() {
        $method = new \ReflectionMethod('LightnCandy\Parser', 'getExpression');
        $method->setAccessible(true);
        $this->assertEquals(array('this'), $method->invokeArgs(null,array(
            'this', array('flags' => array('advar' => 0, 'this' => 0))
)        ));
        $this->assertEquals(array(), $method->invokeArgs(null,array(
            'this', array('flags' => array('advar' => 0, 'this' => 1))
)        ));
        $this->assertEquals(array(1), $method->invokeArgs(null,array(
            '../', array('flags' => array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(1), $method->invokeArgs(null,array(
            '../.', array('flags' => array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(1), $method->invokeArgs(null,array(
            '../this', array('flags' => array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(1, 'a'), $method->invokeArgs(null,array(
            '../a', array('flags' => array('advar' => 0, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(2, 'a', 'b'), $method->invokeArgs(null,array(
            '../../a.b', array('flags' => array('advar' => 0, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(2, '[a]', 'b'), $method->invokeArgs(null,array(
            '../../[a].b', array('flags' => array('advar' => 0, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array(2, 'a', 'b'), $method->invokeArgs(null,array(
            '../../[a].b', array('flags' => array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0), 'scan' => true)
)        ));
        $this->assertEquals(array('id'), $method->invokeArgs(null,array(
            'this.id', array('flags' => array('advar' => 1, 'this' => 1, 'parent' => 1), 'usedFeature' => array('parent' => 0))
)        ));
        $this->assertEquals(array(0, '\'a.b\''), $method->invokeArgs(null,array(
            '"a.b"', array('flags' => array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0))
)        ));
        $this->assertEquals(array(0, '123'), $method->invokeArgs(null,array(
            '123', array('flags' => array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0))
)        ));
        $this->assertEquals(array(0, 'null'), $method->invokeArgs(null,array(
            'null', array('flags' => array('advar' => 1, 'this' => 0, 'parent' => 1), 'usedFeature' => array('parent' => 0))
)        ));
    }
    /**
     * @covers LightnCandy\Parser::parse
     */
    public function testOn_parse() {
        $method = new \ReflectionMethod('LightnCandy\Parser', 'parse');
        $this->assertEquals(array(false, array(array())), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,''), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(true, array(array())), $method->invokeArgs(null,array(
            array(0,0,0,'{{{',0,0,''), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(true, array(array())), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,''), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 1), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('b'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a  b'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('"b'), array('c"'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a "b c"'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array(0, '\'b c\''))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a "b c"'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('[b'), array('c]'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [b c]'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('[b'), array('c]'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [b c]'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array('b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a q=[b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array('q=[b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [q=[b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array('[b'), array('c]'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a q=[b c]'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array('b'), array('c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [q]=b c'), array('flags' => array('advar' => 0, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array(0, '\'b c\''))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a q="b c"'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('(foo bar)'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'(foo bar)'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0, 'exhlp' => 1, 'lambda' => 0), 'ops' => array('seperator' => ''), 'usedFeature' => array('subexp' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('foo'), array("'=='"), array('bar'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,"foo '==' bar"), array('flags' => array('advar' => 1, 'namev' => 1, 'noesc' => 0, 'this' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('( foo bar)'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'( foo bar)'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0, 'exhlp' => 1, 'lambda' => 0), 'ops' => array('seperator' => ''), 'usedFeature' => array('subexp' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array(0, '\' b c\''))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a " b c"'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 0, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array(0, '\' b c\''))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a q=" b c"'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('foo'), array(0, "' =='"), array('bar'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,"foo \' ==\' bar"), array('flags' => array('advar' => 1, 'namev' => 1, 'noesc' => 0, 'this' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), array(' b c'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'a [ b c]'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array(array('a'), 'q' => array(0, "' d e'"))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,"a q=\' d e\'"), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0), 'scan' => false, 'rawblock' => false)
)        ));
        $this->assertEquals(array(false, array('q' => array('( foo bar)'))), $method->invokeArgs(null,array(
            array(0,0,0,0,0,0,'q=( foo bar)'), array('flags' => array('advar' => 1, 'this' => 1, 'namev' => 1, 'noesc' => 0, 'exhlp' => 0, 'lambda' => 0), 'scan' => false, 'usedFeature' => array(), 'ops' => array('seperator' => 0), 'rawblock' => false)
)        ));
    }
    /**
     * @covers LightnCandy\Parser::toString
     */
    public function testOn_toString() {
        $method = new \ReflectionMethod('LightnCandy\Parser', 'toString');
        $this->assertEquals('b', $method->invokeArgs(null,array(
            array(0, 'a', 'b', 'c'), 1
)        ));
        $this->assertEquals('c', $method->invokeArgs(null,array(
            array(0, 'a', 'b', 'c', 'd', 'e')
)        ));
    }
}
?>