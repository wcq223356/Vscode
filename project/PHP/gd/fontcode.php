<?php

require 'function.php';

$Function = new PrintWater();

$str='白日依山尽黄河入海流欲穷千里目更上一层楼床前明明月光疑是地上霜剧透望明月低头思故乡';

$res = $Function->fontPrint($str, 4);