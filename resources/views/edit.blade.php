@extends('master')

@section('content')

<div class="card">
	<div class="card-header">Edit Product</div>
	<div class="card-body">
		<form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
  <label class="col-sm-2 col-label-form">Product Name</label>
  <div class="col-sm-10">
    <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}" />
    @error('product_name')
      <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Product Stock</label>
				<div class="col-sm-10">
					<input type="number" name="product_stock" class="form-control" value="{{ $product->product_stock }}" min="0" />
				</div>
			</div>
      <div class="row mb-4">
  <label class="col-sm-2 col-label-form">Product Price</label>
  <div class="col-sm-10">
    <div class="input-group">
      <span class="input-group-text">$</span>
      <input type="number" name="product_price" class="form-control" value="{{ $product->product_price }}" min="0" />
    </div>
    @error('product_price')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
</div>
      <div class="row mb-4">
        <label class="col-sm-2 col-label-form">Product Image</label>
        <div class="col-sm-10">
            <input type="file" name="product_image" id="product_image_input" />
            <br />
            <img src="{{ asset('images/' . $product->product_image) }}" width="100" class="img-thumbnail" id="product_image_preview" />
            <input type="hidden" name="hidden_product_image" onchange="console.log(this.files[0])" value="{{ $product->product_image }}" />
        </div>
      </div>
      <div class="text-center">
        <input type="hidden" name="hidden_id" value="{{ $product->id }}" />
        <input type="submit" class="btn btn-primary" value="Edit" id="submitBtn" />
        <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
      </div>	
		</form>
	</div>
</div>

<script>
  var form = document.querySelector('form');
  var submitBtn = document.getElementById('submitBtn');
  form.addEventListener('submit', function(event) {
    var productPrice = document.querySelector('input[name="product_price"]').value;
    if (productPrice <= 0) {
      event.preventDefault();
      var errorMsg = document.querySelector('.text-danger');
      if (errorMsg) {
        errorMsg.innerText = 'The price must be more than 0';
      } else {
        var div = document.createElement('div');
        div.classList.add('text-danger');
        div.innerText = 'The price must be more than 0';
        submitBtn.parentNode.insertBefore(div, submitBtn);
      }
    }
  });
</script>
<script>
  var form = document.querySelector('form');
  var submitBtn = document.getElementById('submitBtn');
  form.addEventListener('submit', function(event) {
    var productName = document.querySelector('input[name="product_name"]').value;
    if (productName.trim() == '') {
      event.preventDefault();
      var errorMsg = document.querySelector('.text-danger');
      if (errorMsg) {
        errorMsg.innerText = 'The product name field must not be empty';
      } else {
        var div = document.createElement('div');
        div.classList.add('text-danger');
        div.innerText = 'The product name field must not be empty';
        submitBtn.parentNode.insertBefore(div, submitBtn);
      }
    }
  });
</script>
<script>
  var form = document.querySelector('form');
  var submitBtn = document.getElementById('submitBtn');
  form.addEventListener('submit', function(event) {
    if (!document.querySelector('input[name="product_image"]').value) {
      event.preventDefault();
      var errorMsg = document.querySelector('.text-danger');
      if (errorMsg) {
        errorMsg.innerText = 'The image field must not be empty';
      } else {
        var div = document.createElement('div');
        div.classList.add('text-danger');
        div.innerText = 'The image field must not be empty';
        submitBtn.parentNode.insertBefore(div, submitBtn);
      }
    }
  });
</script>


@endsection('content')
