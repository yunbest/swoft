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
 * 退货表

 * @Entity()
 * @Table(name="mallbuilder_return")
 * @uses      MallbuilderReturn
 */
class MallbuilderReturn extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $orderId 订单号
     * @Column(name="order_id", type="string", length=15)
     * @Required()
     */
    private $orderId;

    /**
     * @var string $refundId 退款号
     * @Column(name="refund_id", type="string", length=100)
     * @Required()
     */
    private $refundId;

    /**
     * @var int $memberId 买家ID
     * @Column(name="member_id", type="integer")
     * @Required()
     */
    private $memberId;

    /**
     * @var int $sellerId 卖家ID
     * @Column(name="seller_id", type="integer")
     * @Required()
     */
    private $sellerId;

    /**
     * @var int $productId 商品ID
     * @Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var float $refundPrice 退款金额
     * @Column(name="refund_price", type="float")
     */
    private $refundPrice;

    /**
     * @var string $reason 原因
     * @Column(name="reason", type="string", length=255)
     */
    private $reason;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=1)
     */
    private $status;

    /**
     * @var int $goodsStatus 货物状态
     * @Column(name="goods_status", type="tinyint", default=0)
     */
    private $goodsStatus;

    /**
     * @var int $type 类型
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * @var int $createTime 创建时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var string $closeReason 关闭原因
     * @Column(name="close_reason", type="string", length=255)
     */
    private $closeReason;

    /**
     * @var string $refuseReason 拒绝原因
     * @Column(name="refuse_reason", type="string", length=255)
     */
    private $refuseReason;

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
     * 订单号
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 退款号
     * @param string $value
     * @return $this
     */
    public function setRefundId(string $value): self
    {
        $this->refundId = $value;

        return $this;
    }

    /**
     * 买家ID
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * 卖家ID
     * @param int $value
     * @return $this
     */
    public function setSellerId(int $value): self
    {
        $this->sellerId = $value;

        return $this;
    }

    /**
     * 商品ID
     * @param int $value
     * @return $this
     */
    public function setProductId(int $value): self
    {
        $this->productId = $value;

        return $this;
    }

    /**
     * 退款金额
     * @param float $value
     * @return $this
     */
    public function setRefundPrice(float $value): self
    {
        $this->refundPrice = $value;

        return $this;
    }

    /**
     * 原因
     * @param string $value
     * @return $this
     */
    public function setReason(string $value): self
    {
        $this->reason = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 货物状态
     * @param int $value
     * @return $this
     */
    public function setGoodsStatus(int $value): self
    {
        $this->goodsStatus = $value;

        return $this;
    }

    /**
     * 类型
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 关闭原因
     * @param string $value
     * @return $this
     */
    public function setCloseReason(string $value): self
    {
        $this->closeReason = $value;

        return $this;
    }

    /**
     * 拒绝原因
     * @param string $value
     * @return $this
     */
    public function setRefuseReason(string $value): self
    {
        $this->refuseReason = $value;

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
     * 订单号
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 退款号
     * @return string
     */
    public function getRefundId()
    {
        return $this->refundId;
    }

    /**
     * 买家ID
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 卖家ID
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * 退款金额
     * @return float
     */
    public function getRefundPrice()
    {
        return $this->refundPrice;
    }

    /**
     * 原因
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * 状态
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 货物状态
     * @return int
     */
    public function getGoodsStatus()
    {
        return $this->goodsStatus;
    }

    /**
     * 类型
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 关闭原因
     * @return string
     */
    public function getCloseReason()
    {
        return $this->closeReason;
    }

    /**
     * 拒绝原因
     * @return string
     */
    public function getRefuseReason()
    {
        return $this->refuseReason;
    }

}
