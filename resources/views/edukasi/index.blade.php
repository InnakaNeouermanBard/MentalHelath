<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="col">
                <button class="btn btn-success">Refresh</button>
                <a class="btn btn-primary" href="{{ route('edukasi.create') }}">Add</a>
            </div>
            <div class="col">
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul Edukasi</th>
                    <th>Isi Edukasi</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($edukasi as $edu)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $edu->name }}</td>
                <td>{{ $edu->isi_edukasi }}</td>
                <td><img src="{{ asset('storage/' . $edu->image) }}" alt="{{ $edu->name }}" style="max-width: 100px;"></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('news.edit', $edu->id) }}">Edit</a>
                    <form method="POST" action="{{ route('news.destroy', $newss->id) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>