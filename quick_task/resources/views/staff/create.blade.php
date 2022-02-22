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
    		<ul>
    				@lang('messages.validate')
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
                @error('staffname')
                    <span style="color: red">{{ $message }}</span>
                @enderror
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12">
    			<div class="form-group">
    				<strong>@lang('messages.address'):</strong>
    				<input type="text" name="address" class="form-control" placeholder="@lang('messages.address')">
    			</div>
                @error('address')
                    <span style="color: red">{{ $message }}</span>
                @enderror
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12">
    			<div class="form-group">
    				<strong>@lang('messages.department'):</strong>
                    <select class="form-select" name="department" aria-label="Default select example" placeholder="@lang('messages.department')">
                        <option></option>
                        @foreach ($departments as $department)
                          <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
    			</div>
                @error('department')
                    <span style="color: red">{{ $message }}</span>
                @enderror
    		</div>
    		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    			<button type="submit" class="btn btn-primary"> @lang('messages.add')</button>
    		</div>
    	</div>
    </form>
@endsection
