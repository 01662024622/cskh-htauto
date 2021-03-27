@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/review360/feedbackmeCustomerRender.css">
@endsection
@section('content')

<div class="container">
	<form action="/action_page.php" id="get-link-form" method="POST">
		<label for="email">Mã Khách hàng(*)</label>
		<div class="row">
			<div class="col-10">
				<div class="form-group">
					<input type="text" class="form-control" name="code" placeholder="Hãy nhập mã khách hàng" id="code">
				</div>
			</div>
			<div class="col-2">
				<button type="submit" class="btn btn-primary">Nhận Link</button>
			</div>
		</div>
	</form>
<div class="row" id="link-container">
	<div class="col-10">
		<input type="text" class="form-control" placeholder="Hãy nhập mã khách hàng" id="link">
	</div>
	<div class="col-2">
		<button type="submit" id="coppy" class="btn btn-primary">Coppy Link</button>
	</div>
</div>
</div>

@endsection

@section('js')
<script src="{{ asset('js/review360/feedbackmeCustomerRender.js') }}"></script>
@endsection
