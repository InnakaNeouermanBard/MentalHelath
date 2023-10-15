@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Judul Berita <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="judul_berita" value="{{ old('judul_berita') }}" />
            </div>
            <div class="mb-3">
                <label>Isi Berita <span class="text-danger">*</span></label>
                <textarea name="isi_berita" id="" class="form-control" cols="30" rows="10" value="{{ old('isi_berita') }}"></textarea>
                <input class="form-control" type="text" name="isi_berita" value="{{ old('isi_berita') }}" />
            </div>
            <div class="mb-3">
                <label>Lokasi</label>
                <input class="form-control" type="text" name="lokasi" value="{{ old('lokasi') }}" />
            </div>
            <div class="mb-3">
                <label>Tanggal</label>
                <input class="form-control" type="date" name="tanggal" value="{{ old('tanggal') }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Save</button>
                <a class="btn btn-danger" href="{{ route('news.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection