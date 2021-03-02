<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Compétence</th>
        <th scope="col">%</th>
        <th scope="col">Valeur</th>
        <th scope="col">Edit</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($skill as $item)
        <tr>
            <td>{{$item->skills}}</td>
            <td>{{$item->pourcentage}}</td>
            <td>{{$item->aria}}</td>
            <td><a href="/edit-skills/{{$item->id}}" class="btn btn-primary">Edit</a></td>
            <td>
              <form action="/delete-skills/{{$item->id}}" method="POST">
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


  <form action="/skills-store" method="POST" class="mt-5">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Compétence</label>
      <input type="text" name="skills" value="{{old("skills")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">%</label>
      <input type="text" name="pourcentage" value="{{old("poucentage")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Valeur</label>
      <input type="text" name="aria" value="{{old("aria")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>