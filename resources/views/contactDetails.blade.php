<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1>Contact Book</h1>
<a href="{{url('/')}}" class="btn btn-primary">Home</a><br>
<a href="{{url('insert-data')}}" class="btn btn-primary">AddNew</a>
<table class="table table-border">
 <tr>
 	<th>Id</th>
 	<th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
 </tr>
 @foreach($ShowContact as $row)
 <tr>
 	<td>{{$row->id}}</td>
 	<td>{{$row->name}}</td>
    <td>{{$row->email}}</td>
    <td>{{$row->phone}}</td>
    <td>
    	<a href="{{url('Edit-data/'.$row->id)}}" class="btn btn-primary">Edit </a>
    	<a href="{{url('Delete-data/'.$row->id)}}" class="btn btn-success">Delete </a>
    	<a href="{{url('view-data/'.$row->id)}}" class="btn btn-danger">View</a>
    </td>
 </tr>
 @endforeach

</table>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>