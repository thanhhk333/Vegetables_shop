@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">
                    Quản Lý Khách Hàng
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
                                        <th scope="col">Mã KH</th>
                                        <th scope="col">Tên KH</th>
                                        <th scope="col">Loại KH</th>
                                        <th scope="col">SDT</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viewData['customer'] as $customer)
                                        <tr>
                                            <th scope="row">{{ $customer->getId() }}</th>
                                            <td>{{ $customer->getCustomerId() }}</td>

                                            <td>{{ $customer->getName() }}</td>
                                            <td>{{ $customer->getType() }}</td>
                                            <td>{{ $customer->getPhone() }}</td>


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
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                        Thêm Khách Hàng
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.customer.store') }}">
                        @csrf

                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputtext6" class="col-form-label">MÃ KH</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="inputtext6" class="form-control" aria-labelledby="textHelp"
                                    value="{{ old('customer_id') }}" />
                            </div>
                            <div class="">
                                <span id="textHelp" class="form-text">
                                </span>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputtext6" class="col-form-label">Tên KH</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="inputtext6" class="form-control" aria-labelledby="textHelp"
                                    value="{{ old('name') }}" />
                            </div>
                            <div class="">
                                <span id="textHelp" class="form-text">
                                </span>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputtext6" class="col-form-label">Loại KH</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="inputtext6" class="form-control" aria-labelledby="textHelp"
                                    value="{{ old('type') }}" />
                            </div>
                            <div class="">
                                <span id="textHelp" class="form-text">
                                </span>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputtext6" class="col-form-label">SDT</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="inputtext6" class="form-control" aria-labelledby="textHelp"
                                    value="{{ old('phone') }}" />
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
