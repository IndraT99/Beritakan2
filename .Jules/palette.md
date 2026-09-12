## 2024-05-24 - Fix nested interactive elements and duplicate IDs in Bootstrap dropdowns
**Learning:** Placing an `<a>` tag inside a Bootstrap `<button>` dropdown toggle creates duplicate focus stops and violates accessibility guidelines. Reusing common IDs like `dropdownMenuButton1` for mobile and desktop instances creates invalid HTML.
**Action:** Remove redundant nested `<a>` tags from within `<button>` elements and assign unique IDs to responsive variations of the same component.
