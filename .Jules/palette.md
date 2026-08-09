## 2026-08-09 - [Accessibility: Nested Interactive Elements and Screen Readers]
**Learning:** When placing <a> tags inside <button> tags for icon-only toggles, screen readers may read the element twice or register duplicate focus stops. Applying aria-hidden="true" and tabindex="-1" to the inner <a> tag prevents this, and the aria-label should be placed directly on the parent <button> tag.
**Action:** Always ensure nested interactive elements correctly use aria-hidden and tabindex to maintain accessible keyboard navigation and screen reader support.
