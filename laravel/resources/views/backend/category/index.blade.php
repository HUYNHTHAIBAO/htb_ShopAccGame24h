@extends('backend.layouts.index')
@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Danh mục game</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
{{--                                <li class="breadcrumb-item"><a class="text-muted" href="index.html">Dashboard</a></li>--}}
                                <li class="breadcrumb-item" aria-current="page">{{Breadcrumbs::render('backend.category.index')}}</li>

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
            <!-- --------------------- start Contact ---------------- -->
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Tìm kiếm...">
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">

                        <a href="{{route('backend.category.create')}}" id="btn-add-contact" class="btn btn-primary d-flex align-items-center">
                            <i class="ti ti-plus"></i>   Thêm mới
                        </a>
                    </div>
                </div>
            </div>
            <!-- ---------------------
                            end Contact
                        ---------------- -->
            <div class="card card-body">
                {{--            // thông báo khi thêm thành công--}}
                @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table search-table align-middle text-nowrap">
                        <thead class="header-item">
                        <tr>
                            <th>Id</th>
                            <th>Tên danh mục</th>
                            <th>Url tên danh mục</th>
                            <th>Hình ảnh</th>
                            <th>Mô tả</th>
                            <th>Hiển thị</th>
                            <th>Hành động</th>
                        </tr></thead>
                        <tbody>
                        <!-- start row -->
                        @foreach($category as $key => $cate)
                        <tr class="search-items">

                            <td>
                                <span class="usr-email-addr" >{{$key += 1}}</span>
                            </td>
                            <td>
                                <span class="usr-email-addr" >{{$cate->title}}</span>
                            </td>
                            <td>
                                <span class="usr-location" >{{$cate->slug}}</span>
                            </td>
                            <td>
                                <span class="usr-location" >
                                    <img src="{{asset('uploads/category/' .$cate->image)}}" alt="" width="100px" height="100px" style="object-fit: contain">
                                </span>
                            </td>
                            <td>
                                <span class="usr-location">{{$cate->description}}</span>
                            </td>
                            <td>
                                @if($cate->status == 1)
                                    <span class="mb-1 badge font-medium bg-light-secondary text-success">Hiển thị</span>
                                @elseif($cate->status == 0)
                                    <span class="mb-1 badge font-medium bg-light-secondary text-danger">Không hiển thị</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-btn">
                                    <a href="{{route('backend.category.edit', $cate->id)}}" class="text-warning edit" data-bs-toggle="tooltip" data-bs-placement="top" title="Cập nhật">
                                        <i class="ti ti-edit fs-5"></i>
                                    </a>
                                    <a href="{{route('backend.category.destroy', $cate->id)}}" class="text-danger delete ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Xóa">
                                        <i class="ti ti-trash fs-5"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <!-- end row -->
                        </tbody>
                    </table>
{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination">--}}
{{--                            {{$category->links()}}--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
