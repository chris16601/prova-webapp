@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                                    <div class="table-responsive">
                                        <form method="PUT" action="{{ url('/addUser/add') }}">
                                            @method("PUT")
                                            <div class="row">
                                                <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstName">First Name</label>
                                                    <input type="text" placeholder="First Name" id="firstName" name="firstName" class="form-control" required/>
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="lastName">Last Name</label>
                                                    <input type="text" placeholder="Last Name" id="lastName" name="lastName" class="form-control" required/>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="username" required/>
                                                </div>
                                                </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                                            </div>
                                            </div>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary">Salva</button>
                                            </div>
                                        </form>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    @include('layouts.footers.auth.footer')
@endsection
