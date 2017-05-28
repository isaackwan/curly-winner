@extends('layouts.framework7')

@section('navbar')
<div class="left">
	<a href="#" class="back link">
	<i class="icon icon-back"></i>
	<span>Back</span>
	</a>
</div>
<div class="center sliding">Transactions</div>
@endsection

@section('toolbar')
<a href="/" class="tab-link">
	<i class="icon fa fa-home fa-2x"></i>
	<span class="tabbar-label">Overview</span>
</a>
<a href="/transactions" class="tab-link active">
	<i class="icon fa fa-usd fa-2x"></i>
	<span class="tabbar-label">Transactions</span>
</a>
<a href="/portfolio" class="tab-link">
	<i class="icon fa fa-pie-chart fa-2x"></i>
	<span class="tabbar-label">Portfolio</span>
</a>
<a href="/funds" class="tab-link">
	<i class="icon fa fa-money fa-2x"></i>
	<span class="tabbar-label">Funds</span>
</a>
<a href="/loans" class="tab-link">
	<i class="icon fa fa-credit-card fa-2x"></i>
	<span class="tabbar-label">Loans</span>
</a>
<a href="/settings" class="tab-link">
	<i class="icon fa fa-cog fa-2x"></i>
	<span class="tabbar-label">Settings</span>
</a>
@endsection

@section('content')
<div data-page="transactions/index" class="page">
	<div class="page-content">
		<div class="list-block">
			@foreach ($dates as $day_prety => $day)
				<div class="list-group">
					<ul>
						<li class="list-group-title">{{ $day_prety }}</li>
						@foreach ($day as $transaction)
							<li>
								<a href="/transactions/{{ $transaction->id }}" class="item-link item-content">
									<div class="item-media"><img src="/images/transaction_types/{{ $transaction->category_id }}" style="width: 29px;height:29px;"></div>
									<div class="item-inner">
										<div class="item-title">{{ $transaction->merchant }}</div>
										<div class="item-after">{{ $transaction->amount }}</div>
									</div>
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			@endforeach
		</div>
	</div>
</div>
@endsection