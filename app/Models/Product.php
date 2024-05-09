<?php

namespace App\Models;

use App\Models\Images;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart_detail;

class Product extends Model
{
    public static function sumPricesByQuantities($products, $quantities)
    {
        $total = 0;
        foreach ($products as $product) {
            $total += $product->getPrice() * $quantities[$product->getId()];
        }
        return $total;
    }

    protected $fillable = [
        'name',
        'description',
        'price',
        'product_types_id',
    ];


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
    public function getDescription()
    {
        return $this->attributes['description'];
    }
    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function getProduct_types_id()
    {
        return $this->attributes['product_types_id'];
    }
    public function setProduct_types_id($product_types_id)
    {
        $this->attributes['product_types_id'] = $product_types_id;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }

    public function cart_detail()
    {
        return $this->hasMany(Cart_detail::class);
    }
    public function getCart_detail()
    {
        return $this->cart_detail;
    }
    public function setCart_detail($cart_detail)
    {
        $this->items = $cart_detail;
    }
    public function images()
    {
        return $this->hasMany(Images::class);
    }
    public function getImage()
    {
        if (Images::where('products_id', $this->getId())->first() === null) {
            return null;
        }
        return Images::where('products_id', $this->getId())->first()->getImage();
    }
}
