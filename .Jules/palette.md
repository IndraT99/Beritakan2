## 2024-05-15 - Accessibility of Icon-Only Toggles with Nested Links
**Learning:** When using icon-only `<button>` elements that contain a nested `<a>` tag (often used for visual styling or legacy behavior), screen readers may announce both the button and the empty link, creating confusion and duplicate focus stops.
**Action:** Add an `aria-label` to the parent `<button>` to describe its action, and apply `aria-hidden="true"` and `tabindex="-1"` to the nested `<a>` element so it is ignored by assistive technologies and keyboard navigation.
