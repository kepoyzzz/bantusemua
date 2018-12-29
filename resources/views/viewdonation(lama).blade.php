@extends('layout')
@section('title','viewdonation')
@section('main')
<form action="/viewdonation" method="get">
            <input type="text" name="donateTitle" placeholder="Search ...">
            <button type="submit">Find</button>
        </form>
        <table>
            <tr>
                <td>Donation Picture</td>
                <td>Donation Title</td>
                <td>Donation Requester</td>
                <td>Donation Total</td>
                <td>Donation Target</td>
                <td>Donation Time</td>
                <td>Donation Description</td>
            </tr>

            @foreach($result as $donations)
            <tr>
                <img src="/donasibencana/{{$donations->donatePicture}}" width="200" height="200">
                    <td>{{$donations->donateTitle}}</td>
                    <td>{{$donations->requesterDonation}}</td>
                    <td>{{$donations->totalDonation}}</td>
                    <td>{{$donations->targetDonation}}</td>
                    <td>{{$donations->donateTime}}</td>
                    <td>{{$donations->descriptionDonation}}</td>
            </tr>
            @endforeach
        </table>
        {{$result->render()}}
@endsection