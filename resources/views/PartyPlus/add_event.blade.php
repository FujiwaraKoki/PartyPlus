@extends('layouts.PartyPlus')

@section('title',  'Add Event')

@section('menubar')
    @parent
    Add event page.
@endsection

@section('content')
    <form action="/PartyPlus/Event/add" method="post">
        <table>
            @csrf
            <tr>
                <th>name: </th>
                <td><input type="text" name="name"><td>
            </tr>
            <tr>
                <th>site: </th>
                <td><input type="text" name="site"><td>
            </tr>
            <tr>
                <th>site_address: </th>
                <td><input type="text" name="site_address"><td>
            </tr>
            <tr>
                <th>site_url: </th>
                <td><input type="text" name="site_url"><td>
            </tr>
            <tr>
                <th>charge: </th>
                <td><input type="textarea" name="charge"><td>
            </tr>
            <tr>
                <th>payment_method: </th>
                <td><input type="text" name="payment_method"><td>
            </tr>
            <tr>
                <th>date: </th>
                <td><input type="text" name="date"><td>
            </tr>
            <tr>
                <th>time_start: </th>
                <td><input type="text" name="time_start"><td>
            </tr>
            <tr>
                <th>time_end: </th>
                <td><input type="text" name="time_end"><td>
            </tr>
            <tr>
                <th>top_fig: </th>
                <td><input type="text" name="top_fig"><td>
            </tr>
            <tr>
                <th>info: </th>
                <td><input type="text" name="info"><td>
            </tr>
            <tr>
                <th>office: </th>
                <td><input type="text" name="office"><td>
            </tr>
            <tr>
                <th>group_name: </th>
                <td><input type="text" name="group_name"><td>
            </tr>
            <tr>
                <th>sponser_id: </th>
                <td><input type="text" name="sponser_id"><td>
            </tr>
            <tr>
                <th>remarks: </th>
                <td><input type="textarea" name="remarks"><td>
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
