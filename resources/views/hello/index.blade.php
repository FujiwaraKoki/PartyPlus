@extends('layouts.helloapp')

@section('title',  'add')

@section('menubar')
    @parent
    New Page.
@endsection

@section('content')
    <p>This is the link for <middleware>google.com</middleware>.</p>
    <p>This is the link for <middleware>yahoo.co.jp</middleware>.</p>
    @if (count($errors) > 0)
        <p>Error input has detected. Please retry following.</p>
    @endif
    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    <!--
    <form action="/hello/add" method="post">
        <table>
            @csrf
            <tr><th>name: </th><td><input type="text" name="name"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
            <tr><th>age: </th><td><input type="text" name="age"></td></tr>
            <tr><th></th><td><input type="submit" name="send"></td></tr>
        </table>
    </form>
    -->
@endsection

@section('footer')
    copywriting 2023 test
@endsection
