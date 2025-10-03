<?php
/** @var array{title: string, subtitle: string, background: string, primaryCta: array{label: string, url: string}, secondaryCta: array{label: string, url: string}, highlights: array<int, string>} $hero */
/** @var array<int, array{icon: string, title: string, description: string}> $servicePillars */
/** @var array<int, array{name: string, description: string, image: string, url: string, tags: array<int, string>}> $families */
/** @var array{name: string, tagline: string, metrics: array<int, array{label: string, value: string}>} $company */
/** @var array{title: string, description: string, benefits: array<int, string>, primaryCta: array{label: string, url: string}, secondaryCta: array{label: string, url: string}, media: string} $clientPortal */
/** @var array<int, array{title: string, description: string, icon: string}> $process */
?>

<section class="hero hero--home text-white" style="background-image: url('<?= htmlspecialchars($hero['background'], ENT_QUOTES, 'UTF-8'); ?>');">
    <div class="hero__overlay"></div>
    <div class="container position-relative py-5">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="hero__eyebrow">Importadora Textil Camila</span>
                <h1 class="display-4 fw-bold mb-3"><?= htmlspecialchars($hero['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
                <p class="lead text-white-50 mb-4"><?= htmlspecialchars($hero['subtitle'], ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a class="btn btn-accent btn-lg" href="<?= htmlspecialchars($hero['primaryCta']['url'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($hero['primaryCta']['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                    <a class="btn btn-outline-light btn-lg" href="<?= htmlspecialchars($hero['secondaryCta']['url'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($hero['secondaryCta']['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </div>
                <div class="hero__highlights">
                    <?php foreach ($hero['highlights'] as $highlight): ?>
                        <div class="hero__highlight">
                            <i class="fas fa-circle me-2"></i>
                            <span><?= htmlspecialchars($highlight, ENT_QUOTES, 'UTF-8'); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-5 mt-5 mt-lg-0" data-aos="fade-left">
                <div class="hero__card shadow-lg">
                    <h2 class="h5 text-uppercase text-accent mb-3">Tu socio textil integral</h2>
                    <p class="mb-4 text-secondary-light"><?= htmlspecialchars($company['tagline'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($company['values'] as $value): ?>
                            <li class="d-flex gap-3 mb-3 align-items-start">
                                <span class="icon-circle"><i class="fas <?= htmlspecialchars($value['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i></span>
                                <div>
                                    <h3 class="h6 mb-1"><?= htmlspecialchars($value['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                    <p class="text-secondary-light mb-0"><?= htmlspecialchars($value['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <h2 class="display-6 fw-bold mb-3 text-primary-dark">Importamos tendencias, garantizamos disponibilidad</h2>
                <p class="text-secondary-dark mb-4">Nuestro equipo viaja constantemente a ferias internacionales para asegurar colecciones actuales, certificadas y listas para producción.</p>
                <div class="row g-3">
                    <?php foreach (array_slice($company['metrics'], 0, 3) as $metric): ?>
                        <div class="col-6">
                            <div class="metric-card">
                                <span class="metric-card__value"><?= htmlspecialchars($metric['value'], ENT_QUOTES, 'UTF-8'); ?></span>
                                <span class="metric-card__label"><?= htmlspecialchars($metric['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="row g-4">
                    <?php foreach ($servicePillars as $pillar): ?>
                        <div class="col-md-4">
                            <div class="feature-tile h-100 text-center p-4">
                                <div class="feature-tile__icon">
                                    <i class="fas <?= htmlspecialchars($pillar['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                                </div>
                                <h3 class="h6 text-primary-dark mb-2"><?= htmlspecialchars($pillar['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                                <p class="small text-secondary-dark mb-0"><?= htmlspecialchars($pillar['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-eyebrow">Catálogo mayorista</span>
            <h2 class="display-6 fw-bold text-primary-dark">Familias de textiles diseñadas para tus colecciones</h2>
            <p class="text-secondary-dark mb-0">Selecciona el universo de telas que necesitas y solicita muestrarios personalizados.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($families as $family): ?>
                <div class="col-lg-4" data-aos="fade-up">
                    <article class="family-card h-100">
                        <div class="family-card__media">
                            <img src="<?= htmlspecialchars($family['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($family['name'], ENT_QUOTES, 'UTF-8'); ?>" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="family-card__body">
                            <h3 class="h5 text-primary-dark"><?= htmlspecialchars($family['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="text-secondary-dark"><?= htmlspecialchars($family['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                            <ul class="family-card__tags list-unstyled d-flex flex-wrap gap-2">
                                <?php foreach ($family['tags'] as $tag): ?>
                                    <li class="badge rounded-pill bg-white text-primary-dark border"><?= htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a class="stretched-link" href="<?= htmlspecialchars($family['url'], ENT_QUOTES, 'UTF-8'); ?>">
                                Explorar catálogo
                            </a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow-lg">
                    <img src="<?= htmlspecialchars($clientPortal['media'], ENT_QUOTES, 'UTF-8'); ?>" alt="Panel del portal de clientes" class="w-100 h-100 object-fit-cover">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-eyebrow">Digitalizamos la experiencia</span>
                <h2 class="display-6 fw-bold text-primary-dark mb-3"><?= htmlspecialchars($clientPortal['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p class="text-secondary-dark mb-4"><?= htmlspecialchars($clientPortal['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                <ul class="list-unstyled mb-4">
                    <?php foreach ($clientPortal['benefits'] as $benefit): ?>
                        <li class="d-flex gap-3 mb-2 align-items-start">
                            <span class="icon-circle icon-circle--accent"><i class="fas fa-check"></i></span>
                            <span class="text-secondary-dark"><?= htmlspecialchars($benefit, ENT_QUOTES, 'UTF-8'); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-accent" href="<?= htmlspecialchars($clientPortal['primaryCta']['url'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($clientPortal['primaryCta']['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                    <a class="btn btn-outline-primary" href="<?= htmlspecialchars($clientPortal['secondaryCta']['url'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($clientPortal['secondaryCta']['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-dark text-white">
    <div class="container">
        <div class="row g-4 text-center">
            <?php foreach ($company['metrics'] as $metric): ?>
                <div class="col-6 col-lg-3" data-aos="fade-up">
                    <div class="metric-tile h-100">
                        <span class="metric-tile__value"><?= htmlspecialchars($metric['value'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <span class="metric-tile__label"><?= htmlspecialchars($metric['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-eyebrow">Metodología</span>
            <h2 class="display-6 fw-bold text-primary-dark">Así acompañamos cada proyecto textil</h2>
            <p class="text-secondary-dark mb-0">Integramos servicio comercial, digital y logístico para garantizar entregas a tiempo.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($process as $index => $step): ?>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $index * 100; ?>">
                    <div class="process-card h-100 text-center p-4">
                        <div class="process-card__step">0<?= $index + 1; ?></div>
                        <div class="process-card__icon">
                            <i class="fas <?= htmlspecialchars($step['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                        </div>
                        <h3 class="h6 text-primary-dark mb-2"><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="text-secondary-dark small mb-0"><?= htmlspecialchars($step['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section-padding bg-cta text-white text-center" data-aos="fade-up">
    <div class="container">
        <h2 class="display-5 fw-bold mb-3">¿Listo para planificar tu próxima colección?</h2>
        <p class="lead mb-4">Solicita una sesión con nuestro equipo comercial y recibe una propuesta curada para tu negocio.</p>
        <a class="btn btn-light btn-lg" href="index.php?page=contact">Agendar asesoría</a>
    </div>
</section>
