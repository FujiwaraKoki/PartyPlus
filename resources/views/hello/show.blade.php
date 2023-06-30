@extends('layouts.helloapp')

@section('title',  'add')

@section('menubar')
    @parent
    Info Page.
@endsection

@section('content')
    @if ($items != null)
        @foreach($items as $item)
            <table width="400px">
                <tr>
                    <th width="50px">id: </th>
                    <td width="50px">{{$item->id}}</td>
                    <th width="50px">name: </th>
                    <td width="50px">{{$item->name}}</td>
                    <th width="50px">mail: </th>
                    <td width="50px">{{$item->mail}}</td>
                    <th width="50px">age: </th>
                    <td width="50px">{{$item->age}}</td>
                </tr>
            </table>
        @endforeach
    @endif
@endsection

@section('footer')
    copywriting 2023 test
@endsection
