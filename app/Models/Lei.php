<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Lei
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lei whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lei whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lei whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Lei whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Lei extends Model
{
    //
    protected $fillable=['name'];

    /*//通过类别找商品
    public function shops()
    {
        return $this->hasMany(Shop::class,"lei_id");
    }*/
}
