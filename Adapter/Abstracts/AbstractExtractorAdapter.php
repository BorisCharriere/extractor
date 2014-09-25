<?php

/**
 * This file is part of the Extractor package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace Mmoreram\Extractor\Adapter\Abstracts;

use Symfony\Component\Finder\Finder;

/**
 * Class AbstractExtractorAdapter
 */
abstract class AbstractExtractorAdapter
{
    /**
     * @var string
     *
     * Directory
     */
    protected $directory;

    /**
     * Construct method
     *
     */
    public function __construct()
    {
        $this->directory = sys_get_temp_dir() . "/" . uniqid(time());
    }

    /**
     * Create finder from a directory
     *
     * @param string $directory Directory
     *
     * @return Finder
     */
    protected function createFinderFromDirectory($directory)
    {
        $finder = Finder::create();
        $finder->in($directory);

        return $finder;
    }
}
