@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <a href="{{ url('/addUser') }}"><button type="button" class="btn btn-primary">Aggiungi</button></a>
                                    <div class="table-responsive">
                                        <table class="table align-items-center">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">Username</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->firstname }}</td>
                                                    <td>{{ $user->lastname }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                    <a href="{{ url('/updateUser/'.$user->id.'/') }}"><button class="btn btn-primary">Modifica</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection













































