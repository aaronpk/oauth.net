<?php

$page_title = "Authentication with OAuth 2.0 &mdash; OAuth";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Performing user authentication using the OAuth 2.0 protocol.";

require('../includes/_header.php');
?>
<body class="<?php echo $page_section; ?>">
    <div class="container">
        <div id="header" class="column first last span-20">
            <h1 id="site-name" class="column first span-5 prepend-1 append-1"><a href="/">OAuth</a></h1>
            <div id="primary" class="column span-13 last">

                <?php require('../includes/_nav_primary.php'); ?>

            </div>
            <div id="secondary" class="column span-18 append-1 prepend-1 first last">

            </div>
        </div>

        <? $filename='authentication/index.php'; include('../includes/_draft_banner.php'); ?>

        <div id="main" class="column first last span-18 prepend-1 append-1">
            <h2 id="oauth-2.0-authentication">Authentication with OAuth 2.0</h2>
      
            <p>The <a href="http://tools.ietf.org/html/rfc6749">OAuth 2.0</a> specification defines a <i>delegation</i> protocol that is useful for conveying <i>authorization decisions</i> across a network of web-enabled applications and APIs. OAuth is used in a wide variety of applications, including providing mechanisms for user authentication. This has lead many developers to incorrectly conclude that OAuth is itself an <i>authentication</i> protocol and to mistakenly use it as such. Let's say that again, to be clear:</p>
      
      <p><b>OAuth 2.0 is not an authentication protocol.</b></p>
      
      <p>Much of the confusion comes from the fact that OAuth is used <i>inside</i> of authentication protocols, and developers will see the OAuth components and interact with the OAuth flow and assume that by simply using OAuth, they can accomplish user authentication.</p>


      <h4 id="what-is-authn">What is authentication?</h4>
      
      <p><b>Authentication</b> tells an application <i>who the current user is</i> and whether or not they're present. A full authentication protocol will probably also tell you a number of <i>attributes</i> about this user, such as a unique identifier, an email address, and what to call them when the application says "Good Morning". Authentication is all about the user and their presence with the application, and an internet-scale authentication protocol needs to be able to do this across network and security boundaries.</p>
      
      <p>However, OAuth tells the application none of that. OAuth says absolutely nothing about the user, nor does it say how the user proved their presence or even if they're still there. As far as an OAuth client is concerned, it asked for a token, got a token, and eventually used that token to access some API. It doesn't know anything about who authorized the application or if there was even a user there at all. In fact, much of the point of OAuth is about giving this delegated access for use in situations where the <i>user is not present</i> on the connection between the client and the resource being accessed. This is great for client authorization, but it's really bad for authentication where the whole point is figuring out if the user is there or not (and who they are).</p>
      
      <p>As it turns out, though, there are a handful of things that can be used along with OAuth to <i>create</i> an authentication and identity protocol on top of this delegation and authorization protocol. In nearly all of these cases, the core functionality of OAuth remains and what's happening is that the user is <i>delegating access to their identity</i> to the application. The client application then becomes a consumer of the identity API, thereby finding out who authenticated the client in the first place. One major benefit of this approach is that the user can delegate access to other protected APIs <i>along side</i> their identity at the same time, making it much simpler for both application developers and end users to manage. With one call, an application can find out if a user is logged in, what the app should call the user, download photos for printing, and post updates to their message stream. This simplicity is very compelling, but by doing both at the same time, many developers conflate the two functions.</p>


            <h4 id="chocolate-vs-fudge">Authentication vs. Authorization: a metaphor</h3>
      
      <p>To help clear things up, it may be helpful to think of the problem in terms of a metaphor: chocolate vs. fudge. From the start, the nature of these two things is quite different: chocolate is an ingredient, fudge is a confection. Chocolate can be used to make many different things, and it can even be used on its own. Fudge can be made out of many different things, and one of those things <i>might</i> be chocolate, but it takes more than one ingredient to make fudge happen and it might not even involve chocolate. As such, it's incorrect to say that <i>chocolate</i> equals <i>fudge</i>, or even to say that <i>chocolate</i> equals <i>chocolate fudge</i>.</p>
      
      <p>OAuth, in this metaphor, is chocolate. It's a versatile ingredient that is fundamental to a number of different things and can even be used on its own to great effect. Authentication is more like fudge. There are at least a few ingredients that must brought together in the right way to make it work, and OAuth can be one of these ingredients (perhaps the main ingredient) but it doesn't have to be involved at all. You need a recipe that says what to combine and how to combine them, and there are a large number of different recipes that say how that can be accomplished.</p>
      
      <p>And in fact, there are a number of well-known recipes out there for doing this with specific providers, like Facebook Connect, Sign In With Twitter, and OpenID Connect (which powers Google's sign-in system, among others). These recipes each add a number of items, such as a common profile API, to OAuth to create an authorization protocol.</p>
      
      
            <h3 id="common-pitfalls">Common pitfalls for authentication using OAuth</h3>
      
      <p>Even though it's very possible to use OAuth to build an authentication protocol, there are a number of things that tend to trip up those who who do so, either on the side of the identity provider or on the side of the identity consumer.</p>
      
      <h4 id="access-tokens">Access tokens as proof of authentication</h4>
      
      <p>Since the access token can be traded for a set of user attributes, it is tempting to think that posession of a valid access token is enough to prove that a user is authenticated. This assumption turns out to be true in some cases, where the token was freshly minted in the context of a user being authenticated at the authorization server. However, that's not the only way to get an access token in OAuth. Refresh tokens and assertions can be used to get access tokens without the user being present, and in some cases access grants can occur without the user having to authenticate at all. Furthermore, the access token will generally be usable long after the user is no longer present. This means that if a client wants to make sure that an authentication is still valid, it's not sufficient to simply trade the token for the user's attributes again because the OAuth protected resource, the identity API, has no way of re-authenticating the user.</p>
      
      <p>This problem stems from the fact that the client is not the <i>audience</i> of the OAuth access token. Instead, it is the <i>authorized presenter</i> of that token, and the <i>audience</i> is in fact the protected resource. The protected resource is not generally going to be in a position to tell if the user is still present by the token alone, since by the very nature and design of the OAuth protocol the user will not be available on the connection between the client and protected resource. To counter this, there needs to be an artifact that is directed at the client itself. This could be done by dual-purposing the access token, defining a format that the client could parse and understand. However, since general OAuth does not define a specific format or structure for the access token itself, protocols like OpenID Connect and Facebook Connect provide a secondary token along side the access token that communicates the authentication information directly to the client. This allows the primary access token to remain opaque to the client, just like in regular OAuth.</p>
      
      <h4 id="audience-restriction">Lack of audience restriction</h4>
      
      <p>Another problem with trading the access token for a set of attributes to get the current user is that most OAuth APIs do not provide any mechanism of audience restriction for the returned information. In other words, it is very possible to take a naive client, hand it the (valid) token from another client, and have the naive client treat this as a "log in" even. After all, the token is valid and it will return valid user information. The problem is of course that the user hasn't done anything to prove that they're present, and in this case they haven't even authorized the naive client.</p>
      
      <p>This problem can be mitigated by communicating the authentication information to a client along with an identifier that the client can recognize and validate, allowing the client to differentiate between an authentication for itself versus an authentication for another application. It is also mitigated by passing the set of authentication information directly to the client during the OAuth process instead of through a secondary mechanism such as an OAuth protected API, preventing a client from having an unknown and untrusted set of information injected later in the process.</p>
      
      <h4 id="impersonation">Injection of invalid user information</h4>
      
      <p>If an attacker is able to intercept or coopt one of the calls from the client, it could alter the content of the returned user information without the client being able to know anything was amiss. This would allow an attacker to impersonate a user at a naive client by simply swapping out a user identifier in the right call sequence. This can be mitigated by getting the authentication information directly from the identity provider during the authentication protocol process (such as along side the OAuth token) and by protecting the authentication information with a verifiable signature.</p>
      
      <h4 id="special-snowflakes">Different protocols for every potential identity provider</h4>
      
      <p>One of the biggest problems with OAuth-based identity APIs is that even when using a fully standards-compliant OAuth mechanism, different providers will inevitably implement the details of the actual identity API differently. For example, a user's identifier might be found in a <code>user_id</code> field in one provider but in the <code>subject</code> field in another provider. Even though these are semantically equivalent, they would require two separate code paths to process. In other words, while the authorization may happen the same way at each provider, the conveyance of the authentication information could be different. This problem can be mitigated by providers using a standard <i>authentication protocol</i> built on top of OAuth so that no matter where the identity information is coming from, it is transmitted in the same way.</p>

            <h3 id="openid-connect">A standard for authentication using OAuth: OpenID Connect</h3>
      
      <p><a href="http://openid.net/connect/">OpenID Connect</a> is an open standard published in early 2014 that defines an interoperable way to use OAuth 2.0 to perform user authentication. In essence, it is a widely published recipe for <i>chocolate fudge</i> that has been tried and tested by a wide number and variety of experts. Instead of building a different protocol to each potential identity provider, an application can speak one protocol to as many providers as they want to work with. Since it's an open standard, OpenID Connect can be implemented by anyone without restriction or intellectual property concerns.</p>
      
      <p>OpenID Connect is built directly on OAuth 2.0 and in most cases is deployed right along with (or on top of) an OAuth infrastructure. OpenID Connect also uses the JSON Object Signing And Encryption (JOSE) suite of specifications for carrying signed and encrypted information around in different places. In fact, an OAuth 2.0 deployment with JOSE capabilities is already a long way to defining a fully compliant OpenID Connect system, and the delta between the two is relatively small. But that delta makes a big difference, and OpenID Connect manages to avoid many of the pitfalls discussed above by adding several key components to the OAuth base:</p>

      <h4 id="id-tokens">ID Tokens</h4>
      
      <p>The OpenID Connect ID Token is a signed JSON Web Token (JWT) that is given to the client application along side the regular OAuth access token. The ID Token contains a set of claims about the authentication session, including an identifier for the user (<code>sub</code>), the identifier for the identity provider who issued the token (<code>iss</code>), and the identifier of the client for which this token was created (<code>aud</code>). Additionally, the ID Token contains information about the token's valid (and usually short) lifetime as well as any information about the authentication context to be conveyed to the client, such as how long ago the user was presented with a primary authentication mecehanism. Since the format of the ID Token is known by the client, it is able to parse the content of the token directly and obtain this information without relying on an external service to do so. Furthermore, it is issued in addition to (and not in lieu of) an access token, allowing the access token to remain opaque to the client as it is defined in regular OAuth. Finally, the token itself is signed by the identity provider's public key, adding an additional layer of protection to the claims inside of it in addition to the TLS transport protection that was used to get the token in the first place, preventing a class of impersonation attacks. By applying a few simple checks to this ID token, a client can protect itself from a large number of common attacks.</p>
      
      <h4 id="userinfo-endpoint">UserInfo Endpoint</h4>
      
      <p>In addition to the claims in the ID Token, OpenID Connect defines a standard protected resource that contains claims about the current user. The claims here are not part of the authentication process, as discussed above, but instead provide bundled identity attributes that make the authentication protocol more valuable to application developers. After all, it's preferable to say "Good Morning, Jane Doe" instead of "Good Morning, 9XE3-JI34-00132A". OpenID Connect defines set of standardized OAuth scopes that map to subsets of these attributes, allowing plain OAuth authorization request to carry the necessary information for a request. In particular, the OpenID Connect defines a special <code>openid</code> scope that switches on the issuance of the ID token as well as access to the UserInfo Endpoint by the access token. The OpenID Connect scopes can be used along side more plain OAuth scopes without issue.</p>
      
      <h4 id="discovery-registration">Dynamic server discovery and client registration</h4>
      
      <p>OAuth 2.0 was written to allow a variety of different deployments, but by design does not specify how these deployments come to be set up or how the components know about each other. This is OK in the regular OAuth world where one authorizatoin server protects a specific API, and the two are closely coupled. With OpenID Connect, a common protected API is deployed across a wide variety of clients and providers, all of which need to know about each other to operate. It would not be scalable for each client to have to know ahead of time about each provider, and it would be even more unscalable to require each provider to know about each potential client.</p>
      
      <p>To counteract this, OpenID Connect defines a <a href="http://openid.net/specs/openid-connect-discovery-1_0.html">discovery</a> protocol that allows clients to easily fetch information on how to interact with a specific identity provider. On the other side of the transaction, OpenID Connect defines a <a href="http://openid.net/specs/openid-connect-registration-1_0.html">client registration</a> protocol that allows clients to be introduced to new identity providers. By using these two mechanisms and a common identity API, OpenID Connect can function at internet scale, where no parties have to know about each other ahead of time.</p>  
      
      <h4 id="advanced-oidc">Advanced capabilities</h4>
      
      <p>OpenID Connect also defines a number of advanced capabilities beyond standard OAuth that are suitable for higher security profiles and deployments, including (among others):
        
        <ul>
          <li>Public key client authentication</li>
          <li>Selecting and retrieving specific claims and values from the identity provider</li>
          <li>Signing and encrypting OAuth requests</li>
          <li>Session management over time</li>
        </ul>
      </p>

      <h3 id="further-reading">Further Reading</h3>

      <ul>
        <li>In the article <a href="http://www.cloudidentity.com/blog/2013/01/02/oauth-2-0-and-sign-in-4/">OAuth 2.0 and Sign-in</a>, Vittorio Bertocci provides detail on the security boundaries between parties and why the authorization layer makes sense as the lower layer to build on top of.</li>
        <li>Justin Richer presented a detailed overview of the technologies talked about here in <a href="http://www.slideshare.net/zeronine1/auth-in-the-extended-enterprise-mit-hackathon-2013">Auth* In the Extended Enterprise</a> at MIT.</li>
      </ul>
      
      <? $filename='authentication/index.php'; include('../includes/_draft_banner.php'); ?>

</div>
<?php require('../includes/_footer.php'); ?>
