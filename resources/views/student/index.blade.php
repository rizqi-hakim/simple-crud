<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Simple CRUD</title>
  </head>
  <body>
    <a href="{{ route('create') }}" class="btn btn-primary">Add</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Address</th>
          <th scope="col">Telp</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($student as $key => $st)
          <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $st->name }}</td>
            <td>{{ $st->address }}</td>
            <td>{{ $st->telp }}</td>
            <td>
              <form action="{{ route('destroy', $st->id) }}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('edit', $st->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
          </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center">Data not available !</td>
        </tr>
        @endforelse
      </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>