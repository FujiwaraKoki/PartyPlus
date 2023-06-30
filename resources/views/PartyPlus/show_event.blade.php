@extends('layouts.PartyPlus')

@section('title',  'show customer')

@section('menubar')
    @parent
    Show customer Page.
@endsection

@section('content')
    @if ($items != null)
        <table width="400px">
            <tr>
                <th width="50px">id: </th>
                <th width="50px">name: </th>
                <th width="50px">site: </th>
                <th width="50px">site_address: </th>
                <th width="50px">site_url: </th>
                <th width="50px">charge: </th>
                <th width="50px">payment_method: </th>
                <th width="50px">date: </th>
                <th width="50px">time_start: </th>
                <th width="50px">time_end: </th>
                <th width="50px">top_fig: </th>
                <th width="50px">info: </th>
                <th width="50px">office: </th>
                <th width="50px">group_name: </th>
                <th width="50px">sponser_id: </th>
                <th width="50px">reg_dt: </th>
                <th width="50px">update_dt: </th>
                <th width="50px">remarks: </th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td width="50px">{{$item->id}}</td>
                <td width="50px">{{$item->name}}</td>
                <td width="50px">{{$item->site}}</td>
                <td width="50px">{{$item->site_address}}</td>
                <td width="50px">{{$item->site_url}}</td>
                <td width="50px">{{$item->charge}}</td>
                <td width="50px">{{$item->payment_method}}</td>
                <td width="50px">{{$item->date}}</td>
                <td width="50px">{{$item->time_start}}</td>
                <td width="50px">{{$item->time_end}}</td>
                <td width="50px">{{$item->top_fig}}</td>
                <td width="50px">{{$item->info}}</td>
                <td width="50px">{{$item->office}}</td>
                <td width="50px">{{$item->group_name}}</td>
                <td width="50px">{{$item->sponser_id}}</td>
                <td width="50px">{{$item->reg_dt}}</td>
                <td width="50px">{{$item->update_dt}}</td>
                <td width="50px">{{$item->remarks}}</td>
            </tr>
            @endforeach
        </table>
    @endif
@endsection

@section('footer')
    copywriting 2023 test
@endsection
