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

        <div class="col-md-12" style="height: 20px;"></div>
        <div class="col-md-1"></div>

        <div class="panel panel-primary col-md-9">
            <div class="panel-heading">Add Patient History</div>
            <div class="panel-body">

                <form method="post" action="{{ route('patient/searchTag') }}">
                    @csrf

                    <div class="col-md-12">
                        <div class="form-group has-feedback col-md-4 {{ $errors->has('record_number') ? ' has-error' : '' }}">
                            <input type="text" name="issue[]" value="present complaints" class="form-control">
                            @if ($errors->has('record_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('record_number') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group col-md-8">
                            <textarea placeholder="enter record here" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group has-feedback col-md-4 {{ $errors->has('record_number') ? ' has-error' : '' }}">
                            <input type="text" name="issue[]" value="issue of PC" class="form-control">
                            @if ($errors->has('record_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('record_number') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group col-md-8">
                            <textarea placeholder="enter record here" class="form-control"></textarea>
                        </div>
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