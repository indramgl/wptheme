# Phase 02: Luxury UX — Research

**Researched:** 2024-05-22
**Phase goal:** Implement high-performance, Elementor-compatible luxury UI components and fluid design systems.

## Don't Hand-Roll

| Problem | Recommended solution | Why |
|---------|---------------------|-----|
| Fluid Typography | `clamp()` + CSS Variables | Native CSS `clamp()` is performant and requires no JS runtime overhead. Use a `fluid-typography` mixin or utility class. |
| Shortcodes | Elementor Widgets (Plugin API) | While shortcodes work, creating custom Elementor widgets provides a better UI, live preview, and cleaner integration with Elementor's settings. |
| Asset Loading | `wp_dequeue_style` / `wp_dequeue_script` | Conditionally dequeue heavy Elementor assets on pages where they aren't used to improve Core Web Vitals. |

## Common Pitfalls

### Fluid Typography Math
**What goes wrong:** Setting `clamp()` values that cause text to shrink too small or grow too large.
**Why:** Browser rendering varies, and accessibility requires readable minimum font sizes (usually 16px/1rem).
**How to avoid:** Use a proven fluid calculator (like Utopia.fyi) to generate `clamp()` values and apply them via CSS variables for maintainability.

### Elementor Asset Overload
**What goes wrong:** Elementor loads entire icon libraries (e.g., FontAwesome) or CSS files globally even on simple pages.
**Why:** Default Elementor behavior prioritizes ease of use over performance.
**How to avoid:** Use "Elementor > Settings > Features > Inline Font Icons" and "Improved Asset Loading" (if enabled). Programmatically dequeue unnecessary assets in `functions.php` using hooks like `wp_enqueue_scripts`.

### Shortcode/Widget Coupling
**What goes wrong:** Hardcoding styles directly into shortcode/widget PHP output.
**Why:** Becomes impossible to theme or adjust globally.
**How to avoid:** Register custom CSS variables in `functions.php` or `wp_head` for your components. Ensure your component CSS is modular (e.g., `assets/css/components/button.css`) and enqueued only when the component is present.

## Existing Patterns in This Codebase

- **Modular Structure:** The project is configured for a standard WP theme structure. Use `template-parts/` for partials and a `components/` subfolder in `assets/` for specific UI styles.
- **Functions:** `functions.php` is the central hub for enqueuing assets and adding custom hooks.

## Recommended Approach

1. **Typography:** Define a system of CSS variables using `clamp()` (e.g., `--text-lg: clamp(1.25rem, 3vw + 1rem, 2rem);`) in `style.css`.
2. **Components:** Build custom Elementor Widgets rather than simple shortcodes to ensure the "Luxury" UX is editable within the page builder's UI.
3. **Performance:** Utilize `wp_dequeue_style` in `functions.php` based on `is_page()` or template checks to aggressively trim Elementor's footprint on landing pages.
