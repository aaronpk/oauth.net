<?php

$page_title = "End User Authentication with OAuth 2.0 &mdash; OAuth";
$page_section = "articles";
$page_secondary = "authentication";
$page_meta_description = "Performing end user authentication using the OAuth 2.0 protocol.";

require('../../includes/_header.php');
?>
  <div class="container">
    <div>
      <h2 id="oauth-2.0-authentication">User Authentication with OAuth 2.0</h2>
  
      <!-- Article compiled and edited by Justin Richer -->

      <p>The <a href="http://tools.ietf.org/html/rfc6749">OAuth 2.0</a> specification defines a <i>delegation</i> protocol that is useful for conveying <i>authorization decisions</i> across a network of web-enabled applications and APIs. OAuth is used in a wide variety of applications, including providing mechanisms for user authentication. This has led many developers and API providers to incorrectly conclude that OAuth is itself an <i>authentication</i> protocol and to mistakenly use it as such. Let's say that again, to be clear:</p>
      
      <div class="note"><b>OAuth 2.0 is not an authentication protocol.</b></div>
      
      <p>Much of the confusion comes from the fact that OAuth is used <i>inside</i> of authentication protocols, and developers will see the OAuth components and interact with the OAuth flow and assume that by simply using OAuth, they can accomplish user authentication. This turns out to be not only untrue, but also dangerous for service providers, developers, and end users.</p>
      
      <p>This article is intended to help potential <i>identity providers</i> with the question of how to build an authentication and identity API using OAuth 2.0 as the base. Essentially, if you're saying "I have OAuth 2.0, and I need authentication and identity", then read on.</p>

      <h4 id="what-is-authn">What is authentication?</h4>
      
      <p><b>Authentication</b> in the context of a user accessing an application tells an application <i>who the current user is</i> and whether or not they're present. A full authentication protocol will probably also tell you a number of <i>attributes</i> about this user, such as a unique identifier, an email address, and what to call them when the application says "Good Morning". Authentication is all about the user and their presence with the application, and an internet-scale authentication protocol needs to be able to do this across network and security boundaries.</p>
      
      <p>However, OAuth tells the application none of that. OAuth says absolutely nothing about the user, nor does it say how the user proved their presence or even if they're still there. As far as an OAuth client is concerned, it asked for a token, got a token, and eventually used that token to access some API. It doesn't know anything about who authorized the application or if there was even a user there at all. In fact, much of the point of OAuth is about giving this delegated access for use in situations where the <i>user is not present</i> on the connection between the client and the resource being accessed. This is great for client authorization, but it's really bad for authentication where the whole point is figuring out if the user is there or not (and who they are).</p>
      
      <p>As an additional confounder to our topic, an OAuth process does usually include several kinds of authentication in its process: the resource owner authenticates to the authorization server in the authorization step, the client authenticates to the authorization server in the token endpoint, and there may be others. The existence of these authentication events within the OAuth protocol does not translate to the Oauth protocol itself being able to reliably convey authentication.</p>

      <p>As it turns out, though, there are a handful of things that can be used along with OAuth to <i>create</i> an authentication and identity protocol on top of this delegation and authorization protocol. In nearly all of these cases, the core functionality of OAuth remains intact, and what's happening is that the user is <i>delegating access to their identity</i> to the application they're trying to log in to. The client application then becomes a consumer of the identity API, thereby finding out who authorized the client in the first place. One major benefit of building authentication on top of authorization in this way is that it allows for management of end-user consent, which is very important in cross-domain identity federation at internet scale. Another important benefit is that the user can delegate access to other protected APIs <i>along side</i> their identity at the same time, making it much simpler for both application developers and end users to manage. With one call, an application can find out if a user is logged in, what the app should call the user, download photos for printing, and post updates to their message stream. This simplicity is very compelling, but by doing both at the same time, many developers conflate the two functions.</p>


            <h4 id="chocolate-vs-fudge">Authentication vs. Authorization: a metaphor</h4>
      
      <p>To help clear things up, it may be helpful to think of the problem in terms of a metaphor: chocolate vs. fudge. From the start, the nature of these two things is quite different: chocolate is an ingredient, fudge is a confection. Chocolate can be used to make many different things, and it can even be used on its own. Fudge can be made out of many different things, and one of those things <i>might</i> be chocolate, but it takes more than one ingredient to make fudge happen and it might not even involve chocolate. As such, it's incorrect to say that <i>chocolate</i> equals <i>fudge</i>, and it's certainly overreaching to say that <i>chocolate</i> equals <i>chocolate fudge</i>.</p>
      
      <p>OAuth, in this metaphor, is chocolate. It's a versatile ingredient that is fundamental to a number of different things and can even be used on its own to great effect. Authentication is more like fudge. There are at least a few ingredients that must brought together in the right way to make it work, and OAuth can be one of these ingredients (perhaps the main ingredient) but it doesn't have to be involved at all. You need a recipe that says what to combine and how to combine them, and there are a large number of different recipes that say how that can be accomplished.</p>
      
      <p>And in fact, there are a number of well-known recipes out there for doing this with specific providers, like Facebook Connect, Sign In With Twitter, and OpenID Connect (which powers Google's sign-in system, among others). These recipes each add a number of items, such as a common profile API, to OAuth to create an authentication protocol. Can you build an authentication protocol without OAuth? Of course, there are many kinds out there, just as there are many kinds of <a href="http://whatscookingamerica.net/Candy/mashedpotatofudge.htm">non-chocolate fudge</a> to be had out there. But what we're here to talk about today is specifically authentication built on top of OAuth 2.0, what can go wrong, and how it can be made secure and delicious.</p>
      
      <h3 id="common-pitfalls">Common pitfalls for authentication using OAuth</h3>
      
      <p>Even though it's very possible to use OAuth to build an authentication protocol, there are a number of things that tend to trip up those who do so, either on the side of the identity provider or on the side of the identity consumer. The practices described in this article are intended to inform potential identity providers of common risks as well as inform consumers of common mistakes that they can avoid when using an OAuth-based authentication system.</p>
      
      <h4 id="access-tokens">Access tokens as proof of authentication</h4>
      
      <p>Since an authentication usually occurs ahead of the issuance of an access token, it is tempting to consider reception of an access token of any type proof that such an authentication has occurred. However, mere possession of an access token doesn't tell the client anything on its own. In OAuth, the token is designed to be opaque to the client, but in the context of a user authentication, the client needs to be able to derive some information from the token.</p>
      
      <p>This problem stems from the fact that the client is not the intended <i>audience</i> of the OAuth access token. Instead, it is the <i>authorized presenter</i> of that token, and the <i>audience</i> is in fact the protected resource. The protected resource is not generally going to be in a position to tell if the user is still present by the token alone, since by the very nature and design of the OAuth protocol the user will not be available on the connection between the client and protected resource. To counter this, there needs to be an artifact that is directed at the client itself. This could be done by dual-purposing the access token, defining a format that the client could parse and understand. However, since general OAuth does not define a specific format or structure for the access token itself, protocols like OpenID Connect's ID Token and Facebook Connect's Signed Response provide a secondary token along side the access token that communicates the authentication information directly to the client. This allows the primary access token to remain opaque to the client, just like in regular OAuth.</p>
      
      <h4 id="protected-resource-access">Access of a protected API as proof of authentication</h4>
      
      <p>Since the access token can be traded for a set of user attributes, it is tempting to think that posession of a valid access token is enough to prove that a user is authenticated. This assumption turns out to be true in some cases, where the token was freshly minted in the context of a user being authenticated at the authorization server. However, that's not the only way to get an access token in OAuth. Refresh tokens and assertions can be used to get access tokens without the user being present, and in some cases access grants can occur without the user having to authenticate at all.</p>
      
      <p>Furthermore, the access token will generally be usable long after the user is no longer present. Remember, since OAuth is a delegation protocol, this is fundamental to its design. This means that if a client wants to make sure that an authentication is still valid, it's not sufficient to simply trade the token for the user's attributes again because the OAuth protected resource, the identity API, often has no way of telling if the user is there or not.</p>
            
      <h4 id="access-token-injection">Injection of access tokens</h4>
      
      <p>An additional (and very dangerous) threat occurs when clients accept access tokens from sources other than the return call from the token endpoint. This can occur for a client that uses the implicit flow (where the token is passed directly as a parameter in the URL hash) and don't properly use the OAuth <code>state</code> parameter. This issue can also occur if different parts of an application pass the access token between components in order to "share" access among them. This is problematic because it opens up a place for access tokens to potentially be injected into an application by an outside party (and potentially leak outside of the application). If the client application does not validate the access token through some mechanism, it has no way of differentiating between a valid token and an attack token.</p>
      
      <p>This can be mitigated by using the authorization code flow and only accepting tokens directly from the authorization server's token enpdoint, and by using a <code>state</code> value that is unguessable by an attacker.</p>

      <h4 id="audience-restriction">Lack of audience restriction</h4>
      
      <p>Another problem with trading the access token for a set of attributes to get the current user is that most OAuth APIs do not provide any mechanism of audience restriction for the returned information. In other words, it is very possible to take a naive client, hand it the (valid) token from another client, and have the naive client treat this as a "log in" event. After all, the token is valid and the call to the API will return valid user information. The problem is of course that the user hasn't done anything to prove that they're present, and in this case they haven't even authorized the naive client.</p>
      
      <p>This problem can be mitigated by communicating the authentication information to a client along with an identifier that the client can recognize and validate, allowing the client to differentiate between an authentication for itself versus an authentication for another application. It is also mitigated by passing the set of authentication information directly to the client during the OAuth process instead of through a secondary mechanism such as an OAuth protected API, preventing a client from having an unknown and untrusted set of information injected later in the process.</p>
      
      <h4 id="impersonation">Injection of invalid user information</h4>
      
      <p>If an attacker is able to intercept or coopt one of the calls from the client, it could alter the content of the returned user information without the client being able to know anything was amiss. This would allow an attacker to impersonate a user at a naive client by simply swapping out a user identifier in the right call sequence. This can be mitigated by getting the authentication information directly from the identity provider during the authentication protocol process (such as along side the OAuth token) and by protecting the authentication information with a verifiable signature.</p>
      
      <h4 id="special-snowflakes">Different protocols for every potential identity provider</h4>
      
      <p>One of the biggest problems with OAuth-based identity APIs is that even when using a fully standards-compliant OAuth mechanism, different providers will inevitably implement the details of the actual identity API differently. For example, a user's identifier might be found in a <code>user_id</code> field in one provider but in the <code>subject</code> field in another provider. Even though these are semantically equivalent, they would require two separate code paths to process. In other words, while the authorization may happen the same way at each provider, the conveyance of the authentication information could be different. This problem can be mitigated by providers using a standard <i>authentication protocol</i> built on top of OAuth so that no matter where the identity information is coming from, it is transmitted in the same way.</p>
      
      <p>This problem occurs because the mechanisms for conveying authentication information discussed here are explicitly left out of scope for OAuth. OAuth defines <a href="https://tools.ietf.org/html/rfc6749#section-1.4">no specific token format</a>, defines <a href="https://tools.ietf.org/html/rfc6749#section-3.3">no common set of scopes</a> for the access token, and does not at all address <a href="https://tools.ietf.org/html/rfc6749#section-7">how a protected resource validates an access token</a>.</p>

      <h3 id="openid-connect">A standard for user authentication using OAuth: OpenID Connect</h3>
      
      <p><a href="http://openid.net/connect/">OpenID Connect</a> is an open standard published in early 2014 that defines an interoperable way to use OAuth 2.0 to perform user authentication. In essence, it is a widely published <i>recipe for chocolate fudge</i> that has been tried and tested by a wide number and variety of experts. Instead of building a different protocol to each potential identity provider, an application can speak one protocol to as many providers as they want to work with. Since it's an open standard, OpenID Connect can be implemented by anyone without restriction or intellectual property concerns.</p>
      
      <p>OpenID Connect is built directly on OAuth 2.0 and in most cases is deployed right along with (or on top of) an OAuth infrastructure. OpenID Connect also uses the JSON Object Signing And Encryption (JOSE) suite of specifications for carrying signed and encrypted information around in different places. In fact, an OAuth 2.0 deployment with JOSE capabilities is already a long way to defining a fully compliant OpenID Connect system, and the delta between the two is relatively small. But that delta makes a big difference, and OpenID Connect manages to avoid many of the pitfalls discussed above by adding several key components to the OAuth base:</p>

      <h4 id="id-tokens">ID Tokens</h4>
      
      <p>The OpenID Connect ID Token is a signed <a href="https://tools.ietf.org/html/draft-ietf-oauth-json-web-token">JSON Web Token (JWT)</a> that is given to the client application along side the regular OAuth access token. The ID Token contains a set of claims about the authentication session, including an identifier for the user (<code>sub</code>), the identifier for the identity provider who issued the token (<code>iss</code>), and the identifier of the client for which this token was created (<code>aud</code>). Additionally, the ID Token contains information about the token's valid (and usually short) lifetime as well as any information about the authentication context to be conveyed to the client, such as how long ago the user was presented with a primary authentication mechanism. Since the format of the ID Token is known by the client, it is able to parse the content of the token directly and obtain this information without relying on an external service to do so. Furthermore, it is issued in addition to (and not in lieu of) an access token, allowing the access token to remain opaque to the client as it is defined in regular OAuth. Finally, the token itself is signed by the identity provider's private key, adding an additional layer of protection to the claims inside of it in addition to the TLS transport protection that was used to get the token in the first place, preventing a class of impersonation attacks. By applying a few simple checks to this ID token, a client can protect itself from a large number of common attacks.</p>

      <p>Since the ID Token is signed by the authorization server, it also provides a location to add detached signatures over the authorization code (<code>c_hash</code>) and access token (<code>at_hash</code>). These hashes can be validated by the client while still keeping the authorization code and access token content opaque to the client, preventing a whole class of injection attacks.</p>
      
      <h4 id="userinfo-endpoint">UserInfo Endpoint</h4>
      
      <p>It should be noted that clients are not required to use the access token, since the ID Token contains all the necessary information for processing the authentication event. However, in order to provide compatibility with OAuth and match the general tendency for authorizing identity and other API access in parallel, OpenID Connect always issues the ID token along side an OAuth access token.</p>
      
      <p>In addition to the claims in the ID Token, OpenID Connect defines a standard protected resource that contains claims about the current user. The claims here are not part of the authentication process, as discussed above, but instead provide bundled identity attributes that make the authentication protocol more valuable to application developers. After all, it's preferable to say "Good Morning, Jane Doe" instead of "Good Morning, 9XE3-JI34-00132A". OpenID Connect defines set of standardized OAuth scopes that map to subsets of these attributes: <code>profile</code>, <code>email</code>, <code>phone</code>, and <code>address</code> allowing plain OAuth authorization request to carry the necessary information for a request. OpenID Connect defines a special <code>openid</code> scope that switches on the issuance of the ID token as well as access to the UserInfo Endpoint by the access token. The OpenID Connect scopes can be used along side other non-OpenID-Connect OAuth scopes without conflict, and the access token issued can potentially be targeted at several different protected resources. This allows an OpenID Connect identity system to smoothly coexist with an OAuth authorization system.</p>
      
      <h4 id="discovery-registration">Dynamic server discovery and client registration</h4>
      
      <p>OAuth 2.0 was written to allow a variety of different deployments, but by design does not specify how these deployments come to be set up or how the components know about each other. This is OK in the regular OAuth world where one authorization server protects a specific API, and the two are closely coupled. With OpenID Connect, a common protected API is deployed across a wide variety of clients and providers, all of which need to know about each other to operate. It would not be scalable for each client to have to know ahead of time about each provider, and it would be even more unscalable to require each provider to know about each potential client.</p>
      
      <p>To counteract this, OpenID Connect defines a <a href="http://openid.net/specs/openid-connect-discovery-1_0.html">discovery</a> protocol that allows clients to easily fetch information on how to interact with a specific identity provider. On the other side of the transaction, OpenID Connect defines a <a href="http://openid.net/specs/openid-connect-registration-1_0.html">client registration</a> protocol that allows clients to be introduced to new identity providers. By using these two mechanisms and a common identity API, OpenID Connect can function at internet scale, where no parties have to know about each other ahead of time.</p>  
      
      <h4 id="oauth-compatibility">Compatibility with OAuth 2.0</h4>
      
      <p>Even with all of this robust authentication capability, OpenID Connect is (by design) still compatible with plain OAuth 2.0, making it a very good choice to deploy on top of an OAuth system with minimal developer effort. In fact, if a service is already using OAuth and the <a href="https://datatracker.ietf.org/wg/jose/charter/">JSON Object Signing and Encryption (JOSE)</a> specifications (including JWT), that service is already well on its way to supporting OpenID Connect already.</p>
      
      <p>To facilitate the building of good client applications, the OpenID Connect working group has published documents on building a <a href="http://openid.net/specs/openid-connect-basic-1_0.html">basic OpenID Connect client</a> using the authorization code flow as well as building an <a href="http://openid.net/specs/openid-connect-implicit-1_0.html">implicit OpenID Connect client</a>. Both of these documents walk the developer through building a basic OAuth 2.0 client and adding the handful components necessary for OpenID Connect</p>

      <h4 id="advanced-oidc">Advanced capabilities</h4>
      
      <p>While the core specification is fairly straightforward, not all use cases can be adequately addressed by the base mechanisms. To support advanced use cases including higher security deployments, OpenID Connect also defines a number of optional advanced capabilities beyond standard OAuth, including the following (among others):</p>

      <ul>
        <li><a href="http://openid.net/specs/openid-connect-core-1_0.html#ClientAuthentication">Public key and shared cyptographic secret client authentication</a></li>
        <li><a href="http://openid.net/specs/openid-connect-core-1_0.html#ClaimsParameter">Selecting and retrieving specific claims and values from the identity provider</a></li>
        <li><a href="http://openid.net/specs/openid-connect-core-1_0.html#JWTRequests">Signing and encrypting OAuth requests</a></li>
        <li><a href="http://openid.net/specs/openid-connect-session-1_0.html">Session management beyond the initial authentication</a></li>
      </ul>
    
      <h3 id="further-reading">Further Reading</h3>

      <ul>
        <li>In the article <a href="http://www.cloudidentity.com/blog/2013/01/02/oauth-2-0-and-sign-in-4/">OAuth 2.0 and Sign-in</a>, Vittorio Bertocci provides detail on the security boundaries between parties and why the authorization layer makes sense as the lower layer to build on top of, and provides the source of the chocolate-vs-fudge metaphor stolen above.</li>
        <li>Justin Richer presented a detailed overview of the technologies involved here and how they relate to each other in <a href="http://www.slideshare.net/zeronine1/auth-in-the-extended-enterprise-mit-hackathon-2013">Auth* In the Extended Enterprise</a> at MIT.</li>
        <li>John Bradley has written a series of articles relating to this topic, including:
          <ul>
            <li><a href="http://www.thread-safe.com/2012/02/more-on-oauth-implicit-flow-application.html">Vulnerabilities in the Implicit Flow</a></li>
            <li><a href="http://www.thread-safe.com/2012/01/problem-with-oauth-for-authentication.html">The problem with using OAuth for authentication</a></li>
            <li><a href="http://www.thread-safe.com/2012/02/why-we-need-idtoken-in-openid-connect.html">The need for an ID Token in OpenID Connect</a></li>
            <li><a href="http://www.thread-safe.com/2012/01/solutions-for-using-oauth-20-for.html">Solutions for using Oauth 2.0 for authentication</a></li>
            <li><a href="http://www.thread-safe.com/2012/02/designing-single-sign-on-system-using.html">Designing a single-sign-on-system using OAuth 2.0</a></li>
            <li><a href="http://www.thread-safe.com/2012/04/followup-on-oauth-facebook-login.html">Facebook's OAuth login vulnerabilities</a></li>
            <li><a href="http://www.thread-safe.com/2014/05/making-facebook-connect-safe.html">How to make Facebook Connect safe</a></li>
          </ul>
        </li>
      </ul>
      
      <div class="article-author-box">
        <div style="height:90px; float:left;">
          <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0; margin: 0; margin-right: 10px;" src="https://i.creativecommons.org/l/by/4.0/88x31.png" height="31" width="88" /></a>
        </div>
        This article was written by <a href="https://twitter.com/justin__richer">Justin Richer</a> with input from the OAuth community
        and is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
      </div>

      <br><br>
    </div>

</div>
<?php require('../../includes/_footer.php'); ?>
