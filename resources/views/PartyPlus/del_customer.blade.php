@extends('layouts.PartyPlus')

@section('title',  'Delete')

@section('menubar')
    @parent
    Delete Customer page.
@endsection

@section('content')
<form action="/PartyPlus/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th>last_name: </th>
                <td>{{$form->last_name}}<td>
            </tr>
            <tr>
                <th>first_name: </th>
                <td>{{$form->first_name}}<td>
            </tr>
            <tr>
                <th>last_name_fonetic: </th>
                <td>{{$form->last_name_fonetic}}<td>
            </tr>
            <tr>
                <th>first_name_fonetic: </th>
                <td>{{$form->first_name_fonetic}}<td>
            </tr>
            <tr>
                <th>age: </th>
                <td>{{$form->age}}<td>
            </tr>
            <tr>
                <th>mail: </th>
                <td>{{$form->mail}}<td>
            </tr>
            <tr>
                <th>phone: </th>
                <td>{{$form->phone}}<td>
            </tr>
            <tr>
                <th>postal_number: </th>
                <td>{{$form->postal_number}}<td>
            </tr>
            <tr>
                <th>prefecture: </th>
                <td>{{$form->prefecture}}<td>
            </tr>
            <tr>
                <th>city1: </th>
                <td>{{$form->city1}}<td>
            </tr>
            <tr>
                <th>city2: </th>
                <td>{{$form->city2}}<td>
            </tr>
            <tr>
                <th>building: </th>
                <td>{{$form->building}}<td>
            </tr>
            <tr>
                <th>birth_year: </th>
                <td>{{$form->birth_year}}<td>
            </tr>
            <tr>
                <th>work_style: </th>
                <td>{{$form->work_style}}<td>
            </tr>
            <tr>
                <th>job: </th>
                <td>{{$form->job}}<td>
            </tr>
            <tr>
                <th>reg_dt: </th>
                <td>{{$form->reg_dt}}<td>
            </tr>
            <tr>
                <th>update_dt: </th>
                <td>{{$form->update_dt}}<td>
            </tr>
            <tr>
                <th>remarks: </th>
                <td>{{$form->remarks}}<td>
            </tr>
            <tr>
                <th>person_type: </th>
                <td>{{$form->person_type}}<td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"><td>
            </tr>
    </table>
</form>
@endsection

@section('footer')
    copywriting
@endsection
