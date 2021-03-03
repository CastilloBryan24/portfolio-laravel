<table class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($client as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->subject}}</td>
            <td>{{$item->message}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
