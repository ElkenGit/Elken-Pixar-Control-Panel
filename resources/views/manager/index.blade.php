@extends('voyager::app')

@section('content')
    <bread-builder-browse
        :tables="{{ json_encode($tables) }}"
        :breads="{{ json_encode(Bread::getBreads()) }}"
    />
@endsection
