<!--<div class="row">
    <div class="col-md-4">
        <h2>Listado de Ciudades</h2>
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary form-control" 
                onclick="imprimirCiudades(); return false;">🖨️ Imprimir</button>
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary form-control" 
                onclick="mostrarAgregarCiudad(); return false;">+ Agregar</button>
    </div>
    
    <div class="col-12">
        <hr> 
    </div>
    <div class="col-8">
        <label>Buscador</label>
        <input type="text" id="b_ciudad" class="form-control" placeholder="Buscar Ciudades...">
            
    </div>
    <div class="col-4" style="margin-top: 25px;">
        <button class="btn btn-secondary
                form-control">Buscar</button>
    </div>
    <div class="col-12" style="margin-top: 50px;">
        <div class="row" id="datos_card">
            <div class="card col-md-5 m-2">
    <div class="card-header" style="color: #cecece; font-size: 13px;">
        Ciudad #<span class="id_ciudad_edicion">1</span>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <b style="font-size: 17px;">NOMBRE CIUDAD</b>
            </div>
            <div class="col-8">
                <i>Departamento: Nombre Departamento</i>
            </div>
            <div class="col-4">
                <i class="badge bg-secondary p-2">Activo</i>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="col-4">
                <button class="btn btn-danger form-control">
                    <i class="nav-icon bi bi-x-lg"></i> 
                </button>
            </div>
            <div class="col-4">
                <button class="btn btn-warning form-control">
                    <i class="nav-icon bi bi-pencil-square"></i>    
                </button>
            </div>
            <div class="col-4">
                <button class="btn btn-primary form-control imprimir-ciudad">
                    <i class="nav-icon bi bi-camera"></i>    
                </button>
            </div>
        </div>
    </div>
</div>

    </div>
</div>

    -->
<div class="container mt-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0 text-secondary fw-bold"><i class="bi bi-geo-alt-fill me-2"></i>Listado de Ciudades</h4>
    <div>
      <button class="btn btn-outline-primary me-2" onclick="imprimirCiudades(); return false;">
        <i class="bi bi-printer-fill"></i> Imprimir
      </button>
      <button class="btn btn-outline-primary" onclick="mostrarAgregarCiudad(); return false;">
        <i class="bi bi-plus-circle-fill"></i> Agregar
      </button>
    </div>
  </div>
  <div class="card border-0 bg-light p-3 shadow-sm rounded-4">
    <div class="card-body p-0">
      <div class="row g-3 align-items-end mb-4">
        <div class="col-md-8">
          <label for="b_ciudad" class="form-label text-muted">🔍 Buscador</label>
          <input type="text" id="b_ciudad" class="form-control search-input" placeholder="Buscar Ciudades...">
        </div>
        <div class="col-md-4">
          <button class="btn btn-outline-secondary w-100 search-btn" onclick="buscarCiudad(); return false;">
            <i class="bi bi-search"></i> Buscar
          </button>
        </div>
      </div>
      <div class="row" id="datos_card">
        <!-- Ejemplo de tarjeta -->
        <!--
        <div class="card city-card col-md-5 m-2">
          <div class="card-header">
            Ciudad #<span class="id_ciudad_edicion">1</span>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <b class="fs-5">NOMBRE CIUDAD</b>
              </div>
              <div class="col-8">
                <i>Departamento: Nombre Departamento</i>
              </div>
              <div class="col-4 text-end">
                <span class="badge bg-secondary p-2">Activo</span>
              </div>
              <div class="col-12 mt-2 mb-2"><hr></div>
              <div class="col-4">
                <button class="btn btn-danger w-100" onclick="eliminarCiudad(id);">
                  <i class="bi bi-x-lg"></i>
                </button>
              </div>
              <div class="col-4">
                <button class="btn btn-warning w-100" onclick="editarCiudad(id);">
                  <i class="bi bi-pencil-square"></i>
                </button>
              </div>
              <div class="col-4">
                <button class="btn btn-primary w-100 imprimir-ciudad" onclick="imprimirCiudad(id);">
                  <i class="bi bi-printer-fill"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        -->
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
  .city-card {
    border: none;
    border-radius: .75rem;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.05);
    transition: transform .2s, box-shadow .2s;
  }
  .city-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 1rem 1.5rem rgba(0,0,0,.1);
  }
  .city-card .card-header {
    background-color: #e9ecef;
    color: #6c757d;
    font-size: .85rem;
  }
  .city-card .badge {
    font-size: .75rem;
  }
</style>
