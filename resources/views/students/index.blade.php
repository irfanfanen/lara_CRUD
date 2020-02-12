@extends('students.layout')
@section('content')
    <h2 
        class="text-center">
        All Students
    </h2><br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(sizeof($students) > 0)
    <div class="table-responsive">
        <a class="btn btn-outline-success btn-sm" href="{{ route('students.create') }}"> 
        <i class="fa fa-plus" aria-hidden="true"></i>
        Add Student</a><br><br>
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                            <a class="btn btn-outline-success btn-sm" href="{{ route('students.show',$student->id) }}">
                                <i class="fa fa-external-link" aria-hidden="true"></i>
                            </a>
                            <a class="btn btn-outline-primary btn-sm" href="{{ route('students.edit',$student->id) }}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-sm">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif
    {!! $students->links() !!}
@endsection