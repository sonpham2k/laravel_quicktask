@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('staffs.create') }}"> @lang('messages.addStaff') </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p> {{ $message }} </p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr> 
            <th>ID</th>
            <th>@lang('messages.name') </th>
            <th>@lang('messages.address') </th>
            <th>@lang('messages.department') </th>
            <th width="280px">@lang('messages.actions') </th>
        </tr>
        @foreach ($staffs as $staff)
        <tr>
            <td>{{ $staff->id }}</td>
            <td>{{ $staff->name }}</td>
            <td>{{ $staff->address }}</td>
            <td>{{ $staff->department->name }}</td>
            <td>
                <form action = "{{ route('staffs.destroy', $staff->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('staffs.edit', $staff->id) }}"> @lang('messages.edit')  </a>
                    
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" onclick="return confirm('@lang('messages.deleteConfir') {{ $staff->name }} ?');">@lang('messages.delete') </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <nav aria-label="Page navigation">
        {!! $staffs->links() !!}
    </nav>
@endsection
