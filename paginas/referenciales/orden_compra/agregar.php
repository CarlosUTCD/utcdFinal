<!-- Añade este bloque CSS en tu <head> o en tu archivo de estilos global -->
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
  <input type="hidden" id="id_orden" value="0">
  <input type="hidden" id="id_proveedor">

  <div class="card shadow rounded-4 mb-4">
    <div class="card-header bg-primary">
      <h4 class="mb-0"><i class="bi bi-cart-plus me-2"></i>Agregar / Editar Orden de Compra</h4>
    </div>
    <div class="card-body">
      <!-- Fila 1 -->
      <div class="row g-4">
        <div class="col-md-6">
          <label for="id_presupuesto_lst" class="form-label">Presupuesto</label>
          <select id="id_presupuesto_lst" class="form-select form-select-lg shadow-sm"></select>
        </div>
        <div class="col-md-6">
          <label for="proveedor_txt" class="form-label">Proveedor</label>
          <div class="input-group input-group-lg shadow-sm">
            <span class="input-group-text"><i class="bi bi-building"></i></span>
            <input type="text" id="proveedor_txt" class="form-control" readonly>
          </div>
        </div>
        <div class="col-md-6">
          <label for="fecha_txt" class="form-label">Fecha</label>
          <input type="date" id="fecha_txt" class="form-control form-control-lg shadow-sm">
        </div>
      </div>

      <!-- Fila 2 -->
      <div class="row g-4 mt-3">
        <div class="col-md-4">
          <label for="id_producto_lst" class="form-label">Producto</label>
          <select id="id_producto_lst" class="form-select form-select-lg shadow-sm"></select>
        </div>
        <div class="col-md-2">
          <label for="cantidad_txt" class="form-label">Cantidad</label>
          <input type="number" id="cantidad_txt" class="form-control form-control-lg shadow-sm" min="0">
        </div>
        <div class="col-md-2">
          <label for="precio_unitario_txt" class="form-label">Precio Unitario</label>
          <div class="input-group input-group-lg shadow-sm">
            <span class="input-group-text"><i class="bi bi-currency-dollar"></i></span>
            <input type="number" step="0.01" id="precio_unitario_txt" class="form-control">
          </div>
        </div>
        <div class="col-md-2">
          <label for="subtotal_txt" class="form-label">Subtotal</label>
          <div class="input-group input-group-lg shadow-sm">
            <span class="input-group-text"><i class="bi bi-calculator"></i></span>
            <input type="text" id="subtotal_txt" class="form-control" readonly>
          </div>
        </div>
        <div class="col-md-2 d-grid">
          <button class="btn btn-primary btn-lg shadow-sm" onclick="agregarProductoExtra(); return false;">
            <i class="bi bi-plus-lg me-1"></i> Agregar Producto
          </button>
        </div>
      </div>
    </div>
    <div class="card-footer text-end">
      <button class="btn btn-success btn-lg me-2 shadow-sm" onclick="guardarOrden(); return false;">
        <i class="bi bi-save me-1"></i> Guardar
      </button>
      <button class="btn btn-danger btn-lg shadow-sm" onclick="mostrarListarOrdenes(); return false;">
        <i class="bi bi-x-circle me-1"></i> Cancelar
      </button>
    </div>
  </div>

  <!-- Tabla de detalle de la orden -->
  <div class="table-responsive mb-5">
    <table class="table table-striped table-hover text-center align-middle mb-0">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Cantidad</th>
          <th>Precio Unitario</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody id="detalle_oc_tb">
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
