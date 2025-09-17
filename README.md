# Twenty Twenty-Four Child — Deliverable

## Setup
1. Copy folder to `wp-content/themes/` or install via zip.
2. Activate theme in WP admin.
3. Install & activate Advanced Custom Fields (free).
4. Import ACF JSON (optional) or ensure `inc/acf-fields.php` is included.
5. Create a Page (Home), and edit fields in ACF to populate hero/features/testimonials/cta.

## Dynamic areas
- Hero: ACF fields `hero_headline`, `hero_sub`, `hero_image`, `hero_cta_text`, `hero_cta_url`.
- Features: `features` repeater.(Not Applied)
- Testimonials: `testimonials` repeater. (Not Applied)
- CTA: `cta_text`, `cta_sub`, `cta_url`.

## Known gaps
- 
- No slider/carousel JS included (kept vanilla). If needed, a small lightweight carousel can be added.
- Fine-tuning of typography and pixel nudges may be required per exact comp.
- Performance: images should be exported & converted to WebP for best LCP.

## Deliverables
- Theme folder
- `inc/acf-fields.php` (ACF registration)
- WP export (attached)
- screenshots/ (desktop, mobile)
- self-review.md


Work Log

Start: 7:00 PM

Break: 1-hour break, resumed at 7:45 PM

End: Stopped at 12:00 AM (timebox: 4 hours)

Notes

First time building a child theme — mostly curious about how it works, so I gave it a shot.

Did a lot of research along the way — definitely time-consuming but worth it for the learning experience.

Installed and set up Git, reviewed project guidelines before starting.

Photoshop was not installed; tried uploading the PSD into Figma but the file was too large to extract assets.

Couldn’t make all sections fully dynamic within the timebox (ACF fields are in place, no repeater fields used yet).

Implemented a simple carousel in the hero banner using vanilla JS.

Project is unfinished due to time constraints, but a solid foundation is in place for further development