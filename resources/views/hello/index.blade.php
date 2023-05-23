@extends('layouts.helloapp')

@section('title',  'Index')

@section('menubar')
    @parent
    Index page.
@endsection

@section('content')
    <p>{{$msg}}</p>
    <p>This is the link for <middleware>google.com</middleware>.</p>
    <p>This is the link for <middleware>yahoo.co.jp</middleware>.</p>
    @if (count($errors) > 0)
        <p>Error input has detected. Please retry following.</p>
    @endif
    <form action="/hello" method="post">
        <table>
            @csrf
            @error('name')
                <tr>
                    <th>ERROR</th>
                    <td>{{$message}}</td>
                </tr>
            @endif
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @error('mail')
                <tr>
                    <th>ERROR</th>
                    <td>{{$message}}</td>
                </tr>
            @endif
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            @error('age')
                <tr>
                    <th>ERROR</th>
                    <td>{{$message}}</td>
                </tr>
            @endif
            <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" name="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
    copywriting
@endsection
