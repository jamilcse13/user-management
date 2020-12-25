@extends('layouts.app', [
    'pageTitle' => 'Student List'
])
@section('content')
<link rel="stylesheet" href="files/bootstrap.min.css" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <div class="container">
        <div class="row" style="padding:0 40px 0 40px">
            <div class="col-md-8">
                <a class="pull-left" href="{{ url('students') }}">Student List 
                    <span>({{ $students->total() }})</span>
                </a>
                <a class="btn btn-success btn-xs" href="{{ url('students/create') }}">
                    <i class="fa fa-plus"></i> New Student
                </a>
            </div>
            <div class="col-md-4">
                <a class="btn btn-primary btn-xs" href="{{ url('home') }}">Home</a>
            </div>
        </div>
    </div>

    <div class="table-responsive" style="padding:0 40px 0 40px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Father Name</th>
                    <th>Mother Name</th>
                    <th>Date of Birth</th>
                    <th>Joining Date</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $counter = 0; @endphp

                @foreach ($students as $item)
                <tr>
                    <td>{{ ++$counter }}</td>
                    <td> {{ $item->name }} </td>
                    <td> {{ $item->father_name }} </td>
                    <td> {{ $item->mother_name }} </td>
                    <td> {{ $item->dob }} </td>
                    <td> {{ $item->joining_date }} </td>
                    <td> {{ $item->dept }} </td>
                    <td>
                        <a class="btn btn-info btn-xs" href="{{ url('students/'. $item->id .'/edit')}}">
                            Edit
                        </a>
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['students.destroy', $item->id]
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                <td colspan="10"> {{ $students->appends(request()->except('page'))->links() }} </td>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection 