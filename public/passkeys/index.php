<?php
$page_title = "Passkeys and OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Information about passeksy and how they relate to OAuth";

require('../../includes/_header.php');
?>

  <div class="container">

    <div>
      <h2>What are passkeys?</h2>

      <p><a href="https://passkeys.dev//" class="rfc">passkeys.dev</a></p>

      <p>passkeys are a new way to log in to services without using a password. Instead of a password, passkeys use the security capability of your device like Touch ID and Face ID, and sync across multiple devices so you don't have to worry about losing your device either. Passkeys are strong and phishing resistant by design.</p>

      <h4>Do passkeys replace OAuth?</h4>

      <p>No! In fact, passkeys and OAuth work great together! While passkeys take the place of using a password to log in to a service, that service will still need OAuth in order to grant third parties access to the data at the service that supports passkeys!</p>

      <p>Passkeys authenticate users, so if that's all you're using OAuth for (<a href="/articles/authentication/">you shouldn't</a>), then you may not need OAuth! But if you're using OAuth in order to access an API, then you'll still need OAuth, as that's how you get an <a href="/2/bearer-tokens/">access token</a>.</p>

      <p>Passkeys will replace the step in OAuth where the user enters their password, since passkeys are a replacement for password authentication. But passkeys alone won't provide an app with an access token to make API requests, since that's not what it's designed for.</p>


      <h3>Demos</h3>

      <ul>
        <li><a href="https://passkeys.dev/">passkeys.dev</a></li>
        <li><a href="https://passkeys.io/">passkeys.io</a></li>
        <li><a href="https://passkeys.com/">passkeys.com</a></li>
        <li><a href="https://passkeys.guru/">passkeys.guru</a></li>
      </ul>

      <h3>Documentation</h3>

      <ul>
        <li><a href="https://fidoalliance.org/passkeys/">Passkeys</a> (fidoalliance.org)</li>
        <li><a href="https://developer.apple.com/passkeys/">Passkeys</a> (developer.apple.com)</li>
      </ul>


      <h3>Articles</h3>

      <ul>
        <li><a href="https://auth0.com/blog/our-take-on-passkeys/">Our Take on Passkeys</a> - August 2022 (auth0.com)</li>
      </ul>


    </div>


  </div>
</div>

<?php require('../../includes/_footer.php'); ?>


