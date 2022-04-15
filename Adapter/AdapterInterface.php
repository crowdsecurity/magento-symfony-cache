<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Adapter;

use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\CacheItem;

// Help opcache.preload discover always-needed symbols
class_exists(CacheItem::class);

if (\PHP_VERSION_ID >= 80000) {
    // We copy the 6.0.6 version on symfony/cache package
    /**
     * Interface for adapters managing instances of Symfony's CacheItem.
     *
     * @author Kévin Dunglas <dunglas@gmail.com>
     */
    interface AdapterInterface extends CacheItemPoolInterface
    {
        /**
         * {@inheritdoc}
         */
        public function getItem(mixed $key): CacheItem;

        /**
         * {@inheritdoc}
         *
         * @return iterable<string, CacheItem>
         */
        public function getItems(array $keys = []): iterable;

        /**
         * {@inheritdoc}
         */
        public function clear(string $prefix = ''): bool;
    }
}
else{
    // We keep the 5.4.7 version on symfony/cache package
    /**
     * Interface for adapters managing instances of Symfony's CacheItem.
     *
     * @author Kévin Dunglas <dunglas@gmail.com>
     */
    interface AdapterInterface extends CacheItemPoolInterface
    {
        /**
         * {@inheritdoc}
         *
         * @return CacheItem
         */
        public function getItem($key);

        /**
         * {@inheritdoc}
         *
         * @return \Traversable<string, CacheItem>
         */
        public function getItems(array $keys = []);

        /**
         * {@inheritdoc}
         *
         * @return bool
         */
        public function clear(string $prefix = '');
    }
}


