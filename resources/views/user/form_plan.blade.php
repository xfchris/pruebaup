<fieldset class="mb-3 col-sm-8">
    <div class="form-group">
        <legend>Planes de almacenamientos</legend>
        @if($user->getTiempoPlan())
            <p>Actualmente tienes permanencia de archivos hasta el <span
                    class="text-bold tiempoPlan">{{$user->getTiempoPlan()}}</span>.
                @else
                    <b class="txtPlanVigente">No tienes plan vigente!</b>
                @endif
                <br/>Para extender la permanencia de tus archivos, añadele tiempo a tu plan de almacenamiento</p>

            {!! Form::select('plan', $plans, 0, ['class'=>'form-select w-auto', 'placeholder'=>'Selecciona un plan','id'=>'iPlan']) !!}
    </div>

    <button id="btnActualizarPlan" type="button" class="btn btn-success mt-3">Añadir más tiempo a mi plan</button>
</fieldset>
