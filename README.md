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
    
# Author
[@justyy](https://steemit.com/@justyy)
