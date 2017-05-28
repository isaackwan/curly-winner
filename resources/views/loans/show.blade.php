@extends('layouts.framework7')

@section('navbar')
<div class="left">
	<a href="#" class="back link">
		<i class="icon icon-back"></i>
		<span>Back</span>
	</a>
</div>
<div class="center sliding">{{ $offer->name }}</div>
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
<div data-page="loans/show" class="page">
	<div class="page-content">
		<h2 class="large-number">$856</h2>
		<p class="large-number-hint">per month, $10,000 lent, paid in 12 months</p>
		<h2 class="large-number">4.27%</h2>
		<p class="large-number-hint">APR</p>
		<div class="content-block">
			<div class="content-block-inner">{{ $offer->description }}</div>
		</div>
		<div class="content-block-title">Monthly Repayment Calculator</div>
		<div id="calculatorVue" rate="5">
			<div class="list-block">
				<ul>
					<li>
						<div class="item-content">
							<div class="item-inner">
								<div class="item-title label">Amount</div>
								<div class="item-input">
									<input type="number" min=0 v-model="amount">
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="item-content">
							<div class="item-inner">
								<div class="item-title label">Loan Period (Months)</div>
								<div class="item-input">
									<input type="number" min=1 v-model="termMonths">
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="content-block inset">
				<div class="content-block-inner">
					Monthly Repayment = HK$ @{{ monthlyRepayment }}
				</div>
				<p><a href="#" class="button active">Apply Now</a></p>
			</div>
		</div>
	</div>
</div>
@endsection