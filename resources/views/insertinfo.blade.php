<form method="post" action="{{url('insert-dataadd')}}">
	@csrf
	 <input type="text" name="name" placeholder="Enter name">
     <input type="email" name="email" placeholder="Enter email">
     <input type="text" name="phone" placeholder="Enter number">
     <input type="text" name="description" placeholder="Enter details">
     <input type="submit" name="submit">

</form>