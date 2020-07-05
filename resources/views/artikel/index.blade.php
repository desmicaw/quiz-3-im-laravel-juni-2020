@extends('layouts.master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Artikel</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<a href="/artikel/create" class="btn btn-info ml-4 mt-2 mb-2" role="button">Buat Artikel Baru!</a>
@foreach($artikel as $artikel)
<div class="card m-4">
  <div class="card-header"> 
  	<h4> {{$artikel->judul}} </h4> 
  	<div class="card-footer">
  		<h6> {{$artikel->slug}} </h6>	
  	</div>
  </div>

  <div class="card-body"> {{$artikel->isi}} <br> Tag: {{$artikel->tag}} </div>
  <a href="/artikel/{{ $artikel->id }}" class="btn btn-primary mt-2">Detail Artikel</a>
	<a href="/artikel/{{ $artikel->id }}/edit" class="btn btn-default mt-2">Edit Artikel</a>
  <form action="/artikel/{{ $artikel->id }}" method="POST" style="display: inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
  </form>
  
</div>
@endforeach






@push('scripts')
	<script>
	    Swal.fire({
	        title: 'Berhasil!',
	        text: 'Memasangkan script sweet alert',
	        icon: 'success',
	        confirmButtonText: 'Cool'
	    })
	</script>
@endpush

@endsection