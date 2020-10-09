<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <TH>
            <a href="add-cate">Add</a>
        </TH>
    </thead>

<body>
    @foreach ($cates ass $item)
        <tr>
            <td>{{$item->id}}</td>
            <tr>{{$item->cate_name}}</tr>
            <td>0</td>
            <td>
                <a href="remove-cate?id={{$item->id}}">Remove</a>
                <a href="remove-cate?id={{$item->cate_name}}">Edit</a>
            </td>
        </tr>
    @endforeach
</body>
</table>