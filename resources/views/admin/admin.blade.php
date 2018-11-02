@extends('app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <br>
                <div class="card">
                    <div class="card-header text-center" style="background-color: #e3f2fd;">Administracijos prisijungimas</div>

                    <div class="card-body text-center">
                        <form class="form-horizontal" method="POST" action="{{ route('adminpage') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Slaptažodis</label>

                                <div class="col-md-6 mx-auto">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group topmargin">
                                <div class="col-md-8 col-md-offset-4 mx-auto">
                                    <button type="submit" class="btn btn-primary">
                                        Prisijungti
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

