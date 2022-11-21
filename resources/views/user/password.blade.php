<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.user.head')
    <title>Change password - 2HAND</title>
    {{--    <link id="pagestyle" href="{{asset('css/custom.css')}}" rel="stylesheet"/>--}}
</head>

<body>
@include('layouts.user.navbar')
{{--@yield('content')--}}
<div class="container py-3">
    <div class="card border-0">
        @include('layouts.user.sidebar')

        <div class="card-body my-3">
            <form action="/password" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 offset-4 mb-3">
                        <label class="form-label text-sm" for="current_password">Current password </label>
                        <input class="form-control form-control-lg" type="password" id="current_password"
                               name="current_password"
                               placeholder="Current password">
                    </div>
                    <div class="col-md-4 offset-4 mb-3">
                        <label class="form-label text-sm" for="new_password">New password</label>
                        <input class="form-control form-control-lg" type="password" id="new_password"
                               name="new_password"
                               placeholder="New password">
                    </div>
                    <div class="col-md-4 offset-4 mb-3">
                        <label class="form-label text-sm" for="confirm_password">Confirm password </label>
                        <input class="form-control form-control-lg" type="password" id="confirm_password"
                               name="confirm_password"
                               placeholder="Confirm password">
                    </div>
                    <div class="col-md-12 mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.user.footer')

<!--   Core JS Files   -->
<script src="{{ asset('js/core/popper.min.js') }}"></script>
<script src="{{ asset('js/core/jquery.js') }}"></script>
<script src="{{ asset('js/core/bootstrap.js') }}"></script>
<script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
<script src="{{asset('js/chart.js')}}"></script>

<x:notify-messages/>
@notifyJs

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('success'))
    <script>
        swal('{{session('success')}}', '', 'success');
    </script>
@endif
@if(session('warning'))
    <script>
        swal('{{session('warning')}}', '', 'warning');
    </script>
@endif
@if ($errors->any())
    <script>
        swal("{{$errors}}", '', 'warning');
    </script>
@endif

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('js/material-admin.js') }}"></script>
@yield('scripts')
</body>
</html>