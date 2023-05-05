@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Product</div>
	<div class="card-body">
		<form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Name</label>
				<div class="col-sm-10">
					<input type="text" name="product_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Stock</label>
				<div class="col-sm-10">
					<input type="number" name="product_stock" id="product_stock" class="form-control"  min="0" />
				</div>
			</div>
      <div class="row mb-4">
    <label class="col-sm-2 col-label-form" for="product_price">Product Price</label>
    <div class="col-sm-10">
        <input type="number" name="product_price" id="product_price" class="form-control" min="0" required>
    </div>
</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Product Image</label>
				<div class="col-sm-10">
					<input type="file" name="product_image" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
