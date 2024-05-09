<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart_detail;
use App\Models\Product;

class ProductType extends Model
{
    protected $table = 'product_types';
    protected $fillable = ['name', 'description'];
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getName()
    {
        return $this->attributes['name'];
    }
    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
    public function getProduct()
    {
        return Product::where('product_types_id', $this->getId())->get();
    }
    public function getCreated_at()
    {
        return $this->attributes['created_at'];
    }
    public function setCreated_at($created_at)
    {
        $this->attributes['created_at'] = $created_at;
    }
    public function getUpdated_at()
    {
        return $this->attributes['updated_at'];
    }
}
