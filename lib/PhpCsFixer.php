<?php

namespace DavaHome;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

/**
 * Provides the ruleset for php-cs-fixer
 *
 * @see     https://github.com/FriendsOfPHP/PHP-CS-Fixer
 */
class PhpCsFixer
{
    /** @var Finder */
    protected $finder;

    public function __construct(Finder $finder)
    {
        $this->finder = $finder;
    }

    /**
     * @return Config
     */
    public function getRuleSet()
    {
        /** @var Config $config */
        $config = Config::create()
            ->setRules($this->getRules())
            ->setFinder($this->finder);

        return $config
            ->setLineEnding("\n")
            ->setIndent('    ')
            ->setRiskyAllowed(true);
    }

    /**
     * @return array
     */
    public function getRules()
    {
        return require_once __DIR__ . '/../config/rules.config.php';
    }

    /**
     * @param string $rootDir
     *
     * @return static
     */
    public static function createFromDir($rootDir)
    {
        return new static(Finder::create()->in($rootDir));
    }
}
