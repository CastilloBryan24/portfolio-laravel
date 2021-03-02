<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Date</th>
        <th scope="col">Show</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($education as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->date}}</td>
            <td><a href="/education-show/{{$item->id}}" class="btn btn-info">Show</a></td>
            <td>
              <form action="/delete-education/{{$item->id}}" method="POST">
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


  <form action="/education-store" method="POST" class="mt-5">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nom</label>
      <input type="text" name="name" value="{{old("name")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Date</label>
      <input type="text" name="date" value="{{old("date")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Lieu</label>
      <input type="text" name="place" value="{{old("place")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Description</label>
      <input type="text" name="paragraph" value="{{old("paragraph")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>