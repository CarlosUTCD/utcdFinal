<!-- Estilos generales: añade en tu <head> o CSS global -->
<style>
  /* Tarjeta con sombra suave y bordes redondeados */
  .card.shadow.rounded-4 {
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
    border-radius: 1rem;
  }
  /* Encabezado azul primario */
  .card-header.bg-primary {
    background-color: #0d6efd !important;
    color: #fff;
    border-bottom: none;
    border-top-left-radius: 1rem;
    border-top-right-radius: 1rem;
  }
  /* Labels más destacadas */
  .form-label {
    font-weight: 600;
  }
  /* Inputs y selects más altos y con sombra */
  .form-control, .form-select {
    padding: 0.75rem 1rem;
    box-shadow: 0 .25rem .5rem rgba(0,0,0,.1);
    border-radius: .5rem;
  }
  .form-control:focus, .form-select:focus {
    box-shadow: 0 .25rem .5rem rgba(13,110,253,.25);
    border-color: #0d6efd;
  }
  /* Botones grandes y con sombra */
  .btn-lg {
    padding: 0.75rem 1.25rem;
    font-size: 1rem;
    border-radius: .5rem;
  }
  .btn.shadow-sm {
    box-shadow: 0 .25rem .5rem rgba(0,0,0,.1);
  }
  /* Input-groups con íconos */
  .input-group-text {
    background: #fff;
    border-radius: .5rem 0 0 .5rem;
    border-right: none;
  }
  .input-group .form-control {
    border-radius: 0 .5rem .5rem 0;
    border-left: none;
  }
  /* Tabla moderna */
  .table-responsive {
    overflow: hidden;
    border-radius: 0 0 1rem 1rem;
    box-shadow: 0 .25rem .5rem rgba(0,0,0,.1);
  }
  .table-striped tbody tr:nth-of-type(odd) {
    background-color: #f8f9fa;
  }
  .table-hover tbody tr:hover {
    background-color: #e9ecef;
  }
  .table thead {
    background: #0d6efd;
    color: #fff;
  }
  .table td, .table th {
    vertical-align: middle;
    padding: 0.75rem 1rem;
  }
</style>

<div class="container my-5">
  <input type="hidden" id="id_presupuesto" value="0">
  <input type="hidden" id="id_detalle" value="0">

  <div class="card shadow rounded-4 mb-4">
    <div class="card-header bg-primary">
      <h4 class="mb-0"><i class="bi bi-journal-plus me-2"></i>Agregar / Editar Presupuesto</h4>
    </div>
    <div class="card-body">
      <div class="row g-4">
        <!-- Proveedor -->
        <div class="col-md-6">
          <label for="id_proveedor_lst" class="form-label">Proveedor</label>
          <select id="id_proveedor_lst" class="form-select form-select-lg shadow-sm"></select>
        </div>
        <!-- Fecha -->
        <div class="col-md-6">
          <label for="fecha_txt" class="form-label">Fecha</label>
          <input type="date" id="fecha_txt" class="form-control form-control-lg shadow-sm">
        </div>
        <!-- Producto -->
        <div class="col-md-6">
          <label for="id_producto_lst" class="form-label">Producto</label>
          <select id="id_producto_lst" class="form-select form-select-lg shadow-sm"></select>
        </div>
        <!-- Total -->
        <div class="col-md-6">
          <label for="total_txt" class="form-label">Total</label>
          <div class="input-group input-group-lg shadow-sm">
            <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
            <input type="number" step="0.01" id="total_txt" class="form-control" placeholder="0.00">
          </div>
        </div>
        <!-- Cantidad -->
        <div class="col-md-3">
          <label for="cantidad_txt" class="form-label">Cantidad</label>
          <input type="number" id="cantidad_txt" class="form-control form-control-lg shadow-sm" min="0">
        </div>
        <!-- Costo Unitario -->
        <div class="col-md-3">
          <label for="precio_unitario_txt" class="form-label">Costo Unitario</label>
          <div class="input-group input-group-lg shadow-sm">
            <span class="input-group-text"><i class="bi bi-tag"></i></span>
            <input type="number" step="0.01" id="precio_unitario_txt" class="form-control">
          </div>
        </div>
        <!-- Subtotal -->
        <div class="col-md-3">
          <label for="subtotal_txt" class="form-label">Subtotal</label>
          <div class="input-group input-group-lg shadow-sm">
            <span class="input-group-text"><i class="bi bi-calculator"></i></span>
            <input type="text" id="subtotal_txt" class="form-control" readonly>
          </div>
        </div>
        <!-- Agregar Detalle -->
        <div class="col-md-3 d-grid">
          <button class="btn btn-primary btn-lg shadow-sm" onclick="agregarDetalle(); return false;">
            <i class="bi bi-plus-lg me-1"></i> Agregar Producto
          </button>
        </div>
      </div>
    </div>
    <!-- Footer Botones -->
    <div class="card-footer text-end">
      <button class="btn btn-success btn-lg me-2 shadow-sm" onclick="guardarPresupuesto(); return false;">
        <i class="bi bi-save me-1"></i> Guardar
      </button>
      <button class="btn btn-danger btn-lg shadow-sm" onclick="mostrarListarPresupuestos(); return false;">
        <i class="bi bi-x-circle me-1"></i> Cancelar
      </button>
    </div>
  </div>

  <!-- Tabla de Detalles -->
  <div class="table-responsive mb-5">
    <table class="table table-striped table-hover text-center align-middle mb-0">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Precio Unitario</th>
          <th>Subtotal</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody id="detalle_tb">
        <!-- filas detalle -->
      </tbody>
    </table>
  </div>
</div>

<script>
  function formatearPY(numero) {
    return new Intl.NumberFormat('es-PY', {
      minimumFractionDigits: 2,
      maximumFractionDigits: 2
    }).format(numero);
  }

  $(document).on('input', '#cantidad_txt, #precio_unitario_txt', function () {
    const cant = parseFloat($('#cantidad_txt').val()) || 0;
    const precio = parseFloat($('#precio_unitario_txt').val()) || 0;
    const subtotal = cant * precio;
    $('#subtotal_txt').val(formatearPY(subtotal));
  });
</script>
