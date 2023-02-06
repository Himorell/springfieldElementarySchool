<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/** 
 * Class Score
 *
 * @property $id
 * @property $id_students
 * @property $mark
 * @property $quarter
 * @property $subject
 * @property $course
 * @property $academicYear
 * @property $created_at
 * @property $updated_at
 *
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Score extends Model
{
    
    static $rules = [
		'id_students' => 'required',

		'subject' => 'required',
    'quarter' => 'required',
    'score1',
    'score2',
    'score3',

    'course' => 'required',
		'academicYear' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_students','mark','quarter','subject','course','academicYear'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'id_students');
    }
    

}
