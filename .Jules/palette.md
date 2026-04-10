## 2026-04-10 - Add ARIA Labels to Header Bootstrap Icon-Only Buttons
**Learning:** Bootstrap UI elements like dropdown buttons or toggle triggers for hidden elements often contain only FontAwesome icons (`<i class="..."></i>`), which are ignored by screen readers. The `aria-label` attribute must be added manually to these `button` tags to ensure accessibility.
**Action:** When adding new interactive components containing only icons, explicitly provide an `aria-label` attribute detailing their exact functionality (e.g., `aria-label="Toggle search"`).
