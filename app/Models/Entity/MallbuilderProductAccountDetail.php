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
 * @Table(name="mallbuilder_product_account_detail")
 * @uses      MallbuilderProductAccountDetail
 */
class MallbuilderProductAccountDetail extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $orderId 订单ID
     * @Column(name="order_id", type="string", length=15)
     */
    private $orderId;

    /**
     * @var int $buyerId 买家ID
     * @Column(name="buyer_id", type="integer")
     * @Required()
     */
    private $buyerId;

    /**
     * @var int $pid 产品ID
     * @Column(name="pid", type="integer")
     */
    private $pid;

    /**
     * @var string $name 产品名
     * @Column(name="name", type="string", length=255)
     * @Required()
     */
    private $name;

    /**
     * @var string $pic 产品图片
     * @Column(name="pic", type="string", length=100)
     * @Required()
     */
    private $pic;

    /**
     * @var float $costPrice 成本价格
     * @Column(name="cost_price", type="float", default=0)
     */
    private $costPrice;

    /**
     * @var int $num  数量
     * @Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var string $time 创建时间
     * @Column(name="time", type="timestamp", default="CURRENT_TIMESTAMP")
     */
    private $time;

    /**
     * @var string $setmeal 
     * @Column(name="setmeal", type="string", length=20)
     */
    private $setmeal;

    /**
     * @var string $specName 
     * @Column(name="spec_name", type="string", length=255)
     */
    private $specName;

    /**
     * @var string $specValue 
     * @Column(name="spec_value", type="string", length=255)
     */
    private $specValue;

    /**
     * @var int $status 
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var float $freight 运费
     * @Column(name="freight", type="float", default=0)
     */
    private $freight;

    /**
     * @var string $proCode 
     * @Column(name="pro_code", type="string", length=20)
     */
    private $proCode;

    /**
     * @var string $baseCurrency 基本货币
     * @Column(name="base_currency", type="char", length=10)
     */
    private $baseCurrency;

    /**
     * @var string $logisticNo 物流单号
     * @Column(name="logistic_no", type="string", length=30)
     */
    private $logisticNo;

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
     * 订单ID
     * @param string $value
     * @return $this
     */
    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    /**
     * 买家ID
     * @param int $value
     * @return $this
     */
    public function setBuyerId(int $value): self
    {
        $this->buyerId = $value;

        return $this;
    }

    /**
     * 产品ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 产品名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 产品图片
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

        return $this;
    }

    /**
     * 成本价格
     * @param float $value
     * @return $this
     */
    public function setCostPrice(float $value): self
    {
        $this->costPrice = $value;

        return $this;
    }

    /**
     *  数量
     * @param int $value
     * @return $this
     */
    public function setNum(int $value): self
    {
        $this->num = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param string $value
     * @return $this
     */
    public function setTime(string $value): self
    {
        $this->time = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSetmeal(string $value): self
    {
        $this->setmeal = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSpecName(string $value): self
    {
        $this->specName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSpecValue(string $value): self
    {
        $this->specValue = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 运费
     * @param float $value
     * @return $this
     */
    public function setFreight(float $value): self
    {
        $this->freight = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProCode(string $value): self
    {
        $this->proCode = $value;

        return $this;
    }

    /**
     * 基本货币
     * @param string $value
     * @return $this
     */
    public function setBaseCurrency(string $value): self
    {
        $this->baseCurrency = $value;

        return $this;
    }

    /**
     * 物流单号
     * @param string $value
     * @return $this
     */
    public function setLogisticNo(string $value): self
    {
        $this->logisticNo = $value;

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
     * 订单ID
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 买家ID
     * @return int
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * 产品ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 产品名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 产品图片
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * 成本价格
     * @return mixed
     */
    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     *  数量
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * 创建时间
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return string
     */
    public function getSetmeal()
    {
        return $this->setmeal;
    }

    /**
     * @return string
     */
    public function getSpecName()
    {
        return $this->specName;
    }

    /**
     * @return string
     */
    public function getSpecValue()
    {
        return $this->specValue;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 运费
     * @return mixed
     */
    public function getFreight()
    {
        return $this->freight;
    }

    /**
     * @return string
     */
    public function getProCode()
    {
        return $this->proCode;
    }

    /**
     * 基本货币
     * @return string
     */
    public function getBaseCurrency()
    {
        return $this->baseCurrency;
    }

    /**
     * 物流单号
     * @return string
     */
    public function getLogisticNo()
    {
        return $this->logisticNo;
    }

}
