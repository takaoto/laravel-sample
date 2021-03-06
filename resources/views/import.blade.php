<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Import CSV to database Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
        Laravel 8 Import CSV to database Example
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Device Data</button>
            </form>
        </div>
    </div>
    <div class="card bg-light mt-3">
        <div class="card-header">
        ファイルアップロードサンプル
        </div>
        <div class="card-body">
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="uploadFile" class="form-control" >
                <br>
                <button class="btn btn-success">Upload</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>