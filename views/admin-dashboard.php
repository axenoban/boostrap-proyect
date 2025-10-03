<section class="hero-subpage d-flex align-items-center justify-content-center text-white" style="background-image: url('https://images.unsplash.com/photo-1556740749-887f6717d7e4?auto=format&fit=crop&w=1600&q=80');" data-aos="fade-in">
    <div class="container text-center py-5">
        <h1 class="display-3 fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">Panel Administrativo</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="200">Centraliza inventario, clientes y pedidos en un entorno moderno y seguro.</p>
    </div>
</section>

<section class="py-5 bg-light-gray" data-aos="fade-up">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="card-title text-primary-dark">Stock activo</h5>
                                <p class="text-secondary-dark mb-0">Rollos disponibles</p>
                            </div>
                            <span class="badge bg-accent fs-6">1 245</span>
                        </div>
                        <div class="mt-4">
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-accent" role="progressbar" style="width: 72%;"></div>
                            </div>
                            <small class="text-secondary-light d-block mt-2">Capacidad ocupada 72%</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="card-title text-primary-dark">Clientes activos</h5>
                                <p class="text-secondary-dark mb-0">Empresas registradas</p>
                            </div>
                            <span class="badge bg-accent fs-6">312</span>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex align-items-center gap-2">
                                <i class="fas fa-arrow-up text-success"></i>
                                <small class="text-secondary-dark">+8% este mes</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="card-title text-primary-dark">Pedidos pendientes</h5>
                                <p class="text-secondary-dark mb-0">A la espera de despacho</p>
                            </div>
                            <span class="badge bg-accent fs-6">27</span>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex justify-content-between text-secondary-dark">
                                    <span>Prioridad alta</span>
                                    <span class="text-accent">6</span>
                                </div>
                                <div class="d-flex justify-content-between text-secondary-dark">
                                    <span>En producción</span>
                                    <span class="text-accent">12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="h4 fw-bold text-primary-dark mb-0">Registro de inventario</h2>
                            <span class="badge bg-accent">Nuevo lote</span>
                        </div>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inventorySku" class="form-label">Código / SKU</label>
                                <input type="text" class="form-control" id="inventorySku" placeholder="TEL-0001" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inventoryName" class="form-label">Nombre del tejido</label>
                                <input type="text" class="form-control" id="inventoryName" placeholder="Sarga italiana azul" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inventoryCategory" class="form-label">Categoría</label>
                                <select id="inventoryCategory" class="form-select" required>
                                    <option selected disabled value="">Selecciona una categoría</option>
                                    <option>Fibras naturales</option>
                                    <option>Sintéticos y mezclas</option>
                                    <option>Tejidos especiales</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inventoryMeters" class="form-label">Metros disponibles</label>
                                <input type="number" class="form-control" id="inventoryMeters" min="0" step="0.5" placeholder="150" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inventoryCost" class="form-label">Costo unitario (USD)</label>
                                <input type="number" class="form-control" id="inventoryCost" min="0" step="0.01" placeholder="8.50" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inventoryLocation" class="form-label">Ubicación</label>
                                <input type="text" class="form-control" id="inventoryLocation" placeholder="Almacén A - Estante 3" required>
                            </div>
                            <div class="col-12">
                                <label for="inventoryNotes" class="form-label">Observaciones</label>
                                <textarea class="form-control" id="inventoryNotes" rows="3" placeholder="Color tendencia FW25, confirmar reserva para cliente VIP."></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-outline-accent">Limpiar</button>
                                <button type="submit" class="btn btn-accent">Guardar inventario</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="h4 fw-bold text-primary-dark mb-0">Registro de clientes</h2>
                            <span class="badge bg-accent">Nuevo cliente</span>
                        </div>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="clientBusiness" class="form-label">Razón social</label>
                                <input type="text" class="form-control" id="clientBusiness" placeholder="Textiles Aurora SRL" required>
                            </div>
                            <div class="col-md-6">
                                <label for="clientNit" class="form-label">NIT</label>
                                <input type="text" class="form-control" id="clientNit" placeholder="1234567011" required>
                            </div>
                            <div class="col-md-6">
                                <label for="clientContact" class="form-label">Contacto principal</label>
                                <input type="text" class="form-control" id="clientContact" placeholder="María Gómez" required>
                            </div>
                            <div class="col-md-6">
                                <label for="clientPhone" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="clientPhone" placeholder="591 75000000" required>
                            </div>
                            <div class="col-md-6">
                                <label for="clientEmail" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="clientEmail" placeholder="compras@auroratextil.bo" required>
                            </div>
                            <div class="col-md-6">
                                <label for="clientPayment" class="form-label">Condición de pago</label>
                                <select id="clientPayment" class="form-select" required>
                                    <option selected disabled value="">Selecciona una opción</option>
                                    <option>Contado</option>
                                    <option>Crédito 15 días</option>
                                    <option>Crédito 30 días</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="clientNotes" class="form-label">Notas</label>
                                <textarea class="form-control" id="clientNotes" rows="3" placeholder="Solicita seguimiento de colecciones eco-friendly."></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-outline-accent">Limpiar</button>
                                <button type="submit" class="btn btn-accent">Registrar cliente</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light-gray" data-aos="fade-up">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="h4 fw-bold text-primary-dark mb-0">Generar pedido</h2>
                            <span class="badge bg-accent">Pedido nuevo</span>
                        </div>
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="orderClient" class="form-label">Cliente</label>
                                <select id="orderClient" class="form-select" required>
                                    <option selected disabled value="">Selecciona un cliente</option>
                                    <option>Textiles Aurora SRL</option>
                                    <option>Confecciones Prisma</option>
                                    <option>DecoHome Bolivia</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="orderDate" class="form-label">Fecha estimada</label>
                                <input type="date" class="form-control" id="orderDate" required>
                            </div>
                            <div class="col-md-3">
                                <label for="orderStatus" class="form-label">Estado</label>
                                <select id="orderStatus" class="form-select" required>
                                    <option value="" disabled selected>Selecciona</option>
                                    <option>Pendiente</option>
                                    <option>En producción</option>
                                    <option>Listo para entrega</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Detalle de tejidos</label>
                                <div class="table-responsive rounded border">
                                    <table class="table table-hover mb-0 align-middle">
                                        <thead class="table-light">
                                            <tr>
                                                <th>SKU</th>
                                                <th>Descripción</th>
                                                <th>Mts</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="text" class="form-control form-control-sm" placeholder="TEL-0001"></td>
                                                <td><input type="text" class="form-control form-control-sm" placeholder="Sarga italiana azul"></td>
                                                <td><input type="number" class="form-control form-control-sm" min="0" step="0.5" placeholder="50"></td>
                                                <td><input type="number" class="form-control form-control-sm" min="0" step="0.01" placeholder="8.50"></td>
                                                <td class="text-center"><button type="button" class="btn btn-sm btn-outline-accent"><i class="fas fa-plus"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="orderNotes" class="form-label">Notas internas</label>
                                <textarea class="form-control" id="orderNotes" rows="3" placeholder="Coordinar entrega con logística."></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="orderFiles" class="form-label">Adjuntar documentos</label>
                                <input class="form-control" type="file" id="orderFiles" multiple>
                                <small class="text-secondary-light">Cotizaciones, fichas técnicas o referencias.</small>
                            </div>
                            <div class="col-12 d-flex justify-content-end gap-2">
                                <button type="reset" class="btn btn-outline-accent">Descartar</button>
                                <button type="submit" class="btn btn-accent">Confirmar pedido</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <h2 class="h5 fw-bold text-primary-dark mb-3">Pedidos recientes</h2>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 text-primary-dark">PED-1045</h6>
                                    <small class="text-secondary-dark">Confecciones Prisma · 120 mts</small>
                                </div>
                                <span class="badge bg-success-subtle text-success">Listo</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 text-primary-dark">PED-1046</h6>
                                    <small class="text-secondary-dark">Textiles Aurora SRL · 80 mts</small>
                                </div>
                                <span class="badge bg-warning-subtle text-warning">En producción</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1 text-primary-dark">PED-1047</h6>
                                    <small class="text-secondary-dark">DecoHome Bolivia · 45 mts</small>
                                </div>
                                <span class="badge bg-danger-subtle text-danger">Pendiente</span>
                            </a>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn btn-outline-accent w-100">Ver todo el historial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
