@extends('staff.layout') 

@section('content')
    <a href="{{ url('lang/vi') }}">Tiếng việt</a>
    <a href="{{ url('lang/en') }}">English</a>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            	<h2> @lang('messages.addStaff') </h2>
            </div>
            <div class="pull-right">
            	<a class="btn btn-primary" href="{{ route('staff.index') }}">@lang('messages.back')</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    	<div class="alert alert-danger">
    		<strong>Whoops!</strong> @lang('messages.fail') <br>
    		<ul>
    			@foreach ($errors->all() as $error)
    				<li> {{ $error }}</li>
    			@endforeach
    		</ul>
    	</div>
    @endif

    <form action="{{ route('staff.store') }}" method="POST">
    	@csrf

    	<div class="row">
    		<div class="col-xs-12 col-sm-12 col-md-12">
    			<div class="form-group">
    				<strong>@lang('messages.name'):</strong>
    				<input type="text" name="staffname" class="form-control" placeholder="@lang('messages.fullname')">
    			</div>
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12">
    			<div class="form-group">
    				<strong>@lang('messages.address'):</strong>
    				<input type="text" name="address" class="form-control" placeholder="@lang('messages.address')">
    			</div>
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12">
    			<div class="form-group">
    				<strong>@lang('messages.department'):</strong>
    				<input type="text" name="department" class="form-control" placeholder="@lang('messages.department')">
    			</div>
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    			<button type="submit" class="btn btn-primary"> @lang('messages.submit')</button>
    		</div>
    	</div>
    </form>
@endsection
