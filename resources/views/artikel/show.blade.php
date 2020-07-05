@extends('master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Detail Artikel</h1>
      </div>
    </div>
  </div>
</section>

<div class="card m-4">
	<div class="card-header"> 
		<h3>{{$detail->judul}}</h3><br>
		<div class="card-footer"> slug: {{$detail->slug}}</div>
	</div>
	<div class="card-body">
		@foreach($detail as $key => $detail)
		<ul>
			<li>{{$detail->isi}}</li>
		</ul>
		@endforeach
	</div>
</div>

@endsection