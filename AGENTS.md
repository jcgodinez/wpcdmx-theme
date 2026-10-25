# WordPress CDMX — AGENTS.md

Block theme (FSE) for the WordPress CDMX community (Mexico City). Forked from `WPGranada/wpgranada26` and rebuilt.
Slug and text domain `wpcdmx-theme`; PHP prefix `wpcdmx_`; CSS/pattern prefix `wpcdmx`.
Code and comments in English; site content in Spanish (Mexico).
Repo: `github.com/jcgodinez/wpcdmx-theme`. Hosting: WordPress.com Business, deployed with GitHub Deployments (see `.deployignore`).

## Source of truth

- Brand: Manual de Normas Gráficas WordPress CDMX 2026 and the "WordPress CDMX" design system artifact in Claude.
- Design tokens live in `theme.json`. Add CSS to `style.css` only for what theme.json cannot express.
- Palette slugs: `crema` (page background), `blanco` (cards, alternate sections), `grafito` (text), `tinta-suave`, `linea`,
  `turquesa`, `turquesa-oscuro` (links), `amarillo`, `verde`, `rojo` (primary button), `gris-claro` (text on grafito).
- Contrast rules: body text only in `grafito`, `tinta-suave`, `turquesa-oscuro` or `rojo`. `turquesa` and `verde` only for
  text 24px+ (or bold 19px+). `amarillo` is never text on light backgrounds. Never use a darker cream for alternate sections.
- Font: Rubik variable (`assets/fonts`). Body 18px, never below 17px.

## Structure

- `patterns/` — every section is a PHP pattern. Header and footer are patterns rendered by `parts/*.html`.
- `templates/front-page.html` stacks the home patterns. `archive-gatherpress_event.html` and `page-eventos.html` are the
  events page; `single-gatherpress_event.html` the event detail.
- `inc/community-links.php` — every community URL (`wpcdmx_link( 'key' )`) and the social networks list. Never hardcode them.
- `inc/events.php` — GatherPress helpers and the Meetup history fallback.
- `inc/partials/` — markup shared by patterns (not patterns themselves).

## Events (GatherPress)

- Event lists are core Query blocks in GatherPress's variation: `"namespace":"gatherpress-event-query"`,
  `"postType":"gatherpress_event"`, `"gatherpress_event_query":"upcoming"|"past"`, `"orderBy":"datetime"`.
- Dates use `gatherpress/event-date` with `displayType:"start"` and a PHP date format in `startDateFormat`.
- Without GatherPress, `wpcdmx_guard_event_queries()` empties those queries so their "no results" content shows the
  Meetup history (`wpcdmx_meetup_history()`).

## Before you say "done"

- `php -l` on every PHP file; `theme.json` must parse.
- Render the home, the events archive and an event at 1440 and 390px: no horizontal overflow, no PHP notices.
