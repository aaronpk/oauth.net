<?php
$page_title = "WebAuthn and OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Information about WebAuthn and how it relates to OAuth";

require('../includes/_header.php');
?>

  <div class="container">

    <div>
      <h2>What is WebAuthn?</h2>

      <p><a href="https://www.w3.org/TR/webauthn/" class="rfc">www.w3.org/TR/webauthn</a></p>

      <p>WebAuthn is a browser API that handles authenticating users without passwords. Instead of passwords, it uses hardware authentication options such as a Yubikey, or the built-in hardware of a device like TouchID or Windows Hello.</p>

      <p><a href="https://caniuse.com/#search=webauthn">Can I Use WebAuthn?</a></p>

      <h4>Does WebAuthn Replace OAuth?</h4>

      <p>No! In fact, WebAuthn and OAuth work great together! While WebAuthn can often take the place of using a specific third-party OAuth API for authentication, WebAuthn isn't trying to solve the same problems OAuth solves.</p>

      <p>WebAuthn authenticates users, so if that's all you're using OAuth for (<a href="/articles/authentication/">you shouldn't</a>), then you may not need OAuth! But if you're using OAuth in order to access an API, then you'll still need OAuth, as that's how you get an <a href="/2/bearer-tokens/">access token</a>.</p>

      <p>WebAuthn may end up replacing the step in OAuth where the user enters their password, since WebAuthn is a replacement for password authentication. But WebAuthn won't provide an app with an access token to make API requests, since that's not what it's designed for.</p>


      <h3>Demos</h3>

      <ul>
        <li><a href="https://webauthn.me/">webauthn.me</a></li>
        <li><a href="https://webauthn.org/">webauthn.org</a></li>
      </ul>

      <h3>Documentation</h3>

      <ul>
        <li><a href="https://developer.mozilla.org/en-US/docs/Web/API/Web_Authentication_API">Web Authentication API</a> (developer.mozilla.org)</li>
      </ul>


      <h3>Articles</h3>

      <ul>
        <li><a href="https://developers.google.com/web/updates/2018/05/webauthn">Enabling Strong Authentication with WebAuthn</a> - January 2019 (developers.google.com)</li>
        <li><a href="https://auth0.com/blog/introduction-to-web-authentication/">Introduction to Web Authentication: The New W3C Spec</a> - June 2018 (auth0.com)</li>
        <li><a href="https://developer.okta.com/blog/2018/04/17/webauthn-developers-guide-to-whats-on-the-horizon">WebAuthn: A Developer's Guide to What's on the Horizon</a> - April 2018 (developer.okta.com)</li>
        <li><a href="https://duo.com/blog/web-authentication-what-it-is-and-what-it-means-for-passwords">Web Authentication: What It Is and What It Means for Passwords</a> - December 2017 (duo.com)</li>
      </ul>


      <h3>Platform-Specific Information</h3>

      <ul>
        <li><a href="https://docs.microsoft.com/en-us/microsoft-edge/dev-guide/windows-integration/web-authentication">Windows Hello</a></li>
        <li><a href="https://webkit.org/status/#?search=webauthn">WebKit</a></li>
        <li><a href="https://hacks.mozilla.org/2018/01/using-hardware-token-based-2fa-with-the-webauthn-api/">Firefox</a></li>
      </ul>


    </div>


  </div>
</div>

<?php require('../includes/_footer.php'); ?>


