<form action="/update-social/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Link</label>
    <input type="text" name="link" value="{{$edit->link}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Icone</label>
    <input type="text" name="icone" value="{{$edit->icone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>