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
                                         Vartotojas: <b> {{ Auth::user()->name }}</b>
                                     </div>
                                         <div class="card-body">
                                             <h5 class="card-title text-center">E-Systema tavo pinigam skaičiuoti</h5>
                                             <p class="card-text ">
                                                 <ul>
                                             <p>Kaip naudotis?</p>
                                                <ul>
                                                    <li>Pridėti - Uždirbtų pinigų saugominas</li>
                                                    <li>Priminimai - Užrašų knygėlė.</li>
                                                    <li>Istorija - Dienų istorija ir ištrynimas</li>
                                                    <li>Atlyginimas - Viso mėnesio atlyginimas</li>
                                                </ul>
                                             <br>
                                                <p> Kas naujo?</p>
                                             <ul>
                                                 <li>
                                                    Priminimai, jai kada gedas nepadarė motivacinės ;)
                                                 </li>
                                             </ul>
                                             <p> BugFix</p>
                                             <ul>
                                                 <li>
                                                     Fast logout bug.
                                                 </li>
                                                 <li>
                                                     Multi-form request.
                                                 </li>
                                             </ul>
                                             </p>
                                             </ul>
                                             </p>

                                         </div>
                                 </div>
                     </div>
        </div>
    </div>
@endsection
