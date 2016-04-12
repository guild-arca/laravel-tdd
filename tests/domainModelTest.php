<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Domain;

class domainModelTest extends TestCase
{

    /**
     * Test domain: All
     *
     * @return void
     */
    public function test_model_Domain_all()
    {
        $domains = Domain::All();
       	$this->assertGreaterThan(0, count($domains));
    }

    /**
     * Test database
     *
     * @return void
     */
    public function test_model_Domain_find_id()
    {
        $domain = Domain::Find(1);
       	$this->assertGreaterThan(0, count($domain));
    }

}
