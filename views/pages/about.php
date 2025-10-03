<?php
/** @var array{name: string, tagline: string, values: array<int, array{icon: string, title: string, description: string}>} $company */
/** @var array<int, array{year: string, title: string, description: string}> $timeline */
/** @var array<int, array{name: string, role: string, bio: string}> $leaders */
?>

<section class="subpage-hero" style="background-image: url('https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=1800&q=80');">
    <div class="subpage-hero__overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <span class="section-eyebrow text-white">Nuestra historia</span>
                <h1 class="display-4 fw-bold text-white mb-3">15 años impulsando la industria textil boliviana</h1>
                <p class="lead text-white-50 mb-0"><?= htmlspecialchars($company['tagline'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about__card shadow-lg p-4 p-lg-5">
                    <h2 class="h4 text-uppercase text-accent mb-3">Nuestro propósito</h2>
                    <p class="fs-5 text-secondary-dark mb-4">Facilitar a emprendedores, talleres y marcas bolivianas textiles premium, sostenibles y con disponibilidad inmediata.</p>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($company['values'] as $value): ?>
                            <li class="d-flex gap-3 mb-3 align-items-start">
                                <span class="icon-circle icon-circle--accent"><i class="fas <?= htmlspecialchars($value['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i></span>
                                <div>
                                    <h3 class="h6 mb-1 text-primary-dark"><?= htmlspecialchars($value['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <p class="text-secondary-dark mb-0"><?= htmlspecialchars($value['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1516251193007-45ef944ab0c6?auto=format&fit=crop&w=1400&q=80" alt="Equipo de Importadora Textil Camila" class="w-100 h-100 object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-4" data-aos="fade-right">
                <h2 class="display-6 fw-bold text-primary-dark mb-3">Hitos que definen nuestro camino</h2>
                <p class="text-secondary-dark">Evolucionamos con el mercado textil boliviano, integrando innovación, sostenibilidad y herramientas digitales.</p>
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <div class="timeline">
                    <?php foreach ($timeline as $milestone): ?>
                        <div class="timeline__item">
                            <div class="timeline__year"><?= htmlspecialchars($milestone['year'], ENT_QUOTES, 'UTF-8'); ?></div>
                            <div class="timeline__content">
                                <h3 class="h5 text-primary-dark mb-1"><?= htmlspecialchars($milestone['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="text-secondary-dark mb-0"><?= htmlspecialchars($milestone['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-eyebrow">Equipo directivo</span>
            <h2 class="display-6 fw-bold text-primary-dark">Personas que lideran nuestra visión</h2>
            <p class="text-secondary-dark mb-0">Profesionales especializados en comercio internacional, desarrollo de producto y servicio al cliente.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($leaders as $leader): ?>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="leader-card h-100 text-center p-4">
                        <div class="leader-card__avatar">
                            <span class="leader-card__initials"><?= htmlspecialchars(substr($leader['name'], 0, 1), ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                        <h3 class="h5 text-primary-dark mb-1"><?= htmlspecialchars($leader['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="text-accent fw-semibold mb-3"><?= htmlspecialchars($leader['role'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="text-secondary-dark mb-0"><?= htmlspecialchars($leader['bio'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-padding bg-cta text-white">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-3">Creemos en alianzas a largo plazo</h2>
                <p class="lead text-white-muted mb-0">Desde marcas emergentes hasta grupos industriales, construimos relaciones basadas en confianza, servicio y resultados.</p>
            </div>
            <div class="col-lg-5 text-lg-end" data-aos="fade-left">
                <a class="btn btn-light btn-lg" href="index.php?page=contact">Programar visita al showroom</a>
            </div>
        </div>
    </div>
</section>
