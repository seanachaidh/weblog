<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestAuth extends TestCase
{
	public function testLogin()
	{
		$this->json('POST', '/auth/login', ['email' => 'pvankeymeulen@seanachaidh.be',
						'password' => '12345'])
 		->seeJsonEquals(['success' => 'true']);
	}
    
	public function testGetMessage() {
		//Dit is een test van writemessege en getmessage in een keer
		$data = [
			
	}
}
