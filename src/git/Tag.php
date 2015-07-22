<?php
namespace Phpeople\Git;

class Tag {

    /**
     * @var string
     */
    private $label = '';

    /**
     * @var Commit
     */
    private $commit;

    /**
     * @var string
     */
    private $message = '';

    /**
     * @param string $label
     * @param Commit $commit
     * @param string $message
     */
    public function __construct($label, Commit $commit, $message = '') {
        $this->label = $label;
        $this->commit = $commit;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * @return Commit
     */
    public function getCommit() {
        return $this->commit;
    }

    /**
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * @return bool
     */
    public function isAnnotated() {
        return !empty($this->message);
    }

}