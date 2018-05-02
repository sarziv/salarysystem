@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<br>
                                 <div class="card">
                                     <div class="card-header text-center" style="background-color: #e3f2fd;">
                                         Sveikas!
                                     </div>
                                     <div class="card-body">
                                         <h5 class="card-title">E-Systema tavo pinigam skaičiuoti.</h5>
                                         <p class="card-text">
                                             <ul>
                                             <li>Add - Skaičiuotuvas.</li>
                                             <li>Tracker - Tavo uždirbti pinigai.</li>
                                             <li>Manage -  redagavimas/Papildomos val. ir t.t</li>
                                         </ul>
                                         </p>

                                     </div>
                                 </div>

                            </div>

        </div>
    </div>
@endsection
