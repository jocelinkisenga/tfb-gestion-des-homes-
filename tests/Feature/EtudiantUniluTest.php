<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\EtudiantUnilu;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EtudiantUniluTest extends TestCase
{
    use  RefreshDatabase;

    protected string $endpoint = '/api/etudiantUnilus';
    protected string $tableName = 'etudiantUnilus';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCreateEtudiantUnilu(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $payload = EtudiantUnilu::factory()->make([])->toArray();

        $this->json('POST', $this->endpoint, $payload)
             ->assertStatus(201)
             ->assertSee($payload['name']);

        $this->assertDatabaseHas($this->tableName, ['id' => 1]);
    }

    public function testViewAllDummiesSuccessfully(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        EtudiantUnilu::factory(5)->create();

        $this->json('GET', $this->endpoint)
             ->assertStatus(200)
             ->assertJsonCount(5, 'data')
             ->assertSee(EtudiantUnilu::first(rand(1, 5))->name);
    }

    public function testViewAllDummiesByFooFilter(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        EtudiantUnilu::factory(5)->create();

        $this->json('GET', $this->endpoint.'?foo=1')
             ->assertStatus(200)
             ->assertSee('foo')
             ->assertDontSee('foo');
    }

    public function testsCreateEtudiantUniluValidation(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $data = [
        ];

        $this->json('post', $this->endpoint, $data)
             ->assertStatus(422);
    }

    public function testViewEtudiantUniluData(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        EtudiantUnilu::factory()->create();

        $this->json('GET', $this->endpoint.'/1')
             ->assertSee(EtudiantUnilu::first()->name)
             ->assertStatus(200);
    }

    public function testUpdateEtudiantUnilu(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        EtudiantUnilu::factory()->create();

        $payload = [
            'name' => 'Random'
        ];

        $this->json('PUT', $this->endpoint.'/1', $payload)
             ->assertStatus(200)
             ->assertSee($payload['name']);
    }

    public function testDeleteEtudiantUnilu(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        EtudiantUnilu::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->assertEquals(0, EtudiantUnilu::count());
    }
    
}
