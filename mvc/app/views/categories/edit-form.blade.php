@extends('layouts.main')

@section('title', 'Cập nhật danh mục')

@section('content')    
    <div class="row">
        <div class="col-6 offset-3">
            <h3 class="text-center text-info">Cập nhật danh mục</h3>
            <form action="{{ BASE_URL . 'save-edit-cate'}}" method="post">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="cate_name" 
                        value="{{$model->cate_name}}"
                        class="form-control">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="show_menu" 
                            @if($model->show_menu == 1)
                                checked
                            @endif
                            type="checkbox" value="1" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị tại menu</label>
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