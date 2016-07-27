<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestAuth extends TestCase
{
	use DatabaseMigrations;
	
	public function testLogin()
	{
		$this->json('POST', '/auth/login', ['email' => 'pvankeymeulen@seanachaidh.be',
						'password' => '12345'])
 		->seeJsonEquals(['success' => 'true']);
	}
    
	public function testGetMessage() {
		//Dit is een test van writemessege en getmessage in een keer
		$data = [
			'title' => 'testbericht',
			'text' => 'Mi estas Pedro',
			'date' => date("Y-m-d")];
			
		
		$user = factory(App\User::class)->create();
		
		$this->actingAs($user)->json('POST', '/bericht', $data)
			->seeJsonEquals(['created' => 'true']);
		
		$this->actingAs($user)->json('GET', '/bericht', ['first' => 'true'])
				->seeJson(['title' => 'testbericht']);
		
	}
	
	public function testAuthorization() {
		//Deze testmoet falen omdat we een bericht gaan proberen schrijven naar de databank
		//zonder dat we ingelogd zijn.
		
		$data = [
			'title' => 'Testbericht',
			'text' => 'Dit moet fout gaan',
			'date' => date("Y-m-d")];
		$resp = $this->call('POST', '/bericht', $data);
		$this->assertEquals(401, $resp->status());
	}
}
