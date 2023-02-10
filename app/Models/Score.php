<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/** 
 * Class Score
 *
 * @property $id
 * @property $id_students
 * @property $mark1
 * @property $mark2
 * @property $mark3
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
  use HasFactory;  

    // static $rules = [
		// 'id_students' => 'required',
		// 'mark1' => 'required',
    // 'mark2' => 'required',
    // 'mark3' => 'required',
		// 'quarter' => 'required',
		// 'subject' => 'required',
		// 'course' => 'required',
		// 'academicYear' => 'required',
    // ];

    // protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_students','academicYear','course','subject','quarter','mark1','mark2','mark3',];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'id_students');
    }
    

}
