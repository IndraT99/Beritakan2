## 2024-05-24 - Accessibility improvements for nested interactive elements
**Learning:** Found instances of `<a>` nested inside `<button>` tags (e.g., in search toggle). This creates confusing duplicate focus stops and ambiguous roles for screen readers.
**Action:** When working with nested interactive elements like icon-only links inside buttons, ensure the parent element has the `aria-label`, and the inner element is hidden from screen readers and keyboard navigation using `aria-hidden="true"` and `tabindex="-1"`.
