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
        $response = $this->get('/');
        $response->assertSee($student->name);
        $response->assertStatus(200)->assertViewIs('students');
    }
}
