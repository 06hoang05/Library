@extends('books.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Edit Book</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update',$book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book Authorid:</strong>
                    <input type="number" name="book_authorid" 
                    value="{{ $book->book_authorid }}"
                    class="form-control" placeholder="book Authorid">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book Title:</strong>
                    <textarea class="form-control" name="book_title" 
                    style="height:150px"
                    placeholder="book Title">{{ $book->book_title }}
                </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book Isbn:</strong>
                    <input type="text" name="book_isbn" class="form-control" 
                    style="height:150px"
                    value="{{ $book->book_isbn }}"  placeholder="book Isbn">
                </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book Pub year:</strong>
                    <input type="number" name="book_pub_year" 
                    value="{{ $book->book_pub_year }}"
                    class="form-control" placeholder="book Pub year">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Book Available:</strong>
                    <input type="number" name="book_available" 
                    value="{{ $book->book_available }}"
                    class="form-control" placeholder="book Available">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
