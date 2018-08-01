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
 * 资金明细表

 * @Entity()
 * @Table(name="pay_cashflow")
 * @uses      PayCashflow
 */
class PayCashflow extends Model
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
     */
    private $payUid;

    /**
     * @var string $memberName 会员名
     * @Column(name="member_name", type="string", length=100)
     */
    private $memberName;

    /**
     * @var string $buyerEmail 买家账号
     * @Column(name="buyer_email", type="string", length=100)
     */
    private $buyerEmail;

    /**
     * @var string $sellerEmail 卖家账号
     * @Column(name="seller_email", type="string", length=100)
     */
    private $sellerEmail;

    /**
     * @var float $price 金钱
     * @Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @var string $flowId 流水账号
     * @Column(name="flow_id", type="string", length=50)
     */
    private $flowId;

    /**
     * @var string $orderId 
     * @Column(name="order_id", type="string", length=32)
     */
    private $orderId;

    /**
     * @var string $note 注解
     * @Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var string $censor 管理员
     * @Column(name="censor", type="string", length=50)
     */
    private $censor;

    /**
     * @var int $time 时间
     * @Column(name="time", type="integer")
     */
    private $time;

    /**
     * @var int $statu 0取消,1待处理,2已付款,3.发货中,4.成功,5.退货中,6.退货成功
     * @Column(name="statu", type="tinyint")
     */
    private $statu;

    /**
     * @var string $isRefund 
     * @Column(name="is_refund", type="string", length=5, default="false")
     */
    private $isRefund;

    /**
     * @var float $refundAmount 
     * @Column(name="refund_amount", type="float", default=0)
     */
    private $refundAmount;

    /**
     * @var string $returnUrl 返回地址
     * @Column(name="return_url", type="string", length=200)
     */
    private $returnUrl;

    /**
     * @var string $notifyUrl 通知地址
     * @Column(name="notify_url", type="string", length=200)
     */
    private $notifyUrl;

    /**
     * @var string $extraParam 额外参数
     * @Column(name="extra_param", type="string", length=100)
     */
    private $extraParam;

    /**
     * @var int $type 1直接到账 2担保接口
     * @Column(name="type", type="tinyint")
     */
    private $type;

    /**
     * @var int $mold 类型
     * @Column(name="mold", type="tinyint", default=0)
     */
    private $mold;

    /**
     * @var int $display 是否显示
     * @Column(name="display", type="tinyint", default=1)
     */
    private $display;

    /**
     * @var float $em 
     * @Column(name="em", type="float", default=0)
     */
    private $em;

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
     * 会员名
     * @param string $value
     * @return $this
     */
    public function setMemberName(string $value): self
    {
        $this->memberName = $value;

        return $this;
    }

    /**
     * 买家账号
     * @param string $value
     * @return $this
     */
    public function setBuyerEmail(string $value): self
    {
        $this->buyerEmail = $value;

        return $this;
    }

    /**
     * 卖家账号
     * @param string $value
     * @return $this
     */
    public function setSellerEmail(string $value): self
    {
        $this->sellerEmail = $value;

        return $this;
    }

    /**
     * 金钱
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 流水账号
     * @param string $value
     * @return $this
     */
    public function setFlowId(string $value): self
    {
        $this->flowId = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 注解
     * @param string $value
     * @return $this
     */
    public function setNote(string $value): self
    {
        $this->note = $value;

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
     * 时间
     * @param int $value
     * @return $this
     */
    public function setTime(int $value): self
    {
        $this->time = $value;

        return $this;
    }

    /**
     * 0取消,1待处理,2已付款,3.发货中,4.成功,5.退货中,6.退货成功
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIsRefund(string $value): self
    {
        $this->isRefund = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setRefundAmount(float $value): self
    {
        $this->refundAmount = $value;

        return $this;
    }

    /**
     * 返回地址
     * @param string $value
     * @return $this
     */
    public function setReturnUrl(string $value): self
    {
        $this->returnUrl = $value;

        return $this;
    }

    /**
     * 通知地址
     * @param string $value
     * @return $this
     */
    public function setNotifyUrl(string $value): self
    {
        $this->notifyUrl = $value;

        return $this;
    }

    /**
     * 额外参数
     * @param string $value
     * @return $this
     */
    public function setExtraParam(string $value): self
    {
        $this->extraParam = $value;

        return $this;
    }

    /**
     * 1直接到账 2担保接口
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 类型
     * @param int $value
     * @return $this
     */
    public function setMold(int $value): self
    {
        $this->mold = $value;

        return $this;
    }

    /**
     * 是否显示
     * @param int $value
     * @return $this
     */
    public function setDisplay(int $value): self
    {
        $this->display = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setEm(float $value): self
    {
        $this->em = $value;

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
     * 会员名
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * 买家账号
     * @return string
     */
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }

    /**
     * 卖家账号
     * @return string
     */
    public function getSellerEmail()
    {
        return $this->sellerEmail;
    }

    /**
     * 金钱
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 流水账号
     * @return string
     */
    public function getFlowId()
    {
        return $this->flowId;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 注解
     * @return string
     */
    public function getNote()
    {
        return $this->note;
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
     * 时间
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * 0取消,1待处理,2已付款,3.发货中,4.成功,5.退货中,6.退货成功
     * @return int
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * @return mixed
     */
    public function getIsRefund()
    {
        return $this->isRefund;
    }

    /**
     * @return mixed
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * 返回地址
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * 通知地址
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * 额外参数
     * @return string
     */
    public function getExtraParam()
    {
        return $this->extraParam;
    }

    /**
     * 1直接到账 2担保接口
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 类型
     * @return int
     */
    public function getMold()
    {
        return $this->mold;
    }

    /**
     * 是否显示
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @return mixed
     */
    public function getEm()
    {
        return $this->em;
    }

}
