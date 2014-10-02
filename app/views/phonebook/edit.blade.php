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

                    <h3 class="box-title">Edit Adress </h3>
                </div>


           	{{ Form::model($phonebook, array('method' => 'PATCH', 'route' => array('phonebook.update', $phonebook->id))) }}
			
		
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
                     
							
							{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Please insert your name here...')) }}
							
                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                        </div>



                        <div class="form-group @if ($errors->has('lastname')) has-error @endif">
                            <label for="lastname">Last Name</label>
                        {{ Form::text('lastname', Input::old('lastname'), array('class' => 'form-control')) }}
                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('lastname') }}</p> @endif
                        </div>



                        <div class="form-group @if ($errors->has('phone')) has-error @endif">
                            <label for="phone">Phone :</label>
                        
							      {{ Form::text('phone', Input::old('phone'), array('class' => 'form-control')) }}
                            @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
                        </div>




                        <div class="form-group @if ($errors->has('email')) has-error @endif">
                            <label for="email">Email</label>
                          
							      {{ Form::text('email', Input::old('email'), array('class' => 'form-control','placeholder' => 'john@example.com')) }}
                            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('notes')) has-error @endif">
                        <label for="notes">Notes</label>
									  	{{ Form::textarea('notes', Input::old('notes'), array('rows' => '3','class'=>'form-control')) }}	
                            @if ($errors->has('notes')) <p class="help-block">{{ $errors->first('notes') }}</p> @endif
                        </div>


                    </div>
                    <div class="modal-footer clearfix">



                        <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Add
                        </button>
                    </div>
                </form>

            </div>
            <!---end box box-primary -->

                                   <!--stnc son -->


        </div>


    </div>
</section>
@stop



