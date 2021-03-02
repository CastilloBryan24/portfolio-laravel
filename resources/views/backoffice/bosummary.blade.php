<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Description</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($summary as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->paragraph}}</td>
            <td><a href="/edit-summary/{{$item->id}}" class="btn btn-info">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>

<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Donnée</th>
        <th scope="col">Edit</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($summary2 as $item)
        <tr>
            <td>{{$item->data}}</td>
            <td><a href="/edit-summary2/{{$item->id}}" class="btn btn-info">Edit</a></td>
            <td>
                <form action="/delete-summary2/{{$item->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>  
        </tr>
        @endforeach
    </tbody>
  </table>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif

  <form action="/summary2-store" method="POST" class="mt-5">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Ajouter une nouvelle donnée</label>
      <input type="text" name="data" value="{{old("data")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>