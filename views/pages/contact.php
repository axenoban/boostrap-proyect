<?php
/** @var array{name: string, contact: array{phone: string, email: string, address: string, hours: array<int, string>}} $company */
/** @var array<int, array{icon: string, title: string, description: string, contact: string}> $channels */
?>

<section class="subpage-hero" style="background-image: url('https://images.unsplash.com/photo-1524635962361-d7f8ae9c79b1?auto=format&fit=crop&w=1800&q=80');">
    <div class="subpage-hero__overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <span class="section-eyebrow text-white">Contacto</span>
                <h1 class="display-4 fw-bold text-white mb-3">Conversemos sobre tus proyectos textiles</h1>
                <p class="lead text-white-50 mb-0">Agenda una asesoría, solicita muestras o programa una visita a nuestro showroom en Santa Cruz.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="contact-card shadow-lg p-4 p-lg-5">
                    <h2 class="h4 text-uppercase text-accent mb-3">Escríbenos</h2>
                    <p class="text-secondary-dark mb-4">Completa el formulario y uno de nuestros asesores se comunicará contigo dentro de las próximas horas hábiles.</p>
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="form-label" for="contact-name">Nombre completo</label>
                            <input class="form-control" id="contact-name" name="name" type="text" placeholder="Nombre y apellido" required>
                            <div class="invalid-feedback">Por favor, indícanos tu nombre.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="contact-email">Correo electrónico</label>
                            <input class="form-control" id="contact-email" name="email" type="email" placeholder="nombre@empresa.com" required>
                            <div class="invalid-feedback">Introduce un correo válido.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="contact-phone">Teléfono o WhatsApp</label>
                            <input class="form-control" id="contact-phone" name="phone" type="tel" placeholder="591 70000000">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="contact-message">Cuéntanos tu necesidad</label>
                            <textarea class="form-control" id="contact-message" name="message" rows="5" placeholder="¿Qué tipo de telas estás buscando?" required></textarea>
                            <div class="invalid-feedback">Describe brevemente tu requerimiento.</div>
                        </div>
                        <button class="btn btn-accent w-100" type="submit">Enviar mensaje</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="row g-4">
                    <?php foreach ($channels as $channel): ?>
                        <div class="col-md-12">
                            <div class="channel-card h-100 p-4">
                                <div class="channel-card__icon">
                                    <i class="fas <?= htmlspecialchars($channel['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-primary-dark mb-1"><?= htmlspecialchars($channel['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <p class="text-secondary-dark mb-1"><?= htmlspecialchars($channel['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                                    <p class="fw-semibold text-primary-dark mb-0"><?= htmlspecialchars($channel['contact'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-md-12">
                        <div class="map-card h-100">
                            <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
                                <iframe title="Ubicación Importadora Textil Camila" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.1976916523515!2d-63.18042322378037!3d-17.755806877361536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1e9fe81b0d7a5%3A0x74e8f8da582c5af9!2sSanta%20Cruz%20de%20la%20Sierra%2C%20Bolivia!5e0!3m2!1ses-419!2sbo!4v1716931200000" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="map-card__body">
                                <h3 class="h6 text-primary-dark mb-2">Showroom y bodega central</h3>
                                <p class="text-secondary-dark mb-2"><i class="fas fa-map-marker-alt text-accent me-2"></i><?= htmlspecialchars($company['contact']['address'], ENT_QUOTES, 'UTF-8'); ?></p>
                                <p class="text-secondary-dark mb-0"><i class="fas fa-clock text-accent me-2"></i>Horarios de atención:</p>
                                <ul class="list-unstyled text-secondary-dark small mb-0">
                                    <?php foreach ($company['contact']['hours'] as $hour): ?>
                                        <li><?= htmlspecialchars($hour, ENT_QUOTES, 'UTF-8'); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
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
        forms.forEach((form) => {
            form.addEventListener('submit', (event) => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });
        });
    })();
</script>
