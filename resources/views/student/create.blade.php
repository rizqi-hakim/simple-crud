<form method="POST" action="{{ route('store') }}">
  @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" name="address">
  </div>
  <div class="mb-3">
    <label class="form-label">Telp</label>
    <input type="text" class="form-control" name="telp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>