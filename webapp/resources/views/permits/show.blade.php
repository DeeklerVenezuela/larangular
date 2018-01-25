@extends('layouts.app')

@section('content')
<div class="zuno-layout">
<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Permit' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('permits.permit.destroy', $permit->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('permits.permit.index') }}" class="btn btn-primary" title="Show All Permit">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('permits.permit.create') }}" class="btn btn-success" title="Create New Permit">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('permits.permit.edit', $permit->id ) }}" class="btn btn-primary" title="Edit Permit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Permit" onclick="return confirm(&quot;Delete Permit??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Cnt</dt>
            <dd>{{ $permit->cnt }}</dd>
            <dt>Fch</dt>
            <dd>{{ $permit->fch }}</dd>
            <dt>Ini</dt>
            <dd>{{ $permit->ini }}</dd>
            <dt>Fin</dt>
            <dd>{{ $permit->fin }}</dd>
            <dt>Obs</dt>
            <dd>{{ $permit->obs }}</dd>
            <dt>Sta</dt>
            <dd>{{ $permit->sta }}</dd>
            <dt>Tpo</dt>
            <dd>{{ $permit->tpo }}</dd>
            <dt>Fecadi1</dt>
            <dd>{{ $permit->fecadi1 }}</dd>
            <dt>Textadi1</dt>
            <dd>{{ $permit->textadi1 }}</dd>
            <dt>Textadi2</dt>
            <dd>{{ $permit->textadi2 }}</dd>
            <dt>Textadi3</dt>
            <dd>{{ $permit->textadi3 }}</dd>
            <dt>Textadi4</dt>
            <dd>{{ $permit->textadi4 }}</dd>
            <dt>Created At</dt>
            <dd>{{ $permit->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $permit->updated_at }}</dd>

        </dl>

    </div>
</div>
</div>
@endsection