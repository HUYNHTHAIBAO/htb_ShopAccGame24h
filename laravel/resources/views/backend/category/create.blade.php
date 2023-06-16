@extends('backend.layouts.index')
@section('content')
    <div class="container-fluid">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Thêm mới</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">{{Breadcrumbs::render('backend.category.create')}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{asset('backend')}}/assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="widget-content searchable-container list">
            <div class="card card-body">
                <form action="{{route('backend.category.store')}}"  method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group mb-3">
                            <label class="form-label" for="slug">Tên danh mục</label>
                            <input type="text" class="form-control" name="title"  aria-describedby="name" placeholder="Nhập tên danh mục" id="slug" onkeyup="ChangeToSlug()">
                        </div>
                    <div class="form-group mb-3">
                            <label class="form-label" for="convert_slug">Url tên danh mục</label>
                            <input type="text" class="form-control" name="slug" id="convert_slug" aria-describedby="name" placeholder="Nhập url danh mục" >
                        </div>
                    <div class="form-group mb-3">
                        <label for="formFile" class="form-label">Hình ảnh</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Mô tả</label>
                        <textarea class="form-control" name="description" rows="5" style="height: 80px;" placeholder="Nhập mô tả"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label form-label">Hiển thị</label>
                        <select class="form-control form-select" name="status" data-placeholder="Choose a Category" tabindex="1">
                            <option selected>Chọn</option>
                            <option value="1">Hiển thị</option>
                            <option value="0">Không hiển thị</option>
                        </select>
                    </div>
                    <button type="submit" class="btn waves-effect waves-light btn-primary">
                        Thêm
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
