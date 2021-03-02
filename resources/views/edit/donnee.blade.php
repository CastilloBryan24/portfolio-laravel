@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
@endif


<form action="/update-summary2/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Donnée</label>
    <input type="text" name="data" value="{{old("data") ? old("data") : $edit->data}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/boSummary" class="btn btn-primary">Back</a>
</form>