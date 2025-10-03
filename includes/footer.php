<?php
use App\Support\Config;

$company = Config::get('company');
$navigation = Config::get('navigation');

if (!function_exists('nav_url')) {
    function nav_url(string $route): string
    {
        return $route === 'home' ? 'index.php' : 'index.php?page=' . urlencode($route);
    }
}
?>
</main>
<footer class="site-footer text-white py-5 mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <h5 class="text-accent mb-3"><?= htmlspecialchars($company['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                <p class="text-white-50"><?= htmlspecialchars($company['tagline'], ENT_QUOTES, 'UTF-8'); ?></p>
                <div class="d-flex gap-3 mt-3">
                    <?php foreach ($company['social'] as $social): ?>
                        <a class="text-white-50 hover-accent" href="<?= htmlspecialchars($social['url'], ENT_QUOTES, 'UTF-8'); ?>" aria-label="<?= htmlspecialchars($social['label'], ENT_QUOTES, 'UTF-8'); ?>">
                            <i class="<?= htmlspecialchars($social['icon'], ENT_QUOTES, 'UTF-8'); ?>"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <h5 class="text-accent mb-3">Navegación</h5>
                <ul class="list-unstyled text-white-50 mb-0">
                    <?php foreach ($navigation['main'] as $item): ?>
                        <li class="mb-2">
                            <a class="text-white-50 hover-accent text-decoration-none" href="<?= htmlspecialchars(nav_url($item['route']), ENT_QUOTES, 'UTF-8'); ?>">
                                <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    <li><a class="text-white-50 hover-accent text-decoration-none" href="<?= htmlspecialchars(nav_url($navigation['account']['route']), ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($navigation['account']['label'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                </ul>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <h5 class="text-accent mb-3">Contáctanos</h5>
                <p class="text-white-50 mb-1"><i class="fas fa-map-marker-alt me-2 text-accent"></i><?= htmlspecialchars($company['contact']['address'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p class="text-white-50 mb-1"><i class="fas fa-phone me-2 text-accent"></i><?= htmlspecialchars($company['contact']['phone'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p class="text-white-50 mb-3"><i class="fas fa-envelope me-2 text-accent"></i><?= htmlspecialchars($company['contact']['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                <ul class="list-unstyled text-white-50 small mb-0">
                    <?php foreach ($company['contact']['hours'] as $hour): ?>
                        <li><?= htmlspecialchars($hour, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="text-center text-white-50 small">
            © <?= date('Y'); ?> <?= htmlspecialchars($company['name'], ENT_QUOTES, 'UTF-8'); ?>. Todos los derechos reservados.
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
