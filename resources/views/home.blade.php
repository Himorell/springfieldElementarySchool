@extends('layouts.app')
<link href="{{ asset('css/img/style.css') }}" rel="stylesheet">
@section('content')
<div class="row">
    <div class="col-md-2">
        
    </div>
    
    <div class="col-md-10 p-3">
        <div class="container">
        <h2 class="text-center mb-3"> Students Sumary</h2>
        <table class="table text-bg-warning">
            <tr>
                <th>
                    Student</th>
                    <th>
                        Language Mark</th>
                        <th>
                    Maths Mark</th>
                    <th>
                        Music Mark</th>
                        <th>
                            Art Mark</th>
                            <th>
                                Biology Mark</th>
                                <th>
                                    Average</th>
            </tr>
            @foreach ($scores as $score)
            <tr>
                <td>
                    Julia
                </td>
                <td>
                    7
                </td>
                <td>
                    8
                </td>
                <td>
                    5
                </td>
                <td>
                    9
                </td>
                <td>
                    6
                </td>
                <td>
                    7
                </td>
            </tr>
            @endforeach
        </table>
        </div>
    </div>
</div>
@endsection
