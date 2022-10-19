<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <button>
            <a href="{{route('user.add')}}">Them</a>
        </button>
        <table class="table">
            <tr>
                <thead>
                    <th>ID</th>
                    <th>TEN</th>
                    <th>NGAY SINH</th>
                    <th>DIA CHI</th>
                    <th>ACTION</th>
                </thead>
            </tr>
            @foreach ($user as $item)
                <tr>
                    <tbody>
                        <td>{{$item->id}}</td>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->birthday}}</td>
                        <td>{{$item->address}}</td>
                        <td>
                            <a href="{{route('user.edit',['id'=>$item->id])}}">Sua</a>
                            <a href="">Xoa</a>
                        </td>
                    </tbody>
                </tr>
            @endforeach
        </table>

    </div>
</body>
</html>