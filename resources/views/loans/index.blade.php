@extends('layouts.framework7')

@section('navbar')
<div class="center sliding">Loans</div>
@endsection

@section('toolbar')
<a href="/" class="tab-link">
	<i class="icon fa fa-home fa-2x"></i>
	<span class="tabbar-label">Overview</span>
</a>
<a href="/transactions" class="tab-link">
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
<a href="/loans" class="tab-link active">
	<i class="icon fa fa-credit-card fa-2x"></i>
	<span class="tabbar-label">Loans</span>
</a>
<a href="/settings" class="tab-link">
	<i class="icon fa fa-cog fa-2x"></i>
	<span class="tabbar-label">Settings</span>
</a>
@endsection


@section('content')
<div data-page="loans/index" class="page">
	<div class="page-content">
		<div class="list-block media-list">
			<ul>
				@foreach ($offers as $offer)
					<li>
						<a href="/loans/{{ $offer->id }}" class="item-link item-content">
							<div class="item-inner">
								<div class="item-title-row">
									<div class="item-title">{{ $offer['name'] }}</div>
									<div class="item-after">APR {{ $offer['apr'] }}%</div>
								</div>
								<div class="item-text">{{ $offer['description'] }}</div>
							</div>
						</a>
					</li>
				@endforeach
			</ul>
		</div>

	</div>
</div>
@endsection