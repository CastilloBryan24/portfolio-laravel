<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Icone</th>
        <th scope="col">Titre</th>
        <th scope="col">Coordonnées</th>
        <th scope="col">edit</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contact as $item)
        <tr>
            <td>{{$item->icone}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->data}}</td>
            <td><a href="/edit-contact/{{$item->id}}" class="btn btn-info">edit</a></td>
            <td>
              <form action="/delete-contact/{{$item->id}}" method="POST">
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

  <form action="/contact-store" method="POST" class="mt-5">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Icone</label>
      <input type="text" name="icone" value="{{old("icone")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" name="title" value="{{old("title")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Donnée</label>
      <input type="text" name="data" value="{{old("data")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>