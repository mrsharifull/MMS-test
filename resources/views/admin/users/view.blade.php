@extends('admin.layouts.master')

@section('title', 'Dashboard')

@push('third_party_stylesheets')
@endpush

@push('page_css')
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <h4>Users</h4>
                </div>
                <div class="card-body dashboard-tabs p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($users as $key => $user)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                                <td>{{ $user->created_user->name ?? 'system' }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" class="btn btn-info btnView" data-id=""><i class="mdi mdi-eye"></i></a>
                                        <a href="" class="btn btn-dark btnEdit"><i class="mdi mdi-tooltip-edit"></i></a>
                                        <a href="" class="btn btn-danger btnDelete"><i class="mdi mdi-delete-forever"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('third_party_scripts')
@endpush

@push('page_scripts')
@endpush
