# oauth.net Redesign Plan

## Visual Identity

### Type Scale
- Replace ad-hoc Bootstrap sizing overrides with an intentional type scale
- Pick a geometric sans-serif for headings and a neutral sans or readable serif for body text
- Define a small number of named sizes and use them consistently across all pages

### Color System
- Define a proper palette with semantic tokens: primary, surface, border, text, muted
- Current state: navy hero + grey Bootstrap everywhere else — no system, just overrides
- The new palette should make every page feel like it belongs to the same site

### RFC Badge Styling
- RFC numbers are currently inline text, indistinguishable from surrounding prose
- Add a small pill badge style (e.g. `RFC 9700`) to make spec references scannable
- This is a small detail that signals "authoritative technical site"


## Homepage

### Stronger Hero
- Less paragraph text — one punchy line, then a single primary CTA
- The "Get Started / Learn OAuth 2.0" split is good; reduce surrounding prose that competes with it

### Visual Flow Selector
- Replace the two audience cards with an interactive "what are you building?" widget
- Three choices: web/mobile app → Authorization Code + PKCE, server-to-server → Client Credentials, device/CLI → Device Code
- This is the real decision tree visitors need — surface it on the homepage

### Popular Topics Strip
- Grant types, PKCE, and Security BCP are almost certainly the most-trafficked pages
- They're currently buried inside `/2/`
- Add a "Popular Topics" strip on the homepage to shortcut the navigation


## Navigation and IA

### Sticky Nav with Active Section Highlighting
- Currently no visual indicator of where you are in the site
- Make the navbar sticky and highlight the current section

### Left Sidebar for Content-Heavy Sections
- The `/2/` page is a long flat list of links — hard to navigate
- Add a persistent left sidebar nav for the OAuth 2.0 section
- Model after well-executed documentation sites: MDN, Stripe docs, etc.
- Sidebar should stay visible while reading a topic page and show the full section structure

### Consistent Breadcrumbs
- Currently only some pages have breadcrumbs, and they vary in format
- Every page below the top level should have a clear breadcrumb: `OAuth 2.0 › PKCE`
- Use a single shared component/include


## Content Pages

### Consistent Page Templates
- Pages currently vary wildly: some are link lists, some long prose, some have inline styles throughout
- Define two or three templates:
  - **Reference page** — spec name, RFC badge, what it is, when to use it, RFC link
  - **Concept page** — explanation, examples, related specs
  - **Spec index page** — grouped list of specs with short descriptions

### Richer Spec Pages
- Individual grant type and token pages are mostly prose + an RFC link
- Consistent structure for each: what it is, when to use it, minimal example flow diagram or steps, links to spec and related pages
- PKCE, Authorization Code, and Client Credentials pages especially need this treatment

### Contribution Prompt
- "Edit this page" link exists but is tiny text in the footer
- Add a more prominent contribution nudge at the bottom of each content page
- Especially useful on the many stub pages that need more content


## What to Keep

- **Flat PHP architecture** — easy to maintain and easy for contributors to send PRs
- **URL scheme** — clean and well-established (`/2/pkce/`, `/specs/`, etc.), don't break inbound links
- **Editorial voice** — the writing that exists is good; it just needs to be applied more consistently
