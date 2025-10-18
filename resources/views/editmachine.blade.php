@extends('layouts.back.master')
@section('content')
    @livewire('editmachine',['machine_id'=>$machine_id])
@endsection