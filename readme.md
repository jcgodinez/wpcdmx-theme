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

La base de URL de GatherPress es `evento` (cada evento queda en /evento/nombre/). Crea una página vacía llamada Eventos con el slug `eventos`; todos los enlaces del tema a Eventos apuntan a ella. El tema la muestra con la plantilla `page-eventos.html` (próximo meetup y eventos pasados), y así la dirección /eventos/ funciona aunque el archivo de GatherPress no responda. No la asignes como página de archivo en los ajustes de GatherPress.

Si GatherPress no está activo o no tiene eventos, esas secciones muestran un mensaje con enlace al grupo de Meetup.

## Enlaces de la comunidad

Todas las URLs de la comunidad y las redes sociales están en `inc/community-links.php`.

## Despliegue

El sitio vive en WordPress.com (plan Business) y se despliega con GitHub Deployments. El archivo `.deployignore` evita copiar al servidor los archivos de desarrollo.

## Páginas de la comunidad

Al crear una página nueva, WordPress ofrece los patrones de la categoría "WordPress CDMX: páginas" con el contenido inicial de Sobre nosotros, Ser ponente, Patrocinadores y Código de conducta. Usa esos slugs (`sobre-nosotros`, `ser-ponente`, `patrocinadores`, `codigo-de-conducta`), porque el menú y el pie apuntan a ellos. El texto queda en la página y se edita en WordPress.

## Grabaciones

Cada evento puede tener el enlace de su grabación en YouTube en el campo personalizado `wpcdmx_video_url`. El enlace se guarda fuera del contenido, así que no se pierde si el evento se vuelve a importar de Meetup. Si el campo tiene un enlace, la página del evento muestra el video (con youtube-nocookie.com) y la lista de eventos pasados marca el evento con la etiqueta "Video". Para editarlo en WordPress, activa el panel de Campos personalizados en las preferencias del editor.

## Galería

La página Galería (slug `galeria`) guarda las fotos de los meetups, ordenadas por año. Cada meetup se agrega con el patrón "Álbum de meetup": fecha, título y hasta tres fotos que se amplían al hacer clic. Las fotos van en esta página y no dentro de los eventos, porque el importador de Meetup sobrescribe el contenido de un evento cada vez que se reimporta. Sube las fotos reducidas a 1920 px de ancho.

Los eventos se migran completos desde Meetup. La galería empieza en 2024, porque de los meetups anteriores casi no hay fotos.

## Pendientes

- Logos: el lema "¡Sigamos aprendiendo juntos!" de los SVG originales es texto vivo; pedir al diseñador la versión en trazos.
