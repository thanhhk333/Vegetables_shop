@extends('layouts.app')
@section('content')
<section>

    <section class="banner_area" style="margin-top: 100px">
        <div class="banner_inner d-flex align-items-center">
          <div class="container">
            <div
              class="banner_content d-md-flex justify-content-between align-items-center"
            >
              <div class="mb-3 mb-md-0">
                <h2>Product Details</h2>
                <p>Very us move be blessed multiply night</p>
              </div>
              <div class="page_link">
                <a href="index.html">Home</a>
                <a href="single-product.html">Product Details</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--================End Home Banner Area =================-->
  
      <!--================Single Product Area =================-->
      <div class="product_image_area">
        <div class="container">
          <div class="row s_product_inner">
            <div class="col-lg-6">

                <img src="{{ asset('img/'.$viewData['products']->getImage()) }}" alt="" class="img-fluid">
                 
               
             
            </div>
            <div class="col-lg-5 offset-lg-1">
              <div class="s_product_text">
                <h3>{{$viewData['products']->getName() }}</h3>
                <h2>{{$viewData['products']->getPrice() }} đ</h2>
                <ul class="list">
                  <li>
                    <a class="active" href="#">
                      <span>Category</span> :....</a
                    >
                  </li>
                  <li>
                    <a href="#"> <span>Availibility</span> : In Stock</a>
                  </li>
                </ul>
                <p>
                  {{$viewData['products']->getDescription() }}
                </p>
                <form action="{{route('cart.add',['id'=>$viewData['products']->getId()])}}">
                <div class="product_count">
                  @csrf
                  <label for="qty">Quantity:</label>
                
                  <input type="number" min="1" max="10" class="form-control quantity-input" name="quantity" value="1">

                  <button
                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                    class="increase items-count"
                    type="button"
                  >
                    <i class="lnr lnr-chevron-up"></i>
                  </button>
                  <button
                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                    class="reduced items-count"
                    type="button"
                  >
                    <i class="lnr lnr-chevron-down"></i>
                  </button>
                </div>
                <div class="card_area">
                  <button type="submit" class="main_btn" href="#">Add to Cart</button>
                  <a class="icon_btn" href="#">
                    <i class="lnr lnr lnr-diamond"></i>
                  </a>
                  <a class="icon_btn" href="#">
                    <i class="lnr lnr lnr-heart"></i>
                  </a>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--================End Single Product Area =================-->
    </section>
 @endsection