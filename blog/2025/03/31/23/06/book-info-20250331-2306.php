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
		   <p>I entered the website's apex domain <span class=\"cod\">christianmontessorifellowship.com</span>. Then I chose <span class=\"cod\">Quick scan for DNS records</span> and clicked <span class=\"cod\">Continue</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/enterAnExistingDomain.jpg\" alt=\"Enter an existing domain\" width=\"1856\" height=\"1007\"></div>
		   <p>I clicked <span class=\"cod\">Select plan</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/clickSelectPlan.jpg\" alt=\"Click Select plan\" width=\"1852\" height=\"998\"></div>
		   <p>The initial result was <span class=\"cod\">Invalid nameservers</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/invalidNameservers.jpg\" alt=\"Invalid nameservers\" width=\"1860\" height=\"1003\"></div>
		   <p>I found at <a href=\"https://whois.domaintools.com/internationalcmi.com\">https://whois.domaintools.com/internationalcmi.com</a> the IP address of the hosting server</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/iPAddressOfTheHostingServer.jpg\" alt=\"IP address of the hosting server\" width=\"1682\" height=\"1007\"></div>
		   <p>I scrolled down and clicked <span class=\"cod\">Add record</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/addRecord.jpg\" alt=\"Click Add record\" width=\"1847\" height=\"1007\"></div>
		   <p>I provided the details for the new <span class=\"cod\">A</span> record and clicked <span class=\"cod\">Save</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/addARecord.jpg\" alt=\"Click Add record\" width=\"1855\" height=\"1012\"></div>
		   <p>I clicked <span class=\"cod\">Continue to activation</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/clickContinueToActivation.jpg\" alt=\"Click Continue to activation\" width=\"1857\" height=\"998\"></div>
		   <p>I found the assigned Cloudflare nameservers:</p>
		   <p>I clicked <span class=\"cod\">Continue to activation</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/assignedCloudflareNameserversPart1Of2.jpg\" alt=\"Assigned Cloudflare nameservers part 1 of 2\" width=\"1862\" height=\"1006\"></div>
		   <div><img src=\"/blog/2025/03/31/23/06/img/assignedCloudflareNameserversPart2Of2.jpg\" alt=\"Assigned Cloudflare nameservers part 2 of 2\" width=\"1857\" height=\"1008\"></div>
		   <p>I provided the new nameservers and clicked the Save icon:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/provideNewNameservers.jpg\" alt=\"Provide new nameservers\" width=\"1816\" height=\"1010\"></div>
		   <p>The change was saved:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/showSavedChange.jpg\" alt=\"Show saved change\" width=\"1827\" height=\"1006\"></div>
		   <p>I clicked <span class=\"cod\">Continue</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/clickContinueFromCloudflare.jpg\" alt=\"Click continue from Cloudflare\" width=\"1856\" height=\"1010\"></div>
		   <p>The following message appeared:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/finalMessageToWaitForChangesToApply.jpg\" alt=\"Final message to wait for changes to apply\" width=\"1868\" height=\"1007\"></div>
		   <p>The following error message appeared:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/errorMessageForWrongConfiguration.jpg\" alt=\"Error message for wrong configuration\" width=\"1722\" height=\"1003\"></div>
		   <p>I visited <a href=\"https://whois.domaintools.com/christianmontessorifellowship.com\">https://whois.domaintools.com/christianmontessorifellowship.com</a> to obtain a different IP address:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/findNewIPAddressToTry.jpg\" alt=\"Find new IP address to try\" width=\"1685\" height=\"1003\"></div>
		   <p>I saved the new IP address in the Cloudflare settings:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/saveNewIPAddressInCloudflareSettings.jpg\" alt=\"Save new IP address in the Cloudflare settings\" width=\"1855\" height=\"1008\"></div>
		   <p>I deleted the DNS record that I had created:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/deleteDnsRecord.jpg\" alt=\"Delete DNS record\" width=\"1857\" height=\"1007\"></div>
		   <p>I clicked <span class=\"cod\">Create Page Rule</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/createPageRule.jpg\" alt=\"Create Page Rule\" width=\"1842\" height=\"1000\"></div>
		   <p>I created a rule:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/saveAndDeployPageRule.jpg\" alt=\"Save and Deploy Page Rule\" width=\"1858\" height=\"1006\"></div>
		   <p>The <span class=\"cod\">proxied DNS record</span> link points to <a href=\"https://developers.cloudflare.com/dns/proxy-status/\">https://developers.cloudflare.com/dns/proxy-status/</a></span>. I clicked <span class=\"cod\">Create a new proxied DNS record</span>. I provided the following values:</p>
		   <table>
		     <tr>
		       <th>Type</th>
               <th>Name (required)</th>
               <th>IPv4 address (required)</th>
             </tr>
             <tr>
               <td>A</td>
               <td>www.christianmontessorifellowship.com</td>
               <td>192.0.2.1</td>
             </tr>
		   </table>
		   <p>I clicked <span class=\"cod\">Create record & deploy rule</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/createRecordAndDeployRule.jpg\" alt=\"Create record & deploy rule\" width=\"1862\" height=\"1011\"></div>
		   <p>The <span class=\"cod\">Page Rule</span> was created successfully:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/pageRuleCreatedSuccessfully.jpg\" alt=\"Page Rule created successfully\" width=\"1870\" height=\"1012\"></div>
		   <p>A DNS record was created, since the previous command was <span class=\"cod\">Create record & deploy rule</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/dnsRecordTypeACreatedAutomaticallyForPageRule.jpg\" alt=\"DNS record type A created automatically for Page Rule\" width=\"1855\" height=\"1006\"></div>
		   <p>I created a new rule:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/creationOfSecondPageRule.jpg\" alt=\"Creation of second Page Rule\" width=\"1866\" height=\"1007\"></div>
		   <div><img src=\"/blog/2025/03/31/23/06/img/completionOfCreationOfSecondRule.jpg\" alt=\"Completion of creation of second rule\" width=\"1872\" height=\"1011\"></div>
		   <p>The two rules were created successfully, and the corresponding DNS records type <span class=\"cod\">A</span>:</p>
		   <div><img src=\"/blog/2025/03/31/23/06/img/twoRulesCreatedSuccessfully.jpg\" alt=\"Two rules created successfully\" width=\"1857\" height=\"1013\"></div>
		   <div>Published: 11:06 PM GMT · Mar 31, 2025</div>\n";
?>