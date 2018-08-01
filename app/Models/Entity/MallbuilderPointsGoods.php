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
 * 积分商品表

 * @Entity()
 * @Table(name="mallbuilder_points_goods")
 * @uses      MallbuilderPointsGoods
 */
class MallbuilderPointsGoods extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $name 产品名称
     * @Column(name="name", type="string", length=100)
     * @Required()
     */
    private $name;

    /**
     * @var int $catid 分类ID
     * @Column(name="catid", type="integer", default=0)
     */
    private $catid;

    /**
     * @var float $price 产品原价
     * @Column(name="price", type="decimal", default=0)
     */
    private $price;

    /**
     * @var int $points 兑换所需积分
     * @Column(name="points", type="integer")
     * @Required()
     */
    private $points;

    /**
     * @var string $pic Logo
     * @Column(name="pic", type="string", length=100)
     * @Required()
     */
    private $pic;

    /**
     * @var string $sku 货号
     * @Column(name="sku", type="string", length=50)
     * @Required()
     */
    private $sku;

    /**
     * @var int $stock 库存数
     * @Column(name="stock", type="integer", default=0)
     */
    private $stock;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint")
     * @Required()
     */
    private $status;

    /**
     * @var int $createTime 添加时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var string $content 详细内容
     * @Column(name="content", type="text", length=65535)
     */
    private $content;

    /**
     * @var int $sellAmount 售出数量
     * @Column(name="sell_amount", type="integer", default=0)
     */
    private $sellAmount;

    /**
     * @var int $hits 浏览次数
     * @Column(name="hits", type="integer", default=0)
     */
    private $hits;

    /**
     * @var string $relationCode 关联的商品编码
     * @Column(name="relation_code", type="string", length=255)
     * @Required()
     */
    private $relationCode;

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
     * 产品名称
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

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
     * 产品原价
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 兑换所需积分
     * @param int $value
     * @return $this
     */
    public function setPoints(int $value): self
    {
        $this->points = $value;

        return $this;
    }

    /**
     * Logo
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

        return $this;
    }

    /**
     * 货号
     * @param string $value
     * @return $this
     */
    public function setSku(string $value): self
    {
        $this->sku = $value;

        return $this;
    }

    /**
     * 库存数
     * @param int $value
     * @return $this
     */
    public function setStock(int $value): self
    {
        $this->stock = $value;

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
     * 添加时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 详细内容
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * 售出数量
     * @param int $value
     * @return $this
     */
    public function setSellAmount(int $value): self
    {
        $this->sellAmount = $value;

        return $this;
    }

    /**
     * 浏览次数
     * @param int $value
     * @return $this
     */
    public function setHits(int $value): self
    {
        $this->hits = $value;

        return $this;
    }

    /**
     * 关联的商品编码
     * @param string $value
     * @return $this
     */
    public function setRelationCode(string $value): self
    {
        $this->relationCode = $value;

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
     * 产品名称
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * 产品原价
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 兑换所需积分
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Logo
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * 货号
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * 库存数
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 添加时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 详细内容
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 售出数量
     * @return int
     */
    public function getSellAmount()
    {
        return $this->sellAmount;
    }

    /**
     * 浏览次数
     * @return int
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * 关联的商品编码
     * @return string
     */
    public function getRelationCode()
    {
        return $this->relationCode;
    }

}
