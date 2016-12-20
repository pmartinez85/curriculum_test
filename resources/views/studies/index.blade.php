@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Studies
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">


                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Study</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->

                    </div>


                    <div class="box-body">
                        <div class="form-group has-error">
                        <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                        error</label>
                        <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                        <span class="help-block">Help block with error</span>
                        </div>




                        <div class="form-group has-warning">
                        <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                        warning</label>
                        <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                        <span class="help-block">Help block with warning</span>
                        </div>

                    <form role="form" action="/studies" method="post">

                       {{ csrf_field() }}

                    <input type="hidden" name="law_id" value="1">
                        @if ($errors->has('name'))
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-check"></i> Name with warning </label>
                            <input type="text" class="form-control" id="inputWarning" placeholder="Name here..." name="name">
                            @foreach ($errors->get('name') as $message)
                                <span class="help-block">{{$message}}</span>
                            @endforeach
                        </div>
                        @else
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                            </div>
                        @endif
                        <input type="submit" name="create">
                    </form>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </div>


                <div class="box box-default">
                    <div class="box-header with-border">Studies</div>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>

                    <div class="box-body">

                        <table class="box table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($studies as $study)
                                <tr>
                                    <td>{{ $study->id  }}</td>
                                    <td>{{ $study->name }}</td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
