@extends('layout') 

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            	<h2> @lang('messages.addDepart') </h2>
            </div>
            <div class="pull-right">
            	<a class="btn btn-primary" href="{{ route('departments.index') }}">@lang('messages.back')</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
    	<div class="alert alert-danger">
    		<ul>
    				@lang('messages.validate')
    		</ul>
    	</div>
    @endif

    <form action="{{ route('departments.store') }}" method="POST">
    	@csrf

    	<div class="row">
    		<div class="col-xs-12 col-sm-12 col-md-12">
    			<div class="form-group">
    				<strong>@lang('messages.name'):</strong>
    				<input type="text" name="department_name" class="form-control" placeholder="@lang('messages.fullname')">
    			</div>
                @error('department_name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    			<button type="submit" class="btn btn-primary"> @lang('messages.add')</button>
    		</div>
    	</div>
    </form>
@endsection
