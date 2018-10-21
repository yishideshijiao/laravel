<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Adress
 *
 * @property int $id
 * @property string $tel
 * @property int $student_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Student $student
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Adress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Adress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Adress whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Adress whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Adress whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Adress extends Model
{
    //
    public function student(){
        return $this->belongsTo(Student::class,"id");
    }
}
