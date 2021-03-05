<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Filter</th>
        <th scope="col">Picture</th>
        <th scope="col">name1</th>
        <th scope="col">name2</th>
        <th scope="col">picture2</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($portfolio as $item)
        <tr>
            <td>{{$item->filter}}</td>
            <td>{{$item->picture}}</td>
            <td>{{$item->name1}}</td>
            <td>{{$item->name2}}</td>
            <td>{{$item->picture2}}</td>
            <td><a href="/edit-social/{{$item->id}}" class="btn btn-primary">Edit</a></td>
            <td><a href="/download-files/{{$item->id}}" class="btn btn-primary">download</a></td>
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

  <form action="/portfolio-store" method="POST" class="mt-5" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">filter</label>
      <input type="text" name="filter" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">picture</label>
      <input type="file" name="picture" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">name1</label>
      <input type="text" name="name1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">name2</label>
      <input type="text" name="name2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">picture2</label>
      <input type="file" name="picture2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>