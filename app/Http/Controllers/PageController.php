<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Core\View;
use App\Support\Config;

final class PageController
{
    /**
     * @param array<string, mixed> $page
     */
    public static function home(array $page): array
    {
        $company = self::company();

        $hero = [
            'title' => 'Textiles importados que elevan tu marca',
            'subtitle' => 'Curamos colecciones globales de telas para moda, decoración y proyectos corporativos en Bolivia.',
            'background' => 'https://images.unsplash.com/photo-1521579742250-980c1e65be4c?auto=format&fit=crop&w=1800&q=80',
            'primaryCta' => [
                'label' => 'Explorar catálogo',
                'url' => 'index.php?page=products',
            ],
            'secondaryCta' => [
                'label' => 'Hablar con un asesor',
                'url' => 'index.php?page=contact',
            ],
            'highlights' => [
                'Más de 140 familias de telas activas',
                'Reservas y seguimiento en línea',
                'Entrega en Santa Cruz en 48 horas',
            ],
        ];

        $servicePillars = [
            [
                'icon' => 'fa-layer-group',
                'title' => 'Curaduría especializada',
                'description' => 'Cada temporada analizamos tendencias globales y proponemos colecciones listas para producción.',
            ],
            [
                'icon' => 'fa-warehouse',
                'title' => 'Stock confiable',
                'description' => 'Control digital de inventario para asegurar disponibilidad real antes de confirmar tu pedido.',
            ],
            [
                'icon' => 'fa-handshake-angle',
                'title' => 'Acompañamiento total',
                'description' => 'Asesores dedicados que apoyan tu planificación de compras y lanzamientos.',
            ],
        ];

        $families = [
            [
                'name' => 'Moda y confección',
                'description' => 'Algodones, linos, sedas y bases premium listas para colecciones casuales, formales y de alta costura.',
                'image' => 'assets/images/categorias/1.png',
                'url' => 'index.php?page=products#naturales',
                'tags' => ['Poplines', 'Sedas', 'Denim liviano'],
            ],
            [
                'name' => 'Hogar y decoración',
                'description' => 'Texturas para tapicería, cortinería, ropa de cama y proyectos corporativos de interiorismo.',
                'image' => 'assets/images/categorias/2.png',
                'url' => 'index.php?page=products#sinteticos',
                'tags' => ['Chenilles', 'Linos pesados', 'Blackout'],
            ],
            [
                'name' => 'Soluciones técnicas',
                'description' => 'Materiales resistentes para uniformes, publicidad y aplicaciones industriales específicas.',
                'image' => 'assets/images/categorias/3.png',
                'url' => 'index.php?page=products#tecnicos',
                'tags' => ['Ignífugos', 'Ripstop', 'Reflectivos'],
            ],
        ];

        $clientPortal = [
            'title' => 'Portal exclusivo para clientes',
            'description' => 'Reserva metrajes, valida inventario y descarga comprobantes desde cualquier dispositivo. Diseñado para agilizar tu cadena de suministro.',
            'benefits' => [
                'Inventario actualizado minuto a minuto con bloqueo de rollos en línea.',
                'Historial de compras y documentos en un solo lugar.',
                'Alertas de reposición y seguimiento de entregas.',
            ],
            'primaryCta' => [
                'label' => 'Ingresar al portal',
                'url' => 'index.php?page=client-login',
            ],
            'secondaryCta' => [
                'label' => 'Solicitar acceso',
                'url' => 'index.php?page=contact',
            ],
            'media' => 'https://images.unsplash.com/photo-1524635962361-d7f8ae9c79b1?auto=format&fit=crop&w=1200&q=80',
        ];

        $process = [
            [
                'title' => 'Diagnóstico de necesidades',
                'description' => 'Revisamos tu tipo de producción, calendarios y fichas técnicas para proponer materiales compatibles.',
                'icon' => 'fa-comments',
            ],
            [
                'title' => 'Selección de muestrarios',
                'description' => 'Armamos una vitrina personalizada con opciones de color, textura y composición.',
                'icon' => 'fa-swatchbook',
            ],
            [
                'title' => 'Reserva y programación',
                'description' => 'Bloquea rollos, define cortes y agenda entregas desde el portal o con tu asesor.',
                'icon' => 'fa-calendar-check',
            ],
            [
                'title' => 'Seguimiento logístico',
                'description' => 'Coordinamos despacho, transporte y confirmación de recepción para garantizar tu timeline.',
                'icon' => 'fa-truck-fast',
            ],
        ];

        return View::page(
            (string) $page['slug'],
            'pages/home',
            'Importadora Textil Camila — Mayorista de telas premium en Santa Cruz',
            [
                'company' => $company,
                'hero' => $hero,
                'servicePillars' => $servicePillars,
                'families' => $families,
                'clientPortal' => $clientPortal,
                'process' => $process,
            ]
        );
    }

