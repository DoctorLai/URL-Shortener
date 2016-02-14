<?php
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
    "zhihua-lai.com"
  );
  $parse = parse_url($theurl);
  $domain = $parse['host'];
  return in_array($domain, $good_domains); 
}
