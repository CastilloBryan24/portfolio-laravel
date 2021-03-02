<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Date</th>
        <th scope="col">Lieu</th>
        <th scope="col">Edit</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($experience as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->place}}</td>
            <td><a href="/edit-experience/{{$item->id}}" class="btn btn-info">edit</a></td>
            <td>
                <form action="/delete-experience/{{$item->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>  
        </tr>
        @endforeach
    </tbody>
  </table>

  <form action="/experience-store" method="POST" class="mt-5">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Lieu</label>
    <input type="text" name="place" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<table class="table table-bordered table-dark mt-5">
    <thead>
      <tr>
        <th scope="col">Tâche</th>
        <th scope="col">Edit</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->data}}</td>
            <td><a href="/edit-experience2/{{$item->id}}" class="btn btn-info">edit</a></td>
            <td>
                <form action="/delete-experience2/{{$item->id}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>  
        </tr>
        @endforeach
    </tbody>
  </table>

  <form action="/experience2-store" method="POST" class="mt-5 mb-5">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Tâche</label>
      <input type="text" name="data" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>