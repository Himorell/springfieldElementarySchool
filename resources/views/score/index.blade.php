@extends('layouts.app')

@section('template_title')
    Score
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class="cardTitle" id="card_title">
                                {{ __('Score') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('scores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Student</th>
                                        <th>Academicyear</th>
                                        <th>Course</th>
                                        <th>Subject</th>
                                        <th>Quarter</th>
										<th>Mark 1</th>
                                        <th>Mark 2</th>
                                        <th>Mark 3</th>
                                        <th>Average</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scores as $score)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $score->student->name }}</td>
											<td>{{ $score->academicYear }}</td>
                                            <td>{{ $score->course }}</td>
                                            <td>{{ $score->subject }}</td>
											<td>{{ $score->quarter }}</td>
											<td>{{ $score->mark1 }}</td>
											<td>{{ $score->mark2 }}</td>
											<td>{{ $score->mark3 }}</td>
											<td>{{ $score->average }}</td>

                                            <td>
                                                <form action="{{ route('scores.destroy',$score->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('scores.show',$score->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('scores.edit',$score->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this score? {{ $score->alertName}} - ID {{$score->id }}')"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $scores->links() !!}
            </div>
        </div>
    </div>
@endsection
