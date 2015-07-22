<?php
namespace Phpeople\Git;

class Commit{

    /**
     * @var Hash
     */
    private $hash;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var User
     */
    private $author;

    /**
     * @var User
     */
    private $committer;

    /**
     * Commit constructor.
     *
     * @param Hash      $hash
     * @param \DateTime $timestamp
     * @param User      $author
     * @param User      $committer
     */
    public function __construct(Hash $hash, \DateTime $timestamp, User $author, User $committer) {
        $this->hash = $hash;
        $this->timestamp = $timestamp;
        $this->author = $author;
        $this->committer = $committer;
    }

    /**
     * @return Hash
     */
    public function getHash() {
        return $this->hash;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp() {
        return $this->timestamp;
    }

    /**
     * @return User
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @return User
     */
    public function getCommitter() {
        return $this->committer;
    }

}