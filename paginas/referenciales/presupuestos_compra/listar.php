<!-- Agrega este bloque CSS en tu <head> o en tu archivo de estilos -->
<style>
  /* Encabezado de la tarjeta con color primario y texto claro */
  .card-header {
    background: #0d6efd;
    color: #fff;
    border-bottom: none;
  }

  /* Personaliza el aspecto de las cabeceras de tabla */
  .table thead th {
    background: #0d6efd;
    color: #fff;
    vertical-align: middle;
  }

  /* Ajusta la sombra y el redondeo de la tarjeta */
  .card.shadow-sm.rounded-4 {
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
    border-radius: 1rem;
  }

  /* Espaciado extra en la tabla */
  .table td, .table th {
    padding: 0.75rem 1rem;
  }
</style>

<div class="container my-5">
  <div class="card shadow-sm rounded-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h4 class="mb-0"><i class="bi bi-receipt-cutoff-fill me-2"></i>Listado de Presupuestos</h4>
      <button class="btn btn-light" onclick="mostrarAgregarPresupuesto(); return false;">
        <i class="bi bi-plus-circle-fill me-1"></i> Agregar
      </button>
    </div>
    <div class="card-body">
      <form class="row g-3 align-items-end">
        <div class="col-md-8">
          <label for="b_presupuesto" class="form-label fw-semibold">Buscar por proveedor</label>
          <div class="input-group input-group-lg shadow-sm">
            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
            <input type="text" id="b_presupuesto" class="form-control form-control-lg" placeholder="Ingrese nombre del proveedor">
          </div>
        </div>
        <div class="col-md-4 text-end">
          <button type="button" class="btn btn-primary btn-lg w-100 shadow-sm" onclick="buscarPresupuesto(); return false;">
            <i class="bi bi-search me-1"></i> Buscar
          </button>
        </div>
      </form>

      <div class="table-responsive mt-4">
        <table class="table table-striped table-hover align-middle text-center mb-0">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Proveedor</th>
              <th scope="col">Fecha</th>
              <th scope="col">Total</th>
              <th scope="col">Estado</th>
              <th scope="col">Operaciones</th>
            </tr>
          </thead>
          <tbody id="datos_tb">
            <!-- Contenido dinámico -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
