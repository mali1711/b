@extends('Admin.Base')
@section('content')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">列表</h3>
    </div>

    <div id="demo-custom-toolbar2" class="table-toolbar-left">
        <a href="/Admin/Column/create" id="demo-dt-addrow-btn" class="btn btn-primary"><i class="demo-pli-plus"></i> 添加</a> 
        <div class="col-m-5">
        <!--Block Level buttons-->
        <!--===================================================-->
        <!--===================================================-->
    </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="list-style: none">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   
    <!--Block Level buttons-->
    <!--===================================================-->
    <strong class="col-md-4 col-md-offset-4  alert-success">{{Session::get('info')}}</strong>

        <!--===================================================-->
    <div class="panel-body">
        <table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>栏目名称</th>
                    <th class="min-tablet">URL地址</th>
                    <th class="min-tablet">ICON</th>
                    <th class="min-tablet">创建时间</th>
                    <th class="min-tablet">修改时间</th>
                    <th class="min-desktop">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $val)
                <tr>
                    <td>{{$val->id}}</td>
                    <td><?php if ($val->lev != 1) {echo str_repeat("-",4*$val->lev);}?>{{$val->name}}</td>
                    <td>{{$val->url}}</td>
                    <td>{{$val->icon}}</td>
                    <td><?=date('Y-m-d H:i:s',$val['create_time'])?></td>
                    <td><?=date('Y-m-d H:i:s',$val['update_time'])?></td>
                    <td>
                    	<a href="/Admin/Column/{{$val->id}}" class="btn btn-xs btn-rounded btn-warning">修改</a>
                        <form action="/Admin/Column/{{$val->id}}" method="POST" style="display: inline;" accept-charset="utf-8">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                           <button class="btn btn-xs btn-rounded btn-danger">删除</button>
                        </form>
                    	
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
</div>
@endsection