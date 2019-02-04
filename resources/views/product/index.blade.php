@extends('layouts.master')
@section('title') BikeShop | รายการสินค้า
@endsection
@section('content')
<div class="container">
    
    <div class="panel panel-primary">
        <div class="panel-heading">
            <strong>รายการสินค้า</strong>
        </div>
    </div>
    <div class="panel-body">
    <center><form action="{{URL::to('product/search')}}" method="POST" class="form-inline">
        {{csrf_field()}}  {{--กลไลรักษาความปลอดภัยในการส่ง form แบบ post--}}
        <table><tr>
            <td><input type="text" name="q" class="form-control btnSearch" placeholder="พิมพ์คำที่ต้องการค้นหา"></td>
            <td>&nbsp;<button type="submit" class="btn btn-primary">ค้นหา</button></td>
        </tr>
        </table>
        <span style="float:right;"><h6>แสดงข้อมูลจำนวน {{count($products)}} รายการ</h6></span>
    </form><br>
    <table class="table table-bordered bs_table">
        <thead>
            <th>รหัส</th>
            <th>ชื่อสินค้า</th>
            <th>ประเภท</th>
            <th>จำนวน</th>
            <th>ราคา</th>
            <th>การทำงาน</th>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <td>{{$item->code}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->stock_qty}}</td>
                <td>{{number_format($item->price,2)}}</td>
                <td>
                    <a href="{{URL::to('product/edit/'.$item->id)}}" class="btn btn-info"><i class="fa fa-edit"></i> แก้ไข</a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> ลบ</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">รวม</th>
                <th>{{$products->sum('stock_qty')}}</th>
                <th>{{number_format($products->sum('price'),2)}}</th>
                <th></th>
            </tr>
        </tfoot>
    </table>
    <div class="panel-footer">
            <span>{{$products->links()}}</span>
    
    </div>
    </div>
</div>

@endsection