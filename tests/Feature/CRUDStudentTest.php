<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */


    public function test_listStudentsAppearInUserView() {
        $this->withExceptionHandling();
        
        $users = User::factory(2)->create();
        $user = $users[0];
        $response = $this->get(route('users.index'));
        $response->assertSee($user->name);
        $response->assertStatus(200)->assertViewIs('user.index');
        
    }

    public function test_anUserCanBeCreated(){
        $this->withExceptionHandling();

        $user = User::factory()->create();
        $response = $this->post(route ('home'),
        [
            'name' => 'name',
            'surname' => 'surname',
            'email' => 'email',
            'password' => 'password',
            'image' => 'image',
        ]);

        $this->assertCount(1,User::all()); 
    }

    public function test_anUserCanBeDeleted() {
        $this->withExceptionHandling();

        $user = User::factory()->create();
        $this->assertCount(1, User::all());

        $response = $this->delete(route('users.destroy', $user->id));
        $this->assertCount(0, User::all());
    }

    public function test_anUserCanBeUpdated(){
        $this->withExceptionHandling();

        $user= User::factory()->create();
        $this->assertCount(1,User::all());

        $response=$this->patch(route('users.update',$user->id), ['name'=>'New name']);
        $this->assertEquals('New name', User::first()->name);

    }

    public function test_anUserCanBeShowed(){
        $this->withExceptionHandling();
        $user=User::factory()->create();
        $this->assertCount(1,User::all());
        $response=$this->get(route('users.show', $user->id));
        $response->assertSee($user->name);
        $response->assertSuccessful(200)->assertViewIs('user.show');
    }

}