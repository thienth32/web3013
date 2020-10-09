@extends('layouts.main')
<<<<<<< HEAD
@section('title', 'Tạo mới danh mục')
@section('content')
    

<form action="{{BASE_URL . 'save-add-cate'}}" method="POST">
<div class="form-group">
    <label for="">Tên danh mục</label>
    <input type="text" name="cate_name" class="form-control">
</div>
<div class="form-check form-check-inline">
    <input type="checkbox" value="1" id="show_menu" class="form-check-input" name="show_menu">
    <label for="show_menu" class="form-check-label"></label>
</div>
</form>
=======

@section('title', 'Tạo mới danh mục')

@section('content')    
    <div class="row">
        <div class="col-6 offset-3">
            <h3 class="text-center text-info">Tạo mới danh mục</h3>
            <form action="{{ BASE_URL . 'save-add-cate'}}" method="post">
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="cate_name" class="form-control">
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="show_menu" 
                            type="checkbox" value="1" id="show_menu">
                    <label class="form-check-label" for="show_menu">Hiển thị tại menu</label>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="desc" class="form-control" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-success" type="submit">Lưu</button>
                    <a href="{{BASE_URL}}" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </form>
        </div>
    </div>
>>>>>>> f1f73647d957017185656cc1c499bc3186773560
@endsection