
@extends('administrator/layout')

@section('css')
@stop

@section('pageheader')
    <h2><i class="fa fa-list-alt"></i>Secciones</h2>
    <div class="breadcrumb-wrapper">
        <span class="label">Usted se encuentra en:</span>
        <ol class="breadcrumb">
            <li class="active">Secciones</li>
        </ol>
    </div>
@stop


@section('content')

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table mb30">
                    <thead>
                    <tr>
                        <th>Sección</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{$section['title']}}</td>
                            <td> <a href="{{ route('admin_section_edit', $section['id']);  }}">Editar <i class="fa fa-arrow-circle-right"></i></a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- table-responsive -->
            <div class="panel-footer panel-btns" style="text-align: right;">
                <a href="{{ route('admin_section_create') }}" class=" btn btn-default">Nueva sección</a>
            </div>
        </div><!--Panel Body-->



    </div>

@stop




@section('script')

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.table').dataTable({

            });

            $( "#menu-secciones" ).addClass( "active" );

        });

    </script>
@stop
