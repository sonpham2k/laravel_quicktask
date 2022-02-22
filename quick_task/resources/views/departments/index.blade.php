@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('departments.create') }}"> @lang('messages.addDepart') </a>
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
            <th>@lang('messages.department')</th>
            <th width="280px">@lang('messages.actions') </th>
        </tr>
        @foreach ($departments as $department)
        <tr>
            <td>{{ $department->id }}</td>
            <td>{{ $department->name }}</td>
            <td>
                <form action = "{{ route('departments.destroy', $department->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('departments.edit', $department->id) }}"> @lang('messages.edit')  </a>
                    
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger" onclick="return confirm('@lang('messages.deleteConfir') {{ $department->name }} ?');">@lang('messages.delete') </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <nav aria-label="Page navigation">
        {!! $departments->links() !!}
    </nav>
@endsection
