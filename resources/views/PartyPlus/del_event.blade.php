@extends('layouts.PartyPlus')

@section('title',  'Delete')

@section('menubar')
    @parent
    Delete Customer page.
@endsection

@section('content')
<form action="/PartyPlus/Event/del" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th>name: </th>
                <td>{{$form->name}}<td>
            </tr>
            <tr>
                <th>site: </th>
                <td>{{$form->site}}<td>
            </tr>
            <tr>
                <th>site_address: </th>
                <td>{{$form->site_address}}<td>
            </tr>
            <tr>
                <th>site_url: </th>
                <td>{{$form->site_url}}<td>
            </tr>
            <tr>
                <th>charge: </th>
                <td>{{$form->charge}}<td>
            </tr>
            <tr>
                <th>payment_method: </th>
                <td>{{$form->payment_method}}<td>
            </tr>
            <tr>
                <th>date: </th>
                <td>{{$form->date}}<td>
            </tr>
            <tr>
                <th>time_start: </th>
                <td>{{$form->time_start}}<td>
            </tr>
            <tr>
                <th>time_end: </th>
                <td>{{$form->time_end}}<td>
            </tr>
            <tr>
                <th>top_fig: </th>
                <td>{{$form->top_fig}}<td>
            </tr>
            <tr>
                <th>info: </th>
                <td>{{$form->info}}<td>
            </tr>
            <tr>
                <th>office: </th>
                <td>{{$form->office}}<td>
            </tr>
            <tr>
                <th>group_name: </th>
                <td>{{$form->group_name}}<td>
            </tr>
            <tr>
                <th>sponser_id: </th>
                <td>{{$form->sponser_id}}<td>
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
                <th></th>
                <td><input type="submit" value="send"><td>
            </tr>
    </table>
</form>
@endsection

@section('footer')
    copywriting
@endsection
