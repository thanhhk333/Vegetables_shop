<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'product_images';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'products_id',
    ];
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getImage()
    {
        if ($this->attributes['image'] == null) {
            return asset('images/no-image.png');
        }
        return $this->attributes['image'];
    }
    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }
    public function getProductId()
    {
        return $this->attributes['products_id'];
    }
    public function setProductId($products_id)
    {
        $this->attributes['products_id'] = $products_id;
    }
}
