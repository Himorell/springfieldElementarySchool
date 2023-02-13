<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/** 
 * Class Score
 *
 * @property $id
 * @property $id_users
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
 * @property user $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Score extends Model
{
  use HasFactory;  

    // static $rules = [
		// 'id_users' => 'required',
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
    protected $fillable = ['id_users','academicYear','course','subject','quarter','mark1','mark2','mark3',];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\user', 'id', 'id_users');
    }
    

}
