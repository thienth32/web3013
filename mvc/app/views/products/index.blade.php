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
            <th>Giá</th>
            <th>Mô tả</th>
            <th>Chi tiết</th>
            <th>
                <a href="add-product">Add</a>
            </th>
        </thead>
        <tbody>
            @foreach ($pro as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->short_desc}}</td>
                <td>{{$item->detail}}</td>
                <td>
                    <a href="remove-product?id={{$item->id}}">Remove</a>
                </td>
                <td>
                    <a href="edit-product?id={{$item->id}}">Edit</a>
                </td>
            </tr>
            @endforeach
        
        </tbody>
    </table>
</body>
</html>
