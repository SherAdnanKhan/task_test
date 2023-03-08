@extends('layouts.app')
@section('content')
@if($data)
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <h2> {{$data->title}} </h2>
            <table>
                <tr>
                    @foreach ($data->data->headers as $item)
                    <th>{{$item}}</th>
                    @endforeach
                </tr>
                @foreach ($data->data->rows as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->fname }}</td>
                    <td>{{ $item->lname }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ date('Y-m-d', strtotime( $item->email)) }}</td>
                </tr>
                @endforeach
            </table>
            @endif
            <button id="refresh">Refresh</button>
        </div>
    </div>
</div>

@endsection

@section("custom_script")
<script>
    document.addEventListener("DOMContentLoaded", function(event) { 
        document.getElementById('refresh').addEventListener('click', function() {
            window.location.reload();
        });
    });
</script>

@endsection