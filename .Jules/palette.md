## 2026-07-05 - [Aria-Hidden for Nested Icon Tags in Buttons]
**Learning:** When fixing accessibility for icon-only toggles in Blade templates where an `<a>` tag is nested inside a `<button>`, applying `aria-hidden="true"` and `tabindex="-1"` to the inner `<a>` is necessary to prevent duplicate or empty focus stops for screen readers.
**Action:** Always check for nested interactive elements (like `<a>` in `<button>`) when adding `aria-label`s and apply `aria-hidden="true"` and `tabindex="-1"` to the inner element if it's purely presentation/used to hold an icon.
