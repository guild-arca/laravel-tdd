<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoutesTest extends TestCase
{

	/**
     * Route testing: Main (Header)
     *
     * @return void
     */
    public function test_Route_Main_Header()
    {
		$response = $this->call('GET', '/');
		$this->assertEquals(200, $response->status());
    }

    /**
     * Route testing: Main (Content)
     *
     * @return void
     */
    public function test_Route_Main_Content()
    {
		$this->visit('/')->see('Guild PHP');
    }

    /**
     * Route testing: Blog (Header)
     *
     * @return void
     */
    public function test_Route_Blog_Header()
    {
		$response = $this->call('GET', '/blog');
		$this->assertEquals(200, $response->status());
    }

    /**
     * Route testing: Blog (Content)
     *
     * @return void
     */
    public function test_Route_Blog_Content()
    {
		$this->visit('/blog')->see('Blog : OK');
    }

    /**
     * Route testing: Contact (Header)
     *
     * @return void
     */
    public function test_Route_Contact_Header()
    {
		$response = $this->call('GET', '/contact');
		$this->assertEquals(200, $response->status());
    }

    /**
     * Route testing: Contact (Content)
     *
     * @return void
     */
    public function test_Route_Contact_Content()
    {
		$this->visit('/contact')->see('Contact : OK');
    }
}
