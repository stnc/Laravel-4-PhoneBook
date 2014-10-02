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
          

                         
                        </div>
                        <!-- /.col (LEFT) -->

                        <div class="col-md-12 col-sm-12">


                            <!---search-->
                            <div class="row pad">
                                <div class="col-sm-12">

                                    <!-- Action button -->


                                </div>
                         
                            </div>
                            <!---search end-->


                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Adress Category List </h3>


                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-bordered table-striped table-hover">
                                        <tbody>
                                        <tr>

                                            <th>Name </th>

                                     
                                            <th style="width: 40px">Actions</th>
                                        </tr>
                                        <tr>
                                             @if($AdressCat->count())
                                    @foreach($AdressCat as $cat)


                                            <td> {{  $cat->name }} </td>
                                   

                                       
                                            <td>
                                                <div class="tools">
                                                    <a href="/category/{{  $cat->id }}/edit" class="fa fa-edit"></a>


                                                    {{ Form::open(array('method' => 'DELETE','id' => 'form-add-a-option', 'route' => array('category.destroy', $cat->id))) }}

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
                            {{ $AdressCat->links()}}
                         
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
