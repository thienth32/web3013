@extends('layouts.main')
@section('title', 'Danh sách danh mục')
@section('content')
<div class="row">
    <div class="col-4">
        <div class="form-group">
            <label for="">Tìm kiếm</label>
            <input type="text" id="search" class="form-control">
        </div>
    </div>
</div>
<ul id="result">

</ul>
<table class="table table-hover">
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Total Product</th>
    <th>Show menu</th>
    <th>
        <a class="btn btn-sm btn-success" href="{{BASE_URL . 'add-cate'}}">Add</a>
    </th>
</thead>
<tbody>
    @foreach ($cates as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->cate_name}}</td>
            <td>{{ count($item->products) }}</td>
            <td>{{ $item->show_menu == 1 ? "yes" : "no" }}</td>
            <td>
                <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-cate?id=' . $item->id}}')" href="javascript:;">Remove</a>
                <a class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-cate?id=' . $item->id}}">Edit</a>
            </td>
        </tr>
    @endforeach
</tbody>

</table>
<input type="hidden" id="search-category-url" value="{{BASE_URL . 'api/search-cate'}}">
@endsection
@section('js')
<script>
    $('#search').keyup(function(){
        const requestData = {
            keyword: $(this).val()
        };
        $.ajax({
            url: $('#search-category-url').val(),
            method: 'POST',
            data: requestData,
            dataType: 'html',
            success: function(response){
                $('tbody').empty();
                $('tbody').html(response);
            }
        });
    })
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