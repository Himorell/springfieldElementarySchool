@extends('layouts.app')
<link href="{{ asset('css/img/style.css') }}" rel="stylesheet">
@section('content')

<div class="row">
    <div class="col-md-2">
    </div>
</div>
    <div class="card">
        <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span class= "cardTitle" id="card_title">
                        {{ __('Students Summary') }}
                </span>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead">
                        <tr>
                            <th></th>

                            <th></th>
                            <th>Student</th>
                            <th>Language Mark</th>
                            <th>Maths Mark</th>
                            <th>Music Mark</th>
                            <th>Art Mark</th>
                            <th>Biology Mark</th>
                            <th>Average</th>

                            <th></th>
                        </tr>
                    </thead>
            </div>
        </div>
</div>  
    <!-- <div class="col-md-10 p-3">
        <div class="container">
        <h2 class="text-center mb-3"> Students Sumary</h2>
        <table class="card1">
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
            </tr> -->
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
