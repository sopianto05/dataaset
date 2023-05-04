<!-- Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qty', 'Qty:') !!}
    {!! Form::number('qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    {!! Form::number('subtotal', null, ['class' => 'form-control']) !!}
</div>

<!-- Penjualans Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('penjualans_id', 'Penjualans Id:') !!}
    {!! Form::number('penjualans_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Barangs Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('barangs_id', 'Barangs Id:') !!}
    {!! Form::number('barangs_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detailPenjualans.index') }}" class="btn btn-default">Cancel</a>
</div>
