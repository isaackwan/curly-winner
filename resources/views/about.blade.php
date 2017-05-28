@extends('layouts.framework7')

@section('navbar')
<div class="left">
	<a href="#" class="back link">
	<i class="icon icon-back"></i>
	<span>Back</span>
	</a>
</div>
<div class="center sliding">交易記錄</div>
@endsection

@section('toolbar')
<a href="/" class="tab-link">
	<i class="icon fa fa-home fa-2x"></i>
	<span class="tabbar-label">概覽</span>
</a>
<a href="/transactions" class="tab-link active">
	<i class="icon fa fa-usd fa-2x"></i>
	<span class="tabbar-label">交易記錄</span>
</a>
<a href="/portfolio" class="tab-link">
	<i class="icon fa fa-pie-chart fa-2x"></i>
	<span class="tabbar-label">財富組合</span>
</a>
<a href="/funds" class="tab-link">
	<i class="icon fa fa-money fa-2x"></i>
	<span class="tabbar-label">基金</span>
</a>
<a href="/loans" class="tab-link">
	<i class="icon fa fa-credit-card fa-2x"></i>
	<span class="tabbar-label">借貸</span>
</a>
<a href="/settings" class="tab-link">
	<i class="icon fa fa-cog fa-2x"></i>
	<span class="tabbar-label">設定</span>
</a>
@endsection


@section('content')
<div data-page="about" class="page">
	<div class="page-content">
		<div class="content-block">
			<p>Here is About page!</p>
			<p>Fusce eros lectus, accumsan eget mi vel, iaculis tincidunt felis. Nulla tincidunt pharetra sagittis. usce in felis eros. Nulla sit amet aliquam lorem, et gravida ipsum. Mauris consectetur nisl non ollicitudin tristique. Praesent vitae metus ac quam rhoncus mattis vel et nisi. Aenean aliquet, felis quis dignissim iaculis, lectus quam tincidunt ligula, et venenatis turpis risus sed lorem. Morbi eu metus elit. Ut vel diam dolor.</p>
		</div>
	</div>
</div>
@endsection