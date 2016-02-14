# URL-Shortener
PHP Class to shorten URLs by calling APIs

# Project Page
[https://rot47.net/_url/]([https://rot47.net/_url/)

# Sample Usage

    $obj = new URL();
    $response = $obj->shorten("https://steakovercooked.com", array("try" => 1));
    var_dump($response);
    $response = $obj->shorten("https://steakovercooked.com", array("private" => 1));
    var_dump($response);  
    echo $response->url;
    
# Premium Domains
The links of [premimum domains](https://github.com/DoctorLai/URL-Shortener/blob/master/IsPremiumDomain.php) are redirected without ANY Ads, For Free, For Ever!

We'll update the list of premium domains gradually and you can [contact me](https://steakovercooked.com/?do=Contact.Mail) if you want your domain in the list. :)

