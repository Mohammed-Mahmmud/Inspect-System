@extends('website.company.layouts.master')
@section('title', 'STC - Client')
@section('css')
@endsection
@section('content')





@endsection
@section('js')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
@endsection
