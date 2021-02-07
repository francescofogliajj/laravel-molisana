@extends('layouts.main')

@section('content')

    @include('partials.cards', ['title' => 'Le Lunghe', 'array' => $lunghe] )

    @include('partials.cards', ['title' => 'Le Corte', 'array' => $corte] )

    @include('partials.cards', ['title' => 'Le Cortissime', 'array' => $cortissime] )

@endsection