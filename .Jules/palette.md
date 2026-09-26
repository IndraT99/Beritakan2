## 2023-10-25 - Prevent Empty `<a>` Tags inside `<button>` Elements
**Learning:** Nested interactive elements like `<button><a></a></button>` are not just invalid HTML, but significantly confuse screen readers resulting in duplicate focus stops and confusing ARIA context for icon-only buttons.
**Action:** Always place icons directly inside the `<button>` element and apply the `aria-label` directly to the `<button>` rather than wrapping them in redundant `<a>` tags.
