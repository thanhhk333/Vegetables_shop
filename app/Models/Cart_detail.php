<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Product;

class Cart_detail extends Model
{
    protected $table = 'cart_detail';
    public static function validate($request)
    {
        $request->validate([
            "price" => "required|numeric|gt:0",
            "quantity" => "required|numeric|gt:0",
            "products_id" => "required|exists:products,id",
            "card_id" => "required|exists:orders,id",
        ]);
    }
    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }
    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function getCartId()
    {
        return $this->attributes['cart_id'];
    }
    public function setCartId($cartId)
    {
        $this->attributes['cart_id'] = $cartId;
    }
    public function getProductId()
    {
        return $this->attributes['products_id'];
    }
    public function setProductId($productId)
    {
        $this->attributes['products_id'] = $productId;
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
    // Relationship
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function getCart()
    {
        return $this->cart;
    }
    public function setCart($cart)
    {
        $this->user = $cart;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct($product)
    {
        $this->product = $product;
    }
}
