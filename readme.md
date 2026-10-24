# WordPress CDMX - Block Theme

Tema de bloques para la comunidad WordPress CDMX, en la Ciudad de México.

Es un fork de [wpgranada26](https://github.com/WPGranada/wpgranada26), el tema de la comunidad WordPress Granada, publicado bajo GPL v2 o posterior. Gracias a su equipo por liberarlo.

## Requisitos

- WordPress 6.5+
- PHP 7.4+
- Plugin recomendado: [Icon Block](https://wordpress.org/plugins/icon-block/) para los iconos del patrón Canales

## Instalación

1. Descarga el repositorio (Code > Download ZIP).
2. Descomprime y renombra la carpeta a `wpcdmx-theme`. El nombre de la carpeta debe coincidir con el text domain.
3. Vuelve a comprimir y súbelo en Apariencia > Temas > Añadir nuevo > Subir tema.

## Enlaces de la comunidad

Todas las URLs externas que imprime el tema desde PHP están en `inc/community-links.php`. Los valores `#` son marcadores pendientes. Las plantillas y partes en HTML (header, single, 404, etc.) no pueden ejecutar PHP, así que sus botones también usan `#` hasta definir la URL final.

También se pueden cambiar desde un plugin o tema hijo:

```php
add_filter( 'wpcdmx_community_links', function ( $links ) {
	$links['meetup'] = 'https://www.meetup.com/...';
	return $links;
} );
```

## Sistema de diseño

Todo vive en `theme.json`.

| Token | Hex | Nombre |
|-------|-----|--------|
| `primary` | `#3858E9` | Azul WordPress |
| `primary-dark` | `#213FD4` | Azul oscuro |
| `primary-light` | `#EFF2FF` | Azul muy claro |
| `primary-muted` | `#C7D1FF` | Azul suave |
| `accent` | `#F97316` | Naranja acento |
| `accent-light` | `#FFF7ED` | Naranja claro |
| `base` | `#FFFFFF` | Blanco |
| `background-light` | `#F5F7FA` | Fondo claro |
| `contrast` | `#101828` | Texto principal |
| `secondary` | `#344054` | Texto secundario |
| `muted` | `#667085` | Texto suave |
| `secondary-light` | `#F5F7FA` | Fondo secundario claro |
| `tertiary` | `#F97315` | Naranja terciario |

Tipografías locales en `assets/fonts/`: Plus Jakarta Sans para títulos, Inter e Inter Tight para texto. Layout con `contentSize` de 1280px y `wideSize` de 1440px.

## Pendientes

- Logos e imágenes: `assets/images/` todavía contiene los archivos de WordPress Granada (logos, fotos de comunidad, imágenes de meetups). Hay que reemplazarlos por los de WordPress CDMX conservando los nombres.
- Enlaces: completar `inc/community-links.php` y los `#` de las plantillas HTML.
- Eventos: el tema heredó plantillas para el plugin `community-meetings` (`metgs_meeting`). WordPress.org planea migrar los meetups de Meetup.com a GatherPress, así que la sección de eventos se rehará sobre GatherPress cuando el plan esté definido.
- `style.css`: contiene muchas capas de ajustes del sitio original. Conviene depurarlo y mover lo posible a `theme.json`. Además referencia seis imágenes que ya no existían en el repo original (`meetup-*.png`, `blog-*.png`); esas reglas se pueden eliminar.
- Textos: revisar redacción de los patrones para la comunidad de la CDMX.
