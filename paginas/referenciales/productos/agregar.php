<!--<div class="container mt-4">
    <input type="hidden" id="producto_id" value="0">
    <div class="card shadow rounded-4">
        <div class="card-header bg-success text-white rounded-top-4">
            <h4 class="mb-0">Agregar / Editar Producto</h4>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nombre_txt" class="form-label">Nombre</label>
                    <input type="text" id="nombre_txt" class="form-control" placeholder="Nombre del producto">
                </div>
                <div class="col-md-6">
                    <label for="precio_txt" class="form-label">Precio</label>
                    <input type="number" id="precio_txt" class="form-control" min="0" step="0.01">
                </div>
                <div class="col-md-6">
                    <label for="tipo_lst" class="form-label">Tipo</label>
                    <select id="tipo_lst" class="form-select">
                        <option value="0">Selecciona...</option>
                        <option value="PRODUCTO">PRODUCTO</option>
                        <option value="SERVICIO">SERVICIO</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="descripcion_txt" class="form-label">Descripción</label>
                    <textarea id="descripcion_txt" class="form-control" rows="3" placeholder="Descripción..."></textarea>
                </div>
                <div class="col-md-6">
                    <label for="estado_lst" class="form-label">Estado</label>
                    <select id="estado_lst" class="form-select">
                        <option value="ACTIVO">ACTIVO</option>
                        <option value="INACTIVO">INACTIVO</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button class="btn btn-success me-2" onclick="guardarProducto(); return false;">
                <i class="bi bi-save"></i> Guardar
            </button>
            <button class="btn btn-danger" onclick="mostrarListarProductos(); return false;">
                <i class="bi bi-x-circle"></i> Cancelar
            </button>
        </div>
    </div>
</div>-->
<div class="container mt-4">
  <input type="hidden" id="producto_id" value="0">
  <div class="card border-0 bg-light p-3 shadow-sm rounded-4">
    <div class="card-header bg-transparent border-0 pb-0">
      <h4 class="mb-3 text-secondary fw-bold"><i class="bi bi-box-seam me-2"></i>Agregar / Editar Producto</h4>
    </div>
    <div class="card-body p-0">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" id="nombre_txt" class="form-control form-control-custom" placeholder="Nombre del producto">
            <label for="nombre_txt"><i class="bi bi-tag-fill me-1"></i>Nombre</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="input-group form-floating">
            <span class="input-group-text bg-white"><i class="bi bi-currency-dollar"></i></span>
            <input type="number" id="precio_txt" class="form-control form-control-custom border-start-0" min="0" step="0.01" placeholder="Precio">
            <label for="precio_txt">Precio</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <select id="tipo_lst" class="form-select form-control-custom" placeholder="Tipo">
              <option value="0">Selecciona...</option>
              <option value="PRODUCTO">PRODUCTO</option>
              <option value="SERVICIO">SERVICIO</option>
            </select>
            <label for="tipo_lst"><i class="bi bi-list-ul me-1"></i>Tipo</label>
          </div>
        </div>
        <div class="col-12">
          <div class="form-floating">
            <textarea id="descripcion_txt" class="form-control form-control-custom" placeholder="Descripción" style="height:100px"></textarea>
            <label for="descripcion_txt"><i class="bi bi-card-text me-1"></i>Descripción</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <select id="estado_lst" class="form-select form-control-custom" placeholder="Estado">
              <option value="ACTIVO">ACTIVO</option>
              <option value="INACTIVO">INACTIVO</option>
            </select>
            <label for="estado_lst"><i class="bi bi-toggle-on me-1"></i>Estado</label>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer bg-transparent border-0 text-end pt-3">
      <button class="btn btn-primary me-2" onclick="guardarProducto(); return false;">
        <i class="bi bi-save-fill me-1"></i>Guardar
      </button>
      <button class="btn btn-outline-secondary" onclick="mostrarListarProductos(); return false;">
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
  .input-group-text {
    border: 2px solid #dee2e6;
    border-right: 0;
    border-radius: .5rem 0 0 .5rem;
  }
  .form-floating .form-select,
  .form-floating .form-control,
  .form-floating .form-control-custom {
    padding-top: 1.5rem;
  }
</style>
