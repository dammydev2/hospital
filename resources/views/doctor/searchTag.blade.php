@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
        @endif

        <div class="col-md-12" style="height: 150px;"></div>
        <div class="col-md-4"></div>

        <div class="panel panel-primary col-md-4">
            <div class="panel-heading">Search Number</div>
            <div class="panel-body">

                <form method="post" action="{{ route('patient/searchTag') }}">
                    @csrf

                    <div class="form-group has-feedback {{ $errors->has('record_number') ? ' has-error' : '' }}">
                         <label>Enter Record Number</label>
                        <input type="text" name="record_number" value="{{ old('record_number') }}" class="form-control">
                        @if ($errors->has('record_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('record_number') }}</strong>
                        </span>
                        @endif
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