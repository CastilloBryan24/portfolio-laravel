<form action="/update-experience/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="name" value="{{$edit->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date</label>
    <input type="text" name="date" value="{{$edit->date}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Lieu</label>
    <input type="text" name="place" value="{{$edit->place}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="/update-experience2/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Tâche</label>
    <input type="text" name="data" value="{{$edit->data}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>