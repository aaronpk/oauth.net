<?php
$page_title = "OAuth Spec Map — oauth.net";
$page_section = "";
require('../../includes/_header.php');
?>

<div class="container">

  <h2>OAuth Spec Map</h2>
  <p class="spec-lede">A visual map of how OAuth 2.0 specifications relate to each other. Hover a node to highlight its connections. Click to visit the spec page.</p>

  <div class="map-legend">
    <div class="map-legend-group">
      <div class="map-legend-title">Node type</div>
      <div class="map-legend-row">
        <span class="map-legend-item"><span class="map-legend-dot" style="background:#1e3a5f"></span> Core framework</span>
        <span class="map-legend-item"><span class="map-legend-dot" style="background:#1d4ed8"></span> Grant type</span>
        <span class="map-legend-item"><span class="map-legend-dot" style="background:#0369a1"></span> Extension</span>
        <span class="map-legend-item"><span class="map-legend-dot" style="background:#6d28d9"></span> Token</span>
        <span class="map-legend-item"><span class="map-legend-dot" style="background:#92400e"></span> Security</span>
        <span class="map-legend-item"><span class="map-legend-dot" style="background:#374151"></span> Discovery</span>
        <span class="map-legend-item"><span class="map-legend-dot" style="background:#166534"></span> Built on top</span>
        <span class="map-legend-item"><span class="map-legend-dot group-deprecated"></span> Deprecated</span>
      </div>
    </div>
    <div class="map-legend-group">
      <div class="map-legend-title">Relationship</div>
      <div class="map-legend-row">
        <span class="map-legend-item"><span class="map-legend-line" style="background:#94a3b8"></span> Defines</span>
        <span class="map-legend-item"><span class="map-legend-line" style="background:#3b82f6"></span> Extends</span>
        <span class="map-legend-item"><span class="map-legend-line" style="background:#22c55e"></span> Built on</span>
        <span class="map-legend-item"><span class="map-legend-line" style="background:#a855f7; background: repeating-linear-gradient(90deg,#a855f7 0,#a855f7 4px,transparent 4px,transparent 7px)"></span> Consolidates</span>
        <span class="map-legend-item"><span class="map-legend-line" style="background: repeating-linear-gradient(90deg,#f97316 0,#f97316 4px,transparent 4px,transparent 7px)"></span> Alternative</span>
      </div>
    </div>
  </div>

  <div class="map-wrapper">
    <div class="map-canvas" id="map-canvas"></div>
  </div>

</div>

