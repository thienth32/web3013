
@extends('layouts.main')

@section('title', 'Tạo mới sản phẩm')

@section('content')    
    <div class="row">
        <div class="col-6 offset-3">
            <h3 class="text-center text-info">Tạo mới sản phẩm</h3>
            <form action="{{ BASE_URL . 'save-add-pro'}}" method="post">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="short_desc" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Chi tiết sản phẩm</label>
                    <input type="text" name="detail" class="form-control">
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-success" type="submit">Lưu</button>
                    <a href="{{BASE_URL}}" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </form>
        </div>
    </div>
@endsection