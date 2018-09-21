@extends('admin.layouts.home')
@section('title', 'Category')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<a href="{{ route('add') }}"><button class="btn btn-primary" style="margin-bottom: 20px;">Add</button></a>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category parent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($cate as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->name}}</td>
                                <td>@isset($c->parent){{$c->parent->name}}@endisset</td>
                                <td>
                                	<a href="{{ asset('admin/category/edit/'. $c->id) }}"><button class="btn btn-success">Edit</button></a>
                                	<a href="{{ asset('admin/category/delete/' . $c->id) }}" onclick="return confirm('Ban co chac chan muon xoa?')"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection
