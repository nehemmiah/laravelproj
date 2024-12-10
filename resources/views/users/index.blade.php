@extends('layout')

@section('contents')
    <table>
        <tr>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
            </tr>
        @endforeach
    </table>
@endsection