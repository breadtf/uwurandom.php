# uwurandom.php

the best php library ever :3

### semi important note

uwurandom.php doesnt use cryptographically secure random numbers (cuz too lazy, feel free to add)
so if for some reason you need that, uhhh, good luck i guess

### installation and usage and stuff

composer package coming soon probably

download uwurandom.php and put it in a library folder, like `lib`

then copy this code into ur php file

```
<?php
// replace lib with the path to ur uwurandom
require("lib/uwurandom.php");
$uwu = new uwurandom();
?>
```

then to use it just copy this

```
// 500 characters of uwu :3
$uwu -> generate(500);
```

note: the limit isnt very strict like it it only stops after x characters its not limited to 500 characters i really need to fix that yeah okay so maybe just put a limit on it in your code if you want idk
