
<div class="form-group {{ $errors->has('cnt') ? 'has-error' : '' }} col-md-6">
    <label for="cnt" class="col-md-2 control-label">Cnt</label>
    <div class="col-md-10">
        <input class="form-control" name="cnt" type="number" id="cnt" value="{{ old('cnt', optional($permit)->cnt) }}" min="-2147483648" max="2147483647" placeholder="Enter cnt here...">
        {!! $errors->first('cnt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fch') ? 'has-error' : '' }}  col-md-6">
    <label for="fch" class="col-md-2 control-label">Fch</label>
    <div class="col-md-10">
        <input class="form-control date-control" name="fch" type="text" id="fch" value="{{ old('fch', optional($permit)->fch) }}" minlength="1"  placeholder="Enter fch here...">
        {!! $errors->first('fch', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ini') ? 'has-error' : '' }}  col-md-6">
    <label for="ini" class="col-md-2 control-label">Ini</label>
    <div class="col-md-10">
        <input class="form-control date-control" name="ini" type="text" id="ini" value="{{ old('ini', optional($permit)->ini) }}" minlength="1" placeholder="Enter ini here...">
        {!! $errors->first('ini', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fin') ? 'has-error' : '' }}  col-md-6">
    <label for="fin" class="col-md-2 control-label">Fin</label>
    <div class="col-md-10">
        <input class="form-control date-control" name="fin" type="text" id="fin" value="{{ old('fin', optional($permit)->fin) }}" minlength="1" placeholder="Enter fin here...">
        {!! $errors->first('fin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('obs') ? 'has-error' : '' }}  col-md-6">
    <label for="obs" class="col-md-2 control-label">Obs</label>
    <div class="col-md-10">
        <input class="form-control" name="obs" type="number" id="obs" value="{{ old('obs', optional($permit)->obs) }}" min="-2147483648" max="2147483647" placeholder="Enter obs here...">
        {!! $errors->first('obs', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('sta') ? 'has-error' : '' }}  col-md-6">
    <label for="sta" class="col-md-2 control-label">Sta</label>
    <div class="col-md-10">
        <input class="form-control" name="sta" type="number" id="sta" value="{{ old('sta', optional($permit)->sta) }}" min="-2147483648" max="2147483647" placeholder="Enter sta here...">
        {!! $errors->first('sta', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('tpo') ? 'has-error' : '' }}  col-md-6">
    <label for="tpo" class="col-md-2 control-label">Tpo</label>
    <div class="col-md-10">
        <input class="form-control" name="tpo" type="number" id="tpo" value="{{ old('tpo', optional($permit)->tpo) }}" min="-2147483648" max="2147483647" placeholder="Enter tpo here...">
        {!! $errors->first('tpo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('fecadi1') ? 'has-error' : '' }}  col-md-6">
    <label for="fecadi1" class="col-md-2 control-label">Fecadi1</label>
    <div class="col-md-10">
        <input class="form-control date-control" name="fecadi1" type="text" id="fecadi1" value="{{ old('fecadi1', optional($permit)->fecadi1) }}" minlength="1" placeholder="Enter fecadi1 here...">
        {!! $errors->first('fecadi1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('textadi1') ? 'has-error' : '' }}  col-md-6">
    <label for="textadi1" class="col-md-2 control-label">Textadi1</label>
    <div class="col-md-10">
        <input class="form-control" name="textadi1" type="text" id="textadi1" value="{{ old('textadi1', optional($permit)->textadi1) }}" minlength="1" maxlength="191" placeholder="Enter textadi1 here...">
        {!! $errors->first('textadi1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('textadi2') ? 'has-error' : '' }}  col-md-6">
    <label for="textadi2" class="col-md-2 control-label">Textadi2</label>
    <div class="col-md-10">
        <input class="form-control" name="textadi2" type="text" id="textadi2" value="{{ old('textadi2', optional($permit)->textadi2) }}" minlength="1" maxlength="191" placeholder="Enter textadi2 here...">
        {!! $errors->first('textadi2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('textadi3') ? 'has-error' : '' }}  col-md-6">
    <label for="textadi3" class="col-md-2 control-label">Textadi3</label>
    <div class="col-md-10">
        <input class="form-control" name="textadi3" type="text" id="textadi3" value="{{ old('textadi3', optional($permit)->textadi3) }}" minlength="1" maxlength="191" placeholder="Enter textadi3 here...">
        {!! $errors->first('textadi3', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('textadi4') ? 'has-error' : '' }}  col-md-6">
    <label for="textadi4" class="col-md-2 control-label">Textadi4</label>
    <div class="col-md-10">
        <input class="form-control" name="textadi4" type="text" id="textadi4" value="{{ old('textadi4', optional($permit)->textadi4) }}" minlength="1" maxlength="191" placeholder="Enter textadi4 here...">
        {!! $errors->first('textadi4', '<p class="help-block">:message</p>') !!}
    </div>
</div>

