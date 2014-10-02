@extends('layouts.master')

@section('content_stnc')

<!-- Main content -->
<section class="content">
    <!-- MAILBOX BEGIN -->


    <div class="row">
        <div class="col-md-12">

            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-inbox"></i>

                    <h3 class="box-title">Add Adress </h3>
                </div>


                {{ Form::open(array('route' => 'category.store')) }}
                @if($errors->any())
                <div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>

                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </div>
                @endif
                    <div class="box-body">


                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name"  value="{{ Input::old('name') }}" placeholder="Somebody Awesome">
                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                        </div>




                    </div>
                    <div class="modal-footer clearfix">



                        <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Add
                        </button>
                    </div>
                </form>

            </div>
            <!---end box box-primary ->

                                   <!--stnc son -->


        </div>


    </div>
</section>
@stop



