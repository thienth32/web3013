@extends('layouts.main')

@section('title', 'Tạo mới tài khoản')

@section('content')    
    <div class="row">
        <div class="col-6 offset-3">
            <h3 class="text-center text-info">Tạo mới tài khoản</h3>
            <form action="{{ BASE_URL . 'save-add-user'}}" method="post">
                <div class="form-group">
                    <label for="">Tên tài khoản</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Ảnh đại diện</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <textarea name="email" class="form-control" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-sm btn-success" type="submit">Lưu</button>
                    <a href="{{BASE_URL}}" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </form>
        </div>
    </div>
@endsection