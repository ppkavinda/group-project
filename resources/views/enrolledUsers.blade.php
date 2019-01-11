@extends('study.master')
@section('content')
<div class="container">
<h1>Enrolled Users</h1>
<br>
<table class="table table-bordered table-striped pt-3">
    <thead>
        <tr>
            <th>course name</th>
            <th>enrolled Users</th>
        </tr>
    </thead>
    <tbody>
        @foreach($enrolled as $enroll)
            @foreach($enroll as $key => $val)
                <tr>
                <td>{{ $key }}</td>
                <td>{{ count($val) }}</td>
                </tr>
            @endforeach
        @endforeach
    
    </tbody>
</table>
</div>
@endsection