## 2026-07-23 - Handle Nested Links in Buttons Accessibility
**Learning:** In interactive elements nested inside other interactive elements like `<a>` wrapped in `<button>`, it causes issues for screen readers. Using `tabindex="-1"` and `aria-hidden="true"` correctly removes the inner interactive element from the accessibility tree and tab order.
**Action:** When working on nested link and buttons ensure we maintain tab focus order cleanly with `tabindex` and `aria-hidden` attributes on inner wrappers.
