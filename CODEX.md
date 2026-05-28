# CODEX PROJECT RULES — MARKINGWEBS

## CRITICAL RULES

1. NEVER remove or replace the owner photo/image unless explicitly requested by the user.

2. NEVER overwrite:
- hero images
- owner branding
- personal photos
- portfolio images
- logos
- business identity assets

without permission.

3. Before editing ANY section:
- analyze the existing design
- preserve the structure
- preserve responsive behavior
- preserve animations
- preserve visual identity

4. DO NOT redesign the entire website unless explicitly requested.

5. Always improve incrementally and carefully.

6. NEVER delete sections already approved by the user.

7. NEVER replace working code with templates.

8. Preserve:
- spacing
- layout
- responsiveness
- animations
- hover effects
- modals
- portfolio interactions

9. Before changing images:
- ask if the image is important
- preserve original assets
- create backups if needed

10. NEVER remove the owner's personal branding.

11. The owner image/photo is part of the business identity and must remain unless explicitly replaced by the user.

12. All UI improvements must:
- match existing style
- maintain premium aesthetic
- keep the site modern
- preserve SEO structure

13. When updating hero sections:
- keep owner photo visible
- improve around the image
- do not crop the face badly
- do not hide branding

14. Always preserve:
- GitHub repository structure
- deployment compatibility
- component organization

15. Before major edits:
- explain what will change
- avoid destructive edits
- avoid unnecessary refactors

16. Any redesign must:
- preserve the user's business identity
- preserve Markingwebs branding
- preserve orange/blue branding direction

17. NEVER replace custom sections with generic templates.

18. All edits should feel:
- premium
- SaaS-like
- modern agency
- professional USA business quality

19. Always verify:
- desktop
- tablet
- mobile

20. After every major change:
- commit changes carefully
- avoid breaking deployment
- avoid deleting assets


# CODEX.md - Reglas Permanentes del Proyecto Markingwebs

## Objetivo Principal

Markingwebs es una página profesional para vender:

* Desarrollo Web
* Ecommerce
* Landing Pages
* Branding
* SEO
* Diseño Gráfico
* Marketing Digital

Todo cambio debe aumentar la conversión de clientes y mantener una apariencia premium.

---

# REGLA #1 - NO BORRAR NADA SIN AUTORIZACIÓN

Antes de modificar cualquier archivo:

* Revisar dependencias
* Revisar secciones conectadas
* Revisar JavaScript relacionado
* Revisar responsive

NO eliminar:

* Secciones existentes
* Componentes existentes
* Imágenes existentes
* Animaciones existentes
* Modales existentes
* Formularios existentes

Si existe duda:
DETENERSE y preguntar.

---

# REGLA #2 - FOTO PERSONAL PROTEGIDA

La foto de Michael Perez ubicada en el Hero Section es un asset protegido.

PROHIBIDO:

* Reemplazarla
* Ocultarla
* Eliminarla
* Cambiarla por mockups
* Cambiarla por ilustraciones
* Cambiarla por imágenes generadas por IA

La foto siempre debe permanecer visible.

---

# REGLA #3 - HERO SECTION PROTEGIDO

No modificar sin autorización:

* Layout del Hero
* Textos principales
* CTA principales
* Imagen personal
* Branding principal

Se permiten únicamente mejoras visuales menores.

---

# REGLA #4 - PORTAFOLIO PROTEGIDO

Las imágenes del portfolio son parte del branding.

Antes de reemplazar imágenes:

1. Crear backup
2. Mantener nombres originales
3. Mantener rutas originales
4. Verificar desktop
5. Verificar mobile

Nunca eliminar imágenes sin respaldo.

---

# REGLA #5 - CAMBIOS MINIMOS

Siempre preferir:

* Cambios pequeños
* Cambios seguros
* Cambios reversibles

Evitar:

* Refactors masivos
* Reestructuración completa
* Cambios innecesarios

---

# REGLA #6 - RESPONSIVE OBLIGATORIO

Todo cambio debe verificarse en:

* Desktop
* Tablet
* Mobile

No romper:

* Navegación
* Tarjetas
* Formularios
* Modales
* Hero

---

# REGLA #7 - EXPERIENCIA PREMIUM

El estilo visual debe parecer:

* Apple
* Stripe
* Shopify
* Framer
* Webflow
* Agencias premium de USA

Evitar apariencia genérica.

---

# REGLA #8 - PORTFOLIO INTERACTIVO

Las tarjetas del portfolio deben convertirse en herramientas de venta.

Al hacer click:

* Mostrar información
* Mostrar beneficios
* Mostrar características
* Mostrar CTA

Objetivo:
Generar leads.

---

# REGLA #9 - MODALES

Todo modal debe incluir:

* Animación suave
* Blur de fondo
* Botón cerrar
* Escape para cerrar
* Click fuera para cerrar

Mantener accesibilidad.

---

# REGLA #10 - WHATSAPP

Todo flujo importante debe terminar con:

* WhatsApp
* Contact Form
* Request Quote

Objetivo:
Conversión de clientes.

---

# REGLA #11 - DOCUMENTACIÓN

Después de cada tarea:

Actualizar este archivo indicando:

* Archivos modificados
* Funcionalidades agregadas
* Problemas encontrados
* Solución aplicada

---

# REGLA #12 - ANTES DE TERMINAR

Mostrar siempre:

Ruta completa del proyecto:

C:\Users\mayco\OneDrive\Desktop\Markingwebs-main

Archivos modificados.

Resultado final.

Estado del repositorio.

---

# REGLA #13 - GIT

Antes de commit:

* Revisar cambios
* Verificar imágenes
* Verificar responsive
* Verificar hero

Nunca subir cambios rotos.

---

# REGLA #14 - NO TOCAR

Sin autorización explícita:

* Hero Section
* Foto personal de Michael Perez
* Logo Markingwebs
* Navegación principal
* Footer
* WhatsApp CTA principal

---

# REGLA #15 - FILOSOFÍA DEL PROYECTO

Cada cambio debe responder:

"¿Esto ayuda a conseguir más clientes?"

Si la respuesta es NO:

No implementar.

---

# UPDATE LOG - PORTFOLIO SALES MODALS

Project path:

C:\Users\mayco\OneDrive\Desktop\Markingwebs-main

Modified files:

* index.html
* CODEX.md

Functionality added:

* Portfolio cards now open a premium project overview modal.
* Live Projects images open the project overview modal.
* Live Projects "View Project" buttons open a demo modal.
* Live Projects "Case Study" buttons open an agency-style case study modal.
* Modal supports backdrop blur, fade/scale animation, outside click close and Escape close.
* Portfolio and Live Projects cards now include a subtle premium hover overlay that says "View Project".

How to edit projects in the future:

* Open index.html.
* Find the JavaScript object named `portfolioProjects`.
* Each project is controlled by one key, for example:
  * `restaurant-dashboard`
  * `modern-website-branding`
  * `social-media-design`
  * `sakura-asian-kitchen`
  * `italian-restaurant-flyer`
  * `burger-restaurant-flyer`
* Edit only the fields inside that object when changing modal content:
  * `title`
  * `image`
  * `description`
  * `technologies`
  * `time`
  * `price`
  * `features`
  * `benefits`
  * `gallery`
  * `challenge`
  * `solution`
  * `results`
  * `demoUrl`

Protection notes:

* Do not edit the hero section for portfolio modal updates.
* Do not replace or hide the owner photo.
* Do not change approved portfolio images unless the user explicitly requests image replacement.
* Do not change navbar, pricing, testimonials or footer for this feature.
