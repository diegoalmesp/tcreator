<?php

namespace Templates\Create;

use Symfony\Component\Finder\Finder;

class Creator
{
    protected $finder;
    protected $template;

    function __construct()
    {
        $this->finder = new Finder();
        $this->template = '';
    }

    public function getIndex()
    {
        $this->finder
            ->files()
            ->name('/^[0-9].+$/')
            ->in(__DIR__.'/../../../public');

        foreach ($this->finder as $file) {
            $this->template .= $file->getContents();
        }

        return $this->template;
    }
}

?>