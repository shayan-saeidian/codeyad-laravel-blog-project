<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'parent_id',
        'title',
        'slug',
    ];
    public function parentCategory(){
        return $this->belongsTo(Category::class,'parent_id')->withDefault(['title'=>'دسته بندی اصلی']);
    }
    public function childCategory(){
        return $this->hasMany(Category::class,'parent_id');
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function($category){
            foreach ($category->childCategory()->get() as $child){
                $child->delete();
            }

        });
    }
    public static function getCategories()
    {
        $array = [];

        $categories = self::query()
            ->with('childCategory.childCategory')
            ->where('parent_id', 0)
            ->get();

        foreach ($categories as $category1) {
            $array[$category1->id] = $category1->title;

            foreach ($category1->childCategory as $category2) {
                $array[$category2->id] = ' - ' . $category2->title;

                foreach ($category2->childCategory as $category3) {
                    $array[$category3->id] = ' -- ' . $category3->title;
                }
            }
        }

        return $array;
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}
