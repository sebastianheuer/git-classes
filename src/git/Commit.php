<?php
namespace Phpeople\Git;

class Commit{

    /**
     * @var Hash
     */
    private $hash;

    /**
     * @var User
     */
    private $author;

    /**
     * @var \DateTime
     */
    private $authorTime;

    /**
     * @var User
     */
    private $committer;

    /**
     * @var \DateTime
     */
    private $committerTime;

    /**
     * @var string
     */
    private $subject = '';

    /**
     * @param Hash $hash
     * @param User $author
     * @param \DateTime $authorTime
     * @param User $committer
     * @param \DateTime $committerTime
     * @param string $subject
     */
    public function __construct(
        Hash $hash,
        User $author,
        \DateTime $authorTime,
        User $committer,
        \DateTime $committerTime,
        $subject
    ) {
        $this->hash = $hash;
        $this->author = $author;
        $this->authorTime = $authorTime;
        $this->committer = $committer;
        $this->committerTime = $committerTime;
        $this->subject = $subject;
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
    public function getAuthorTime() {
        return $this->authorTime;
    }

    /**
     * @return \DateTime
     */
    public function getCommitterTime() {
        return $this->committerTime;
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

    /**
     * @return string
     */
    public function getSubject() {
        return $this->subject;
    }

}