  
@extends('layouts.main')

@section('title', 'Cập nhật sản phẩm')

@section('content')    
    <div class="row">
        <div class="col-6 offset-3">
            <h3 class="text-center text-info">Cập nhật sản phẩm</h3>
            <form action="{{ BASE_URL . 'save-edit-pro'}}" method="post">
                <input type="hidden" value="{{$model->id}}" name="id">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="name" 
                        value="{{$model->name}}"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" 
                        value="{{$model->image}}"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="text" name="price" 
                        value="{{$model->price}}"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="short_desc" 
                        value="{{$model->short_desc}}"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Chi tiết sản phẩm</label>
                    <input type="text" name="detail" 
                        value="{{$model->detail}}"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="desc" class="form-control" rows="5">{{$model->desc}}</textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-success" type="submit">Lưu</button>
                    <a href="{{BASE_URL}}" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </form>
        </div>
    </div>
@endsection