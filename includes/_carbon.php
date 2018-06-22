<?php if($_SERVER['SERVER_NAME'] == 'oauth.net.dev'): ?>
  <div id="carbonads"><span><span class="carbon-wrap"><a href="#" class="carbon-img" target="_blank"><img src="/images/carbon.png" alt="" border="0" height="100" width="130" style="max-width:130px;"></a><a href="#" class="carbon-text" target="_blank">Python, Ruby, Go, Java, C#, Node.js, PHP - OAuth is for everyone</a></span><a href="http://carbonads.net/" class="carbon-poweredby" target="_blank">ads via Carbon</a></span></div>
<?php else: ?>
  <?php if(random_int(0, 1) == 0): ?>
    <script src="https://codefund.io/scripts/2829635d-9c7d-4590-9c72-42f4378add0d/embed.js"></script>
    <div id="codefund_ad"></div>
  <?php else: ?>
    <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=oauthnet" id="_carbonads_js"></script>
  <?php endif ?>
<?php endif; ?>
