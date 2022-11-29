@extends('layouts.master')

@section('content')

@foreach ($cars as $car)
            <ul>
                <li>
                    {{ $car->title }}
                </li>
                <li>
                    {{ $car->producer }}
                </li>
                <li>
                    {{ $car->number_of_doors }}
                </li>
            </ul>
        @endif
    </div>
@endforeach
@endsection