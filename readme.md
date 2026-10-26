# WordPress CDMX - Block Theme

Tema de bloques para la comunidad WordPress CDMX, en la Ciudad de México.

Es un fork de [wpgranada26](https://github.com/WPGranada/wpgranada26), el tema de la comunidad WordPress Granada, publicado bajo GPL v2 o posterior. Gracias a su equipo por liberarlo.

## Requisitos

- WordPress 6.6 o superior (GatherPress pide 7.0)
- PHP 7.4 o superior (GatherPress pide 8.1)
- Plugin recomendado: GatherPress, para los eventos

## Instalación

1. Descarga el repositorio (Code > Download ZIP).
2. Descomprime y renombra la carpeta a `wpcdmx-theme`. El nombre de la carpeta debe coincidir con el text domain.
3. Vuelve a comprimir y súbelo en Apariencia > Temas > Añadir nuevo > Subir tema.

## Eventos

El tema usa [GatherPress](https://wordpress.org/plugins/gatherpress/) para los eventos. Instálalo y crea cada meetup como evento: la portada muestra el próximo y los tres últimos, y la página de eventos lista todos.

Mientras GatherPress no esté activo o no tenga eventos, esas secciones muestran el historial reciente del grupo en Meetup.com, que se edita en `inc/events.php`.

## Enlaces de la comunidad

Todas las URLs de la comunidad y las redes sociales están en `inc/community-links.php`.

## Despliegue

El sitio vive en WordPress.com (plan Business) y se despliega con GitHub Deployments. El archivo `.deployignore` evita copiar al servidor los archivos de desarrollo.

## Páginas de la comunidad

Al crear una página nueva, WordPress ofrece los patrones de la categoría "WordPress CDMX: páginas" con el contenido inicial de Sobre nosotros, Ser ponente, Patrocinadores y Código de conducta. Usa esos slugs (`sobre-nosotros`, `ser-ponente`, `patrocinadores`, `codigo-de-conducta`), porque el menú y el pie apuntan a ellos. El texto queda en la página y se edita en WordPress.

## Pendientes

- Logos: el lema "¡Sigamos aprendiendo juntos!" de los SVG originales es texto vivo; pedir al diseñador la versión en trazos.