    /**
     * @param array<string, mixed> $page
     */
    public static function about(array $page): array
    {
        $company = self::company();

        $timeline = [
            [
                'year' => '2009',
                'title' => 'Comienzo familiar',
                'description' => 'Iniciamos como un emprendimiento familiar importando rollos de algodón y denim desde Brasil y Perú.',
            ],
            [
                'year' => '2014',
                'title' => 'Expansión logística',
                'description' => 'Implementamos bodegas climatizadas y alianzas con forwarders para asegurar entregas constantes.',
            ],
            [
                'year' => '2018',
                'title' => 'Catálogo digital',
                'description' => 'Digitalizamos nuestro catálogo y abrimos el primer portal de reservas para clientes mayoristas del país.',
            ],
            [
                'year' => '2023',
                'title' => 'Colecciones sostenibles',
                'description' => 'Integramos proveedores certificados OEKO-TEX, BCI y reciclados post-consumo para líneas responsables.',
            ],
        ];

        $leaders = [
            [
                'name' => 'Camila Vargas',
                'role' => 'Directora General',
                'bio' => 'Especialista en comercio internacional con más de 15 años negociando catálogos textiles en América Latina.',
            ],
            [
                'name' => 'Rodrigo Suárez',
                'role' => 'Gerente Comercial',
                'bio' => 'Lidera el equipo de asesores que acompaña a confeccionistas y marcas en la planificación de compras.',
            ],
            [
                'name' => 'Paola Méndez',
                'role' => 'Jefa de Innovación',
                'bio' => 'Coordina las colecciones cápsula, pruebas de calidad y scouting de nuevos proveedores.',
            ],
        ];

        return View::page(
            (string) $page['slug'],
            'pages/about',
            'Sobre Importadora Textil Camila — Trayectoria y equipo',
            [
                'company' => $company,
                'timeline' => $timeline,
                'leaders' => $leaders,
            ]
        );
    }

    /**
     * @param array<string, mixed> $page
     */
    public static function products(array $page): array
    {
        $families = [
            'naturales' => [
                'title' => 'Fibras Naturales',
                'description' => 'Telas de algodón, lino, seda y mezclas celulósicas seleccionadas para moda y decoración premium.',
                'items' => [
                    [
                        'name' => 'Algodón premium',
                        'description' => 'Poplines, twills y gabardinas con control de encogimiento y certificaciones OEKO-TEX.',
                        'image' => 'https://images.unsplash.com/photo-1521579742250-980c1e65be4c?auto=format&fit=crop&w=900&q=80',
                    ],
                    [
                        'name' => 'Lino europeo',
                        'description' => 'Gramage desde 150 g/m² hasta 380 g/m², ideal para sastrería ligera y hogar.',
                        'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=900&q=80',
                    ],
                    [
                        'name' => 'Sedas y satines',
                        'description' => 'Brillos delicados, caídas fluidas y opciones combinadas con elastano para alta costura.',
                        'image' => 'https://images.unsplash.com/photo-1520962922320-2038eebab146?auto=format&fit=crop&w=900&q=80',
                    ],
                ],
            ],
            'sinteticos' => [
                'title' => 'Sintéticos y Mezclas Técnicas',
                'description' => 'Rendimiento, elasticidad y fácil cuidado para colecciones deportivas, uniformes y publicidad.',
                'items' => [
                    [
                        'name' => 'Poliéster versátil',
                        'description' => 'Microfibras, chiffon y bases para sublimación con control de colorimetría.',
                        'image' => 'https://images.unsplash.com/photo-1525171254930-643fc658b64e?auto=format&fit=crop&w=900&q=80',
                    ],
                    [
                        'name' => 'Lycra y spandex',
                        'description' => 'Elasticidad bidireccional para trajes de baño, activewear y prendas de compresión.',
                        'image' => 'https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?auto=format&fit=crop&w=900&q=80',
                    ],
                    [
                        'name' => 'Softshell y neopreno',
                        'description' => 'Resistencia al clima y confort térmico para uniformes outdoor y merchandising premium.',
                        'image' => 'https://images.unsplash.com/photo-1489980721706-f487dab89c24?auto=format&fit=crop&w=900&q=80',
                    ],
                ],
            ],
            'tecnicos' => [
                'title' => 'Tejidos Especiales',
                'description' => 'Soluciones industriales y decorativas con acabados técnicos, retardantes o texturas diferenciadas.',
                'items' => [
                    [
                        'name' => 'Denim y gabardina pesada',
                        'description' => 'Ideales para uniformes, workwear y colecciones urbanas con resistencia certificada.',
                        'image' => 'https://images.unsplash.com/photo-1554568218-0f1715e72254?auto=format&fit=crop&w=900&q=80',
                    ],
                    [
                        'name' => 'Terciopelos y panas',
                        'description' => 'Acabados lujosos para hotelería, decoración corporativa y moda premium.',
                        'image' => 'https://images.unsplash.com/photo-1612423284934-e7f3294a0e7f?auto=format&fit=crop&w=900&q=80',
                    ],
                    [
                        'name' => 'Encajes y bordados',
                        'description' => 'Detalles delicados para novia, lencería y colecciones de fiesta.',
                        'image' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=900&q=80',
                    ],
                ],
            ],
        ];

        $services = [
            [
                'icon' => 'fa-ruler-combined',
                'title' => 'Corte previo y calibrado',
                'description' => 'Programamos cortes industriales y entregamos piezas listas para tu línea de confección.',
            ],
            [
                'icon' => 'fa-flask',
                'title' => 'Laboratorio de color',
                'description' => 'Matching de pantones, pruebas de solidez y prelavados para garantizar consistencia.',
            ],
            [
                'icon' => 'fa-laptop',
                'title' => 'Catálogo digital',
                'description' => 'Ficha técnica descargable, imágenes en alta calidad y disponibilidad en tiempo real.',
            ],
            [
                'icon' => 'fa-earth-americas',
                'title' => 'Sourcing a medida',
                'description' => 'Buscamos proveedores específicos según tus requerimientos y volúmenes.',
            ],
        ];

        return View::page(
            (string) $page['slug'],
            'pages/products',
            'Catálogo de productos — Importadora Textil Camila',
            [
                'families' => $families,
                'services' => $services,
            ]
        );
    }

