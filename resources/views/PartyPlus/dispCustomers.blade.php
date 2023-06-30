@extends('layouts.partyplus')

@section('title',  'DispCostumers')

@section('menubar')
    @parent
    Customers page.
@endsection

@section('content')
    <table>
        <tr><th>id</th><th>last_name</th><th>first_name</th><th>last_name_fonetic</th><th>first_name_fonetic</th><th>age</th><th>mail</th><th>phone</th><th>postal_number</th><th>prefecture</th><th>city1</th><th>city2</th><th>building</th><th>birth_year</th><th>work_style</th><th>job</th><th>reg_dt</th><th>update_dt</th><th>remarks</th><th>person_type</th></tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->last_name}}</td>
                <td>{{$item->first_name}}</td>
                <td>{{$item->last_name_fonetic}}</td>
                <td>{{$item->first_name_fonetic}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->postal_number}}</td>
                <td>{{$item->prefecture}}</td>
                <td>{{$item->city1}}</td>
                <td>{{$item->city2}}</td>
                <td>{{$item->building}}</td>
                <td>{{$item->birth_year}}</td>
                <td>{{$item->work_style}}</td>
                <td>{{$item->job}}</td>
                <td>{{$item->reg_dt}}</td>
                <td>{{$item->update_dt}}</td>
                <td>{{$item->remarks}}</td>
                <td>{{$item->person_type}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copywriting
@endsection
