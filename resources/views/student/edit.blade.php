@extends('layouts.app', [
    'pageTitle' => 'Edit Student'
])
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Edit Student</h2>
            </div>
            <div class="col-md-10">
                @include('student._form')
            </div>
        </div>
    </div>
        
@endsection