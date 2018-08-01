<?php
namespace App\Models\Entity;

use Swoft\Db\Model;
use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Types;

/**
 * 支付会员表

 * @Entity()
 * @Table(name="pay_member")
 * @uses      PayMember
 */
class PayMember extends Model
{
    /**
     * @var int $payId 
     * @Id()
     * @Column(name="pay_id", type="integer")
     */
    private $payId;

    /**
     * @var string $payEmail 
     * @Column(name="pay_email", type="string", length=100)
     */
    private $payEmail;

    /**
     * @var string $payMobile 
     * @Column(name="pay_mobile", type="string", length=30)
     */
    private $payMobile;

    /**
     * @var string $loginPass 
     * @Column(name="login_pass", type="string", length=32)
     */
    private $loginPass;

    /**
     * @var string $payPass 
     * @Column(name="pay_pass", type="string", length=32)
     */
    private $payPass;

    /**
     * @var string $realName 
     * @Column(name="real_name", type="string", length=30)
     */
    private $realName;

    /**
     * @var string $identityCard 
     * @Column(name="identity_card", type="string", length=30)
     */
    private $identityCard;

    /**
     * @var string $identityPic 
     * @Column(name="identity_pic", type="string", length=255)
     */
    private $identityPic;

    /**
     * @var string $profession 
     * @Column(name="profession", type="string", length=20)
     */
    private $profession;

    /**
     * @var string $logo 
     * @Column(name="logo", type="string", length=100)
     */
    private $logo;

    /**
     * @var int $userid 
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var float $cash 
     * @Column(name="cash", type="decimal", default=0)
     */
    private $cash;

    /**
     * @var float $unreachable 
     * @Column(name="unreachable", type="decimal", default=0)
     */
    private $unreachable;

    /**
     * @var string $emailVerify 
     * @Column(name="email_verify", type="string", length=5, default="false")
     */
    private $emailVerify;

    /**
     * @var string $mobileVerify 
     * @Column(name="mobile_verify", type="string", length=5, default="false")
     */
    private $mobileVerify;

    /**
     * @var int $identityVerify 0:未认证1:已认证2:未通过
     * @Column(name="identity_verify", type="tinyint", default=0)
     */
    private $identityVerify;

    /**
     * @var string $question 
     * @Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string $answer 
     * @Column(name="answer", type="string", length=255)
     */
    private $answer;

    /**
     * @var int $regtime 
     * @Column(name="regtime", type="integer")
     */
    private $regtime;

    /**
     * @var int $lastLoginTime 
     * @Column(name="lastLoginTime", type="integer")
     */
    private $lastLoginTime;

    /**
     * @param int $value
     * @return $this
     */
    public function setPayId(int $value)
    {
        $this->payId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPayEmail(string $value): self
    {
        $this->payEmail = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPayMobile(string $value): self
    {
        $this->payMobile = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLoginPass(string $value): self
    {
        $this->loginPass = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPayPass(string $value): self
    {
        $this->payPass = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setRealName(string $value): self
    {
        $this->realName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIdentityCard(string $value): self
    {
        $this->identityCard = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIdentityPic(string $value): self
    {
        $this->identityPic = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProfession(string $value): self
    {
        $this->profession = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setLogo(string $value): self
    {
        $this->logo = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setCash(float $value): self
    {
        $this->cash = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setUnreachable(float $value): self
    {
        $this->unreachable = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setEmailVerify(string $value): self
    {
        $this->emailVerify = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setMobileVerify(string $value): self
    {
        $this->mobileVerify = $value;

        return $this;
    }

    /**
     * 0:未认证1:已认证2:未通过
     * @param int $value
     * @return $this
     */
    public function setIdentityVerify(int $value): self
    {
        $this->identityVerify = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setQuestion(string $value): self
    {
        $this->question = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAnswer(string $value): self
    {
        $this->answer = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setRegtime(int $value): self
    {
        $this->regtime = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setLastLoginTime(int $value): self
    {
        $this->lastLoginTime = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayId()
    {
        return $this->payId;
    }

    /**
     * @return string
     */
    public function getPayEmail()
    {
        return $this->payEmail;
    }

    /**
     * @return string
     */
    public function getPayMobile()
    {
        return $this->payMobile;
    }

    /**
     * @return string
     */
    public function getLoginPass()
    {
        return $this->loginPass;
    }

    /**
     * @return string
     */
    public function getPayPass()
    {
        return $this->payPass;
    }

    /**
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * @return string
     */
    public function getIdentityCard()
    {
        return $this->identityCard;
    }

    /**
     * @return string
     */
    public function getIdentityPic()
    {
        return $this->identityPic;
    }

    /**
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @return mixed
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * @return mixed
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * @return mixed
     */
    public function getEmailVerify()
    {
        return $this->emailVerify;
    }

    /**
     * @return mixed
     */
    public function getMobileVerify()
    {
        return $this->mobileVerify;
    }

    /**
     * 0:未认证1:已认证2:未通过
     * @return int
     */
    public function getIdentityVerify()
    {
        return $this->identityVerify;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @return int
     */
    public function getRegtime()
    {
        return $this->regtime;
    }

    /**
     * @return int
     */
    public function getLastLoginTime()
    {
        return $this->lastLoginTime;
    }

}
