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