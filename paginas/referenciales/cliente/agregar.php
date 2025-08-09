<div class="container mt-4">
  <input type="hidden" id="id_cliente" value="0">
  <div class="card border-0 bg-light p-3 shadow-sm rounded-4">
    <div class="card-header bg-transparent border-0 pb-0">
      <h4 class="mb-3 text-secondary fw-bold"><i class="bi bi-person-lines-fill me-2"></i>Agregar / Editar Cliente</h4>
    </div>
    <div class="card-body p-0">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" id="nombre_txt" class="form-control form-control-custom" placeholder="Nombre y apellido">
            <label for="nombre_txt"><i class="bi bi-person-fill me-1"></i>Nombre y Apellido</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" id="ruc_txt" class="form-control form-control-custom" placeholder="RUC">
            <label for="ruc_txt"><i class="bi bi-file-earmark-text me-1"></i>RUC</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" id="direccion_txt" class="form-control form-control-custom" placeholder="Dirección">
            <label for="direccion_txt"><i class="bi bi-geo-alt me-1"></i>Dirección</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" id="telefono_txt" class="form-control form-control-custom" placeholder="Teléfono">
            <label for="telefono_txt"><i class="bi bi-telephone-fill me-1"></i>Teléfono</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <select id="ciudad_lst" class="form-select form-control-custom">
              <option value="0">Selecciona ciudad...</option>
            </select>
            <label for="ciudad_lst"><i class="bi bi-geo-alt-fill me-1"></i>Ciudad</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <select id="estado_lst" class="form-select form-control-custom">
              <option value="ACTIVO">ACTIVO</option>
              <option value="INACTIVO">INACTIVO</option>
            </select>
            <label for="estado_lst"><i class="bi bi-toggle-on me-1"></i>Estado</label>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer bg-transparent border-0 text-end pt-3">
      <button class="btn btn-primary me-2" onclick="guardarCliente(); return false;">
        <i class="bi bi-save-fill me-1"></i>Guardar
      </button>
      <button class="btn btn-outline-secondary" onclick="mostrarListarCliente(); return false;">
        <i class="bi bi-x-circle-fill me-1"></i>Cancelar
      </button>
    </div>
  </div>
</div>

<style>
  .form-control-custom {
    border: 2px solid #dee2e6;
    border-radius: .5rem;
    transition: border-color .3s, box-shadow .3s;
  }
  .form-control-custom:focus {
    border-color: #5c7cfa;
    box-shadow: none;
  }
  .form-floating .form-select,
  .form-floating .form-control {
    padding-top: 1.5rem;
  }
</style>
