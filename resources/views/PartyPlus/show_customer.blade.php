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
                <th width="50px">last_name: </th>
                <th width="50px">first_name: </th>
                <th width="50px">last_name_fonetic: </th>
                <th width="50px">first_name_fonetic: </th>
                <th width="50px">age: </th>
                <th width="50px">mail: </th>
                <th width="50px">phone: </th>
                <th width="50px">postal_number: </th>
                <th width="50px">prefecture: </th>
                <th width="50px">city1: </th>
                <th width="50px">city2: </th>
                <th width="50px">building: </th>
                <th width="50px">birth_year: </th>
                <th width="50px">work_style: </th>
                <th width="50px">job: </th>
                <th width="50px">reg_dt: </th>
                <th width="50px">update_dt: </th>
                <th width="50px">remarks: </th>
                <th width="50px">person_type: </th>
            </tr>
            @foreach($items as $item)
            <tr>
                <td width="50px">{{$item->id}}</td>
                <td width="50px">{{$item->last_name}}</td>
                <td width="50px">{{$item->first_name}}</td>
                <td width="50px">{{$item->last_name_fonetic}}</td>
                <td width="50px">{{$item->first_name_fonetic}}</td>
                <td width="50px">{{$item->age}}</td>
                <td width="50px">{{$item->mail}}</td>
                <td width="50px">{{$item->phone}}</td>
                <td width="50px">{{$item->postal_number}}</td>
                <td width="50px">{{$item->prefecture}}</td>
                <td width="50px">{{$item->city1}}</td>
                <td width="50px">{{$item->city2}}</td>
                <td width="50px">{{$item->building}}</td>
                <td width="50px">{{$item->birth_year}}</td>
                <td width="50px">{{$item->work_style}}</td>
                <td width="50px">{{$item->job}}</td>
                <td width="50px">{{$item->reg_dt}}</td>
                <td width="50px">{{$item->update_dt}}</td>
                <td width="50px">{{$item->remarks}}</td>
                <td width="50px">{{$item->person_type}}</td>
            </tr>
            @endforeach
        </table>
    @endif
@endsection

@section('footer')
    copywriting 2023 test
@endsection
