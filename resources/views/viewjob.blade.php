@extends('layout')
@section('title','job')
@section('main')
<form action="/showjob" method="get">
            <input type="text" name="jobname" placeholder="Search ...">
            <button type="submit">Find</button>
        </form>
        <table>
            <tr>
                <td>Job Name</td>
                <td>Job Location</td>
                <td>Job Specification</td>
                <td>Job Giver</td>
            </tr>

            @foreach($result as $jobs)
                <tr>
                    <td>{{$jobs->jobname}}</td>
                    <td>{{$jobs->joblocation}}</td>
                    <td>{{$jobs->jobspecification}}</td>
                    <td>{{$jobs->jobgiver}}</td>
                </tr>
            @endforeach
        </table>
            
    {{$result->render()}}
@endsection
