@extends ('layouts.app')
@section ('content')
	<div class="row">
        <div class="col-12">
            <h1>Editar producto</h1>
            <form method="POST" action="{{route("proveedor.update", [$proveedor])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre de la Empresa</label>
                    <input required value="{{$proveedor->nombreEmpresa}}" autocomplete="off" name="nombreEmpresa"
                           class="form-control"
                           type="text" placeholder="Nombre de la empresa">
                </div>
                <div class="form-group">
                    <label class="label">Ruc</label>
                    <input required value="{{$proveedor->ruc}}" autocomplete="off" name="ruc"
                           class="form-control"
                           type="text" placeholder="ruc">
                </div>
                <div class="form-group">
                    <label class="label">Direccion</label>
                    <input required value="{{$proveedor->direccion}}" autocomplete="off" name="direccion"
                           class="form-control"
                           type="text" placeholder="Direcion">
                </div>
                <div class="form-group">
                    <label class="label">Telefono</label>
                    <input required value="{{$proveedor->telefono}}" autocomplete="off" name="telefono"
                           class="form-control"
                           type="text" placeholder="telefono">
                </div>
                <div class="form-group">
                    <label class="label">Email</label>
                    <input required value="{{$proveedor->email}}" autocomplete="off" name="email"
                           class="form-control"
                           type="text" placeholder="Email">
                </div>


                <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Aceptar') }}
                                </button>
                                <button type="reset" class="btn btn-primary">
                                    {{ __('Cancelar') }}
                                </button>
                            </div>
                        </div>

            </form>
        </div>
    </div>
@endsection
