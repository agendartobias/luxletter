<?php

declare(strict_types=1);
namespace In2code\Luxletter\Domain\Model;

use DateTime;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Class Queue
 */
class Queue extends AbstractEntity
{
    const TABLE_NAME = 'tx_luxletter_domain_model_queue';

    /**
     * @var string
     */
    protected $email = '';

    /**
     * @var Newsletter
     */
    protected $newsletter = null;

    /**
     * @var string
     */
    protected $bodytext = '';

    /**
     * @var User
     */
    protected $user = null;

    /**
     * @var DateTime
     */
    protected $datetime = null;

    /**
     * @var bool
     */
    protected $sent = false;

    /**
     * @var int
     */
    protected $failures = 0;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Queue
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return Newsletter|null
     */
    public function getNewsletter(): ?Newsletter
    {
        return $this->newsletter;
    }

    /**
     * @param Newsletter $newsletter
     * @return Queue
     */
    public function setNewsletter(Newsletter $newsletter): self
    {
        $this->newsletter = $newsletter;
        return $this;
    }

    /**
     * @return string
     */
    public function getBodytext(): string
    {
        return $this->bodytext;
    }

    /**
     * @param string $bodytext
     * @return Queue
     */
    public function setBodytext(string $bodytext): Queue
    {
        $this->bodytext = $bodytext;
        return $this;
    }

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Queue
     */
    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getDatetime(): ?DateTime
    {
        return $this->datetime;
    }

    /**
     * @param DateTime $datetime
     * @return Queue
     */
    public function setDatetime(DateTime $datetime): self
    {
        $this->datetime = $datetime;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSent(): bool
    {
        return $this->sent;
    }

    /**
     * @return Queue
     */
    public function setSent(): self
    {
        $this->sent = true;
        return $this;
    }

    /**
     * @return int
     */
    public function getFailures(): int
    {
        return $this->failures;
    }

    /**
     * @param int $failures
     * @return Queue
     */
    public function setFailures(int $failures): self
    {
        $this->failures = $failures;
        return $this;
    }
}
