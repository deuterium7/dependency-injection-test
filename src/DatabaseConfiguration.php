<?php

namespace AlexanderZabornyi\DependencyInjectionTest;

class DatabaseConfiguration
{
    private $password;
    private $port;
    private $host;
    private $username;

    /**
     * DatabaseConfiguration constructor.
     *
     * @param string $username
     * @param string $password
     * @param string $host
     * @param int $port
     */
    public function __construct(
        string $username,
        string $password,
        string $host,
        int $port
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->host = $host;
        $this->port = $port;
    }

    /**
     * Получить пароль
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Получить порт
     *
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * Получить хост
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Получить пользователя
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}