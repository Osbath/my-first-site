@extends('layouts.app')

@section('content')

<ul>
@foreach($names as $name)
    <li @if($name == 'Traza') style="font-weight:bold;" @endif>
        @if($loop->last) Utolsó: @endif
        {{ $name }}
    </li>
@endforeach
</ul>
@endsection