<script>
(function() {

var NODE_W = 155, NODE_H = 48;

var EDGE_STYLES = {
  defines:      { color: '#94a3b8', dash: '',    label: 'Defines'      },
  extends:      { color: '#3b82f6', dash: '',    label: 'Extends'      },
  builton:      { color: '#22c55e', dash: '',    label: 'Built on'     },
  consolidates: { color: '#a855f7', dash: '6,4', label: 'Consolidates' },
  alternative:  { color: '#f97316', dash: '4,4', label: 'Alternative'  },
};

var nodes = [
  // Core
  { id: 'oauth2',           x: 30,   y: 270, label: 'OAuth 2.0',           sub: 'RFC 6749',       href: '/2/',                                    group: 'core'       },
  { id: 'threat-model',     x: 30,   y: 390, label: 'Threat Model',        sub: 'RFC 6819',       href: '/2/security-considerations/',             group: 'security'   },
  { id: 'security-bcp',     x: 30,   y: 460, label: 'Security BCP',        sub: 'RFC 9700',       href: '/2/oauth-best-practice/',                 group: 'security'   },
  { id: 'oauth21',          x: 30,   y: 580, label: 'OAuth 2.1',           sub: 'In progress',    href: '/2.1/',                                   group: 'core'       },

  // Grant types
  { id: 'authz-code',       x: 270,  y: 60,  label: 'Authorization Code',  sub: 'RFC 6749 §4.1',  href: '/2/grant-types/authorization-code/',      group: 'grant'      },
  { id: 'client-creds',     x: 270,  y: 240, label: 'Client Credentials',  sub: 'RFC 6749 §4.4',  href: '/2/grant-types/client-credentials/',      group: 'grant'      },
  { id: 'device-code',      x: 270,  y: 330, label: 'Device Code',         sub: 'RFC 8628',       href: '/2/device-flow/',                         group: 'grant'      },
  { id: 'implicit',         x: 270,  y: 440, label: 'Implicit Flow',       sub: 'RFC 6749 — dep', href: '/2/grant-types/implicit/',                group: 'deprecated' },
  { id: 'password',         x: 270,  y: 520, label: 'Password Grant',      sub: 'RFC 6749 — dep', href: '/2/grant-types/password/',                group: 'deprecated' },

  // Auth code extensions
  { id: 'pkce',             x: 510,  y: 10,  label: 'PKCE',                sub: 'RFC 7636',       href: '/2/pkce/',                                group: 'extension'  },
  { id: 'par',              x: 510,  y: 100, label: 'PAR',                 sub: 'RFC 9126',       href: '/2/pushed-authorization-requests/',        group: 'extension'  },

  // Tokens
  { id: 'bearer-tokens',    x: 510,  y: 240, label: 'Bearer Tokens',       sub: 'RFC 6750',       href: '/2/bearer-tokens/',                       group: 'token'      },
  { id: 'jwt',              x: 510,  y: 350, label: 'JWT',                 sub: 'RFC 7519',       href: '/2/jwt/',                                 group: 'token'      },
  { id: 'private-key-jwt',  x: 510,  y: 450, label: 'Private Key JWT',     sub: 'RFC 7521/7523',  href: '/private-key-jwt/',                       group: 'token'      },

  // Token security
  { id: 'dpop',             x: 760,  y: 140, label: 'DPoP',                sub: 'RFC 9449',       href: '/2/dpop/',                                group: 'security'   },
  { id: 'mtls',             x: 760,  y: 230, label: 'Mutual TLS',          sub: 'RFC 8705',       href: '/2/mtls/',                                group: 'security'   },

  // Token management
  { id: 'jwt-access-token', x: 760,  y: 340, label: 'JWT Access Tokens',   sub: 'RFC 9068',       href: '/2/jwt-access-tokens/',                   group: 'token'      },
  { id: 'introspection',    x: 760,  y: 430, label: 'Token Introspection', sub: 'RFC 7662',       href: '/2/token-introspection/',                 group: 'extension'  },
  { id: 'jwt-introspection',x: 760,  y: 510, label: 'JWT Introspection',   sub: 'RFC 9701',       href: 'https://www.rfc-editor.org/rfc/rfc9701',  group: 'extension'  },
  { id: 'revocation',       x: 760,  y: 590, label: 'Token Revocation',    sub: 'RFC 7009',       href: '/2/token-revocation/',                    group: 'extension'  },
  { id: 'token-exchange',   x: 760,  y: 660, label: 'Token Exchange',      sub: 'RFC 8693',       href: '/2/token-exchange/',                      group: 'extension'  },

  // Discovery
  { id: 'server-metadata',  x: 270,  y: 640, label: 'Server Metadata',     sub: 'RFC 8414',       href: '/2/authorization-server-metadata/',        group: 'discovery'  },
  { id: 'resource-metadata',x: 270,  y: 710, label: 'Resource Metadata',   sub: 'RFC 9728',       href: 'https://www.rfc-editor.org/rfc/rfc9728',  group: 'discovery'  },
  { id: 'dyn-reg',          x: 510,  y: 640, label: 'Dynamic Client Reg',  sub: 'RFC 7591',       href: '/2/dynamic-client-registration/',          group: 'discovery'  },

  // Built on top
  { id: 'oidc',             x: 1010, y: 60,  label: 'OpenID Connect',      sub: 'OpenID Foundation', href: 'https://openid.net/connect/',          group: 'builton'    },
  { id: 'fapi2',            x: 1010, y: 190, label: 'FAPI 2.0',            sub: 'OpenID Foundation', href: '/fapi/',                               group: 'builton'    },
  { id: 'ipsie',            x: 1010, y: 320, label: 'IPSIE',               sub: 'OpenID Foundation', href: '/ipsie/',                              group: 'builton'    },
  { id: 'indieauth',        x: 1010, y: 450, label: 'IndieAuth',           sub: 'IndieWeb / W3C',    href: 'https://indieauth.spec.indieweb.org/', group: 'builton'    },
  { id: 'gnap',             x: 1010, y: 580, label: 'GNAP',                sub: 'RFC 9635',          href: '/gnap/',                               group: 'core'       },
];

var edges = [
  // RFC 6749 defines core grants and bearer tokens
  { from: 'oauth2', to: 'authz-code',    type: 'defines'  },
  { from: 'oauth2', to: 'client-creds',  type: 'defines'  },
  { from: 'oauth2', to: 'implicit',      type: 'defines'  },
  { from: 'oauth2', to: 'password',      type: 'defines'  },
  { from: 'oauth2', to: 'bearer-tokens', type: 'defines'  },
  { from: 'oauth2', to: 'threat-model',  type: 'defines'  },
  // Threat model → Security BCP
  { from: 'threat-model', to: 'security-bcp', type: 'extends' },
  // Extension grants
  { from: 'oauth2', to: 'device-code',   type: 'extends'  },
  // Auth code extensions
  { from: 'authz-code', to: 'pkce',      type: 'extends'  },
  { from: 'authz-code', to: 'par',       type: 'extends'  },
  // JWT chain
  { from: 'bearer-tokens',  to: 'jwt',              type: 'extends' },
  { from: 'jwt',            to: 'jwt-access-token', type: 'extends' },
  { from: 'jwt',            to: 'private-key-jwt',  type: 'extends' },
  // Sender-constrained token mechanisms
  { from: 'bearer-tokens', to: 'dpop', type: 'extends' },
  { from: 'bearer-tokens', to: 'mtls', type: 'extends' },
  // Token management
  { from: 'oauth2', to: 'introspection',    type: 'extends' },
  { from: 'introspection', to: 'jwt-introspection', type: 'extends' },
  { from: 'oauth2', to: 'revocation',       type: 'extends' },
  { from: 'oauth2', to: 'token-exchange',   type: 'extends' },
  // Discovery
  { from: 'oauth2', to: 'server-metadata',  type: 'extends' },
  { from: 'oauth2', to: 'resource-metadata',type: 'extends' },
  { from: 'oauth2', to: 'dyn-reg',          type: 'extends' },
  // OAuth 2.1 consolidates
  { from: 'oauth2',       to: 'oauth21', type: 'consolidates' },
  { from: 'security-bcp', to: 'oauth21', type: 'consolidates' },
  // Built on top
  { from: 'oauth2', to: 'oidc',      type: 'builton' },
  { from: 'oauth2', to: 'fapi2',     type: 'builton' },
  { from: 'oidc',   to: 'fapi2',     type: 'builton' },
  { from: 'oauth2', to: 'ipsie',     type: 'builton' },
  { from: 'oidc',   to: 'ipsie',     type: 'builton' },
  { from: 'oauth2', to: 'indieauth', type: 'builton' },
  // GNAP as next-generation alternative
  { from: 'oauth2', to: 'gnap', type: 'alternative' },
];

// --- Rendering ---

var nodeMap = {};
nodes.forEach(function(n) { nodeMap[n.id] = n; });

var canvas = document.getElementById('map-canvas');

// Compute canvas size
var maxX = 0, maxY = 0;
nodes.forEach(function(n) {
  maxX = Math.max(maxX, n.x + NODE_W + 20);
  maxY = Math.max(maxY, n.y + NODE_H + 20);
});
canvas.style.width  = maxX + 'px';
canvas.style.height = maxY + 'px';

// SVG for edges
var svgNS = 'http://www.w3.org/2000/svg';
var svg = document.createElementNS(svgNS, 'svg');
svg.setAttribute('width', maxX);
svg.setAttribute('height', maxY);
svg.style.cssText = 'position:absolute;top:0;left:0;z-index:1;pointer-events:none;overflow:visible';

// Arrow markers
var defs = document.createElementNS(svgNS, 'defs');
Object.keys(EDGE_STYLES).forEach(function(type) {
  var c = EDGE_STYLES[type].color;
  var marker = document.createElementNS(svgNS, 'marker');
  marker.setAttribute('id', 'arrow-' + type);
  marker.setAttribute('markerWidth', '8');
  marker.setAttribute('markerHeight', '6');
  marker.setAttribute('refX', '7');
  marker.setAttribute('refY', '3');
  marker.setAttribute('orient', 'auto');
  var poly = document.createElementNS(svgNS, 'polygon');
  poly.setAttribute('points', '0 0, 8 3, 0 6');
  poly.setAttribute('fill', c);
  marker.appendChild(poly);
  defs.appendChild(marker);
});
svg.appendChild(defs);
canvas.appendChild(svg);

// Edge path calculation
function getPoints(fromNode, toNode) {
  var W = NODE_W, H = NODE_H;
  var fcx = fromNode.x + W/2, fcy = fromNode.y + H/2;
  var tcx = toNode.x  + W/2, tcy = toNode.y  + H/2;
  var dx = tcx - fcx, dy = tcy - fcy;
  var x1, y1, x2, y2, cx1, cy1, cx2, cy2;

  if (Math.abs(dx) >= Math.abs(dy) * 0.6) {
    // Horizontal routing
    if (dx > 0) {
      x1 = fromNode.x + W; y1 = fromNode.y + H/2;
      x2 = toNode.x;       y2 = toNode.y  + H/2;
    } else {
      x1 = fromNode.x;     y1 = fromNode.y + H/2;
      x2 = toNode.x + W;   y2 = toNode.y  + H/2;
    }
    var hw = Math.abs(x2 - x1) * 0.45;
    cx1 = x1 + (dx > 0 ?  hw : -hw); cy1 = y1;
    cx2 = x2 + (dx > 0 ? -hw :  hw); cy2 = y2;
  } else {
    // Vertical routing
    if (dy > 0) {
      x1 = fromNode.x + W/2; y1 = fromNode.y + H;
      x2 = toNode.x  + W/2; y2 = toNode.y;
    } else {
      x1 = fromNode.x + W/2; y1 = fromNode.y;
      x2 = toNode.x  + W/2; y2 = toNode.y + H;
    }
    var hh = Math.abs(y2 - y1) * 0.45;
    cx1 = x1; cy1 = y1 + (dy > 0 ?  hh : -hh);
    cx2 = x2; cy2 = y2 + (dy > 0 ? -hh :  hh);
  }
  return {x1:x1,y1:y1,x2:x2,y2:y2,cx1:cx1,cy1:cy1,cx2:cx2,cy2:cy2};
}

// Draw edges
var edgeEls = [];
edges.forEach(function(edge, i) {
  var from = nodeMap[edge.from], to = nodeMap[edge.to];
  if (!from || !to) return;
  var style = EDGE_STYLES[edge.type] || EDGE_STYLES.extends;
  var pts = getPoints(from, to);

  var path = document.createElementNS(svgNS, 'path');
  var d = 'M '+pts.x1+' '+pts.y1+' C '+pts.cx1+' '+pts.cy1+' '+pts.cx2+' '+pts.cy2+' '+pts.x2+' '+pts.y2;
  path.setAttribute('d', d);
  path.setAttribute('fill', 'none');
  path.setAttribute('stroke', style.color);
  path.setAttribute('stroke-width', '1.5');
  path.setAttribute('marker-end', 'url(#arrow-' + edge.type + ')');
  if (style.dash) path.setAttribute('stroke-dasharray', style.dash);
  path.classList.add('map-edge');
  path.dataset.from = edge.from;
  path.dataset.to   = edge.to;
  path.style.pointerEvents = 'none';
  svg.appendChild(path);
  edgeEls.push(path);
});

// Draw nodes
var nodeEls = [];
nodes.forEach(function(node) {
  var a = document.createElement('a');
  a.href = node.href;
  if (node.href.startsWith('http')) a.target = '_blank';
  a.className = 'map-node group-' + node.group;
  a.style.left = node.x + 'px';
  a.style.top  = node.y + 'px';
  a.dataset.id = node.id;

  var name = document.createElement('span');
  name.className = 'node-name';
  name.textContent = node.label;

  var sub = document.createElement('span');
  sub.className = 'node-sub';
  sub.textContent = node.sub;

  a.appendChild(name);
  a.appendChild(sub);
  canvas.appendChild(a);
  nodeEls.push(a);
});

// Hover interactions
nodeEls.forEach(function(nodeEl) {
  var id = nodeEl.dataset.id;

  nodeEl.addEventListener('mouseenter', function() {
    var connected = new Set([id]);
    edgeEls.forEach(function(e) {
      if (e.dataset.from === id || e.dataset.to === id) {
        connected.add(e.dataset.from);
        connected.add(e.dataset.to);
        e.classList.add('is-active');
        e.classList.remove('is-dimmed');
      } else {
        e.classList.add('is-dimmed');
        e.classList.remove('is-active');
      }
    });
    nodeEls.forEach(function(n) {
      if (connected.has(n.dataset.id)) {
        n.classList.add('is-active');
        n.classList.remove('is-dimmed');
      } else {
        n.classList.add('is-dimmed');
        n.classList.remove('is-active');
      }
    });
  });

  nodeEl.addEventListener('mouseleave', function() {
    edgeEls.forEach(function(e) { e.classList.remove('is-active', 'is-dimmed'); });
    nodeEls.forEach(function(n) { n.classList.remove('is-active', 'is-dimmed'); });
  });
});

})();
</script>

<?php require('../../includes/_footer.php'); ?>
