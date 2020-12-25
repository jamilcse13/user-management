@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="files/bootstrap.min.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="files/my.css" type="text/css">

<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-8" style="padding-top: 60vh">
                <a href="/teachers"><button style="width: 20%" class="btn btn-success">Teacher</button></a>
                <a href="/students"><button style="width: 20%" class="btn btn-success">Student</button></a>
            </div>
        </div>
    </div>
</div>



<script src="files/jquery.min.js"></script>
<script src="files/popperjs.min.js"></script>
<script src="files/bootstrap.min.js"></script>

@endsection