<div class="card" style="width: 18rem;">
    <div class="card-body">
      <p class="card-text">{{$show->name}}</p>
      <p class="card-text">{{$show->date}}</p>
      <p class="card-text">{{$show->place}}</p>
      <p class="card-text">{{$show->paragraph}}</p>
      <a href="/edit-education/{{$show->id}}" class="btn btn-success">Edit</a>
      <a href="/boEducation" class="btn btn-primary">Back</a>
    </div>
  </div>