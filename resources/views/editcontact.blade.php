<form method="post" action="{{url('update-contact/'.$edit->id)}}">
	@csrf
	 <input type="text" name="name"  value="{{$edit->name}}">
     <input type="email" name="email" value="{{$edit->email}}">
     <input type="text" name="phone" value="{{$edit->phone}}">
     <input type="text" name="description" value="{{$edit->description}}">
     <input type="submit" name="Update" value="Update">
 </form>
