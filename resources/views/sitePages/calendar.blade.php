@extends('layouts.master')

@section('content')
<div style="height: 300px;">
{!! $calendar->calendar() !!}
{!! $calendar->script() !!}
</div>
@endsection
