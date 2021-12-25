@extends('base')
@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Create Todo</h5>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('store') }}" method="POST">
                @method('POST')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="example-todo-title">Write to-do Title</label>
                    <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter to-do title" required>
                    <small id="emailHelp" class="form-text text-muted">The to-do title must contain at least 5 characters.</small>
                </div>

                <div class="form-group">
                    <label for="example-todo-desc">Describe your to-do list</label>
                    <textarea name="description" rows="3" class="form-control" id="example-todo-desc" aria-describedby="emailHelp" placeholder="Enter to-do description">{{ old('description') }}</textarea>
                    <small id="emailHelp" class="form-text text-muted">You can write a detailed to-do description in this column.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection