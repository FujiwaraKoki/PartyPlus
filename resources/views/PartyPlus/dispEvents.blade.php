@extends('layouts.partyplus')

@section('title',  'DispEvents')

@section('menubar')
    @parent
    Events page.
@endsection

@section('content')
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>site</th>
            <th>site_address</th>
            <th>site_url</th>
            <th>charge</th>
            <th>payment_method</th>
            <th>date</th>
            <th>time_start</th>
            <th>time_end</th>
            <th>top_fig</th>
            <th>info</th>
            <th>office</th>
            <th>group_name</th>
            <th>sponser_id</th>
            <th>reg_dt</th>
            <th>update_dt</th>
            <th>remarks</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->site}}</td>
                <td>{{$item->site_address}}</td>
                <td>{{$item->site_url}}</td>
                <td>{{$item->charge}}</td>
                <td>{{$item->payment_method}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->time_start}}</td>
                <td>{{$item->time_end}}</td>
                <td>{{$item->top_fig}}</td>
                <td>{{$item->info}}</td>
                <td>{{$item->office}}</td>
                <td>{{$item->group_name}}</td>
                <td>{{$item->sponser_id}}</td>
                <td>{{$item->reg_dt}}</td>
                <td>{{$item->update_dt}}</td>
                <td>{{$item->remarks}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copywriting
@endsection
