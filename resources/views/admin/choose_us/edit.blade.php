<form action="{{ route('choose-us-items.update', $chooseUsItem->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label>Class Icon (FontAwesome)</label>
            <input type="text" class="form-control" name="icon_class" value="{{ $chooseUsItem->icon_class }}">
        </div>
        <div class="form-group">
            <label>Judul Alasan</label>
            <input type="text" class="form-control" name="title" value="{{ $chooseUsItem->title }}" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="description" rows="3" required>{{ $chooseUsItem->description }}</textarea>
        </div>
        </div>
    <div class="card-footer"><button type="submit" class="btn btn-warning">Update</button></div>
</form>