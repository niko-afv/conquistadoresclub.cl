@extends('backend.layouts.main')
@section('content')
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>This is main title</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <ul>
                        <?php foreach($especialidades as $item => $val){?>
                        <li><a href="/admin/especialidad/ver/<?php echo $val['ID'];?>"><?php echo $val['NOMBRE'];?></a></li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
@stop
