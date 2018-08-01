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
 * 快照表

 * @Entity()
 * @Table(name="mallbuilder_product_snapshot")
 * @uses      MallbuilderProductSnapshot
 */
class MallbuilderProductSnapshot extends Model
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
     * @var int $productId 商品ID
     * @Column(name="product_id", type="integer")
     */
    private $productId;

    /**
     * @var int $specId 规格ID
     * @Column(name="spec_id", type="integer")
     * @Required()
     */
    private $specId;

    /**
     * @var int $memberId 会员ID
     * @Column(name="member_id", type="integer", default=0)
     */
    private $memberId;

    /**
     * @var int $shopId 店铺ID
     * @Column(name="shop_id", type="integer")
     */
    private $shopId;

    /**
     * @var int $catid 分类ID
     * @Column(name="catid", type="integer", default=0)
     */
    private $catid;

    /**
     * @var int $type 类型
     * @Column(name="type", type="tinyint", default=0)
     */
    private $type;

    /**
     * @var string $name 名称
     * @Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string $subhead 标题
     * @Column(name="subhead", type="string", length=255)
     */
    private $subhead;

    /**
     * @var string $brand 品牌
     * @Column(name="brand", type="string", length=100)
     */
    private $brand;

    /**
     * @var float $price 价格
     * @Column(name="price", type="float", default=0)
     */
    private $price;

    /**
     * @var float $freight 运费
     * @Column(name="freight", type="float", default=0)
     */
    private $freight;

    /**
     * @var string $pic 图片
     * @Column(name="pic", type="string", length=255)
     */
    private $pic;

    /**
     * @var int $uptime 更新时间
     * @Column(name="uptime", type="integer")
     */
    private $uptime;

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
     * @var string $detail 
     * @Column(name="detail", type="text", length=65535)
     */
    private $detail;

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
     * 规格ID
     * @param int $value
     * @return $this
     */
    public function setSpecId(int $value): self
    {
        $this->specId = $value;

        return $this;
    }

    /**
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * 店铺ID
     * @param int $value
     * @return $this
     */
    public function setShopId(int $value): self
    {
        $this->shopId = $value;

        return $this;
    }

    /**
     * 分类ID
     * @param int $value
     * @return $this
     */
    public function setCatid(int $value): self
    {
        $this->catid = $value;

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
     * 名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 标题
     * @param string $value
     * @return $this
     */
    public function setSubhead(string $value): self
    {
        $this->subhead = $value;

        return $this;
    }

    /**
     * 品牌
     * @param string $value
     * @return $this
     */
    public function setBrand(string $value): self
    {
        $this->brand = $value;

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
     * 更新时间
     * @param int $value
     * @return $this
     */
    public function setUptime(int $value): self
    {
        $this->uptime = $value;

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
     * @param string $value
     * @return $this
     */
    public function setDetail(string $value): self
    {
        $this->detail = $value;

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
     * 商品ID
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * 规格ID
     * @return int
     */
    public function getSpecId()
    {
        return $this->specId;
    }

    /**
     * 会员ID
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 店铺ID
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * 分类ID
     * @return int
     */
    public function getCatid()
    {
        return $this->catid;
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
     * 名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 标题
     * @return string
     */
    public function getSubhead()
    {
        return $this->subhead;
    }

    /**
     * 品牌
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
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
     * 运费
     * @return mixed
     */
    public function getFreight()
    {
        return $this->freight;
    }

    /**
     * 图片
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * 更新时间
     * @return int
     */
    public function getUptime()
    {
        return $this->uptime;
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
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

}
