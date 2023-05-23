@extends('layouts.helloapp')

@section('title',  'ShowDatabase')

@section('menubar')
    @parent
    Index page.
@endsection

@section('content')
    <table>
        <tr><th>id</th><th>name</th><th>site</th><th>site_address</th><th>site_url</th><th>charge</th><th>date</th><th>time</th><th>top_fig</th><th>info</th><th>office</th><th>group_name</th><th>reg_dt</th><th>update_dt</th><th>remarks</th></tr>
        @foreach
            <tr>
                <td>{{$items->id}}</td>
                <td>{{$items->name}}</td>
                <td>{{$items->site}}</td>
                <td>{{$items->site_address}}</td>
                <td>{{$items->site_url}}</td>
                <td>{{$items->charge}}</td>
                <td>{{$items->date}}</td>
                <td>{{$items->time}}</td>
                <td>{{$items->top_fig}}</td>
                <td>{{$items->info}}</td>
                <td>{{$items->office}}</td>
                <td>{{$items->group_name}}</td>
                <td>{{$items->reg_dt}}</td>
                <td>{{$items->login_dt}}</td>
                <td>{{$items->remarks}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copywriting
@endsection
