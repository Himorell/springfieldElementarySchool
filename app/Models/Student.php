<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $name
 * @property $surname
 * @property $email
 * @property $image
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'name' => 'required',
		'surname' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','surname','email','image'];



}