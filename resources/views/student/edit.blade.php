<form action="{{ route('update', $student->id) }}" method="post">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ $student->name }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" name="address" value="{{ $student->address }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Telp</label>
    <input type="text" class="form-control" name="telp" value="{{ $student->telp }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>