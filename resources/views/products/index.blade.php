@extends('layouts.app')
@section('content')

 <!-- Product Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Our Products</h1>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
            </div>
            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Fruits</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Vegetable </a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Herb</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- tab-content --}}
        <div class="tab-content">
          <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                {{-- @foreach --}}
                @foreach ($viewData['product'] as $product )
                @if ($product->getProduct_types_id() == 1)
                  <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                      <div class="product-item">
                          <div class="position-relative bg-light overflow-hidden">
                            <a href="{{ route('products.show', ['id' => $product->getId()]) }}">
                              <img class="img-fluid" style="width: 100%; height:200px " src="{{asset('img/'.$product ->getImage())}}" alt="">
                            </a>
                              <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                          </div>
                          <div class="text-center p-4">
                              <a class="d-block h5 mb-2" href=""> {{ $product->getName() }} </a>
                              <span class="text-primary me-1">$19.00</span>
                              <span class="text-body text-decoration-line-through"> {{ $product->getPrice() }}</span>
                          </div>
                          <div class="d-flex border-top">
                              <small class="w-50 text-center border-end py-2">
                                  <a class="text-body" href="{{ route('products.show', ['id' => $product->getId()]) }}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                              </small>
               
                              <small class="w-50 text-center py-2">
                                  <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                              </small>
                
                          </div>
                      </div>
                  </div>
                @endif
                  @endforeach
                </div>
            </div>
                 
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                  {{-- @endforeach --}}
                  @foreach ($viewData['product'] as $product )
                  @if ($product->getProduct_types_id() == 2)
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden">
                                <img class="img-fluid" style="width: 100%; height:200px " src="{{asset('img/'.$product ->getImage())}}" alt="">
                                <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5 mb-2" href=""> {{ $product->getName() }} </a>
                                <span class="text-primary me-1">$19.00</span>
                                <span class="text-body text-decoration-line-through"> {{ $product->getPrice() }}</span>
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href="{{ route('products.show', ['id' => $product->getId()]) }}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                </small>
                            </div>
                        </div>
                    </div>
                  @endif
                    @endforeach
                        </div>
                    </div>
                       {{-- @endforeach --}}

                       <div id="tab-3" class="tab-pane fade show p-0 ">
                         <div class="row g-4">
                           {{-- @foreach --}}
                           @foreach ($viewData['product'] as $product )
                           @if ($product->getProduct_types_id() == 3)
                             <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                 <div class="product-item">
                                     <div class="position-relative bg-light overflow-hidden">
                                         <img class="img-fluid" style="width: 100%; height:200px " src="{{asset('img/'.$product ->getImage())}}" alt="">
                                         <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                     </div>
                                     <div class="text-center p-4">
                                         <a class="d-block h5 mb-2" href=""> {{ $product->getName() }} </a>
                                         <span class="text-primary me-1">$19.00</span>
                                         <span class="text-body text-decoration-line-through"> {{ $product->getPrice() }}</span>
                                     </div>
                                     <div class="d-flex border-top">
                                         <small class="w-50 text-center border-end py-2">
                                             <a class="text-body" href="{{ route('products.show', ['id' => $product->getId()]) }}"><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                                         </small>
                                         <small class="w-50 text-center py-2">
                                             <a class="text-body" href=""><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                                         </small>
                                     </div>
                                 </div>
                             </div>
                           @endif
                             @endforeach
                             {{-- @endforeach --}}
       </div>
        </div>

       <div class="row"> 
       <div class="col-12 text-center">
          <a class="btn btn-primary rounded-pill py-3 px-5" href="">Browse More Products</a>
      </div>
    </div>
   
@endsection