 @extends('layouts.main')
@section('title', 'Danh sách sản phẩm')
    
@section('content')
<h3>Danh sách sản phẩm</h3>    
<table class="table table-hover">
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Image Product</th>
    <th>Price</th>
    <th>Short Desc</th>
    <th>Detail</th>

    <th>
        <a class="btn btn-sm btn-success" href="{{BASE_URL . 'add-pro'}}">Add</a>
    </th>
</thead>
<tbody>
    @foreach ($pros as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->image}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->short_desc }}</td>
            <td>{{$item->detail}}</td>

            <td>
                <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-pro?id=' . $item->id}}')" href="javascript:;">Remove</a>
                <a class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-pro?id=' . $item->id}}">Edit</a>
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
