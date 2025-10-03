<section class="hero-subpage d-flex align-items-center justify-content-center text-white" style="background-image: url('https://images.unsplash.com/photo-1520962371460-87222b9414d0?auto=format&fit=crop&w=1600&q=80');" data-aos="fade-in">
    <div class="container text-center py-5">
        <h1 class="display-3 fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">Panel de Cliente</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="200">Visualiza tus pedidos, reservas y documentos en un solo lugar.</p>
    </div>
</section>

<section class="py-5 bg-light-gray" data-aos="fade-up">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-primary-dark mb-0">Pedidos en curso</h5>
                            <i class="fas fa-spinner fa-lg text-accent"></i>
                        </div>
                        <p class="display-5 fw-bold text-primary-dark mt-3 mb-0">4</p>
                        <small class="text-secondary-light">Última actualización: hace 2 horas</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-primary-dark mb-0">Pedidos completados</h5>
                            <i class="fas fa-circle-check fa-lg text-success"></i>
                        </div>
                        <p class="display-5 fw-bold text-primary-dark mt-3 mb-0">18</p>
                        <small class="text-secondary-light">Último pedido entregado: 12/05/2024</small>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="text-primary-dark mb-0">Reservas activas</h5>
                            <i class="fas fa-box-open fa-lg text-accent"></i>
                        </div>
                        <p class="display-5 fw-bold text-primary-dark mt-3 mb-0">9</p>
                        <small class="text-secondary-light">Metros totales reservados: 460</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" data-aos="fade-up">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8" data-aos="fade-right">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
                            <div>
                                <h2 class="h4 fw-bold text-primary-dark mb-1">Historial de pedidos</h2>
                                <small class="text-secondary-light">Consulta el estado y detalle de cada pedido realizado.</small>
                            </div>
                            <div class="d-flex gap-2">
                                <select class="form-select form-select-sm">
                                    <option>Todos los estados</option>
                                    <option>En curso</option>
                                    <option>Completado</option>
                                    <option>Pendiente</option>
                                </select>
                                <input type="search" class="form-control form-control-sm" placeholder="Buscar pedido">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Nº Pedido</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Total (USD)</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-semibold">PED-1046</td>
                                        <td>28/05/2024</td>
                                        <td><span class="badge bg-warning-subtle text-warning">En producción</span></td>
                                        <td>1 280,00</td>
                                        <td class="d-flex gap-2">
                                            <button class="btn btn-sm btn-outline-accent">Detalle</button>
                                            <button class="btn btn-sm btn-outline-secondary">Descargar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">PED-1045</td>
                                        <td>20/05/2024</td>
                                        <td><span class="badge bg-success-subtle text-success">Completado</span></td>
                                        <td>960,00</td>
                                        <td class="d-flex gap-2">
                                            <button class="btn btn-sm btn-outline-accent">Detalle</button>
                                            <button class="btn btn-sm btn-outline-secondary">Descargar</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold">PED-1044</td>
                                        <td>10/05/2024</td>
                                        <td><span class="badge bg-danger-subtle text-danger">Pendiente</span></td>
                                        <td>540,00</td>
                                        <td class="d-flex gap-2">
                                            <button class="btn btn-sm btn-outline-accent">Detalle</button>
                                            <button class="btn btn-sm btn-outline-secondary">Descargar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <small class="text-secondary-light">Mostrando 3 de 22 pedidos</small>
                            <nav aria-label="Historial de pedidos">
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled"><span class="page-link">Anterior</span></li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-left">
                <div class="card border-0 shadow-lg mb-4">
                    <div class="card-body p-4">
                        <h2 class="h5 fw-bold text-primary-dark">Reservas activas</h2>
                        <div class="list-group list-group-flush mt-3">
                            <div class="list-group-item d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="text-primary-dark mb-1">TEL-0001 · Lino natural arena</h6>
                                    <small class="text-secondary-light">Reserva hasta 12/06/2024</small>
                                </div>
                                <span class="badge bg-accent">120 mts</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="text-primary-dark mb-1">TEL-0034 · Denim índigo</h6>
                                    <small class="text-secondary-light">Reserva hasta 03/06/2024</small>
                                </div>
                                <span class="badge bg-accent">80 mts</span>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="text-primary-dark mb-1">TEL-0048 · Chenille terracota</h6>
                                    <small class="text-secondary-light">Reserva hasta 29/05/2024</small>
                                </div>
                                <span class="badge bg-accent">60 mts</span>
                            </div>
                        </div>
                        <div class="mt-4 d-grid gap-2">
                            <a href="#" class="btn btn-outline-accent">Solicitar extensión</a>
                            <a href="#" class="btn btn-accent">Nueva reserva</a>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-4">
                        <h2 class="h5 fw-bold text-primary-dark mb-3">Documentos recientes</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-0 text-primary-dark">Nota de venta PED-1045</p>
                                    <small class="text-secondary-light">PDF · 1.2 MB</small>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary">Descargar</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-0 text-primary-dark">Factura 000451</p>
                                    <small class="text-secondary-light">PDF · 870 KB</small>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary">Descargar</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="mb-0 text-primary-dark">Ficha técnica TEL-0034</p>
                                    <small class="text-secondary-light">PDF · 540 KB</small>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary">Descargar</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-cta text-white" data-aos="fade-up">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-8">
                <h2 class="display-6 fw-bold mb-3">¿Necesitas asistencia personalizada?</h2>
                <p class="lead mb-0">Tu ejecutivo comercial está disponible para ayudarte a planificar reposiciones, coordinar despachos y compartir tendencias.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="index.php?page=contact" class="btn btn-light btn-lg">Contactar asesor</a>
            </div>
        </div>
    </div>
</section>
