@extends('students.layout')
@section('content')

    <h2 
        class="text-center">
        Show Student
    </h2><br>
    <a 
        class="btn btn-outline-primary btn-sm" 
        href="{{ route('students.index') }}"> 
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        Back
    </a>
    
    <br><br>

    <form>
        <div class="form-group">
            <label>Name</label>
            <input  
                type="text" 
                name="name" 
                value="{{ $student->name }}" 
                placeholder="Enter name"
                class="form-control"
                disabled
            >
        </div>
        <div class="form-group">
            <label>Email</label>
            <input 
                type="text"
                name="detail" 
                value="{{ $student->email }}"
                placeholder="Enter email"
                class="form-control"
                disabled
            >
        </div>
        </div>
    </form>

@endsection