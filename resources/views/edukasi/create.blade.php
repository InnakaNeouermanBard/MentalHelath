<form action="{{ route('edukasi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Judul Edukasi:</label>
    <input type="text" name="name" required>
    <label for="name">Isi Edukasi:</label>
    <input type="text" name="name" required>
    <label for="image">Gambar Edukasi:</label>
    <input type="file" name="image" accept="image/*">
    <button type="submit">Save</button>
</form>
