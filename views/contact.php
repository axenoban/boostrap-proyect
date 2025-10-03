
<section class="hero-subpage d-flex align-items-center justify-content-center text-white" style="background-image: url('assets/images/extra/diseños-exclusivos.jpg');" data-aos="fade-in">
    <div class="container text-center py-5">
        <h1 class="display-3 fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">Hablemos de tu proyecto</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="200">Estamos listos para ayudarte a encontrar los textiles ideales para tu negocio.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-6 fw-bold text-primary-dark mb-4">Contáctanos</h2>
                <p class="text-secondary-dark">Completa el formulario y uno de nuestros asesores se comunicará contigo a la brevedad.</p>
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre completo" required>
                        <div class="invalid-feedback">Por favor, indícanos tu nombre.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="nombre@empresa.com" required>
                        <div class="invalid-feedback">Introduce un correo válido.</div>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="phone" placeholder="591 70000000">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Cuéntanos qué tipos de telas estás buscando" required></textarea>
                        <div class="invalid-feedback">Describe brevemente tu requerimiento.</div>
                    </div>
                    <button type="submit" class="btn btn-accent">Enviar mensaje</button>
                </form>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-4">
                        <h3 class="h4 fw-bold text-primary-dark mb-3">Nuestras oficinas</h3>
                        <p class="text-secondary-dark"><i class="fas fa-map-marker-alt text-accent me-2"></i>Av. Monseñor Rivero #234, Santa Cruz, Bolivia</p>
                        <p class="text-secondary-dark"><i class="fas fa-phone-alt text-accent me-2"></i>591 3 322 XXXX</p>
                        <p class="text-secondary-dark"><i class="fas fa-envelope text-accent me-2"></i>info@importadoracamilasc.com</p>
                        <div class="ratio ratio-16x9 rounded overflow-hidden mt-4">
                            <iframe title="Ubicación Importadora Camila" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.1976916523515!2d-63.18042322378037!3d-17.755806877361536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e9fe81b0d7a5%3A0x74e8f8da582c5af9!2sSanta%20Cruz%20de%20la%20Sierra%2C%20Bolivia!5e0!3m2!1ses-419!2sbo!4v1716931200000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="mt-4">
                            <h4 class="h5 fw-bold text-primary-dark">Horario de atención</h4>
                            <ul class="list-unstyled text-secondary-dark mb-0">
                                <li>Lunes a Viernes: 08:30 - 18:30</li>
                                <li>Sábados: 09:00 - 13:00</li>
                                <li>Domingos y feriados: Atención vía WhatsApp</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (() => {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>
