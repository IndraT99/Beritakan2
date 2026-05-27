## 2024-05-18 - Fix Duplicate Focus in Bootstrap Icon Dropdowns
**Learning:** In Bootstrap applications, a common pattern places an empty `<a>` with an icon inside a `<button class="dropdown-toggle">`. This creates duplicate and empty focus stops for screen readers, as both elements receive focus.
**Action:** When fixing accessibility for icon-only toggles where an `<a>` is nested in a `<button>`, apply `aria-hidden="true"` and `tabindex="-1"` to the inner `<a>` to hide it from screen readers and remove it from tab order, while adding `aria-label` to the parent `<button>`.
