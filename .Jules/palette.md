## 2024-09-04 - Remove redundant <a> tags inside <button> toggles
**Learning:** In Bootstrap Blade templates, placing an `<a>` tag directly inside a dropdown `<button>` for icon-only toggles (like a search icon) causes duplicate focus stops for screen readers and breaks keyboard accessibility.
**Action:** Completely remove the redundant `<a>` wrapper, placing the icon (e.g. `<i>`) directly inside the `<button>`, and ensure the `<button>` itself has a descriptive `aria-label` (e.g. `aria-label="{{ __('messages.search') }}"`).
