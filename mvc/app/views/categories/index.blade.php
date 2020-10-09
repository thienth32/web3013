<table>
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Total product</th>
    <th><a href="add-cate">Add</th>
</thead>
<tbody>
    @foreach ($cates as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->cate_name}}</td>
        <td>{{ count($item->products) }}</td>
        <td><a href="remove-cate?id={{$item->id}}">Remove</td>
           <td> <a href="edit-cate?id={{$item->id}}">Edit</td>
    </tr>
    @endforeach
</tbody>
</table>