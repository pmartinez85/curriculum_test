<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class StudiesControllerTest
 */
class StudiesControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        //dd(route('studies.index'));
       $this->call('GET','studies.index');
        //1) Preparacio
        //2) Execucio
        //3) Assertions
    }
}
