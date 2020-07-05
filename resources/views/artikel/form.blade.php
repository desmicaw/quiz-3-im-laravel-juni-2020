@extends('layouts.master')

@section('content')
<div class="ml-4 ">

		<form action="/artikel" method="POST">
			@csrf
		  <div class="form-group">
		    <label for="judul">Judul:</label>
		    <input type="text" class="form-control" name="judul" placeholder="Isi Judul" id="judul">
		  </div>
		  <div class="form-group">
		    <label for="isi">Isi:</label>
		    <input type="text" class="form-control" name="isi" placeholder="Isi Artikel" id="isi">
		  </div>
		  
		  	<input hidden name="slug" value="slug">
		  
		  <div class="form-group">
		    <label for="tag">Tag:</label>
		    <input type="text" class="form-control" name="tag" placeholder="Isi Tag" id="tag">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit Artikel</button>
		</form>
	
</div>
@endsection