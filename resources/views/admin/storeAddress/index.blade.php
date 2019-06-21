@extends('adminlte::page')

@section('title', 'storeaddress table')

@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Danh sách chi nhánh</h3>
    <div class="box-header-button">
      <a href="{{ URL::to('admin/storeAddress/create') }}" class="btn btn-success">Thêm mới</a>
      <a href="{{ URL::to('admin/storeAddress/') }}" class="btn btn-default">Danh sách</a>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="cus-data-table">
    <br />
    @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif
    <table class="table table-striped col-sm-10">
      <thead>
        <tr>
          <th>ID</th>
          <th>Số điện thoại</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Ngày tạo</th>
          <th style="text-align: center;">Hành động</th>
        </tr>
      </thead>
      <tbody>

        @foreach($storeAddress as $passport)
        @php
        $old_date=date($passport['created_at']);
        $old_date_timestamp = strtotime($old_date);
        $date = date('Y-m-d', $old_date_timestamp);
        @endphp
        <tr>
          <td>{{$passport['id']}}</td>
          <td>{{$passport['phone']}}</td>
          <td>{{$passport['email']}}</td>
          <td>{{$passport['address']}}</td>
          <td>{{$date}}</td>
          <td>
            <div class="row">
              <div class="col-sm-6">
                <a href="{{ URL::to('admin/storeAddress/' . $passport->id . '/edit') }}" class="btn btn-warning" style="float: right;">Chi tiết</a>
              </div>
              <div class="col-sm-6">
                <form action="{{ URL::to('admin/storeAddress/' . $passport->id) }}" method="post">
                  @csrf
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Xóa</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $storeAddress->links() }}
  </div>
  <!-- /.box-body -->
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  console.log('store address!');
</script>
@stop