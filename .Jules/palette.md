## 2024-11-20 - Adding aria-hidden to nested anchors in icon-only toggles
**Learning:** When fixing accessibility for icon-only toggles in Blade templates where an `<a>` tag is nested inside a `<button>`, applying `aria-label` to the button is not enough. Screen readers may register duplicate or empty focus stops for the inner `<a>`.
**Action:** Always apply `aria-hidden="true"` to the inner `<a>` tag to prevent duplicate or empty focus stops for screen readers when nested inside a `<button>` that provides the necessary context via `aria-label`.
