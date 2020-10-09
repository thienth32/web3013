<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Total</th>
            <th>
                <a href="add-cate">Add</a>
            </th>
        </thead>
        <tbody>
            @foreach ($cates as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->cate_name}}</td>
                <td>{{ count($item->products)}}</td>
                <td>
                    <a href="remove-cate?id={{$item->id}}">Remove</a>
                </td>
                <td>
                    <a href="edit-cate?id={{$item->id}}">Edit</a>
                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
</body>
</html>
=======
@extends('layouts.main')
@section('title', 'Danh sách danh mục')
@section('content')
<table class="table table-hover">
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Total Product</th>
    <th>
        <a class="btn btn-sm btn-success" href="{{BASE_URL . 'add-cate'}}">Add</a>
    </th>
</thead>
<tbody>
    @foreach ($cates as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->cate_name}}</td>
            <td>0</td>
            <td>
                <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-cate?id=' . $item->id}}')" href="javascript:;">Remove</a>
                <a class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-cate?id=' . $item->id}}">Edit</a>
            </td>
        </tr>
    @endforeach
</tbody>

</table>
@endsection
@section('js')
<script>
    function confirmRemove(removeurl){
        alertify.confirm(
            'Thông báo', 
            'Bạn chắc chắn muốn xóa danh mục này ?', 
            function(){ 
                window.location.href = removeurl;
            }, 
            function(){ 
                alertify.confirm().close(); 
            }
        );
    }

    

</script>
@endsection
>>>>>>> 8a97da65b56c0a07341fe95ca7d19e4f3a279942
