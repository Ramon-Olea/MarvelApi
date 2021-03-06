@extends('layouts.app')

@section('template_title')
    Character
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Character') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('characters.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>First Name</th>
										<th>Last Name</th>
										<th>Gender</th>
										<th>Age</th>
										<th>City</th>
										<th>State</th>
										<th>Country</th>
										<th>Character</th>
										<th>Comic</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($characters as $character)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $character->first_name }}</td>
											<td>{{ $character->last_name }}</td>
											<td>{{ $character->Gender }}</td>
											<td>{{ $character->Age }}</td>
											<td>{{ $character->city }}</td>
											<td>{{ $character->State }}</td>
											<td>{{ $character->country }}</td>
											<td>{{ $character->character }}</td>
											<td>{{ $character->comic }}</td>

                                            <td>
                                                <form action="{{ route('characters.destroy',$character->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('characters.show',$character->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('characters.edit',$character->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $characters->links() !!}
            </div>
        </div>
    </div>
@endsection
