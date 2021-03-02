<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">link</th>
        <th scope="col">icone</th>
        <th scope="col">edit</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($nav as $item)
        <tr>
            <td>{{$item->link}}</td>
            <td>{{$item->icone}}</td>
            <td><a href="/edit-social/{{$item->id}}" class="btn btn-primary">Edit</a></td>
            <td>
              <form action="/delete-social/{{$item->id}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Supprimer</button>
              </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  <form action="/social-store" method="POST" class="mt-5">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Link</label>
      <input type="text" name="link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Icone</label>
      <input type="text" name="icone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>