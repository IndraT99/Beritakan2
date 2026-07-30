## 2024-05-15 - Prevent duplicate focus stops on nested icon toggle elements
**Learning:** When using <a> tags for icon styling within parent <button> toggles, screen readers and keyboards may process them as duplicate empty focus stops, creating a poor experience for users navigating via keyboard.
**Action:** When nesting <a> inside <button> purely for icon-only styling (such as mobile toggle buttons), always apply aria-hidden="true" and tabindex="-1" to the inner <a> link, and place the primary descriptive aria-label directly on the parent <button> tag.
