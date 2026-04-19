---
wave: 1
depends_on: []
files_modified:
  - style.css
  - functions.php
autonomous: true
objective: "Establish the Saphir design system foundation with Fluid Typography and Accessibility Guardrails."
must_haves:
  - "style.css contains CSS variables for fluid typography"
  - "style.css includes accessibility guardrails (focus states, contrast base)"
  - "functions.php registers core theme support"
---

# Plan 01: Foundation Design System

## Objective

Set up the core design language. We will implement fluid typography using clamp() for responsive scaling and define strict accessibility guardrails (focus indicators and contrast ratios) to ensure a luxury, inclusive experience.

## Context

Luxury themes rely on perfect hierarchy and accessibility. We need to avoid hard-coded pixel sizes and instead use a fluid scale.

## Tasks

<task id="01-01-01">
<name>Define Fluid Typography</name>
<files>
- style.css
</files>
<action>
Implement fluid type scales in style.css using CSS variables and `clamp()`. Define scales for H1-H6 and body text.
</action>
<verify>
Check style.css for CSS variables and verify scaling behavior in browser dev tools.
</verify>
<done>[ ]</done>
</task>

<task id="01-01-02">
<name>Accessibility Guardrails</name>
<files>
- style.css
</files>
<action>
Define high-contrast focus states and base accessibility variables (colors, spacing) in style.css.
</action>
<verify>
Verify WCAG 2.1 compliance for base color contrast and visible focus states.
</verify>
<done>[ ]</done>
</task>

## Must-Haves

- [ ] Fluid typography variables defined in style.css
- [ ] Accessible focus states defined and applied
- [ ] Theme setup in functions.php supports HTML5 and custom logo
