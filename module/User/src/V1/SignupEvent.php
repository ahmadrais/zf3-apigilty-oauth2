<?php

namespace User\V1;

use Zend\EventManager\Event;
use Aqilix\ORM\Entity\EntityInterface;

class SignupEvent extends Event
{
    /**#@+
     * Signup events triggered by eventmanager
     */
    const EVENT_NOTIFY = 'notify';
    const EVENT_INSERT_USER  = 'insert.user';
    const EVENT_INSERT_USER_ERROR = 'insert.user.error';
    /**#@-*/

    /**
     * @var Aqilix\ORM\Entity\EntityInterface
     */
    protected $userEntity;

    /**
     * @var array
     */
    protected $signupData;

    /**
     * @var string
     */
    protected $userActivationKey;

    /**
     * @var string
     */
    protected $userActivationUrl;

    /**
     * @var string
     */
    protected $userActivationMessage;

    /**
     * @return the $user
     */
    public function getUserEntity()
    {
        return $this->userEntity;
    }

    /**
     * @param Aqilix\ORM\Entity\EntityInterface $user
     */
    public function setUserEntity(EntityInterface $user)
    {
        $this->userEntity = $user;
    }

    /**
     * @return the $signupData
     */
    public function getSignupData()
    {
        return $this->signupData;
    }

    /**
     * @param Array $signupData
     */
    public function setSignupData(array $signupData)
    {
        $this->signupData = $signupData;
    }

    /**
     * @return the $userActivationKey
     */
    public function getUserActivationKey()
    {
        return $this->userActivationKey;
    }

    /**
     * @param string $userActivationKey
     */
    public function setUserActivationKey($userActivationKey)
    {
        $this->userActivationKey = $userActivationKey;
    }

    /**
     * @return $userActivationUrl
     */
    public function getUserActivationUrl()
    {
        return $this->userActivationUrl;
    }

    /**
     * @param string $userActivationUrl
     */
    public function setUserActivationUrl($userActivationUrl)
    {
        $this->userActivationUrl = $userActivationUrl;
    }

    /**
     * @return $userActivationMessage
     */
    public function getUserActivationMessage()
    {
        return $this->userActivationMessage;
    }

    /**
     * @param string $userActivationMessage
     */
    public function setUserActivationMessage($userActivationMessage)
    {
        $this->userActivationMessage = $userActivationMessage;
    }
}
