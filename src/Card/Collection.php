<?php

namespace IceProductionz\GameOfSnap\Card;

use Iterator;

/**
 * Class Collection
 *
 * @package IceProductionz\GameOfSnap\Card
 */
class Collection implements Iterator
{
    /**
     * @var Card[]
     */
    private $list;

    /**
     * Collection constructor.
     *
     * @param Card[] ...$list
     */
    public function __construct(Card ...$list)
    {
        $this->list = $list;
    }

    /**
     * Shuffle Card Deck
     *
     * @return bool
     */
    public function shuffle()
    {
        return shuffle($this->list);
    }

    /**
     * Shuffle Card Deck
     *
     * @return Card[]
     */
    public function all()
    {
        return $this->list;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return Card Can return any type.
     */
    public function current()
    {
        return current($this->list);
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return Card Any returned value is ignored.
     */
    public function next()
    {
        return next($this->list);
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return Card scalar on success, or null on failure.
     */
    public function key()
    {
        return key($this->list);
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return null !== key($this->list);
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        reset($this->list);
    }
}