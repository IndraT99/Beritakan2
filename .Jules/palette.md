## 2023-11-03 - Nested A tags inside Buttons
**Learning:** In header components, icon-only dropdown toggles and offcanvas triggers were incorrectly nesting `<a>` tags inside `<button>` tags, creating duplicate focus stops, lacking `aria-label`s, and reusing duplicate `id`s (like `dropdownMenuButton1`) across mobile and desktop viewports.
**Action:** Remove redundant nested `<a>` tags leaving the icon inside the `<button>`, add localized `aria-label`s directly to the buttons, and ensure `id`s are unique for responsive viewport variations.
