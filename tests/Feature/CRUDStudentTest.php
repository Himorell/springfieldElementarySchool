<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Student;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

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


    public function test_listStudentAppearInStudentView() {
        $this->withExceptionHandling();
        
        $students = Student::factory(2)->create();
        $student = $students[0];
        $response = $this->get('/students.index');
        $response->assertSee($student->name);
        $response->assertStatus(200)->assertViewIs('students.index');
    }

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

    public function test_aStudentCanBeDeleted() {
        $this->withExceptionHandling();

        $student = Student::factory()->create();
        $this->assertCount(1, Student::all());

        $response = $this->delete(route('students.destroy', $student->id));
        $this->assertCount(0, Student::all());
    }

    public function test_aStudentCanBeUpdated(){
        $this->withExceptionHandling();
        $student= Student::factory()->create();
        $this->assertCount(1,Student::all());

        $response=$this->patch(route('students.update',$student->id), ['name'=>'New name']);
        $this->assertEquals('New name', Student::first()->name);

    }

}