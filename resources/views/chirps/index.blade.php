@extends('layouts.app')

@section('sidebar')
    @include('_sidebar-links')
@endsection

@section('content')
    @include('_publish-chirp-panel')
    @include('_timeline')
@endsection

@section('friends-list')
    @include('_friends-list')
@endsection
