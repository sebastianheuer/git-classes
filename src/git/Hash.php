<?php
namespace Phpeople\Git;

class Hash {

    private $long = '';

    /**
     * Hash constructor.
     *
     * @param string $long
     */
    public function __construct($long) {
        $this->long = $long;
    }

    /**
     * @return string
     */
    public function getLong() {
        return $this->long;
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->long;
    }

}