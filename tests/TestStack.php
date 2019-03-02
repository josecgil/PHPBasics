<?php

use PHPUnit\Framework\TestCase;
use Structures\Stack;

final class TestStack extends TestCase
{

    /**
     * @test
     */
    function itShouldCountZeroOnStart()
    {
        $stack=new Stack();
        $this->assertEquals(0, $stack->count());
    }
    /**
     * @test
     */
    function itShouldCountOneItem()
    {
        $stack=new Stack();
        $stack->push(1);
        $this->assertEquals(1, $stack->count());
    }

    /**
     * @test
     */
    function itShouldCountTwoItems()
    {
        $stack=new Stack();
        $stack->push('a');
        $stack->push('b');
        $this->assertEquals(2, $stack->count());
    }

    /**
     * @test
     */
    function itShouldPopPushedItem()
    {
        $stack=new Stack();
        $stack->push('a');
        $this->assertEquals('a', $stack->pop());
    }

    /**
     * @test
     */
    function itShouldPopLastPushedItem()
    {
        $stack=new Stack();
        $stack->push('a');
        $stack->push('b');
        $this->assertEquals('b', $stack->pop());
    }

    /**
     * @test
     */
    function itShouldPopNullIfNoItems()
    {
        $stack=new Stack();
        $stack->push('a');
        $stack->push('b');
        $stack->pop();

        $this->assertEquals(1, $stack->count());
        $this->assertEquals('a', $stack->pop());

        $this->assertNull($stack->pop());
    }

    /**
     * @test
     */
    function itShouldRemoveItemFromStackOnPop()
    {
        $stack=new Stack();
        $this->assertNull($stack->pop());
    }

}
