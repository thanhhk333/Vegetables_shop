@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">
                    Quản Lý Hóa Đơn
                </h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-6 offset-3">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="ID or UserName"
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
                            </div>


                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Mã HD</th>
                                        <th scope="col">Mã NV</th>
                                        <th scope="col">Mã KH</th>
                                        <th scope="col">Tổng cộng</th>
                                        <th scope="col">Trạng Thái</th>
                                        <th scope="col">Ngày Tạo</th>
                                        <th scope="col">Loại HD</th>


                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viewData['invoice'] as $invoice)
                                        <tr>
                                            <th scope="row">{{ $invoice->getId() }}</th>
                                            <td>{{ $invoice->getInvoiceId() }}</td>
                                            <td>{{ $invoice->getStaffId() }}</td>
                                            <td>{{ $invoice->getCustomerId() }}</td>
                                            <td>{{ $invoice->getTotal() }}</td>
                                            <td>{{ $invoice->getCreated() }}</td>
                                            <td>{{ $invoice->getInvoiceType() }}</td>


                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagi d-flex justify-content-center mt-4">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Thêm Hóa Đơn
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.staff.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-6">
                                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                                        <li class="nav-item me-2">
                                            <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill"
                                                href="#tab-1">Tất Cả</a>
                                        </li>
                                        <li class="nav-item me-2">
                                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill"
                                                href="#tab-2">Bia </a>
                                        </li>
                                        <li class="nav-item me-0">
                                            <a class="btn btn-outline-primary border-2" data-bs-toggle="pill"
                                                href="#tab-3">Nước Ngọt</a>
                                        </li>
                                    </ul>
                                </div>

                                {{-- tab-content --}}
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <div class="row g-4">
                                            {{-- @foreach --}}
                                            @foreach ($viewData['product'] as $product)
                                                @if ($product->getProTypeId() == 1)
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('images/' . $product->getImage()) }}"
                                                            class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card title and make up the bulk of the card's content.</p>
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    <div id="tab-2" class="tab-pane fade show p-0">
                                        <div class="row g-4">
                                            {{-- @endforeach --}}
                                            @foreach ($viewData['product'] as $product)
                                                @if ($product->getProTypeId() == 2)
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('images/' . $product->getImage()) }}"
                                                            class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card title and make up the bulk of the card's content.</p>
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
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
                                            @foreach ($viewData['product'] as $product)
                                                @if ($product->getProTypeId() == 3)
                                                    <div class="card" style="width: 18rem;">
                                                        <img src="{{ asset('images/' . $product->getImage()) }}"
                                                            class="card-img-top">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card title and make up the bulk of the card's content.</p>
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            {{-- @endforeach --}}
                                        </div>
                                    </div>
                                </div>



                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
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

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
@endsection
