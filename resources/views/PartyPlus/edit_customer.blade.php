@extends('layouts.PartyPlus')

@section('title',  'Edit Customer')

@section('menubar')
    @parent
    Edit customer page.
@endsection

@section('content')
    <form action="/PartyPlus/edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th>last_name: </th>
                <td><input type="text" name="last_name" value="{{$form->last_name}}"><td>
            </tr>
            <tr>
                <th>first_name: </th>
                <td><input type="text" name="first_name" value="{{$form->first_name}}"><td>
            </tr>
            <tr>
                <th>last_name_fonetic: </th>
                <td><input type="text" name="last_name_fonetic" value="{{$form->last_name_fonetic}}"><td>
            </tr>
            <tr>
                <th>first_name_fonetic: </th>
                <td><input type="text" name="first_name_fonetic"  value="{{$form->first_name_fonetic}}"><td>
            </tr>
            <tr>
                <th>age: </th>
                <td><input type="text" name="age" value="{{$form->age}}"><td>
            </tr>
            <tr>
                <th>mail: </th>
                <td><input type="text" name="mail" value="{{$form->mail}}"><td>
            </tr>
            <tr>
                <th>phone: </th>
                <td><input type="text" name="phone" value="{{$form->phone}}"><td>
            </tr>
            <tr>
                <th>postal_number: </th>
                <td><input type="text" name="postal_number" value="{{$form->postal_number}}"><td>
            </tr>
            <tr>
                <th>prefecture: </th>
                <td><input type="text" name="prefecture" value="{{$form->prefecture}}"><td>
            </tr>
            <tr>
                <th>city1: </th>
                <td><input type="text" name="city1" value="{{$form->city1}}"><td>
            </tr>
            <tr>
                <th>city2: </th>
                <td><input type="text" name="city2" value="{{$form->city2}}"><td>
            </tr>
            <tr>
                <th>building: </th>
                <td><input type="text" name="building" value="{{$form->building}}"><td>
            </tr>
            <tr>
                <th>birth_year: </th>
                <td><input type="text" name="birth_year" value="{{$form->birth_year}}"><td>
            </tr>
            <tr>
                <th>work_style: </th>
                <td><input type="text" name="work_style" value="{{$form->work_style}}"><td>
            </tr>
            <tr>
                <th>job: </th>
                <td><input type="text" name="job" value="{{$form->job}}"><td>
            </tr>
            <tr>
                <th>reg_dt: </th>
                <td><input type="text" name="reg_dt" value="{{$form->reg_dt}}"><td>
                <!--<td>{{$form->reg_dt}}</td>-->
            </tr>
            <tr>
                <th>update_dt: </th>
                <td><input type="text" name="update_dt" value="{{$form->update_dt}}"><td>
                <!--<td>{{$form->update_dt}}</td>-->
            </tr>
            <tr>
                <th>remarks: </th>
                <td><input type="textarea" name="remarks" value="{{$form->remarks}}"><td>
            </tr>
            <tr>
                <th>person_type: </th>
                <td><input type="text" name="person_type" value="{{$form->person_type}}"><td>
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
