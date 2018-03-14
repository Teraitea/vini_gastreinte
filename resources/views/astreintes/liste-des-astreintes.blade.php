@extends('layouts.app')
@section('content')
<table class="table table-striped table-hover table-inverse">
    <thead class="thead-inverse|thead-default">
        <tr>
            <th>Agent</th>
            <th>Date de début</th>
            <th>Date de fin</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($astreintes as $astreinte )
            <tr>
                <td>{{ $astreinte->username->prenom }}</td>
                <td>{{ $astreinte->date_debut }}</td>
                <td>{{ $astreinte->date_fin }}</td>
            </tr>
        </tbody>
        @endforeach
</table>
@stop