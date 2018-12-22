@extends('layout')
@section('title','job')
@section('main')
<form method="POST" action="/job" enctype="multipart/form-data">
        {{csrf_field()}}
            JobName: <input type="text" name="Jobname"><br>
            JobLocation: <input type="text" name="Joblocation"><br>
            JobSpecification: <input type="text" name="Jobspecification"><br>
            JobGiver: <input type="text" name="Jobgiver"><br>        
            <button type="submit" name="button">Submit</button>
</form>
@endsection