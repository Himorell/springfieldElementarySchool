@extends('layouts.app')

@section('template_title')
    Student
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span class= cardTitle id="card_title">
                                {{ __('Student') }}
                            </span>
                            

                            <div class="float-right">
                                <a href="{{ route('students.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th></th>

										<th></th>
                                        <th>Name</th>
										<th>Surname</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>

											<td><img width= 40px src="{{ $student->image }}" alt="Student Image"><td>
                                            <td>{{ $student->name }}</td>
											<td>{{ $student->surname }}</td>
											<td>{{ $student->email }}</td>
											

                                            <td>
                                                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                                                    <a class="btn btn-sm  " href="{{ route('students.show',$student->id) }}"><div class="fa fa-fw fa-eye"><img src="css/img/showBottom.png" alt="Bottom Show"></div></a>
                                                    <a class="btn btn-sm " href="{{ route('students.edit',$student->id) }}"><i class="fa fa-fw fa-edit"><img src="css/img/editBottom.png" alt="Bottom Edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm"onclick="return confirm('Are you sure to delete this student? {{ $student->alertName}} - ID {{$student->id }}')"><i class="fa fa-fw fa-trash"></i><img src="css/img/deleteBottom.png" alt="Bottom Delete"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $students->links() !!}
            </div>
        </div>
    </div>
@endsection
