@extends('admin.layouts.master')
@section('content')
    <main class="main-content">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <h4 class="card-title"> نقش های {{$user->name}}</h4>
                    @include('auth.errors')
                    <form method="POST" action="{{route('store_user_roles',$user->id)}}">
                        @csrf
                        @foreach($roles as $role)
                            <div class="form-group form-check">
                                <input type="checkbox"
                                       name="roles[]"
                                       value="{{ $role->id }}"
                                       class="form-check-input"
                                    {{ $user->roles->contains($role->id) ? 'checked' : '' }}>
                                <label class="form-check-label" >{{ $role->name }}</label>
                            </div>
                        @endforeach
                        <div class="form-group row">
                            <button type="submit" class="btn btn-success btn-uppercase">
                                <i class="ti-check-box m-r-5"></i> ذخیره
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
