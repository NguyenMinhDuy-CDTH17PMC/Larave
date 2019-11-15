@extends('home')
@section('maincontent')
<div class="card-body">
    <h4 class="mb-3 header-title"><b style="font-size: 30px;font-family: Tahoma">SỬA LĨNH VỰC</b></h4>

    <form action="{{ route('linhvuc.xulycapnhat',$Linhvuc->id) }}" method="POST">
        @csrf
    <div class="formgroup">
        <label for="exampleInputEmail1" style="font-size: 20px;font-family: Tahoma">Tên lĩnh vực</label>
        <input type="text" style="width: 30%; "  class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" value="{{$Linhvuc->ten_linh_vuc}}" > 
    </div>
    <div style="margin-top: 15px;">
        <button type="submit" class="btn btn-danger waves-effect waves-light">Cập nhật</button>
    </div>
    </form>

</div>@endsection