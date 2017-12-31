---
# Things to do before:
- Make sure you edit your SQL Database parameters before you proceed. It's in "api/API.php"

# How to use?
- Simple! Open your "index.php" or your main heading site. Just add this on the top of all your code. On top of ```<html>```.

# Example:
```
<?php
include_once 'api/API.php';

$data = [
        'direct' => 'https://rtgnetwork.tk',
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db' => 'new'
        ];
/* $data has the default values if no data is inserted upon calling the class */    
$api = new API($data);
$api->onRedirect();

?>
```

# Suggestions and Problems
- If you have suggestions and you know how to do it, don't hesitate to make a PR and then submit. I'll take a look. If you have problems, don't forget to make an issue and then let me know on your problems. Make sure that you elaborate them!


# ALL RIGHTS RESERVED RTGNETWORK
