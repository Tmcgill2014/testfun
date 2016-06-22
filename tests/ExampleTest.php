<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {  
           //1.Visit home page
        $this->visit('/');
             //2.Press a "Click me" link
        $this->click('Click Me');
             //3.See "Wish the concert was Justin Bieber last night"
        $this->see("Wish the concert was bieber");
             //4.Assert that the current url is /bieber
        $this->seePageIs('bieber');
    }
}
