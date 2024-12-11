<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Update Mon Hoc</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('congtung.edit', $monhoc->CTMAMH) }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="CTMAMH">Mã MH</label>
                        <input type="text" id="CTMAMH" class="form-control-plaintext" 
                               name="CTMAMH" value="{{ $monhoc->CTMAMH }}" readonly>
                    </div>
                    <div class="row mb-3">
                        <label for="CTTENMH">Tên MH</label>
                        <input type="text" id="CTTENMH" class="form-control" 
                               name="CTTENMH" value="{{ $monhoc->CTTENMH }}">
                    </div>
                    <div class="row mb-3">
                        <label for="CTSOTIET">Số Tiết</label>
                        <input type="text" id="CTSOTIET" class="form-control" 
                               name="CTSOTIET" value="{{ $monhoc->CTSOTIET }}">
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="/home" class="btn btn-success">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>