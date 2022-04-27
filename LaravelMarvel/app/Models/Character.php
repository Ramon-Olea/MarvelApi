<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Character
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $first_name
 * @property $last_name
 * @property $Gender
 * @property $Age
 * @property $city
 * @property $State
 * @property $country
 * @property $character
 * @property $comic
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Character extends Model
{
    
    static $rules = [
		'first_name' => 'required',
		'last_name' => 'required',
		'Gender' => 'required',
		'Age' => 'required',
		'city' => 'required',
		'State' => 'required',
		'country' => 'required',
		'character' => 'required',
		'comic' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name','last_name','Gender','Age','city','State','country','character','comic'];



}
