<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Student;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factory;

class CRUDStudentTest extends TestCase
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


    // public function test_listStudentAppearInStudentView() {
    //     $this->withExceptionHandling();
        
    //     $students = Student::factory(2)->create();
    //     $student = $students[0];
    //     $response = $this->get('/');
    //     $response->assertSee($student->name);
    //     $response->assertStatus(200)->assertViewIs('home');
    // }

    public function test_aStudentCanBeCreated(){
        $this->withExceptionHandling();

        $student = Student::factory()->create();
        $response = $this->post(route ('home'),
        [
            'name' => 'name',
            'surname' => 'surname',
            'email' => 'email',
            'image' => 'image',
        ]);

        $this->assertCount(1,Student::all()); 

    }
public function testListStudentAppearsInStudentView()
    {
        $this->withoutExceptionHandling();
        $students = Student::factory(2)->create();
        $student = $students->first();
        $response = $this->get(route('student.index'));
        $response->assertSee($student->name)
                 ->assertStatus(200)
                 ->assertViewIs('student.index');
    }
}
