<form action="{{ route('choose-us-items.store') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label>Class Icon (FontAwesome)</label>
            <input type="text" class="form-control" name="icon_class" value="fa fa-star" placeholder="Contoh: fa fa-leaf">
        </div>
        <div class="form-group">
            <label>Judul Alasan</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="description" rows="3" required></textarea>
        </div>
        </div>
    <div class="card-footer"><button type="submit" class="btn btn-primary">Simpan</button></div>
</form>