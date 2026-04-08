## 2024-04-08 - Icon-Only Button Missing ARIA Label in Blade Templates
**Learning:** Found an icon-only button (`<i class="fa-solid fa-bars"></i>`) used to open an offcanvas sidebar without an `aria-label`. This is a common accessibility issue where screen readers cannot interpret the button's purpose.
**Action:** Always verify that buttons containing only icons (e.g., FontAwesome `<i>` tags) have descriptive `aria-label` attributes to ensure keyboard and screen reader accessibility.
