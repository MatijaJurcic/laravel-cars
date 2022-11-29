@extends('layouts.master')

@section('content')
@foreach ($cars as $car)
                    
<a href="/cars/{{ $car->id }}">{{ $car->title }}</a>
                        
{{ $car->producer }}
                        
{{ $car->number_of_doors }}
                      
@endforeach

@endsection