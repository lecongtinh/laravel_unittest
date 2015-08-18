<?php
use App\Http\Controllers\TodoController;

class TodoControllerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        App::when('TodoController')->needs('TodoServiceInterface')->give('TodoServiceMock');
    }
    public function testGetByStatus()
    {
        $response = $this->call('GET', '/todos/1');
        $this->assertEquals(200, $response->getStatusCode());
    }
}




