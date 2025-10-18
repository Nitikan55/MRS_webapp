@extends('layouts.back.master')

@section('content')
    @livewire('edituser',['id'=>$id])
@endsection