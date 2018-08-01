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
 * 充值卡表

 * @Entity()
 * @Table(name="pay_card")
 * @uses      PayCard
 */
class PayCard extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $cardNum 卡号
     * @Column(name="card_num", type="string", length=30)
     * @Required()
     */
    private $cardNum;

    /**
     * @var int $totalPrice 面额
     * @Column(name="total_price", type="integer")
     * @Required()
     */
    private $totalPrice;

    /**
     * @var float $givePrice 赠送
     * @Column(name="give_price", type="float", default=0)
     */
    private $givePrice;

    /**
     * @var string $password 密码
     * @Column(name="password", type="string", length=30)
     * @Required()
     */
    private $password;

    /**
     * @var int $statu 状态
     * @Column(name="statu", type="tinyint")
     * @Required()
     */
    private $statu;

    /**
     * @var string $useName 使用者
     * @Column(name="use_name", type="string", length=20)
     */
    private $useName;

    /**
     * @var int $creatTime 创建时间
     * @Column(name="creat_time", type="integer")
     * @Required()
     */
    private $creatTime;

    /**
     * @var int $stime 有效开始时间
     * @Column(name="stime", type="integer")
     */
    private $stime;

    /**
     * @var int $etime 到期时间
     * @Column(name="etime", type="integer")
     */
    private $etime;

    /**
     * @var string $pic 图片
     * @Column(name="pic", type="string", length=80)
     */
    private $pic;

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
     * 卡号
     * @param string $value
     * @return $this
     */
    public function setCardNum(string $value): self
    {
        $this->cardNum = $value;

        return $this;
    }

    /**
     * 面额
     * @param int $value
     * @return $this
     */
    public function setTotalPrice(int $value): self
    {
        $this->totalPrice = $value;

        return $this;
    }

    /**
     * 赠送
     * @param float $value
     * @return $this
     */
    public function setGivePrice(float $value): self
    {
        $this->givePrice = $value;

        return $this;
    }

    /**
     * 密码
     * @param string $value
     * @return $this
     */
    public function setPassword(string $value): self
    {
        $this->password = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 使用者
     * @param string $value
     * @return $this
     */
    public function setUseName(string $value): self
    {
        $this->useName = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setCreatTime(int $value): self
    {
        $this->creatTime = $value;

        return $this;
    }

    /**
     * 有效开始时间
     * @param int $value
     * @return $this
     */
    public function setStime(int $value): self
    {
        $this->stime = $value;

        return $this;
    }

    /**
     * 到期时间
     * @param int $value
     * @return $this
     */
    public function setEtime(int $value): self
    {
        $this->etime = $value;

        return $this;
    }

    /**
     * 图片
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

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
     * 卡号
     * @return string
     */
    public function getCardNum()
    {
        return $this->cardNum;
    }

    /**
     * 面额
     * @return int
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * 赠送
     * @return mixed
     */
    public function getGivePrice()
    {
        return $this->givePrice;
    }

    /**
     * 密码
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * 使用者
     * @return string
     */
    public function getUseName()
    {
        return $this->useName;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreatTime()
    {
        return $this->creatTime;
    }

    /**
     * 有效开始时间
     * @return int
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * 到期时间
     * @return int
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * 图片
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

}
