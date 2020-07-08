<?php

namespace Tests\Unit;
use App\Services\InspiringService;
use App\Http\Controllers\InspiringController;
use PHPUnit\Framework\TestCase;

class InspiringControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInspire()
    {
        $mock = \Mockery::mock(InspiringService::class);
        $mock->shouldReceive('inspire')->andReturn('名言');
        $inspiringController = new InspiringController($mock);
        self::assertEquals(
            '名言',
            $inspiringController->inspire()
        );
    }
}