    /**
     * @param array<string, mixed> $page
     */
    public static function contact(array $page): array
    {
        $company = self::company();

        $channels = [
            [
                'icon' => 'fa-headset',
                'title' => 'Asesoría comercial',
                'description' => 'Coordinamos visitas a tu taller, envío de muestrarios y seguimiento de compras.',
                'contact' => $company['contact']['phone'],
            ],
            [
                'icon' => 'fa-envelope-open-text',
                'title' => 'Correo electrónico',
                'description' => 'Envíanos tus fichas técnicas o listas de compra y prepara tu programación.',
                'contact' => $company['contact']['email'],
            ],
            [
                'icon' => 'fa-location-dot',
                'title' => 'Visítanos',
                'description' => 'Nuestra sala de exhibición cuenta con catálogos actualizados y asesores especializados.',
                'contact' => $company['contact']['address'],
            ],
        ];

        return View::page(
            (string) $page['slug'],
            'pages/contact',
            'Contáctanos — Importadora Textil Camila',
            [
                'company' => $company,
                'channels' => $channels,
            ]
        );
    }

    /**
     * @param array<string, mixed> $page
     */
    public static function clientLogin(array $page): array
    {
        $benefits = [
            'Reservas de metraje en tiempo real con bloqueo automático de stock.',
            'Descarga de facturas, notas de entrega y reportes históricos.',
            'Notificaciones inteligentes para reposición y colecciones recomendadas.',
        ];

        $features = [
            [
                'icon' => 'fa-chart-line',
                'title' => 'Tablero de compras',
                'description' => 'Indicadores de consumo, metraje reservado y proyección de entregas por proyecto.',
            ],
            [
                'icon' => 'fa-file-lines',
                'title' => 'Documentación centralizada',
                'description' => 'Accede a contratos, facturas y certificados de calidad desde un único lugar.',
            ],
            [
                'icon' => 'fa-bell',
                'title' => 'Alertas inteligentes',
                'description' => 'Configura recordatorios de vencimientos, reposiciones y lanzamientos de temporada.',
            ],
        ];

        return View::page(
            (string) $page['slug'],
            'pages/client-login',
            'Portal de clientes — Importadora Textil Camila',
            [
                'benefits' => $benefits,
                'features' => $features,
            ]
        );
    }

    public static function notFound(): array
    {
        return View::make(
            'errors/404',
            'Página no encontrada — Importadora Textil Camila',
            [
                'activePage' => null,
            ]
        );
    }

    public static function serverError(): array
    {
        return View::make(
            'errors/500',
            'Error interno — Importadora Textil Camila',
            [
                'activePage' => null,
            ]
        );
    }

    /**
     * @return array<string, mixed>
     */
    private static function company(): array
    {
        /** @var array<string, mixed> $company */
        $company = Config::get('company', []);

        return $company;
    }
}
