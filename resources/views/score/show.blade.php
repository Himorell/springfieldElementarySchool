@extends('layouts.app')

@section('template_title')
    {{ $score->name ?? 'Show Score' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Score</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('scores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Academicyear:</strong>
                            {{ $score->academicYear }}
                        </div>
                        <div class="form-group">
                            <strong>Course:</strong>
                            {{ $score->course }}
                        </div>
                        <div class="form-group">
                            <strong>Subject:</strong>
                            {{ $score->subject }}
                        </div>
                        <div class="form-group">
                            <strong>Id Students:</strong>
                            {{ $score->id_students }}
                        </div>
                        <div class="form-group">
                            <strong>Quarter:</strong>
                            {{ $score->quarter }}
                        </div>
                        <div class="form-group">
                            <strong>Mark 1:</strong>
                            {{ $score->mark1 }}
                        </div>
                        <div class="form-group">
                            <strong>Mark 2:</strong>
                            {{ $score->mark2 }}
                        </div>
                        <div class="form-group">
                            <strong>Mark 3:</strong>
                            {{ $score->mark3 }}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
