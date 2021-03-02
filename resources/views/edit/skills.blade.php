@if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
@endif


<form action="/update-skills/{{$edit->id}}" method="POST" class="mt-5">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Compétence</label>
    <input type="text" name="skills" value="{{old("skills") ? old("skills") : $edit->skills}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">%</label>
    <input type="text" name="pourcentage" value="{{old("pourcentage") ? old("pourcentage") : $edit->pourcentage}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Valeur</label>
    <input type="text" name="aria" value="{{old("aria") ? old("aria") : $edit->aria}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/boSkills" class="btn btn-primary">Back</a>
</form>