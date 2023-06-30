@extends('layouts.PartyPlus')

@section('title',  'Edit Customer')

@section('menubar')
    @parent
    Edit customer page.
@endsection

@section('content')
    <form action="/PartyPlus/Event/edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th>name: </th>
                <td><input type="text" name="name" value="{{$form->name}}"><td>
            </tr>
            <tr>
                <th>site: </th>
                <td><input type="text" name="site" value="{{$form->site}}"><td>
            </tr>
            <tr>
                <th>site_address: </th>
                <td><input type="text" name="site_address" value="{{$form->site_address}}"><td>
            </tr>
            <tr>
                <th>site_url: </th>
                <td><input type="text" name="site_url"  value="{{$form->site_url}}"><td>
            </tr>
            <tr>
                <th>charge: </th>
                <td><input type="textarea" name="charge" value="{{$form->charge}}"><td>
            </tr>
            <tr>
                <th>payment_method: </th>
                <td><input type="text" name="payment_method" value="{{$form->payment_method}}"><td>
            </tr>
            <tr>
                <th>date: </th>
                <td><input type="text" name="date" value="{{$form->date}}"><td>
            </tr>
            <tr>
                <th>time_start: </th>
                <td><input type="text" name="time_start" value="{{$form->time_start}}"><td>
            </tr>
            <tr>
                <th>time_end: </th>
                <td><input type="text" name="time_end" value="{{$form->time_end}}"><td>
            </tr>
            <tr>
                <th>top_fig: </th>
                <td><input type="text" name="top_fig" value="{{$form->top_fig}}"><td>
            </tr>
            <tr>
                <th>info: </th>
                <td><input type="textarea" name="info" value="{{$form->info}}"><td>
            </tr>
            <tr>
                <th>office: </th>
                <td><input type="text" name="office" value="{{$form->office}}"><td>
            </tr>
            <tr>
                <th>group_name: </th>
                <td><input type="text" name="group_name" value="{{$form->group_name}}"><td>
            </tr>
            <tr>
                <th>sponser_id: </th>
                <td><input type="text" name="sponser_id" value="{{$form->sponser_id}}"><td>
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
                <th></th>
                <td><input type="submit" value="send"><td>
            </tr>
        </table>
    </form>
@endsection

@section('footer')
    copywriting
@endsection
