<?php
/** @var array<int, string> $benefits */
/** @var array<int, array{icon: string, title: string, description: string}> $features */
?>

<section class="subpage-hero" style="background-image: url('https://images.unsplash.com/photo-1521579742250-980c1e65be4c?auto=format&fit=crop&w=1800&q=80');">
    <div class="subpage-hero__overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <span class="section-eyebrow text-white">Portal de clientes</span>
                <h1 class="display-4 fw-bold text-white mb-3">Gestiona reservas, entregas y documentos en un solo lugar</h1>
                <p class="lead text-white-50 mb-0">Una plataforma exclusiva para nuestros aliados comerciales mayoristas.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-xl-5" data-aos="fade-right">
                <div class="login-card shadow-lg p-4 p-lg-5">
                    <h2 class="h4 text-uppercase text-accent mb-3">Inicia sesión</h2>
                    <p class="text-secondary-dark mb-4">Solicita tus credenciales a tu asesor comercial para acceder a la versión completa del portal.</p>
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="login-email">Correo electrónico</label>
                            <input class="form-control" id="login-email" type="email" placeholder="cliente@empresa.com" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="login-password">Contraseña</label>
                            <input class="form-control" id="login-password" type="password" placeholder="********" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" id="remember" type="checkbox">
                                <label class="form-check-label" for="remember">Recordarme</label>
                            </div>
                            <a class="small text-accent" href="#">¿Olvidaste tu contraseña?</a>
                        </div>
                        <button class="btn btn-accent w-100" type="submit">Ingresar</button>
                    </form>
                    <hr class="my-4">
                    <p class="small text-secondary-dark mb-0">¿Aún no tienes acceso? <a class="text-accent" href="index.php?page=contact">Solicítalo aquí</a>.</p>
                </div>
            </div>
            <div class="col-xl-7" data-aos="fade-left">
                <div class="portal-benefits mb-5">
                    <h2 class="h4 text-primary-dark mb-3">Beneficios clave del portal</h2>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($benefits as $benefit): ?>
                            <li class="d-flex gap-3 mb-3 align-items-start">
                                <span class="icon-circle icon-circle--accent"><i class="fas fa-check"></i></span>
                                <span class="text-secondary-dark"><?= htmlspecialchars($benefit, ENT_QUOTES, 'UTF-8'); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="row g-4">
                    <?php foreach ($features as $feature): ?>
                        <div class="col-md-4" data-aos="fade-up">
                            <div class="feature-tile h-100 text-center p-4">
                                <div class="feature-tile__icon">
                                    <i class="fas <?= htmlspecialchars($feature['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                                </div>
                                <h3 class="h6 text-primary-dark mb-2"><?= htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="small text-secondary-dark mb-0"><?= htmlspecialchars($feature['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-cta text-white">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-3">Digitaliza tu cadena de compras textiles</h2>
                <p class="lead text-white-muted mb-0">Reserva metrajes, programa entregas y gestiona documentos desde cualquier dispositivo.</p>
            </div>
            <div class="col-lg-5 text-lg-end" data-aos="fade-left">
                <a class="btn btn-light btn-lg" href="index.php?page=contact">Solicitar demostración</a>
            </div>
        </div>
    </div>
</section>
