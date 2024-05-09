@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">
                Loại Sản Phẩm
            </h5>
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row"> 
                            <div class="col-6 offset-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="ID or UserName" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Tìm Kiếm</button>
                                  </div>
                                </div>
                           
                        <div class="col-3 text-end">
                           
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                  </svg>  Thêm
                            </button>
                        </div>
                    </div>


                        <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                               
                                <th scope="col">Tên Loại SP</th>
                               
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($viewData['user'] as $user)
                              <tr>
                                <th scope="row">{{$user->getId()}}</th>
                                <td>{{$user->getName()}}</td>
                                <td>{{$user->getEmail()}}</td>
                                <td>{{$user->getPassword()}}</td>
                                <td>{{$user->getRole()}}</td>

                              
                                <td class="">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <form action="{{route('admin.user.delete', $user->getId())}}">
                                        @csrf
                                        @METHOD('DELETE')
                                        <button class="btn btn-danger">
                                            <i class=" bi-trash"></i>
                                        </button>
                                    </form>
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
 <div
 class="modal fade "
 id="exampleModal"
 tabindex="-1"
 aria-labelledby="exampleModalLabel"
 aria-hidden="true"
>
 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
     <div
         class="modal-content"
     >
         <div
             class="modal-header"
         >
             <h1
                 class="modal-title fs-5"
                 id="exampleModalLabel"
             >
                 Thêm USER
             </h1>
             <button
                 type="button"
                 class="btn-close"
                 data-bs-dismiss="modal"
                 aria-label="Close"
             ></button>
         </div>
         <div
             class="modal-body"
         >

         <form action="{{route('admin.user.store')}}">
            @csrf
        
     <div
         class="row g-3 align-items-center"
     >
         <div class="col-auto">
             <label
                 for="inputPassword6"
                 class="col-form-label"
                 >Ten USer</label
             >
         </div>
         <div class="col-auto">
             <input
                 type="text"
                 id="inputPassword6"
                 class="form-control"
                 aria-labelledby="passwordHelp"
                 value="{{old('name')}}"
             />
         </div>
         
         </div>
         <div
         class="row g-3 align-items-center"
     >
         <div class="col-auto">
             <label
                 for="inputPassword6"
                 class="col-form-label"
                 >Email</label
             >
         </div>
         <div class="col-auto">
             <input
                 type="text"
                 id="inputPassword6"
                 class="form-control"
                 aria-labelledby="passwordHelp"
                 value="{{old('email')}}"
             />
         </div>
         
         </div>
         <div
         class="row g-3 align-items-center"
     >
         <div class="col-auto">
             <label
                 for="inputPassword6"
                 class="col-form-label"
                 >Password</label
             >
         </div>
         <div class="col-auto">
             <input
                 type="text"
                 id="inputPassword6"
                 class="form-control"
                 aria-labelledby="passwordHelp"
                 value="{{old('password')}}"
             />
         </div>
         
         </div>
         <div
         class="row g-3 align-items-center"
     >
         <div class="col-auto">
             <label
                 for="inputPassword6"
                 class="col-form-label"
                 >Role</label
             >
         </div>
         <div class="col-auto">
             <input
                 type="text"
                 id="inputPassword6"
                 class="form-control"
                 aria-labelledby="passwordHelp"
                 value="{{old('role')}}"
             />
         </div>
         
         </div>
         <div
             class="modal-footer"
         >
             <button
                 type="button"
                 class="btn btn-secondary"
                 data-bs-dismiss="modal"
             >
                 Close
             </button>
             <button
                 type="submit"
                 class="btn btn-primary"
             >
                 Save changes
             </button>
         </div>
     </div>
    </form>
 </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection