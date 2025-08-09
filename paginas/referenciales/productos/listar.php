<!--<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">📦 Listado de Productos</h4>
        <button class="btn btn-primary" onclick="mostrarAgregarProducto(); return false;">
            <i class="bi bi-plus-circle"></i> Agregar
        </button>
    </div>
    <div class="card shadow-sm rounded-4">
        <div class="card-body">
            <div class="row g-3 align-items-end">
                <div class="col-md-8">
                    <label for="b_producto" class="form-label">🔍 Buscador</label>
                    <input type="text" id="b_producto" class="form-control" placeholder="Buscar productos...">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-secondary w-100" onclick="buscarProducto(); return false;">
                        <i class="bi bi-search"></i> Buscar
                    </button>
                </div>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody id="datos_tb"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>-->
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0 text-secondary fw-bold"><i class="bi bi-box-fill me-2"></i>Listado de Productos</h4>
    <button class="btn btn-outline-primary" onclick="mostrarAgregarProducto(); return false;">
      <i class="bi bi-plus-circle-fill"></i> Agregar
    </button>
  </div>

  <div class="card border-0 bg-light p-3 shadow-sm rounded-4">
    <div class="card-body p-0">
      <div class="row g-3 align-items-end mb-4">
        <div class="col-md-8">
          <label for="b_producto" class="form-label text-muted">🔍 Buscador</label>
          <input type="text" id="b_producto" class="form-control search-input" placeholder="Buscar productos...">
        </div>
        <div class="col-md-4">
          <button class="btn btn-outline-secondary w-100 search-btn" onclick="buscarProducto(); return false;">
            <i class="bi bi-search"></i> Buscar
          </button>
        </div>
      </div>

      <div class="table-responsive">
        <table class="table table-hover table-striped align-middle text-center table-borderless table-custom">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Precio</th>
              <th>Tipo</th>
              <th>Estado</th>
              <th>Operaciones</th>
            </tr>
          </thead>
          <tbody id="datos_tb"></tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<style>
  .search-input {
    border: 2px solid #dee2e6;
    border-radius: .5rem;
    transition: border-color .3s;
  }
  .search-input:focus {
    border-color: #5c7cfa;
    box-shadow: none;
  }
  .search-btn {
    border-radius: .5rem;
  }
  .table-custom th {
    background-color: #e9ecef;
    color: #495057;
    font-weight: 500;
    border-bottom: 2px solid #dee2e6;
  }
  .table-custom td {
    border-bottom: 1px solid #dee2e6;
  }
  .table-custom tbody tr:hover {
    background-color: #f8f9fa;
  }
</style>
