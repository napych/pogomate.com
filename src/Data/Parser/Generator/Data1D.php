<?php

namespace Pogo\Data\Parser\Generator;

use Pogo\Data\Parser\Result\All;

class Data1D extends Common
{
    /** @var string */
    protected $valuePrefix = null;

    /**
     * @param string $valuePrefix
     * @return Data1D
     */
    public function setValuePrefix(string $valuePrefix): Data1D
    {
        $this->valuePrefix = $valuePrefix;
        return $this;
    }

    protected function prepare()
    {
        if ($this->valuePrefix) {
            array_walk(
                $this->data,
                function (&$v, $k) {
                    $v = $this->valuePrefix . $v;
                }
            );
        }
        parent::prepare();
    }

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

        $code = '        ' . implode(",\n        ", $this->data);
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