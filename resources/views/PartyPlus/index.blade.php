@extends('layouts.helloapp')

@section('title',  'add')

@section('menubar')
    @parent
    New Page.
@endsection

@section('content')
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
@endsection

@section('footer')
    copywriting 2023 test
@endsection
