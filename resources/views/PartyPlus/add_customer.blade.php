@extends('layouts.PartyPlus')

@section('title',  'Add Customer')

@section('menubar')
    @parent
    Add customer page.
@endsection

@section('content')
    <form action="/PartyPlus/add" method="post">
        <table>
            @csrf
            <tr>
                <th>last_name: </th>
                <td><input type="text" name="last_name"><td>
            </tr>
            <tr>
                <th>first_name: </th>
                <td><input type="text" name="first_name"><td>
            </tr>
            <tr>
                <th>last_name_fonetic: </th>
                <td><input type="text" name="last_name_fonetic"><td>
            </tr>
            <tr>
                <th>first_name_fonetic: </th>
                <td><input type="text" name="first_name_fonetic"><td>
            </tr>
            <tr>
                <th>age: </th>
                <td><input type="text" name="age"><td>
            </tr>
            <tr>
                <th>mail: </th>
                <td><input type="text" name="mail"><td>
            </tr>
            <tr>
                <th>phone: </th>
                <td><input type="text" name="phone"><td>
            </tr>
            <tr>
                <th>postal_number: </th>
                <td><input type="text" name="postal_number"><td>
            </tr>
            <tr>
                <th>prefecture: </th>
                <td><input type="text" name="prefecture"><td>
            </tr>
            <tr>
                <th>city1: </th>
                <td><input type="text" name="city1"><td>
            </tr>
            <tr>
                <th>city2: </th>
                <td><input type="text" name="city2"><td>
            </tr>
            <tr>
                <th>building: </th>
                <td><input type="text" name="building"><td>
            </tr>
            <tr>
                <th>birth_year: </th>
                <td><input type="text" name="birth_year"><td>
            </tr>
            <tr>
                <th>work_style: </th>
                <td><input type="text" name="work_style"><td>
            </tr>
            <tr>
                <th>job: </th>
                <td><input type="text" name="job"><td>
            </tr>
            <tr>
                <th>remarks: </th>
                <td><input type="textarea" name="remarks"><td>
            </tr>
            <tr>
                <th>person_type: </th>
                <td><input type="text" name="person_type"><td>
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
