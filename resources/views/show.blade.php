@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Sell Product</b></div>
			<div class="col col-md-6">
		


			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Product Name</b></label>
			<div class="col-sm-10">
				{{ $product->product_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Product Stock</b></label>
			<div class="col-sm-10">
				{{ $product->product_stock }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Product Price</b></label>
			<div class="col-sm-10">
				$ {{ $product->product_price }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Product Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $product->product_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>


		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Quantity</b></label>
			<div class="col-sm-10">
				<select id="quantitySelect" class="form-control">
					@for ($i = 1; $i <= $product->product_stock; $i++)
						<option value="{{ $i }}">{{ $i }}</option>
					@endfor
				</select>
			</div>
		</div>

		<div class="row mb-3">
    <label class="col-sm-2 col-label-form"><b>Total Price</b></label>
    <div class="col-sm-10">
        <div id="totalPrice">{{ $product->product_price }}</div>
    </div>
</div>

<div class="row mb-3">
    <label class="col-sm-2 col-label-form"><b>Total Price with IVA (13%)</b></label>
    <div class="col-sm-10">
        <div id="totalPriceWithIVA">{{ $product->product_price * 1.13 }}</div>
    </div>
</div>

	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    var price = {{ $product->product_price }};
    $('#quantitySelect').on('change', function(){
        var quantity = $(this).val();
        var totalPrice = price * quantity;
        var totalPriceWithIVA = totalPrice * 1.13;
        $('#totalPrice').text('$' + totalPrice.toFixed(2));
        $('#totalPriceWithIVA').text('$' + totalPriceWithIVA.toFixed(2));
    });
});
</script>
@endsection('content')
