<table>
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>image</th>
    <th>price</th>
    <th>short_desc</th>
    <th><a href="add-cate">Add</th>
</thead>
<tbody>
    @foreach ($cates as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->image}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->short_desc}}</td>
        <td><a href="remove-cate?id={{$item->id}}">Remove</td>
           <td> <a href="edit-cate?id={{$item->id}}">Edit</td>
    </tr>
    @endforeach
</tbody>
</table>
