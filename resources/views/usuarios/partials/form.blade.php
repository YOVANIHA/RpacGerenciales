@if($errors->any())
<div class="container">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="p-0 m-0" style="list-style: none;">
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<div class="form-group row">
    <label class="col-4 col-form-label required" for="nombres">C&oacute;digo de usuario:</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-font"></i>
                </div>
            </div>
            <input id="codigo_usuario" name="codigo_usuario" placeholder="Código de usuario" pattern="[0-9A-zÀ-ú]+"
                title="No se permiten guiones o simbolos" type="text" required="required" class="form-control"
                value="{{ old('codigo_usuario') ?? $usuario->codigo_usuario ?? '' }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-4 col-form-label required" for="nombres">Nombres:</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-font"></i>
                </div>
            </div>
            <input id="nombres" name="nombres" placeholder="Nombre" pattern="[A-zÀ-ú\s]+"
                title="No se permiten numeros, guiones o simbolos" type="text" required="required" class="form-control"
                value="{{ old('nombres') ?? $usuario->nombres ?? '' }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="apellidos " class="col-4 col-form-label required">Apellidos:</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-font"></i>
                </div>
            </div>
            <input id="apellidos" name="apellidos" placeholder="Apellidos del" pattern="[A-zÀ-ú\s]+"
                title="No se permiten numeros, guiones o simbolos" type="text" required="required" class="form-control"
                value="{{ old('apellidos') ?? $usuario->apellidos ?? '' }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="telefono" class="col-4 col-form-label">Teléfono:</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-phone"></i>
                </div>
            </div>
            <input id="telefono" name="telefono" placeholder="####-####" type="tel" class="form-control"
                aria-describedby="telefonoHelpBlock" pattern="(6|7|2)*([0-9][ -]*){7}"
                title="Debe empezae con 6, 7 u 8." value="{{ old('telefono') ?? $usuario->telefono ?? '' }}">
        </div>
        <span id="telefonoHelpBlock" class="form-text text-muted">Ingrese el numero de teléfono</span>
    </div>
</div>
<div class="form-group row">
    <label for="telefono" class="col-4 col-form-label">DUI:</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-font"></i>
                </div>
            </div>
            <input id="dui" name="dui" placeholder="########-#" type="tel" class="form-control"
                aria-describedby="telefonoHelpBlock" pattern="[0-9]{8}[-][0-9]{1}"
                title="Debe ingresar numeros y un guión" value="{{ old('dui') ?? $usuario->dui ?? '' }}">
        </div>
        <span id="duiHelpBlock" class="form-text text-muted">Ingrese el N&uacute;mero &uacute;nico de
            identificaci&oacute;n</span>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-4 col-form-label required">Correo electronico:</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-at"></i>
                </div>
            </div>
            <input id="email" name="email" placeholder="Correo electronico del empleado" type="email"
                aria-describedby="emailHelpBlock" class="form-control" required="required"
                value="{{ old('email') ?? $usuario->email ?? '' }}">
        </div>
    </div>
</div>
<div class="form-group row">
    <label for="password" class="col-4 col-form-label required">Contraseña:</label>
    <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <input id="password" name="password" placeholder="Contraseña que se utilizará para ingresar al sistema"
                type="password" class="form-control" {{isset($usuario)?'':'required'}}
                value="{{ old('password') ?? $usuario->password ?? '' }}">
            <div class="input-group-append">
                <button onclick="generarpwd();" class="btn btn-sm btn-secondary mr-2" type="button">Generar</button>
            </div>
        </div>
        <input type="checkbox" class="ml-3" onclick="mostrarpwd()"><span class="ml-2">mostrar contraseña</span>
    </div>
</div>
<div class="form-group row">
    <label class="col-4">Estado:</label>
    <div class="col-8">
        <div class="custom-control custom-checkbox custom-control-inline">
            <input name="estado_empleado" id="estado_empleado" type="checkbox" class="custom-control-input" value="1"
                {{ isset($usuario)? ($usuario->estado == 1 ? 'checked' : '') : 'checked' }}
                aria-describedby="estadoHelpBlock">
            <label for="estado_empleado" class="custom-control-label">Activo</label>
        </div>
        <span id="estado_empleadoHelpBlock" class="form-text">Al desmarcar esta casilla el usuario no podrá acceder al
            sistema</span>
    </div>
</div>
<hr>
<div class="form-group row">
    <label for="rol_id" class="col-4 col-form-label required">Elija rol:</label>
    <div class="col-8">
        <select id="rol_id" name="rol_id" required="required" class="custom-select">
            <option value="">Seleccione</option>
            @foreach ($roles as $role)
            <option value="{{ old('rol_id') ?? $role->rol_id ?? '' }}">
                {{$role->nombre_rol}}
            </option>
            @endforeach
        </select>
    </div>
</div>

<script>
function generarpwd() {
    //Strip anything but 0 to 9
    var length = 8;
    //Update input value
    var Results = document.getElementById('password');
    var text = "";
    var shuffle = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    //Is input is empty?
    if (length !== 0) {
        for (var i = 0; i < length; i++) {
            text += shuffle.charAt(Math.floor(Math.random() * shuffle.length));
        }
        Results.value = text;
    }
}
</script>
<script>
function mostrarpwd() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>