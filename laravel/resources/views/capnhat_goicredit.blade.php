@extends('home')
@section('maincontent')
<div class="card-body">
    <h4 class="mb-3 header-title"><b style="font-size: 30px;font-family: Tahoma">Sửa GÓI CREDIT</b></h4>

    <form action="{{ route('goicredit.xulycapnhat',$GoiCredit->id)}}" method="POST">
    	@csrf
        <div class="form-group">
            <label for="exampleInputEmail1" style="font-size: 20px;font-family: Tahoma">Tên gói credit</label>
            <input type="text" style="width: 30%; "  class="form-control" id="ten_goi" name="ten_goi" value="{{$GoiCredit->ten_goi}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="font-size: 20px;font-family: Tahoma">Credit</label>
            <input type="text" style="width: 30%; "  class="form-control" id="credit" name="credit" value="{{$GoiCredit->credit}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" style="font-size: 20px;font-family: Tahoma">Số tiền</label>
            <input type="text" style="width: 30%; "  class="form-control" id="so_tien" name="so_tien" value="{{$GoiCredit->so_tien}}">
        </div>
        <button type="submit" class="btn btn-warning waves-effect waves-light">Cập nhật</button>
    </form>
</div>@endsection