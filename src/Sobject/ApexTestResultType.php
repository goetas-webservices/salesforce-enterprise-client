<?php

namespace GoetasWebservices\Client\SalesforceEnterprise\Sobject;

/**
 * Class representing ApexTestResultType
 *
 *
 * XSD Type: ApexTestResult
 */
class ApexTestResultType extends SObjectType
{

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass
     */
    private $apexClass = null;

    /**
     * @property string $apexClassId
     */
    private $apexClassId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexLogType $apexLog
     */
    private $apexLog = null;

    /**
     * @property string $apexLogId
     */
    private $apexLogId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $apexTestResults
     */
    private $apexTestResults = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestRunResultType $apexTestRunResult
     */
    private $apexTestRunResult = null;

    /**
     * @property string $apexTestRunResultId
     */
    private $apexTestRunResultId = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob
     */
    private $asyncApexJob = null;

    /**
     * @property string $asyncApexJobId
     */
    private $asyncApexJobId = null;

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * @property string $methodName
     */
    private $methodName = null;

    /**
     * @property string $outcome
     */
    private $outcome = null;

    /**
     * @property \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestQueueItemType $queueItem
     */
    private $queueItem = null;

    /**
     * @property string $queueItemId
     */
    private $queueItemId = null;

    /**
     * @property int $runTime
     */
    private $runTime = null;

    /**
     * @property string $stackTrace
     */
    private $stackTrace = null;

    /**
     * @property \DateTime $systemModstamp
     */
    private $systemModstamp = null;

    /**
     * @property \DateTime $testTimestamp
     */
    private $testTimestamp = null;

    /**
     * Gets as apexClass
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType
     */
    public function getApexClass()
    {
        return $this->apexClass;
    }

    /**
     * Sets a new apexClass
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass
     * @return self
     */
    public function setApexClass(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexClassType $apexClass)
    {
        $this->apexClass = $apexClass;
        return $this;
    }

    /**
     * Gets as apexClassId
     *
     * @return string
     */
    public function getApexClassId()
    {
        return $this->apexClassId;
    }

    /**
     * Sets a new apexClassId
     *
     * @param string $apexClassId
     * @return self
     */
    public function setApexClassId($apexClassId)
    {
        $this->apexClassId = $apexClassId;
        return $this;
    }

    /**
     * Gets as apexLog
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexLogType
     */
    public function getApexLog()
    {
        return $this->apexLog;
    }

    /**
     * Sets a new apexLog
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexLogType $apexLog
     * @return self
     */
    public function setApexLog(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexLogType $apexLog)
    {
        $this->apexLog = $apexLog;
        return $this;
    }

    /**
     * Gets as apexLogId
     *
     * @return string
     */
    public function getApexLogId()
    {
        return $this->apexLogId;
    }

    /**
     * Sets a new apexLogId
     *
     * @param string $apexLogId
     * @return self
     */
    public function setApexLogId($apexLogId)
    {
        $this->apexLogId = $apexLogId;
        return $this;
    }

    /**
     * Gets as apexTestResults
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType
     */
    public function getApexTestResults()
    {
        return $this->apexTestResults;
    }

    /**
     * Sets a new apexTestResults
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $apexTestResults
     * @return self
     */
    public function setApexTestResults(\GoetasWebservices\Client\SalesforceEnterprise\Types\QueryResultType $apexTestResults)
    {
        $this->apexTestResults = $apexTestResults;
        return $this;
    }

    /**
     * Gets as apexTestRunResult
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestRunResultType
     */
    public function getApexTestRunResult()
    {
        return $this->apexTestRunResult;
    }

    /**
     * Sets a new apexTestRunResult
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestRunResultType $apexTestRunResult
     * @return self
     */
    public function setApexTestRunResult(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestRunResultType $apexTestRunResult)
    {
        $this->apexTestRunResult = $apexTestRunResult;
        return $this;
    }

