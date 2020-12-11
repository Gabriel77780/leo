<div>

    <h3>Ingresar dentista</h3>
    <form id="dentistForm">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="identificationTypeId">Tipo de Identificación</label>
                <select class="form-control" name="identification_type_id" id="identificationTypeId" required>
                    <option value="" selected>Seleccione...</option>
                    <option value="1">Cedúla Física</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="identification">Identificación</label>
                <input type="text" class="form-control" name="identification" id="identification"
                    placeholder="Identificación" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name1">Primer Nombre</label>
                <input type="text" class="form-control" name="name1" id="name1" placeholder="Primer Nombre" required>
            </div>
            <div class="form-group col-md-6">
                <label for="name2">Segundo Nombre</label>
                <input type="text" class="form-control" name="name2" id="name2" placeholder="Segundo Nombre" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lastName1">Primer Apellido</label>
                <input type="text" class="form-control" name="last_name1" id="lastName1" placeholder="Primer Apellido"
                    required>
            </div>
            <div class="form-group col-md-6">
                <label for="lastName2">Segundo Apellido</label>
                <input type="text" class="form-control" name="last_name2" id="lastName2" placeholder="Segundo Apellido"
                    required>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
        </div>

        <div>
            <button type="button" class="btn btn-primary btn-block" onclick="DentistController.save()">Guardar</button>
        </div>
    </form>

</div>


<script type="text/javascript" src="{{asset('assets/js/controllers/dentist_controller.js')}}"></script>