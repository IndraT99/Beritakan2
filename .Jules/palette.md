## 2024-05-15 - Add ARIA Labels to Nested Icon-Only Toggles
**Learning:** When fixing accessibility for icon-only toggles in Blade templates where an `<a>` tag is nested inside a `<button>`, completely remove the redundant `<a>` tag leaving the icon (e.g., `<i>`) directly inside the `<button>` to prevent duplicate focus stops, and ensure the parent `<button>` has an appropriate `aria-label`.
**Action:** Always check for and clean up nested interactive elements like `<a>` inside `<button>` while adding missing `aria-label`s to the parent.
