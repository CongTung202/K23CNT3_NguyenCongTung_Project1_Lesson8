<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Subject</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-3">
        <h1>Them Moi Mon Hoc</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('congtung.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="CTMAMH" class="form-label">Mã MH</label>
                <input type="text" id="CTMAMH" class="form-control" name="CTMAMH" required maxlength="2">
            </div>
            <div class="mb-3">
                <label for="CTTENMH" class="form-label">Tên MH</label>
                <input type="text" id="CTTENMH" class="form-control" name="CTTENMH" required maxlength="50">
            </div>
            <div class="mb-3">
                <label for="CTSOTIET" class="form-label">Số Tiết</label>
                <input type="number" id="CTSOTIET" class="form-control" name="CTSOTIET" required min="1" max=" 255">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/home" class="btn btn-success">Back</a>
        </form>
    </div>
</body>
</html>