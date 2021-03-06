<?php
/*
  if the links redirected are from the following 'premimum domains',
  no ads will be given during the redirection
  contact dr.zhihua.lai@gmail.com if you recommend your domains in the list
  donation is appreciated:    dr.zhihua.lai@gmail.com
  https://rot47.net/_url/
*/

function IsPremiumDomain($url) {      
  $theurl = strtolower($url);
  $good_domains = array(
    "helloacm.com",
    "justyy.com",
    "steakovercooked.com",
    "google.com",
    "google.co.uk",
    "codingforspeed.com",
    "happyukgo.com",
    "bbc.co.uk",
    "tumblr.com",
    "instagram.com",
    "youtube.com",
    "ask.fm",
    "rot47.net",
    "uploadbeta.com",
    "zhihua-lai.com",
    "steemit.com",
    "busy.org",
    "isvbscriptdead.com"
  );
  $parse = parse_url($theurl);
  $domain = $parse['host'];
  return in_array($domain, $good_domains); 
}
