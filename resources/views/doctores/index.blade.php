@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Emergencias</h1>
    </center>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">                                
                <doctores-component>
                </doctores-component>
            </div>
        </div>
    </div>
</div>    
@endsection