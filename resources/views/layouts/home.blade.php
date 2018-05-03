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
                                         <h5 class="card-title text-center">E-Systema tavo pinigam skaičiuoti</h5>
                                         <p class="card-text ">
                                             <ul>
                                             <p> Nauja algų skaičiavimo sistema.</p>
                                                Siūlykite pasiūlymas apie sistemos tobulinima -> Čia
                                             <a href="https://discord.gg/nEbeTFE">Discord</a>
                                         </ul>
                                         </p>

                                     </div>
                                 </div>

                            </div>

        </div>
    </div>
@endsection
