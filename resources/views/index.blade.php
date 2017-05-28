@extends('layouts.framework7')

@section('navbar')
<div class="center sliding">Obsidian Bank</div>
@endsection

@section('toolbar')
	<a href="/" class="tab-link active">
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
<div data-page="index" class="page">
	<!-- Scrollable page content -->
	<div class="page-content" id="indexVue">
		<name-tag></name-tag>
		<div class="card" style="z-index:2;margin-top:14px;">
			<div class="card-header">Your personal finance is at risk!</div>
			<div class="card-content">
				<div class="card-content-inner">
					<p>If you do not take any action, your account balance will reach HK$0 on 27 May.</p>
					<p class="hint">
						<a href="/advices" class="a-no-decoration">Click here to learn your options</a></p>
				</div>
			</div>
		</div>
		<spending-circle></spending-circle>
	</div>
</div>
@endsection