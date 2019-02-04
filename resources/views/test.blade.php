@extends("layouts.master")

@section("title")
ข้อมูลผู้ใช้
@endsection
@section('content')

{{-- <h1>ชื่อ :{{$name}}</h1>
<h1>นามสกุล :{{$surname}}</h1>
<h1>อายุ :{{$age}}</h1> --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <strong>การใช้ Table</strong>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>ราคาขาย</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>P001</td>
                            <td>ชุดจักรยาน ขนาด XL</td>
                            <td>2500.00</td>
                        </tr>
                        <tr>
                            <td>P002</td>
                            <td>หมวกกันน็อกรุ่น DL330</td>
                            <td>1500.00</td>
                        </tr>
                        <tr>
                            <td>P003</td>
                            <td>ชุดเกียร์ Shimano รุ่น SH-001</td>
                            <td>4500.00</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="btn btn-default"><i class="fa fa-home"></i>Default</a>
                <a href="#" class="btn btn-primary"><i class="fa fa-save"></i>save</a>
                <a href="#" class="btn btn-info"><i class="fa fa-home"></i>Default</a>
                <a href="#" class="btn btn-success"><i class="fa fa-home"></i>Default</a>
                <a href="#" class="btn btn-warning"><i class="fa fa-home"></i>Default</a>
                <a href="#" class="btn btn-danger"><i class="fa fa-home"></i>Default</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 ">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <strong>จัดหน้า Form แบบธรรมดา</strong>
                </div>
            </div>
            <div class="panel-body">

                <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้">

                <input type="text" class="form-control" name="password" placeholder="รหัสผ่าน">

                <a href="#" class="btn btn-success">Default</a>
            </div>
        </div>
        <div class="col-md-8 ">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <strong>จัดหน้า Form แบบแนวนอน inline</strong>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-inline">
                    <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้">
                    <input type="text" class="form-control" name="password" placeholder="รหัสผ่าน">
                    <a href="#" class="btn btn-success">Default</a>
                </div>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <strong>จัดหน้า Form แบบมี Group ว่า textbox นี้อยู่ group ไหน  และมี help block แจ้งเตือน</strong>
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group has-error">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้">
                    <div class="help-block">กรุณากรอก Username</div>
                </div>
                <div class="form-group has-error">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="รหัสผ่าน">
                    <div class="help-block">กรุณากรอก Password</div>
                </div>
                <a href="#" class="btn btn-success">Default</a>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <strong>icon จาก font-awesome</strong>
                    </div>
                </div>
                <div class="panel-body">
                    <a href="#" class="btn btn-default"><i class="fa fa-home"> หน้าหลัก</i></a>
                    <a href="#" class="btn btn-primary"><i class="fa fa-save"> บันทึก</i></a>
                    <a href="#" class="btn btn-info"><i class="fa fa-edit"> แก้ไข</i></a>
                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> ลบ</i></a>
                </div>
            </div>
    
    
        </div>
</div>
@endsection