@extends('layouts.framework7')

@section('navbar')
<div class="left">
	<a href="#" class="back link">
		<i class="icon icon-back"></i>
		<span>Back</span>
	</a>
</div>
<div class="center sliding">Transaction Details</div>
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
<div data-page="transactions/show" class="page">
	<div class="page-content">
		<div class="content-block-title">Transaction Details</div>
		<div class="list-block">
			<ul>
				<li class="item-content">
					<div class="item-inner">
						<div class="item-title">
							Merchant
						</div>
						<div class="item-after">
							{{ $transaction->merchant }}
						</div>
					</div>
				</li>
				<li class="item-content">
					<div class="item-inner">
						<div class="item-title">
							Amount
						</div>
						<div class="item-after">
							{{ $transaction->amount }}
						</div>
					</div>
				</li>
				<li class="item-content">
					<div class="item-inner">
						<div class="item-title">
							Date
						</div>
						<div class="item-after">
							{{ $transaction->date }}
						</div>
					</div>
				</li>
				<li class="item-content">
					<div class="item-inner">
						<div class="item-title">
							Category
						</div>
						<div class="item-after">
							{{ $transaction->category }}
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="content-block-title">Location</div>
		<div class="content-block">
			<div class="content-block-inner">
				<iframe src="{{ $transaction->gmaps_uri }}" height=300 frameborder="0" style="border:0;width: 100%;display:block;" allowfullscreen></iframe>
				<p>{{ $transaction->address }}</p>
			</div>
		</div>
		<div class="content-block-title">Notes</div>
		<div class="list-block">
			<ul>
				<li class="align-top">
					<div class="item-content">
						<div class="item-inner">
							<div class="item-input">
								<textarea placeholder="Annie's Birthday"></textarea>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div class="content-block-title">Receipt</div>
		<div class="">

		</div>
	</div>
</div>
@endsection