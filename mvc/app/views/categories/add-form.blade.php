@extends('layouts.main')
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
@endsection