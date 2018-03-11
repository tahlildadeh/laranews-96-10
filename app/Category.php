<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parentCategory() {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function scopeList($query) {
        return $query->select('id', 'name')->orderBy('name');
    }

    public static function createCategory(string $name, Category $parentCategory=null){
        $data = compact('name');
        if(!$parentCategory){
            return Category::create($data);
        }else{
            $category = new Category($data);
            $category->address = ($parentCategory->address ? ($parentCategory->address . '-') : '') . $parentCategory->id;
            return $parentCategory->children()->save($category);
        }
    }
}
