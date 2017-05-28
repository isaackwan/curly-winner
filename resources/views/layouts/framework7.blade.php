@if(\Request::header('X-Requested-With') === 'XMLHttpRequest')
	@include('layouts._page')
@else
	@include('layouts._full')
@endif