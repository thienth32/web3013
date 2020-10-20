@extends('layouts.main')
@section('title', 'Danh sách tài khoản')
    
@section('content')
<h3>Danh sách tài khoản</h3>    
<table class="table table-hover">
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Avatar</th>
    <th>Email</th>

    <th>
        <a class="btn btn-sm btn-success" href="{{BASE_URL . 'add-user'}}">Add</a>
    </th>
</thead>
<tbody>
    @foreach ($users as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->avatar}}</td>
            <td>{{$item->email}}</td>
            <td>
                <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-user?id=' . $item->id}}')" href="javascript:;">Remove</a>
                <a class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-user?id=' . $item->id}}">Edit</a>
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
            'Bạn chắc chắn muốn xóa sản phẩm này ?', 
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
