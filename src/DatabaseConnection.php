<?php

namespace AlexanderZabornyi\DependencyInjectionTest;

class DatabaseConnection
{
    private $configuration;

    /**
     * DatabaseConnection constructor.
     *
     * @param DatabaseConfiguration $configuration
     */
    public function __construct(DatabaseConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * Получить DSN
     *
     * @return string
     */
    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }

}