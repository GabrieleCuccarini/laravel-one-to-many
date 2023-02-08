@extends('layouts.app');

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID </th>
        <th>Linguaggio </th>
      </tr>
    </thead>

    <tbody>
        <tr>
            <td>{{ $type['id'] }}</td>
            <td>{{ $type->linguaggio }}</td>
        </tr>
    </tbody>
</table>
@endsection