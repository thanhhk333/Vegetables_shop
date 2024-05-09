@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">
                    Quản Lý Hàng Hóa
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-6 offset-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ID or Name"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm
                                            Kiếm</button>
                                    </div>
                                </div>

                                <div class="col-3 text-end">

                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg> Thêm
                                    </button>
                                </div>

                                @if ($errors->any())
                                    <ul class="alert alert-danger list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>- {{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST"
                                                    action="{{ route('admin.product.update', ['id' => $viewData['product']->getProId()]) }}">

                                                    @csrf
                                                    @method('PUT')

                                                    <div class="row g-3 align-items-center">
                                                        <div class="col-auto">
                                                            <label for="inputtext6" class="col-form-label">MÃ SP</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <input type="text" id="inputtext6" class="form-control"
                                                                aria-labelledby="textHelp"
                                                                value="{{ $viewData['product']->getProId() }}" />
                                                        </div>


                                                        <div class="row g-3 align-items-center">
                                                            <div class="col-auto">
                                                                <label for="inputtext6" class="col-form-label">Tên
                                                                    SP</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <input type="text" id="inputtext6" class="form-control"
                                                                    aria-labelledby="textHelp"
                                                                    value="{{ $viewData['product']->getProName() }}" />
                                                            </div>

                                                            <div class="row g-3 align-items-center">
                                                                <div class="col-auto">
                                                                    <label for="inputtext6" class="col-form-label">Tồn
                                                                        Kho</label>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <input type="text" id="inputtext6"
                                                                        class="form-control" aria-labelledby="textHelp"
                                                                        value="{{ $viewData['product']->getQuantity() }}" />
                                                                </div>

                                                                <div class="row g-3 align-items-center">
                                                                    <div class="col-auto">
                                                                        <label for="inputtext6"
                                                                            class="col-form-label">HSD</label>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <input type="date" id="inputtext6"
                                                                            class="form-control" aria-labelledby="textHelp"
                                                                            value="{{ $viewData['product']->getDate() }}" />
                                                                    </div>


                                                                    <div class="row g-3 align-items-center">
                                                                        <div class="col-auto">
                                                                            <label for="inputtext6"
                                                                                class="col-form-label">NCC</label>
                                                                        </div>
                                                                        <div class="col-auto">
                                                                            <input type="text" id="inputtext6"
                                                                                class="form-control"
                                                                                aria-labelledby="textHelp"
                                                                                value="{{ $viewData['product']->getSupplier() }}" />
                                                                        </div>

                                                                        {{-- <div
            class="row g-3 align-items-center"
        >
            <div class="col-auto">
                <label
                    for="type"
                    class="col-form-label"
                    >Loại</label
                >
            </div>
            <div class="col-auto">
               <select name="type" id="type">
                   @foreach ($viewData['productType'] as $type)
                   <option value="{{$type->getId()}}">{{$type->getName()}}</option>
                   @endforeach
               </select>
            </div> --}}

                                                                        {{-- <div
            class="row g-3 align-items-center"
        >
            <div class="col-auto">
                <label
                    for="inputtext6"
                    class="col-form-label"
                    >loai</label
                >
            </div>
            <div class="col-auto">
                <input
                    type="text"
                    id="inputtext6"
                    class="form-control"
                    aria-labelledby="textHelp"
                    value="{{$viewData['product']->getProTypeId()}}"
                />
            </div> --}}
                                                                        <div class="row g-3 align-items-center">
                                                                            <div class="col-auto">
                                                                                <label for="type"
                                                                                    class="col-form-label">Loai</label>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <select name="type" id="type">

                                                                                    @foreach ($viewData['productType'] as $type)
                                                                                        <option
                                                                                            @if ($viewData['product']->getProTypeId() === $type->getId()) selected @endif
                                                                                            value="{{ $type->getId() }}">
                                                                                            {{ $type->getName() }} </option>
                                                                                    @endforeach


                                                                                </select>
                                                                            </div>
                                                                            <div class="row g-3 align-items-center">
                                                                                <div class="col-auto">
                                                                                    <label for="inputtext6"
                                                                                        class="col-form-label">BestSeller</label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <input type="text" id="inputtext6"
                                                                                        class="form-control"
                                                                                        aria-labelledby="textHelp"
                                                                                        value="{{ $viewData['product']->getIsBestSeller() }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row g-3 align-items-center">
                                                                                <div class="col-auto">
                                                                                    <label for="inputtext6"
                                                                                        class="col-form-label">Giá</label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <input type="text" id="inputtext6"
                                                                                        class="form-control"
                                                                                        aria-labelledby="textHelp"
                                                                                        value="{{ $viewData['product']->getPrice() }}" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="row g-3 align-items-center">
                                                                                <div class="col-auto">
                                                                                    <label for="inputtext6"
                                                                                        class="col-form-label">Hình
                                                                                        ảnh</label>
                                                                                </div>
                                                                                <div class="col-auto">
                                                                                    <input type="file" id="inputtext6"
                                                                                        class="form-control"
                                                                                        aria-labelledby="textHelp"
                                                                                        value="{{ $viewData['product']->getImage() }}" />
                                                                                </div>

                                                                                <div class="row g-3 align-items-center">
                                                                                    <div class="col-auto">
                                                                                        <label for="inputtext6"
                                                                                            class="col-form-label">dvt</label>
                                                                                    </div>
                                                                                    <div class="col-auto">
                                                                                        <input type="text"
                                                                                            id="inputtext6"
                                                                                            class="form-control"
                                                                                            aria-labelledby="textHelp"
                                                                                            value="{{ $viewData['product']->getUnit() }}" />
                                                                                    </div>
                                                                                    <div class="">
                                                                                        <span id="textHelp"
                                                                                            class="form-text">
                                                                                        </span>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="row g-3 align-items-center">
                                                                                    <div class="col-auto">
                                                                                        <label for="inputtext6"
                                                                                            class="col-form-label">Mô
                                                                                            Tả</label>
                                                                                    </div>
                                                                                    <div class="col-auto">
                                                                                        <textarea type="text" row="3" class="form-control" value="{{ $viewData['product']->getDescription() }}">
       </textarea>
                                                                                    </div>
                                                                                </div>



                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-bs-dismiss="modal">
                                                                                        Close
                                                                                    </button>
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">
                                                                                        Save changes
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>


                                        <th scope="col">Mã SP</th>
                                        <th scope="col">Tên Sp</th>
                                        <th scope="col">DVT</th>
                                        <th scope="col">Tồn kho</th>
                                        <th scope="col">HSD</th>
                                        <th scope="col">NCC</th>
                                        <th scope="col">Loại</th>
                                        <th scope="col">Giá</th>


                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Best Seller</th>


                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody
                                    @foreach ($viewData['product'] as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                               
                                <td>{{ $product->pro_id }}</td>
                                <td>{{ $product->pro_name }}</td>
                                <td>{{ $product->unit }}</td>
                                <td>{{ $product->quantity }}</td>
                                
                                <td>{{ $product->date }}</td>
                                <td>{{ $product->supplier }}</td>
                                <td> @foreach ($viewData['productType'] as $productType)
                                    @if ($productType->getId() == $product->getProTypeId())
                                    <p value="{{ $productType->getId() }}">{{ $productType->getName() }}</p>
                                    @endif @endforeach</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->image }}</td>
                                    <td>{{ $product->isBestSeller }}</td>


                                    <td>
                                        <!-- Button trigger modal -->
                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="bi-pencil"></i> </a>

                                    </td>
                                    <td>
                                        <form action="{{ route('admin.product.delete', $product->getId()) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">
                                                <i class="bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    </tr>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Thêm Hàng Hóa
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.product.store') }}">

                        @csrf

                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputtext6" class="col-form-label">MÃ SP</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="inputtext6" class="form-control" aria-labelledby="textHelp"
                                    value="{{ old('pro_id') }}" />
                            </div>


                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <label for="inputtext6" class="col-form-label">Tên SP</label>
                                </div>
                                <div class="col-auto">
                                    <input type="text" id="inputtext6" class="form-control"
                                        aria-labelledby="textHelp" value="{{ old('pro_name') }}" />
                                </div>

                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <label for="inputtext6" class="col-form-label">Tồn Kho</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputtext6" class="form-control"
                                            aria-labelledby="textHelp" value="{{ old('quantity') }}" />
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto">
                                            <label for="inputtext6" class="col-form-label">date</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="date" id="inputtext6" class="form-control"
                                                aria-labelledby="textHelp" value="{{ old('date') }}" />
                                        </div>


                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <label for="inputtext6" class="col-form-label">supplier</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="text" id="inputtext6" class="form-control"
                                                    aria-labelledby="textHelp" value="{{ old('supplier') }}" />
                                            </div>

                                            {{-- <div
         class="row g-3 align-items-center"
     >
         <div class="col-auto">
             <label
                 for="type"
                 class="col-form-label"
                 >Loại</label
             >
         </div>
         <div class="col-auto">
            <select name="type" id="type">
                @foreach ($viewData['productType'] as $type)
                <option value="{{ $type->getId() }}">{{ $type->getName()}}</option>
                @endforeach 
            </select>
         </div> --}}

                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="inputtext6" class="col-form-label">loai</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="text" id="inputtext6" class="form-control"
                                                        aria-labelledby="textHelp" value="{{ old('pro_type_id') }}" />
                                                </div>
                                                <div class="row g-3 align-items-center">
                                                    <div class="col-auto">
                                                        <label for="type" class="col-form-label">BestSeller</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <select name="type" id="type">

                                                            <option value="{{ old('isBestSeller') }}">0</option>
                                                            <option value="{{ old('isBestSeller') }}">1</option>


                                                        </select>
                                                    </div>


                                                    <div class="row g-3 align-items-center">
                                                        <div class="col-auto">
                                                            <label for="inputtext6" class="col-form-label">Giá</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <input type="text" id="inputtext6" class="form-control"
                                                                aria-labelledby="textHelp" value="{{ old('price') }}" />
                                                        </div>
                                                    </div>

                                                    <div class="row g-3 align-items-center">
                                                        <div class="col-auto">
                                                            <label for="inputtext6" class="col-form-label">Hình
                                                                ảnh</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <input type="file" id="inputtext6" class="form-control"
                                                                aria-labelledby="textHelp" value="{{ old('image') }}" />
                                                        </div>

                                                        <div class="row g-3 align-items-center">
                                                            <div class="col-auto">
                                                                <label for="inputtext6"
                                                                    class="col-form-label">unit</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <input type="text" id="inputtext6"
                                                                    class="form-control" aria-labelledby="textHelp"
                                                                    value="{{ old('unit') }}" />
                                                            </div>
                                                            <div class="">
                                                                <span id="textHelp" class="form-text">
                                                                </span>
                                                            </div>
                                                        </div>


                                                        <div class="row g-3 align-items-center">
                                                            <div class="col-auto">
                                                                <label for="inputtext6" class="col-form-label">Mô
                                                                    Tả</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <textarea type="text" row="3" class="form-control" value="{{ old('hsd') }}">
    </textarea>
                                                            </div>
                                                        </div>



                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                Save changes
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    </form>
                @endsection
