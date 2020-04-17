<?php

namespace Tests\Feature;

use App\Contracts\Services\ServerServiceFactoryContract;
use App\Services\ServerServiceFactory;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Credential;
use Mockery;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $credential = factory(Credential::class)->create([
            'access_token' => getenv('TEST_DIGITAL_OCEAN_TOKEN')
        ]);

        $serverServiceFactory = Mockery::mock(ServerServiceFactoryContract::class);

        $this->app->bind(ServerServiceFactoryContract::class, $serverServiceFactory);

        $this->withoutExceptionHandling();
        $response = $this->get(sprintf('/api/servers/%s', $credential->id));

        $response->assertStatus(403);
    }
}
