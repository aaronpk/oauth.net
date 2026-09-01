# oauth.net Redesign

## Architecture

The site uses a persistent global left sidebar for all navigation (visible at 1024px+, collapses to a hamburger drawer on mobile). The top navbar became a slim 52px topbar showing only the logo. All navigation — OAuth 2.0 spec sections, Reference, Learn, About — lives in the sidebar.

The homepage is a decision tree: "What are you trying to do?" with five entry points, each routing to a direct recommendation with links. No hero marketing text.

## Completed

### Visual Identity
- CSS custom property system: color palette, type scale, font stacks
- Dark & Light mode system: `[data-theme="dark"]`, OS preference auto-detection, zero-flicker init, and topbar switcher
- Bootstrap variables overridden at `:root` level so all components inherit the palette
- System UI font stack (`-apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui`)
- `h1`/`h2` in navy primary, `h3`–`h6` in dark text
- Dark navy topbar and navbar
- Inline `code` styling: navy text, light surface background, subtle border
- `.rfc-badge` pill for inline RFC number references (applied throughout `/2/`)
- `.rfc` class: monospace URL display for canonical RFC links on spec pages

### Layout
- Slim topbar (52px): logo + hamburger toggle
- Global left sidebar (248px): sticky, scrollable, full site nav
- Mobile: sidebar slides in as a drawer with overlay
- `site-main` content column with 800px max-width on inner containers

### Sidebar Navigation
- All site sections in one place: Getting Started, OAuth 2.0, Reference, Learn, About
- OAuth 2.0 sub-sections in collapsible `<details>` groups: Core Concepts, Grant Types, Tokens & Keys, Security, App Types, Discovery
- PHP URL detection auto-opens the relevant section and highlights the active page
- "Legacy" badge on deprecated grant types (Implicit, Password)

### Homepage — Decision Tree
- Five entry questions routing to recommendations:
  - Add login → OpenID Connect
  - Connect to third-party API → sub-question by app type (web/SPA/native/device)
  - Protect my API → Bearer Tokens
  - Service-to-service → Client Credentials
  - Browse specs → OAuth 2.0 / Specs
- Back/restart navigation in the tree
- Popular Topics strip below the tree

### Navigation & IA
- `nav_active()` PHP helper highlights current section in the sidebar
- Consistent breadcrumbs on all sub-pages
- Bootstrap 5 migration (dropped jQuery)
- Router script (`router.php`) for PHP built-in server — fixes `/2.1/` routing

### Spec Pages
- `.spec-meta` bar: RFC badge + Published/Draft status pill
- `.spec-lede`: larger one-sentence summary
- `.spec-when`: left-accented callout for "When to use this"
- Template applied to: PKCE, Authorization Code, Client Credentials

### Security Hub
- `/security/` rebuilt as a real hub: two featured RFC cards, Advisories, Workshops, Resources
- RFC 6819 and RFC 9700 detail pages breadcrumb back through Security
- Low-quality external links removed

### Content Improvements
- `/getting-started/` — "OAuth is not authentication" callout banner at top
- `/2/` — GNAP added to Related Work; duplicate FAPI removed; dead conditionals cleaned up
- `/faq/` — expanded from 1 to 12 questions across 4 sections, all answers written
- About section — proper dropdown nav, `/about/` redirects to Credits, flat-list breadcrumbs fixed
- Footer — contribution prompt ("Edit this page on GitHub") on every page

## Remaining

### Map Page (`/map/`)
A visual interactive graph of how OAuth specs relate to each other — which specs extend which, alternatives, deprecations, and things built on top. Scaffolded at `/map/` but the actual graph is not yet built. Planned as a separate project.

**Relationship types to model:**
- Extends: PKCE → Authorization Code; DPoP → Bearer Tokens; PAR → Authorization Code
- Defines: RFC 6749 → Auth Code, Client Credentials, Implicit, Password
- Replaces/consolidates: OAuth 2.1 consolidates OAuth 2.0 + Security BCP
- Alternatives: DPoP as a more secure alternative to plain Bearer Tokens; mTLS as another alternative
- Built on: OpenID Connect, GNAP, FAPI, IPSIE, IndieAuth
- Deprecated: Implicit Flow, Password Grant

**Implementation options:**
- Static hand-crafted SVG (maintainable, no JS dependency)
- D3.js force-directed graph (interactive, but requires data upkeep)
- CSS/HTML positioned nodes (accessible, easy to maintain)

### Remaining Spec Pages
The spec template (`.spec-meta`, `.spec-lede`, `.spec-when`) was applied to PKCE, Authorization Code, and Client Credentials. The following pages would benefit from the same treatment:
- Device Code
- Bearer Tokens
- DPoP
- mTLS
- PAR
- Token Introspection / Revocation / Exchange
- Browser-Based Apps / Native Apps

### Future Considerations
- Search bar in the topbar
- "Prerequisites" and "Used by" cross-links on spec pages
- Print header (currently removed with old navbar — could add back to print.css)
