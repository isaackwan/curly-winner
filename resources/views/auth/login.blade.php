@extends('layouts.framework7')

@section('navbar')
<div class="center sliding">登入</div>
@endsection

@section('content')
<div data-page="login" class="page">
	<div class="page-content">
		<div class="page-content">
			@if (count($errors) > 0)
				<div class="content-block">
					<p>抱歉，發生錯誤:</p>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		<form role=form method=POST action="{{ route('login') }}">
			<div class="list-block">
				<ul>
					<!-- Text inputs -->
					<li>
						<div class="item-content">
							<div class="item-inner">
								<div class="item-input">
									<input type=email name=email placeholder="電郵地址">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item-content">
							<div class="item-inner">
								<div class="item-input">
									<input type=password name=password placeholder="密碼">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item-content">
							<div class="item-inner">
								<div class="item-input">
									<label class="label-switch">
										<input type="checkbox" name=remember>
										<div class="checkbox"></div>
									</label>
								</div>
								<div class="item-title label">記住我</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			{{ csrf_field() }}
			<div class="content-block">
				<input class="button" type=submit value="登入">
			</div>
		</form>
	</div>
</div>
@endsection