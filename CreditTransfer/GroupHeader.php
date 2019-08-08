<?php

/**
 * GroupHeader
 *
 * @author Perry Faro 2015
 * @license MIT
 */

namespace Sepa\CreditTransfer;

class GroupHeader {

    /**
     * @var string
     */
    protected $messageIdentification;

    /**
     * The initiating Party for this payment
     *
     * @var string
     */
    protected $initiatingPartyId;

    /**
     * @var integer
     */
    protected $numberOfTransactions = 0;

    /**
     * @var integer
     */
    protected $controlSum = 0;

    /**
     * @var string
     */
    protected $initiatingPartyName;

    /**
     * @var \DateTime
     */
    protected $creationDateTime;

    /**
     * @var bool|null
     */
    protected $batchBooking = null;

    /**
     * @param $messageIdentification
     * @param $initiatingPartyName
     */
    function __construct($messageIdentification = false, $initiatingPartyName = false) {
        $this->messageIdentification = $messageIdentification;
        $this->initiatingPartyName = $initiatingPartyName;
        $this->creationDateTime = new \DateTime();
    }

    /**
     * @return integer
     */
    public function getControlSum() {
        return $this->controlSum;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDateTime() {
        return $this->creationDateTime;
    }

    /**
     * @return string
     */
    public function getInitiatingPartyId() {
        return $this->initiatingPartyId;
    }

    /**
     * @return string
     */
    public function getInitiatingPartyName() {
        return $this->initiatingPartyName;
    }

    /**
     * @return integer
     */
    public function getNumberOfTransactions() {
        return $this->numberOfTransactions;
    }

    /**
     * @return string
     */
    public function getMessageIdentification() {
        return $this->messageIdentification;
    }

    /**
     * @return bool
     */
    public function isBatchBooking()
    {
        return $this->batchBooking;
    }

    /**
     * @return bool
     */
    public function isBatchBookingSet()
    {
        return $this->batchBooking !== null;
    }

    /**
     * 
     * @param integer $controlSum
     * @return \Sepa\CreditTransfer\GroupHeader
     */
    public function setControlSum($controlSum) {
        $this->controlSum = $controlSum;
        return $this;
    }

    /**
     * 
     * @param string $initiatingPartyId
     * @return \Sepa\CreditTransfer\GroupHeader
     */
    public function setInitiatingPartyId($initiatingPartyId) {
        $this->initiatingPartyId = $initiatingPartyId;
        return $this;
    }

    /**
     * 
     * @param string $initiatingPartyName
     * @return \Sepa\CreditTransfer\GroupHeader
     */
    public function setInitiatingPartyName($initiatingPartyName) {
        $this->initiatingPartyName = $initiatingPartyName;
        return $this;
    }

    /**
     * 
     * @param string $messageIdentification
     * @return \Sepa\CreditTransfer\GroupHeader
     */
    public function setMessageIdentification($messageIdentification) {
        $this->messageIdentification = $messageIdentification;
        return $this;
    }

    /**
     * 
     * @param integer $numberOfTransactions
     * @return \Sepa\CreditTransfer\GroupHeader
     */
    public function setNumberOfTransactions($numberOfTransactions) {
        $this->numberOfTransactions = $numberOfTransactions;
        return $this;
    }

    /**
     * @param bool|null $batchBooking
     */
    public function setBatchBooking($batchBooking)
    {
        $this->batchBooking = $batchBooking;
    }

}
