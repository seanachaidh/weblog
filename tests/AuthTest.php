<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestAuth extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
	$this->json('POST', '/auth/login', ['email' => 'pvankeymeulen@seanachaidh.be',
						'password' => '12345'])
 		->seeJsonEquals(['success' => 'true']);
    }
}
