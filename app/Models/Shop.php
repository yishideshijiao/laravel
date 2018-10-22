<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Shop
 *
 * @property int $id
 * @property string $name
 * @property int $lei_id
 * @property float $price
 * @property string $details
 * @property int $shelf 是否上架
 * @property int $num
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Lei $lei
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereLeiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereShelf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Shop whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Shop extends Model
{
    //
    protected $fillable=[
        'name','lei_id','price','details','shelf','num','updated_at','img'
    ];

    //关联类别
    public function lei()
    {
        return $this->hasOne(Lei::class,"id",'lei_id');
    }
}
