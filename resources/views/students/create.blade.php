@extends('students.layout')
@section('content')
    <h2 
        class="text-center">
        Add Student
    </h2><br>
    <a 
        class="btn btn-outline-primary btn-sm" 
        href="{{ route('students.index') }}"> 
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        Back
    </a>
    
    <br><br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form 
        action="{{ route('students.store') }}" 
        method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input  
                type="text" 
                name="name" 
                placeholder="Enter name"
                class="form-control"
            >
        </div>
        <div class="form-group">
            <label>Email</label>
            <input 
                type="email"
                name="email" 
                placeholder="Enter email"
                class="form-control"
            >
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input 
                type="number"
                name="phone" 
                placeholder="Enter Phone"
                class="form-control"
            >
        </div>
        <button 
            type="submit" 
            class="btn btn-primary">
            Save
        </button>
        </div>
    </form>
@endsection