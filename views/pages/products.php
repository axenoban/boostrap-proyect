<?php
/** @var array<string, array{title: string, description: string, items: array<int, array{name: string, description: string, image: string}>}> $families */
/** @var array<int, array{icon: string, title: string, description: string}> $services */
?>

<section class="subpage-hero" style="background-image: url('https://images.unsplash.com/photo-1525171254930-643fc658b64e?auto=format&fit=crop&w=1800&q=80');">
    <div class="subpage-hero__overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center" data-aos="fade-up">
                <span class="section-eyebrow text-white">Catálogo mayorista</span>
                <h1 class="display-4 fw-bold text-white mb-3">Textiles seleccionados para moda, hogar e industria</h1>
                <p class="lead text-white-50 mb-0">Explora nuestras familias de producto y agenda una demostración con tu asesor comercial.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="display-6 fw-bold text-primary-dark mb-3">Colecciones curadas con disponibilidad inmediata</h2>
                <p class="text-secondary-dark mb-4">Integramos surtidos que responden a campañas de moda, licitaciones institucionales y proyectos de interiorismo.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-accent" href="#naturales">Ver fibras naturales</a>
                    <a class="btn btn-outline-primary" href="index.php?page=client-login">Portal de reservas</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ratio ratio-4x3 rounded-4 overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1521579742250-980c1e65be4c?auto=format&fit=crop&w=1400&q=80" alt="Muestrario de telas" class="w-100 h-100 object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<?php foreach ($families as $slug => $family): ?>
<section id="<?= htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>" class="section-padding <?= $slug === 'sinteticos' ? '' : 'bg-light-gray'; ?>">
    <div class="container">
        <div class="row g-4 align-items-center mb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <span class="section-eyebrow">Familia de productos</span>
                <h2 class="display-6 fw-bold text-primary-dark mb-3"><?= htmlspecialchars($family['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p class="text-secondary-dark mb-0"><?= htmlspecialchars($family['description'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="btn btn-outline-primary" href="index.php?page=contact">Solicitar muestrarios</a>
            </div>
        </div>
        <div class="row g-4">
            <?php foreach ($family['items'] as $item): ?>
                <div class="col-md-6 col-xl-4" data-aos="fade-up">
                    <article class="product-card h-100">
                        <div class="product-card__image">
                            <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="product-card__body">
                            <h3 class="h5 text-primary-dark mb-2"><?= htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                            <p class="text-secondary-dark mb-0"><?= htmlspecialchars($item['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endforeach; ?>

<section class="section-padding">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-eyebrow">Servicios complementarios</span>
            <h2 class="display-6 fw-bold text-primary-dark">Una cadena de suministro pensada para tu negocio</h2>
            <p class="text-secondary-dark mb-0">Integramos soluciones logísticas, técnicas y digitales para respaldar cada entrega.</p>
        </div>
        <div class="row g-4">
            <?php foreach ($services as $service): ?>
                <div class="col-md-6 col-xl-3" data-aos="fade-up">
                    <div class="service-card h-100 text-center p-4">
                        <div class="service-card__icon">
                            <i class="fas <?= htmlspecialchars($service['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                        </div>
                        <h3 class="h6 text-primary-dark mb-2"><?= htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="text-secondary-dark small mb-0"><?= htmlspecialchars($service['description'], ENT_QUOTES, 'UTF-8'); ?></p>
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
                <h2 class="display-5 fw-bold mb-3">¿Necesitas un desarrollo a medida?</h2>
                <p class="lead text-white-muted mb-0">Nuestro equipo de sourcing localiza proveedores específicos, gestiona certificaciones y coordina la logística completa.</p>
            </div>
            <div class="col-lg-5 text-lg-end" data-aos="fade-left">
                <a class="btn btn-light btn-lg" href="index.php?page=contact">Contáctanos hoy</a>
            </div>
        </div>
    </div>
</section>
