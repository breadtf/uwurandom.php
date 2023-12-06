# uwurandom.php

the best php library ever :3

### semi important note

uwurandom.php doesnt use cryptographically secure random numbers (cuz too lazy, feel free to add)
so if for some reason you need that, uhhh, good luck i guess

### installation and usage and stuff

i created a composer package for this so all you need to do is run

`composer require breadtf/uwurandom`

then copy this code here into whatever it is you need this for

```
<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

$uwurandom = new Breadtf\Uwurandom\uwurandom();

$uwu = $uwurandom -> generate(500);

echo $uwu;

?>
```

k byeee have fun :3
