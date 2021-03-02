@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
@endif

<form action="/update-info/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Icone</label>
    <input type="text" name="icone" value="{{old("icone") ? old("icone") : $edit->icone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" name="data1" value="{{old("data1") ? old("data1") : $edit->data1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Donnée</label>
    <input type="text" name="data2" value="{{old("data2") ? old("data2") : $edit->data2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/boInfo" class="btn btn-primary">Back</a>
</form>