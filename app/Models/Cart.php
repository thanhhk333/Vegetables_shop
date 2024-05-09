<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    public static function validate($request)
    {
        $request->validate([
            'total' => 'required|numeric',
            'user_id' => 'required|numeric',
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
    public function getTotal()
    {
        return $this->attributes['total'];
    }
    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }
    public function getUser_id()
    {
        return $this->attributes['users_id'];
    }
    public function setUser_id($users_id)
    {
        $this->attributes['users_id'] = $users_id;
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
    public function setUpdated_at($updated_at)
    {
        $this->attributes['updated_at'] = $updated_at;
    }
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
}
