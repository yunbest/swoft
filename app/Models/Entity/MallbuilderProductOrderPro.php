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
 * 订单产品表

 * @Entity()
 * @Table(name="mallbuilder_product_order_pro")
 * @uses      MallbuilderProductOrderPro
 */
class MallbuilderProductOrderPro extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $orderId 订单ID
     * @Column(name="order_id", type="string", length=20)
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
     * @var int $pcatid 
     * @Column(name="pcatid", type="integer")
     */
    private $pcatid;

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
     * @var float $price 价格
     * @Column(name="price", type="float", default=0)
     */
    private $price;

    /**
     * @var int $num  数量
     * @Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var int $time 创建时间
     * @Column(name="time", type="integer")
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
     * @var string $isTg 
     * @Column(name="is_tg", type="string", length=5, default="false")
     */
    private $isTg;

    /**
     * @var string $proCode 
     * @Column(name="pro_code", type="string", length=20)
     */
    private $proCode;

    /**
     * @var string $typ 商品类型,O为其他,M为儿童,B为成人
     * @Column(name="typ", type="string", length=2)
     */
    private $typ;

    /**
     * @var int $pcs 商品系数,(几件装)
     * @Column(name="pcs", type="integer", default=1)
     */
    private $pcs;

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
     * @param int $value
     * @return $this
     */
    public function setPcatid(int $value): self
    {
        $this->pcatid = $value;

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
     * 价格
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

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
     * @param int $value
     * @return $this
     */
    public function setTime(int $value): self
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
    public function setIsTg(string $value): self
    {
        $this->isTg = $value;

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
     * 商品类型,O为其他,M为儿童,B为成人
     * @param string $value
     * @return $this
     */
    public function setTyp(string $value): self
    {
        $this->typ = $value;

        return $this;
    }

    /**
     * 商品系数,(几件装)
     * @param int $value
     * @return $this
     */
    public function setPcs(int $value): self
    {
        $this->pcs = $value;

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
     * @return int
     */
    public function getPcatid()
    {
        return $this->pcatid;
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
     * 价格
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
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
     * @return int
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
     * @return mixed
     */
    public function getIsTg()
    {
        return $this->isTg;
    }

    /**
     * @return string
     */
    public function getProCode()
    {
        return $this->proCode;
    }

    /**
     * 商品类型,O为其他,M为儿童,B为成人
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * 商品系数,(几件装)
     * @return mixed
     */
    public function getPcs()
    {
        return $this->pcs;
    }

}
