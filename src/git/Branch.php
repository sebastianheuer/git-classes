<?php
namespace Phpeople\Git;

class Branch
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var Commit[]
     */
    private $commits = [];

    /**
     * @param string $name
     */
    public function __construct($name) {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Commit $commit
     */
    public function addCommit(Commit $commit) {
        $this->commits[(string)$commit->getHash()] = $commit;
    }

    /**
     * @return Commit[]
     */
    public function getCommits() {
        return $this->commits;
    }
}