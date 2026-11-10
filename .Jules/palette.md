## 2024-11-10 - Add aria-labels to offcanvas hamburger menus
**Learning:** Icon-only navigation links (hamburger menus) opening offcanvas sidebars lack explicit text alternatives or `aria-label` attributes, making them inaccessible to screen readers. Relying only on `aria-controls` is not sufficient for assistive tech.
**Action:** Always provide explicit text or `aria-label` on icon-only interactive elements, especially core navigation components like hamburger toggles.
