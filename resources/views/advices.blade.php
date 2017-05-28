@extends('layouts.framework7')

@section('navbar')
<div class="left">
	<a href="#" class="back link">
		<i class="icon icon-back"></i>
		<span>Back</span>
	</a>
</div>
<div class="center sliding">Watch out!</div>
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
<div data-page="advices" class="page">
	<div class="page-content">
		<canvas id="tutorial-speedometer" width="340" height="220">
			Canvas not available.
		</canvas>
		<div class="content-block">
			Oh no! According to our forecast, your account balance will have a <strong>90% chance</strong> of dropping below HK$0 on 27 May, unless you take one of the following options
		</div>
		<div class="list-block media-list">
			<ul>
				<li>
					<div class="item-content">
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Save an extra HK$10 per day until 31 May</div>
							</div>
							<div class="item-text">But saving an extra HK$25 per day, you would be saving HK$500 before 27 May. That would eliminate the risk of running short of cash.</div>
						</div>
					</div>
				</li>
				<li>
					<a href="/loans/1" class="item-link item-content">
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">Borrow HK$500 later</div>
							</div>
							<div class="item-text">Do you know that Hang Seng now lends "micro loans" at an ultra low rate? Click for more details.</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection