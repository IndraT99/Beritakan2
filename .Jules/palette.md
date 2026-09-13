## 2026-09-13 - Prevent Duplicate Focus Stops in Icon-Only Buttons
**Learning:** When fixing accessibility for icon-only toggles in Blade templates where an <a> tag is nested inside a <button>, keeping both creates duplicate focus stops and can confuse screen readers.
**Action:** Completely remove the redundant <a> tag, leaving the icon (e.g., <i>) directly inside the <button>, and ensure the parent <button> has an appropriate aria-label.
