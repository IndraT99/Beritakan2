## 2026-05-14 - [Playwright Mobile Viewport Testing]
**Learning:** When verifying frontend changes involving mobile-specific UI elements (e.g., Bootstrap's `d-lg-none` classes), Playwright scripts will fail to locate or interact with these elements using default viewport sizes because they remain hidden.
**Action:** Configure the Playwright context with a mobile viewport (e.g., `viewport={'width': 375, 'height': 812}`) to ensure mobile-only elements are visible and interactable during testing.
