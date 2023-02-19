<?php

namespace Tests\Feature;

use App\Models\Score;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CRUDScoreTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     *
     *
     */
    use RefreshDatabase;
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_listScoreAppearInScoreView() {
        $this->withExceptionHandling();

        $scores = Score::factory(2)->create();
        $score = $scores[0];
        $response = $this->get(route('scores.index'));
        $response->assertSee($score->mark1);
        $response->assertStatus(200)->assertViewIs('score.index');

    }

    public function test_aScoreCanBeCreated(){
        $this->withExceptionHandling();

        $score = Score::factory()->create();
        $response = $this->post(route ('home'),
        [
            'academicYear' => 'academicYear',
            'course' => 'course',
            'subject' => 'subject',
            'quarter' => 'quarter',
            'mark1' => 'mark1',
            'mark2' => 'mark2',
            'mark3' => 'mark3',

        ]);

        $this->assertCount(1,Score::all());
    }

    public function test_aStudentCanBeDeleted() {
        $this->withExceptionHandling();

        $score = Score::factory()->create();
        $this->assertCount(1, Score::all());

        $response = $this->delete(route('students.destroy', $score->id));
        $this->assertCount(0, Score::all());
    }

    public function test_aScoreCanBeUpdated(){
        $this->withExceptionHandling();

        $score= Score::factory()->create();
        $this->assertCount(1,Score::all());

        $response=$this->patch(route('scores.update',$score->id), ['mark1'=>'New mark1']);
        $this->assertEquals('New mark1', Score::first()->mark1);

    }

    public function test_aScoreCanBeShowed(){
        $this->withExceptionHandling();
        $score=Score::factory()->create();
        $this->assertCount(1,Score::all());
        $response=$this->get(route('scores.show', $score->id));
        $response->assertSee($score->mark1);
        $response->assertSuccessful(200)->assertViewIs('score.show');
    }
}