@extends('layouts.master')

@section('content_stnc')

<!-- Main content -->
<section class="content">
    <!-- MAILBOX BEGIN -->
    <div class="mailbox row">
        <div class="col-xs-12">
            <div class="box box-solid">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <!-- BOXES are complex enough to move the .box-header around.
                                 This is an example of having the box header within the box body -->
                            <div class="box-header">
                                <i class="fa fa-inbox"></i>

                                <h3 class="box-title">Adress BOOK</h3>
                            </div>
                            <!-- compose message btn -->
                            <a class="btn btn-block btn-primary" href="/phonebook/create"><i
                                    class="fa fa-pencil"></i> Add</a>

                            <!-- Navigation - folders-->
                            <div style="margin-top: 15px;">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="header">Category (  {{ $AdressCat->count() }}  ) </li>
                                    <li><a href="/phonebook"><i class="fa fa-inbox"></i> ALL </a></li>
                                    @if($AdressCat->count())
                                    @foreach($AdressCat as $cat)
                                    <li><a href="/phonebook/cat/{{  $cat->id }}"><i class="fa fa-inbox"></i> {{  $cat->name }} </a></li>
                                    @endforeach
                                    @else
                                    <h4>no results</h4>
                                    @endif


                                </ul>
                            </div>
                        </div>
                        <!-- /.col (LEFT) -->

                        <div class="col-md-9 col-sm-8">


                            <!---search-->
                            <div class="row pad">
                                <div class="col-sm-6">

                                    <!-- Action button -->


                                </div>
                                <div class="col-sm-6 search-form">

                                        {{ Form::open(array('url' => 'search','class' => 'text-right')) }}
                                        <div class="input-group">
                                            <input type="text" placeholder="Search" name="search" class="form-control input-sm">

                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-primary" name="q" type="submit">

                                                    <i class="fa fa-search"></i></button>
                                            </div>


                                        </div>
                                    {{ Form::close()}}
                                </div>
                            </div>
                            <!---search end-->


                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Adress Phone List </h3>


                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-bordered table-striped table-hover">
                                        <tbody>
                                        <tr>

                                            <th>Name /Last Name</th>

                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th style="width: 40px">Actions</th>
                                        </tr>
                                        <tr>
                                            @if($adress->count())
                                            @foreach($adress as $r)


                                            <td> {{  $r->name }} {{ ucwords($r->lastname)}}</td>
                                            <td>{{  $r->phone }}</td>
                                            <td> {{  $r->email }} </td>

                                       
                                            <td>
                                                <div class="tools">
                                                    <a href="/phonebook/{{  $r->id }}/edit" class="fa fa-edit"></a>


                                                    {{ Form::open(array('method' => 'DELETE','id' => 'form-add-a-option', 'route' => array('phonebook.destroy', $r->id))) }}

                                                    <button  type="submit" title="delete" class="btn btn-primary btn-xs fa fa-trash-o"><i class="fa fa-times"></i></button>
                                                    {{ Form::close() }}

                                                </div>
                                            </td>
                                        </tr>

					                        @endforeach
                                            @else
                                            <h4>I'm sorry  no results</h4>
                                            @endif

                                        </tbody>
                                    </table>


                                </div>


                                <!-- /.box-body -->
                            </div>
                            {{ $adress->links()}}
                            @stop
                        </div>
                        <!--stnc son -->


                    </div>

                    <!-- /.table-responsive -->
                </div>
                <!-- /.col (RIGHT) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <div class="pull-right">
                <small>Showing 1-12/1,240</small>
                <button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>
                <button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>
            </div>
        </div>
        <!-- box-footer -->
    </div>
    <!-- /.box -->
    </div><!-- /.col (MAIN) -->
    </div>
    <!-- MAILBOX END -->

</section><!-- /.content -->





@stop
