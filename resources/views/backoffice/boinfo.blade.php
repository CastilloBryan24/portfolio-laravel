<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Icone</th>
        <th scope="col">Titre</th>
        <th scope="col">Donnée</th>
        <th scope="col">Edit</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($info as $item)
        <tr>
            <td>{{$item->icone}}</td>
            <td>{{$item->data1}}</td>
            <td>{{$item->data2}}</td>
            <td><a href="/edit-info/{{$item->id}}" class="btn btn-primary">Edit</a></td>
            <td>
              <form action="/delete-info/{{$item->id}}" method="POST">
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


  <form action="/info-store" method="POST" class="mt-5">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Icone</label>
      <input type="text" name="icone" value="{{old("icone")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="data1" value="{{old("data1")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Donnée</label>
      <input type="text" name="data2" value="{{old("data2")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>