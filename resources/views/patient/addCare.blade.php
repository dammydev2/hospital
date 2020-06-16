@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12" style="height: 150px;"></div>
        <div class="col-md-4"></div>

        <div class="panel panel-primary col-md-4">
            <div class="panel-heading">Select Patient</div>
            <div class="panel-body">

                <form method="post" action="{{ route('patient/enterCare') }}">
                    @csrf

                    <div class="form-group">
                        <label>Select Patient</label>
                        <select name="patient_num" class="form-control js-example-basic-single">
                            @foreach($patient as $patients)
                            <option value="{{ $patients->patient_number }}">{{ $patients->surname.' '.$patients->first_name.' '.$patients->patient_number }}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary"> 

                </form>

            </div>
        </div>


    </div>
</div>
<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/select2.min.js') }}"></script>
<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
@endsection