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
 * 提现申请表

 * @Entity()
 * @Table(name="pay_cashpickup")
 * @uses      PayCashpickup
 */
class PayCashpickup extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $payUid 会员支付ID
     * @Column(name="pay_uid", type="integer")
     * @Required()
     */
    private $payUid;

    /**
     * @var string $cashflowid 流水账号ID
     * @Column(name="cashflowid", type="string", length=50)
     */
    private $cashflowid;

    /**
     * @var float $amount 总数
     * @Column(name="amount", type="decimal")
     * @Required()
     */
    private $amount;

    /**
     * @var int $addTime 创建时间
     * @Column(name="add_time", type="integer")
     * @Required()
     */
    private $addTime;

    /**
     * @var string $censor 管理员
     * @Column(name="censor", type="string", length=50)
     */
    private $censor;

    /**
     * @var int $checkTime 操作时间
     * @Column(name="check_time", type="integer")
     */
    private $checkTime;

    /**
     * @var int $isSucceed 是否成功
     * @Column(name="is_succeed", type="tinyint", default=0)
     */
    private $isSucceed;

    /**
     * @var string $bankflow 银行流水账号
     * @Column(name="bankflow", type="string", length=50)
     */
    private $bankflow;

    /**
     * @var string $con 描述
     * @Column(name="con", type="text", length=65535)
     */
    private $con;

    /**
     * @var string $bank 银行
     * @Column(name="bank", type="string", length=50)
     */
    private $bank;

    /**
     * @var string $cardno 
     * @Column(name="cardno", type="string", length=32)
     */
    private $cardno;

    /**
     * @var string $cardname 
     * @Column(name="cardname", type="string", length=50)
     */
    private $cardname;

    /**
     * @var int $supportTime 
     * @Column(name="supportTime", type="integer", default=0)
     */
    private $supportTime;

    /**
     * @var float $fee 
     * @Column(name="fee", type="float", default=0)
     */
    private $fee;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 会员支付ID
     * @param int $value
     * @return $this
     */
    public function setPayUid(int $value): self
    {
        $this->payUid = $value;

        return $this;
    }

    /**
     * 流水账号ID
     * @param string $value
     * @return $this
     */
    public function setCashflowid(string $value): self
    {
        $this->cashflowid = $value;

        return $this;
    }

    /**
     * 总数
     * @param float $value
     * @return $this
     */
    public function setAmount(float $value): self
    {
        $this->amount = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setAddTime(int $value): self
    {
        $this->addTime = $value;

        return $this;
    }

    /**
     * 管理员
     * @param string $value
     * @return $this
     */
    public function setCensor(string $value): self
    {
        $this->censor = $value;

        return $this;
    }

    /**
     * 操作时间
     * @param int $value
     * @return $this
     */
    public function setCheckTime(int $value): self
    {
        $this->checkTime = $value;

        return $this;
    }

    /**
     * 是否成功
     * @param int $value
     * @return $this
     */
    public function setIsSucceed(int $value): self
    {
        $this->isSucceed = $value;

        return $this;
    }

    /**
     * 银行流水账号
     * @param string $value
     * @return $this
     */
    public function setBankflow(string $value): self
    {
        $this->bankflow = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setCon(string $value): self
    {
        $this->con = $value;

        return $this;
    }

    /**
     * 银行
     * @param string $value
     * @return $this
     */
    public function setBank(string $value): self
    {
        $this->bank = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardno(string $value): self
    {
        $this->cardno = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setCardname(string $value): self
    {
        $this->cardname = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setSupportTime(int $value): self
    {
        $this->supportTime = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setFee(float $value): self
    {
        $this->fee = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 会员支付ID
     * @return int
     */
    public function getPayUid()
    {
        return $this->payUid;
    }

    /**
     * 流水账号ID
     * @return string
     */
    public function getCashflowid()
    {
        return $this->cashflowid;
    }

    /**
     * 总数
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * 管理员
     * @return string
     */
    public function getCensor()
    {
        return $this->censor;
    }

    /**
     * 操作时间
     * @return int
     */
    public function getCheckTime()
    {
        return $this->checkTime;
    }

    /**
     * 是否成功
     * @return int
     */
    public function getIsSucceed()
    {
        return $this->isSucceed;
    }

    /**
     * 银行流水账号
     * @return string
     */
    public function getBankflow()
    {
        return $this->bankflow;
    }

    /**
     * 描述
     * @return string
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * 银行
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @return string
     */
    public function getCardno()
    {
        return $this->cardno;
    }

    /**
     * @return string
     */
    public function getCardname()
    {
        return $this->cardname;
    }

    /**
     * @return int
     */
    public function getSupportTime()
    {
        return $this->supportTime;
    }

    /**
     * @return mixed
     */
    public function getFee()
    {
        return $this->fee;
    }

}
