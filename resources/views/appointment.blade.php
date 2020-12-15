<div>
    <h2>Citas</h2>
    <div id="patients-table-container">

        <h3>Pacientes</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-primary" style="color: white">
                    <tr>
                        <th scope="col">Identificación</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Seleccionar</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <div id="appointment-container">
        <h3>Nueva cita</h3>
        <form id="appointmentForm">

            <input type="text" class="form-control" name="patient_id" id="patientId" value="" hidden>

            <div class="form-group">
                <label for="dentistId">Dentista</label>
                <select class="form-control" name="dentist_id" id="dentistId" required>
                    <option value="" selected>Seleccione...</option>

                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="date">Fecha</label>
                    <input type="date" class="form-control" name="date" id="date" min="1900-01-01" max="2021-12-31"
                        required>
                </div>

                <div class="form-group col-md-6">
                    <label for="time">Hora</label>
                    <input type="time" class="form-control" name="time" id="time" min="09:00" max="18:00" required>
                </div>
            </div>

            <div>
                <button type="button" class="btn btn-primary btn-block"
                    onclick="AppointmentController.save()">Guardar</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src="{{asset('assets/js/controllers/patient_controller.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/controllers/appointment_controller.js')}}"></script>
