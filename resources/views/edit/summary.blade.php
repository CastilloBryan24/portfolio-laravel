@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
@endif


<form action="/update-summary/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="name" value="{{old("name") ? old("name") : $edit->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="paragraph" value="{{old("paragraph") ? old("paragraph") : $edit->paragraph}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/boSummary" class="btn btn-primary">Back</a>
</form>