{!! Form::open(array('action' => 'ProductController@insert','method' => 'post','enctype' => 'multipart/form-data')) !!}
            <table>
                <tr>
                    <td>{{ Form::label('code','รหัสสินค้า') }}</td>
                    <td>{{ Form::text('code',Input::old('code'),['class' => 'form-control'])}}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('name','ชื่อสินค้า') }}</td>
                    <td>{{ Form::text('name',Input::old('name'),['class' => 'form-control'])}}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('category_id','ประเภทสินค้า') }}</td>
                    <td>{{ Form::select('category_id',$categories,Input::old('category_id'),['class' => 'form-control'])}}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('stock_qty','คงเหลือ') }}</td>
                    <td>{{ Form::text('stock_qty',Input::old('stock_qty'),['class' => 'form-control'])}}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('price','ราคาต่อหน่วย') }}</td>
                    <td>{{ Form::text('price',Input::old('price'),['class' => 'form-control'])}}</td>
                </tr>
                <tr>
                    <td>{{ Form::label('image','เลือกรูปภาพสินค้า') }}</td>
                    <td>{{ Form::file('image')}}</td>
                </tr>
                
            </table>
    <div class="panel-footer">
        <button type="reset" class="btn btn-danger">ยกเลิก</button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>บันทึก</button>
    </div>
</div>
{!! Form::close() !!}