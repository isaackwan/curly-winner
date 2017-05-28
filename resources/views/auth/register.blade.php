@extends('layouts.framework7')

@section('navbar')
	<div class="center sliding">註冊</div>
@endsection

@section('content')
	<div data-page="register" class="page">
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
			<form role=form method=POST action="{{ route('register') }}">
				<div class="list-block">
					<ul>
						<!-- Text inputs -->
						<li>
							<div class="item-content">
								<div class="item-inner">
									<div class="item-input">
										<input type="text" name="name" placeholder="姓名">
									</div>
								</div>
							</div>
						</li>
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
										<input type=password name=password_confirmation placeholder="確認密碼">
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				{{ csrf_field() }}
				<div class="content-block">
					<input class="button" type=submit value="註冊">
				</div>
			</form>
		</div>
	</div>
@endsection