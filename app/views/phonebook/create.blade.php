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


                {{ Form::open(array('route' => 'phonebook.store')) }}
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



                        <div class="form-group @if ($errors->has('lastname')) has-error @endif">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" class="form-control" value="{{ Input::old('lastname') }}" name="lastname" >
                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('lastname') }}</p> @endif
                        </div>



                        <div class="form-group @if ($errors->has('phone')) has-error @endif">
                            <label for="phone">Phone :</label>
                            <input type="text" id="phone" class="form-control" name="phone"  value="{{ Input::old('phone') }}" >
                            @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
                        </div>




                        <div class="form-group @if ($errors->has('email')) has-error @endif">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" name="email" value="{{ Input::old('email') }}" placeholder="john@example.com">
                            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('notes')) has-error @endif">
                            <textarea placeholder="Enter ..." rows="3" name="notes" id="notes"
                                      class="form-control">{{ Input::old('notes') }}</textarea>
                            @if ($errors->has('notes')) <p class="help-block">{{ $errors->first('notes') }}</p> @endif
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



