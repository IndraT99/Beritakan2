## 2024-03-27 - Added ARIA label to Icon-Only Subscribe Button
**Learning:** Found an icon-only subscribe button in the mobile view of the homepage that lacked an aria-label, which is a common accessibility failure for responsive variants.
**Action:** Always ensure d-none / d-sm-none responsive button variants carry the same aria-labels or screen reader text as their visible counterparts.
