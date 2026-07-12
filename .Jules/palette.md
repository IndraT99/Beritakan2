
## 2024-05-24 - Accessibility improvements for icon-only mobile toggle buttons
**Learning:** In Blade templates using Bootstrap/FontAwesome, icon-only toggle elements (such as `d-lg-none` mobile search or offcanvas menu toggles) often consist of a parent `<button>` and a nested `<a><i class="fa..."></i></a>`. This creates confusing and duplicate focus/readout stops for screen readers.
**Action:** When fixing such components, add the appropriate `aria-label` directly to the parent `<button>` or outer `<a>`, and apply `aria-hidden="true" tabindex="-1"` to any nested `<a>` elements to ensure a single, descriptive semantic interaction point. Also, remember to utilize existing Laravel localization keys (e.g. `{{ __('messages.menu.menu') }}`) instead of hardcoding strings.
