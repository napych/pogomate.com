<?php

namespace Pogo\Data\Parser\Generator;

use Pogo\Data\Parser\Result\All;

class Data2D extends Common
{
    public function writePHP()
    {
        $this->prepare();

        $output = <<<PHP
<?php

namespace Pogo\Data\Generated;

PHP;

        if ($this->useString) {
            $output .= <<<PHP

use $this->useString;

PHP;
        }

        $code = [];
        foreach ($this->data as $key => $values) {
            $code[] = "        $key => [\n            " . implode(",\n            ", $values) . "\n        ]";
        }
        $code = implode(",\n", $code);
        $output .= <<<PHP

class $this->className
{
    const $this->constName = [
$code
    ];
}
PHP;
        file_put_contents(All::PHP_PATH . $this->className . '.php', $output);
    }
}