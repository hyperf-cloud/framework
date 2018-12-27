<?php

namespace Hyperflex\Framework\Contracts;


interface ConfigInterface
{

    /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $key Identifier of the entry to look for.
     * @param mixed $default Default value of the entry when does not found.
     * @return mixed Entry.
     */
    public function get(string $key, $default);

    /**
     * Returns true if the container can return an entry for the given identifier.
     * Returns false otherwise.
     *
     * @param string $keys Identifier of the entry to look for.
     * @return bool
     */
    public function has(string $keys);

    /**
     * Set a value to the container by its identifier.
     *
     * @param string $key Identifier of the entry to set.
     * @param mixed $value The value that save to container.
     * @return void
     */
    public function set(string $key, $value);

}