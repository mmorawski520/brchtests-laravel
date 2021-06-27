@extends('layouts.app')
@section('content')
    <body>
    <div class="container">
       <h1>Reports</h1>
        <div class="d-block  p-4 ">
        @forelse($reports as $report)
            <div id="#r{{$report->id}}" class=" border-top py-2" >
                <h1 class="text-break">{{$report->title}}</h1>
                <h3 class="float-right">{{__($report->action)}}</h3>
                @if($report->read==1)
                <button class="btn btn-outline-dark  " id="reasonButton" data-id="{{$report->id}}">read</button>
                @else
                    <button class="btn btn-outline-info  " id="reasonButton" data-id="{{$report->id}}">read</button>
                    @endif
                    <div class="description" id="d{{$report->id}}">
                    {{$report->reason}}
                </div>
        </div>
            @empty
            <h2>You're just model user :D </h2>
                @endforelse
        </div>
    </div>
    </body>
    <script src="{{ asset('js/selectReport.js') }}">
@endsection
