<?php
$page_title = "OAuth Sessions at IETF 106";
$page_section = "";
$page_secondary = "";
$page_meta_description = "Agenda, sessions, and reading materials for the OAuth sessions at IETF 106";

require('../../../includes/_header.php');
?>

  <div class="container">


<h2>Minutes from the OAuth 2.1 Side Meeting at IETF 106</h2>

<pre>
Aaron Parecki - Okta
Annabelle Backman - Amazon AWS Identity
Brian Campbell - Ping Identity
Justin Richer - independent consultant
Leif Johansson
Ludwig Seitz - ACE
Travis Spencer - Curity
Mike Jones - Microsoft
Yann Esposito - Cisco
Karen Staley - Department of Defense
Ryo Kajiwara - Lepidum
Dick Hardt - signin.org
Tony Nadalin - Microsoft
Yaron Sheffer - Intuit
Torsten Lodderstedt - Yes.com

--

Agenda

what problem are we solving?
* reduce the number of documents people have to read
* reduce the cognitive load and upfront work that someone who is new to the space
* torsten: goal is to get rid of the BCP by putting everything into a new version
* to document a new starting point other than 6749
* reducing the contents of the existing RFCs that are irrelevant
* general readability of 6749
* people implement all of 6749 because they don't know which parts are relevant to their actual problem
* capturing the current use cases that didn't exist when 6749 was published

who is the audience?
* implementers of authorization servers, client libraries, resource server libraries

what is the deliverable?
* is an RFC the right deliverable at all? 
* right now 6749 is the starting point, there could be a new starting point
* a new document that references existing RFCs may not actually decrease the cognitive load
* changes to align with best practices and security requirements in the ecosystem
* is the goal to publish a "Secure OAuth 2.0"?

whether to replace or reference RFC6749

constraints
* not introducing features that do not already exist in the OAuth WG

what's in?
* appendix explaining which of the previous parts of RFCs are deprecated

what's out?

how is this positioned?


---

downsides to making breaking changes?
* interoperability
* confusion between 2.1 and 3.0 efforts
* migration - upgrading clients and servers independently
* the effect it has on profiles - OIDC, FAPI, etc
</pre>

  </div>

<?php require('../../../includes/_footer.php'); ?>
