@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s7 offset-s2">
            <div class="card-panel">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="input-field">
                        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="dummy@example.com">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field">
                        <input id="password" name="password" type="password" placeholder="Your Password">
                        <label for="password">Password</label>
                    </div>


                    <div class="input-field">
                        <button class="btn red lighten-2 waves-effect waves-light" type="submit" name="action">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