    /**
     * Gets as apexTestRunResultId
     *
     * @return string
     */
    public function getApexTestRunResultId()
    {
        return $this->apexTestRunResultId;
    }

    /**
     * Sets a new apexTestRunResultId
     *
     * @param string $apexTestRunResultId
     * @return self
     */
    public function setApexTestRunResultId($apexTestRunResultId)
    {
        $this->apexTestRunResultId = $apexTestRunResultId;
        return $this;
    }

    /**
     * Gets as asyncApexJob
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType
     */
    public function getAsyncApexJob()
    {
        return $this->asyncApexJob;
    }

    /**
     * Sets a new asyncApexJob
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob
     * @return self
     */
    public function setAsyncApexJob(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\AsyncApexJobType $asyncApexJob)
    {
        $this->asyncApexJob = $asyncApexJob;
        return $this;
    }

    /**
     * Gets as asyncApexJobId
     *
     * @return string
     */
    public function getAsyncApexJobId()
    {
        return $this->asyncApexJobId;
    }

    /**
     * Sets a new asyncApexJobId
     *
     * @param string $asyncApexJobId
     * @return self
     */
    public function setAsyncApexJobId($asyncApexJobId)
    {
        $this->asyncApexJobId = $asyncApexJobId;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as methodName
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * Sets a new methodName
     *
     * @param string $methodName
     * @return self
     */
    public function setMethodName($methodName)
    {
        $this->methodName = $methodName;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * @return string
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * @param string $outcome
     * @return self
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as queueItem
     *
     * @return \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestQueueItemType
     */
    public function getQueueItem()
    {
        return $this->queueItem;
    }

    /**
     * Sets a new queueItem
     *
     * @param \GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestQueueItemType $queueItem
     * @return self
     */
    public function setQueueItem(\GoetasWebservices\Client\SalesforceEnterprise\Sobject\ApexTestQueueItemType $queueItem)
    {
        $this->queueItem = $queueItem;
        return $this;
    }

    /**
     * Gets as queueItemId
     *
     * @return string
     */
    public function getQueueItemId()
    {
        return $this->queueItemId;
    }

    /**
     * Sets a new queueItemId
     *
     * @param string $queueItemId
     * @return self
     */
    public function setQueueItemId($queueItemId)
    {
        $this->queueItemId = $queueItemId;
        return $this;
    }

    /**
     * Gets as runTime
     *
     * @return int
     */
    public function getRunTime()
    {
        return $this->runTime;
    }

    /**
     * Sets a new runTime
     *
     * @param int $runTime
     * @return self
     */
    public function setRunTime($runTime)
    {
        $this->runTime = $runTime;
        return $this;
    }

    /**
     * Gets as stackTrace
     *
     * @return string
     */
    public function getStackTrace()
    {
        return $this->stackTrace;
    }

    /**
     * Sets a new stackTrace
     *
     * @param string $stackTrace
     * @return self
     */
    public function setStackTrace($stackTrace)
    {
        $this->stackTrace = $stackTrace;
        return $this;
    }

    /**
     * Gets as systemModstamp
     *
     * @return \DateTime
     */
    public function getSystemModstamp()
    {
        return $this->systemModstamp;
    }

    /**
     * Sets a new systemModstamp
     *
     * @param \DateTime $systemModstamp
     * @return self
     */
    public function setSystemModstamp(\DateTime $systemModstamp)
    {
        $this->systemModstamp = $systemModstamp;
        return $this;
    }

    /**
     * Gets as testTimestamp
     *
     * @return \DateTime
     */
    public function getTestTimestamp()
    {
        return $this->testTimestamp;
    }

    /**
     * Sets a new testTimestamp
     *
     * @param \DateTime $testTimestamp
     * @return self
     */
    public function setTestTimestamp(\DateTime $testTimestamp)
    {
        $this->testTimestamp = $testTimestamp;
        return $this;
    }


}

