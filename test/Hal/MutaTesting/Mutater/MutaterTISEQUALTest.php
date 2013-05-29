<?php

namespace Test\Hal\MutaTesting\Mutater;

/**
 * @group mutater
 */
class MutaterTISEQUALTest extends \PHPUnit_Framework_TestCase
{

    public function testICanMutateEquality()
    {
        $token = new \Hal\MutaTesting\Token\TokenCollection(array(array(0 => T_IS_EQUAL, 1 => '==', 2 => 1)));
        $mutation = $this->getMock('\Hal\MutaTesting\Mutation\MutationInterface');
        $mutation->expects($this->any())
                ->method('getTokens')
                ->will($this->returnValue($token));
        
        

        $mutater = new \Hal\MutaTesting\Mutater\MutaterTISEQUAL;

        $result = $mutater->mutate($mutation, 0);
        $this->assertInstanceOf('\Hal\MutaTesting\Mutation\MutationInterface', $result);

        $token = $result->getTokens()->get(0);
        $this->assertEquals(T_IS_NOT_EQUAL, $token[0]);
    }

}