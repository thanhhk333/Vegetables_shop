@extends('layouts.admin')
@section('content')


        <form method="PUT" action="{{route('admin.product.update', ['id' => $viewData['product']->getId()])}}"enctype="multipart/form-data">
           
            @csrf
            @method('PUT')
          
        <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="inputtext6"
                class="col-form-label"
                >MÃ SP</label
            >
        </div>
        <div class="col-auto">
            <input
                type="text"
                id="inputtext6"
                class="form-control"
                aria-labelledby="textHelp"
                value="{{$viewData['product']->getMaSp()}}"
            />
        </div>
        
       
    <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="inputtext6"
                class="col-form-label"
                >Tên SP</label
            >
        </div>
        <div class="col-auto">
            <input
                type="text"
                id="inputtext6"
                class="form-control"
                aria-labelledby="textHelp"
                value="{{$viewData['product']->getTenSp()}}"
            />
        </div>
       
    <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="inputtext6"
                class="col-form-label"
                >Tồn Kho</label
            >
        </div>
        <div class="col-auto">
            <input
                type="text"
                id="inputtext6"
                class="form-control"
                aria-labelledby="textHelp"
                value="{{$viewData['product']->getTonKho()}}"
            />
        </div>
       
    <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="inputtext6"
                class="col-form-label"
                >HSD</label
            >
        </div>
        <div class="col-auto">
            <input
                type="date"
                id="inputtext6"
                class="form-control"
                aria-labelledby="textHelp"
                value="{{$viewData['product']->getHsd()}}"
            />
        </div>
       
    
    <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="inputtext6"
                class="col-form-label"
                >NCC</label
            >
        </div>
        <div class="col-auto">
            <input
                type="text"
                id="inputtext6"
                class="form-control"
                aria-labelledby="textHelp"
                value="{{$viewData['product']->getNcc()}}"
            />
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
               @foreach($viewData['productType'] as $type)
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
        <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="type"
                class="col-form-label"
                >Loai</label
            >
        </div>
        <div class="col-auto">
           <select name="type" id="type">
            
             @foreach($viewData['productType'] as $type)
               <option @if($viewData['product']->getProTypeId() === $type->getId()) selected 
                    @endif value="{{$type->getId()}}">  {{$type->getName()}} </option>
               @endforeach

       
           </select>
        </div>
        <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="inputtext6"
                class="col-form-label"
                >BestSeller</label
            >
        </div>
        <div class="col-auto">
            <input
                type="text"
                id="inputtext6"
                class="form-control"
                aria-labelledby="textHelp"
                value="{{$viewData['product']->getIsBestSeller()}}"
            />
        </div>
    </div>

    <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="inputtext6"
                class="col-form-label"
                >Giá</label
            >
        </div>
        <div class="col-auto">
            <input
                type="text"
                id="inputtext6"
                class="form-control"
                aria-labelledby="textHelp"
                value="{{$viewData['product']->getGiaSp()}}"
            />
        </div>
    </div>
       
    <div
        class="row g-3 align-items-center"
    >
        <div class="col-auto">
            <label
                for="inputtext6"
                class="col-form-label"
                >Hình ảnh</label
            >
        </div>
        <div class="col-auto">
            <input
                type="file"
                id="inputtext6"
                class="form-control"
                aria-labelledby="textHelp"
                value="{{$viewData['product']->getHinhAnh()}}"
            />
        </div>
        
    <div
    class="row g-3 align-items-center"
>
    <div class="col-auto">
        <label
            for="inputtext6"
            class="col-form-label"
            >dvt</label
        >
    </div>
    <div class="col-auto">
        <input
            type="text"
            id="inputtext6"
            class="form-control"
            aria-labelledby="textHelp"
            value="{{$viewData['product']->getDvt()}}"
        />
    </div>
    <div class="">
        <span
            id="textHelp"
            class="form-text"
        >
        </span>
    </div>
</div>


<div
class="row g-3 align-items-center"
>
<div class="col-auto">
   <label
       for="inputtext6"
       class="col-form-label"
       >Mô Tả</label
   >
</div>
<div class="col-auto">
   <textarea
       type="text" 
       row = "3"
       class="form-control"
       value="{{$viewData['product']->getMoTa()}}"
   >
   </textarea>
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
</div>
</form>
       

@endsection
