<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">   
    <title>CT-DSMonHoc</title>
</head>
<body>
    
    <section class="container border my-3">
        
        <h1>Danh Sach Mon Hoc</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Ma Mon Hoc</th>
                <th>Ten Mon Hoc</th>
                <th>So Tiet</th>
                <th>Chuc Nang</th>
            </tr>
        </thead>
        <tbody>
            @php
             $stt=0;   
            @endphp
            @foreach ($monhoc as $item)
                @php
                $stt ++;
                @endphp
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item->CTMAMH}}</td>
                    <TD>{{$item->CTTENMH}}</TD>
                    <td>{{$item->CTSOTIET}}</td>
                    <td>
                        <a href="/detail/{{$item->CTMAMH}}" class="btn btn-success">Chi tiết</a>
                            <a href="/edit/{{$item->CTMAMH}}" class="btn btn-primary">Sửa</a>
                            <a href="{{ route('congtung.delete', $item->CTMAMH) }}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
        </table><a href="/create" class="btn btn-primary sm-3">Them Moi</a>
    </section>
</body>
</html>