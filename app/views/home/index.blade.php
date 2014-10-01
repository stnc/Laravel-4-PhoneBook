@extends('layouts.master')

@section('content_stnc')


<!-- Main content -->
<section class="content">
    <h4 class="page-header">
        Adress
        <small>The adress book example site <code>stnc</code>
        </small>
    </h4>
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>
                      {{ $AdressCat->count()}}
                    </h3>

                    <p>
                        Kategori
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>
                        {{ $adress->count()}}
                    </h3>

                    <p>
                        kayıtlı adres
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>
                      @if(Auth::check())  {{ (Auth::user()->count) }}  @endif
                    </h3>

                    <p>
                        yonetici
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->


    <!-- Widgets as boxes -->


    <!-- Solid boxes -->
    <div class="row">

        @if($adress->count())
        @foreach($adress as $r)
        <div class="col-md-6">
            <!-- Primary tile bg-aqua -->

            <div class="box box-solid bg-light-blue">
                <div class="box-header">
                    <h3 class="box-title">{{  $r->name }} {{ ucwords($r->lastname)}}</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th style="width:50%">adı:</th>
                                <td>{{  $r->name }}</td>
                            </tr>
                            <tr>
                                <th>soyadı</th>
                                <td>{{ ucwords($r->lastname)}}</td>
                            </tr>

                           <!-- <tr>
                                <th>telefon</th>
                                <td>{{ Carbon::createFromTimeStamp(strtotime($r->created_at))->formatLocalized('%A %d %B %Y')}}</td>
                            </tr> -->

                            <tr>
                                <th>Mail adresi</th>
                                <td>{{  $r->email }}</td>
                            </tr>
                            <tr>
                                <th>Not</th>
                                <td>{{ Str::limit($r->notes, 120)}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        @endforeach
        @else
        <h4>I'm sorry your search returned no results</h4>
        @endif
        @stop

    </div>
    <!-- /.row -->


</section><!-- /.content -->


@stop



