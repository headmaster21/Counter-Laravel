@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Counter</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('footer')
    <div class="float-right">
        Version: {{ config('app.version', '1.0.0') }}
    </div>

    <strong>
        <a href="{{ config('app.company_url', '#') }}">
            {{ config('appsworks.com', 'Power by AppsWorks') }}
        </a>
    </strong>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Counter Admin Dashboard!"); </script>
@stop