<?php
  $index->content .= 
           "<p>The goal was to redirect all <span class=\"cod\">https://christianmontessorifellowship.com</span> visitors, to the following website: <span class=\"cod\">https://internationalcmi.com/</span>.<p>
		   <p>The domain registrar of <span class=\"cod\">christianmontessorifellowship.com</span> was Namecheap. After logging in to <span class=\"cod\">https://namecheap.com</span>, I clicked <span class=\"cod\">MANAGE</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/manageNamecheapDomain.jpg\" alt=\"Manage Namecheap domain\" width=\"1828\" height=\"1005\"></div>
		   <p>The site had the following nameservers configured:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/viewNamecheapNameservers.jpg\" alt=\"View Namecheap nameservers\" width=\"1820\" height=\"1002\"></div>
		   <p>The domain registrar of <span class=\"cod\">internationalcmi.com</span> was Cloudflare. After logging in to <span class=\"cod\">cloudflare.com</span>, under <span class=\"cod\">Domain Registration > Manage Domains</span>, I clicked the <span class=\"cod\">Manage</span> link:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/manageDomainOnCloudflare.jpg\" alt=\"Manage domain on Cloudflare\" width=\"1485\" height=\"801\"></div>
		   <p>I clicked <span class=\"cod\">Update DNS configuration</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/updateDNSConfigurationFromCloudflare.jpg\" alt=\"Update DNS configuration from Cloudflare\" width=\"1485\" height=\"804\"></div>
		   <p>I scrolled down to find the Cloudflare Nameservers:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/findCloudflareNameservers.jpg\" alt=\"Find Cloudflare Nameservers\" width=\"1488\" height=\"802\"></div>
		   <p>I went back to Namecheap to provide the Cloudflare Nameservers values and clicked the <span class=\"cod\">Save icon</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/saveUpdatedNameserverValuesOnCloudflare.jpg\" alt=\"Save updated nameserver values on Cloudflare\" width=\"1828\" height=\"1002\"></div>
		   <p>The domain <span class=\"cod\">christianmontessorifellowship.com</span> was pointed to <span class=\"cod\">Custom DNS</span> in previous steps. I confirmed that the DNSSEC feature for domains pointed to Custom nameservers was disabled:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/confirmDisabledDNSSEC.jpg\" alt=\"Confirm disabled DNSSEC\" width=\"1816\" height=\"1003\"></div>
		   <p>From the Cloudflare dashboard, I clicked <span class=\"cod\">Add a domain</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/addADomain.jpg\" alt=\"Add a domain\" width=\"1865\" height=\"1005\"></div>
		   <p>I entered the website's apex domain <span class=\"cod\">christianmontessorifellowship.com</span>. Then I choose <span class=\"cod\">Quick scan for DNS records</span> and clicked <span class=\"cod\">Continue</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/enterAnExistingDomain.jpg\" alt=\"Enter an existing domain\" width=\"1856\" height=\"1007\"></div>
		   <div>Published: 11:06 PM GMT · Mar 31, 2025</div>\n";
?>
