## 2024-08-10 - Screen reader accessible icon toggles
**Learning:** Adding `tabindex="-1"` to `<a>` tags nested in `<button>` causes invalid HTML5 semantics and does not completely fix duplicate focus stops.
**Action:** Always completely remove redundant `<a>` tags from inside toggle `<button>` elements, leaving just the icon, and put the descriptive `aria-label` directly on the `<button>` itself.
