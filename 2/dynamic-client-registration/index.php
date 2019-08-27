<?php
$page_title = "OAuth 2.0 Dynamic Client Registration";
$page_section = "";
$page_secondary = "";
$page_meta_description = "An OAuth 2.0 extension for clients to programmatically obtain a client_id and register their information";
require('../../includes/_header.php');
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Dynamic Client Registration</li>
    </ol>
  </nav>

  <div>

    <h2>RFC 7591: Dynamic Client Registration</h2>

    <p><a href="http://tools.ietf.org/html/rfc7591" class="rfc">tools.ietf.org/html/rfc7591</a></p>

    <p>The OAuth 2.0 Dynamic Client Registration extension provides a mechanism for dynamically or programmatically registering clients. This spec was derived from the OpenID Connect Dynamic Client Registration spec and is still compatible with OpenID Connect servers.</p>

    <p>More resources
      <ul>
        <li><a href="https://medium.com/@abilashini/oauth-2-0-dynamic-client-registration-management-dcrm-protocol-b55f222f481b">OAuth 2.0 Dynamic Client Registration Management (DCRM) Protocol</a> (Abilashini Thiyagarajah)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
