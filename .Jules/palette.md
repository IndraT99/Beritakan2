## 2026-07-02 - Nested anchors inside buttons causing duplicate focus
**Learning:** The app's header uses an anti-pattern where icon-only `<a>` tags are nested inside `<button>` elements (e.g., search toggles). This creates duplicate focus stops and empty links for screen readers.
**Action:** When adding ARIA labels to the outer `<button>`, apply `aria-hidden="true"` and `tabindex="-1"` to the inner `<a>` to prevent duplicate/empty focus stops.
