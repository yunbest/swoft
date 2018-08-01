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
 * 订单产品对账明细表

 * @Entity()
 * @Table(name="mallbuilder_product_account")
 * @uses      MallbuilderProductAccount
 */
class MallbuilderProductAccount extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $orderId 订单编号
     * @Column(name="order_id", type="string", length=60)
     * @Required()
     */
    private $orderId;

    /**
     * @var int $sellerId 店铺ID
     * @Column(name="seller_id", type="integer")
     * @Required()
     */
    private $sellerId;

    /**
     * @var float $totalPrice 成本价
     * @Column(name="total_price", type="decimal")
     * @Required()
     */
    private $totalPrice;

    /**
     * @var float $logisticCost 物流成本
     * @Column(name="logistic_cost", type="decimal")
     * @Required()
     */
    private $logisticCost;

    /**
     * @var string $currency 基本币种
     * @Column(name="currency", type="char", length=10)
     * @Required()
     */
    private $currency;

    /**
     * @var string $rate 当前汇率
     * @Column(name="rate", type="char", length=10)
     * @Required()
     */
    private $rate;

    /**
     * @var int $status 0为未对账 1为已对账 2为已审核
     * @Column(name="status", type="tinyint")
     * @Required()
     */
    private $status;

    /**
     * @var string $accountTime 对账时间
     * @Column(name="account_time", type="datetime")
     * @Required()
     */
    private $accountTime;

    /**
     * @var string $auditTime 审核时间
     * @Column(name="audit_time", type="datetime")
     * @Required()
     */
    private $auditTime;

    /**
     * @var string $auditUser 审核人
     * @Column(name="audit_user", type="char", length=20)
     * @Required()
     */
    private $auditUser;

    /**
     * @var string $createTime 创建时间
     * @Column(name="create_time", type="timestamp", default="CURRENT_TIMESTAMP")
     */
    private $createTime;

    /**
     * @var string $productName 产品名称
     * @Column(name="product_name", type="string", length=50)
     * @Required()
     */
    private $productName;

    /**
     * @var float $weight 商品重量
     * @Column(name="weight", type="float", default=0)
     */
    private $weight;

    /**
     * @var string $logisticNo 快递单号
     * @Column(name="logistic_no", type="string", length=30)
     * @Required()
     */
    private $logisticNo;

    /**
     * @var string $consignee 收货人
     * @Column(name="consignee", type="string", length=10)
     * @Required()
     */
    private $consignee;

    /**
     * @var string $proCode 商品编码
     * @Column(name="pro_code", type="string", length=30)
     * @Required()
     */
    private $proCode;

    /**
     * @var int $num 商品数量
     * @Column(name="num", type="integer", default=1)
     */
    private $num;

    /**
     * @var float $singlePrice 单品价格
     * @Column(name="single_price", type="decimal", default=0)
     */
    private $singlePrice;

    /**
     * @var float $sumprice 总价
     * @Column(name="sumprice", type="decimal", default=0)
     */
    private $sumprice;

    /**
     * @var float $cubage 重量
     * @Column(name="cubage", type="decimal", default=0)
     */
    private $cubage;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 订单编号
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 店铺ID
     * @param int $value
     * @return $this
     */
    public function setSellerId(int $value): self
    {
        $this->sellerId = $value;

        return $this;
    }

    /**
     * 成本价
     * @param float $value
     * @return $this
     */
    public function setTotalPrice(float $value): self
    {
        $this->totalPrice = $value;

        return $this;
    }

    /**
     * 物流成本
     * @param float $value
     * @return $this
     */
    public function setLogisticCost(float $value): self
    {
        $this->logisticCost = $value;

        return $this;
    }

    /**
     * 基本币种
     * @param string $value
     * @return $this
     */
    public function setCurrency(string $value): self
    {
        $this->currency = $value;

        return $this;
    }

    /**
     * 当前汇率
     * @param string $value
     * @return $this
     */
    public function setRate(string $value): self
    {
        $this->rate = $value;

        return $this;
    }

    /**
     * 0为未对账 1为已对账 2为已审核
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 对账时间
     * @param string $value
     * @return $this
     */
    public function setAccountTime(string $value): self
    {
        $this->accountTime = $value;

        return $this;
    }

    /**
     * 审核时间
     * @param string $value
     * @return $this
     */
    public function setAuditTime(string $value): self
    {
        $this->auditTime = $value;

        return $this;
    }

    /**
     * 审核人
     * @param string $value
     * @return $this
     */
    public function setAuditUser(string $value): self
    {
        $this->auditUser = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param string $value
     * @return $this
     */
    public function setCreateTime(string $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 产品名称
     * @param string $value
     * @return $this
     */
    public function setProductName(string $value): self
    {
        $this->productName = $value;

        return $this;
    }

    /**
     * 商品重量
     * @param float $value
     * @return $this
     */
    public function setWeight(float $value): self
    {
        $this->weight = $value;

        return $this;
    }

    /**
     * 快递单号
     * @param string $value
     * @return $this
     */
    public function setLogisticNo(string $value): self
    {
        $this->logisticNo = $value;

        return $this;
    }

    /**
     * 收货人
     * @param string $value
     * @return $this
     */
    public function setConsignee(string $value): self
    {
        $this->consignee = $value;

        return $this;
    }

    /**
     * 商品编码
     * @param string $value
     * @return $this
     */
    public function setProCode(string $value): self
    {
        $this->proCode = $value;

        return $this;
    }

    /**
     * 商品数量
     * @param int $value
     * @return $this
     */
    public function setNum(int $value): self
    {
        $this->num = $value;

        return $this;
    }

    /**
     * 单品价格
     * @param float $value
     * @return $this
     */
    public function setSinglePrice(float $value): self
    {
        $this->singlePrice = $value;

        return $this;
    }

    /**
     * 总价
     * @param float $value
     * @return $this
     */
    public function setSumprice(float $value): self
    {
        $this->sumprice = $value;

        return $this;
    }

    /**
     * 重量
     * @param float $value
     * @return $this
     */
    public function setCubage(float $value): self
    {
        $this->cubage = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 订单编号
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 店铺ID
     * @return int
     */
    public function getSellerId()
    {
        return $this->sellerId;
    }

    /**
     * 成本价
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * 物流成本
     * @return float
     */
    public function getLogisticCost()
    {
        return $this->logisticCost;
    }

    /**
     * 基本币种
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * 当前汇率
     * @return string
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * 0为未对账 1为已对账 2为已审核
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 对账时间
     * @return string
     */
    public function getAccountTime()
    {
        return $this->accountTime;
    }

    /**
     * 审核时间
     * @return string
     */
    public function getAuditTime()
    {
        return $this->auditTime;
    }

    /**
     * 审核人
     * @return string
     */
    public function getAuditUser()
    {
        return $this->auditUser;
    }

    /**
     * 创建时间
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 产品名称
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * 商品重量
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * 快递单号
     * @return string
     */
    public function getLogisticNo()
    {
        return $this->logisticNo;
    }

    /**
     * 收货人
     * @return string
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * 商品编码
     * @return string
     */
    public function getProCode()
    {
        return $this->proCode;
    }

    /**
     * 商品数量
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * 单品价格
     * @return mixed
     */
    public function getSinglePrice()
    {
        return $this->singlePrice;
    }

    /**
     * 总价
     * @return mixed
     */
    public function getSumprice()
    {
        return $this->sumprice;
    }

    /**
     * 重量
     * @return mixed
     */
    public function getCubage()
    {
        return $this->cubage;
    }

}
