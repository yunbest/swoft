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
 * 广告位表

 * @Entity()
 * @Table(name="mallbuilder_advs")
 * @uses      MallbuilderAdvs
 */
class MallbuilderAdvs extends Model
{
    /**
     * @var int $iD ID
     * @Id()
     * @Column(name="ID", type="integer")
     */
    private $iD;

    /**
     * @var string $width 宽度
     * @Column(name="width", type="string", length=10)
     */
    private $width;

    /**
     * @var string $height 高度
     * @Column(name="height", type="string", length=10)
     */
    private $height;

    /**
     * @var int $adType 类型
     * @Column(name="ad_type", type="tinyint", default=1)
     */
    private $adType;

    /**
     * @var string $name 广告位名
     * @Column(name="name", type="string", length=50)
     * @Required()
     */
    private $name;

    /**
     * @var string $group 组
     * @Column(name="group", type="string", length=50)
     */
    private $group;

    /**
     * @var string $con 描述
     * @Column(name="con", type="text", length=16777215)
     */
    private $con;

    /**
     * @var string $date 创建时间
     * @Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float $price 价格
     * @Column(name="price", type="decimal")
     */
    private $price;

    /**
     * @var string $unit 单位
     * @Column(name="unit", type="string", length=5)
     * @Required()
     */
    private $unit;

    /**
     * @var int $total 广告数量
     * @Column(name="total", type="tinyint", default=0)
     */
    private $total;

    /**
     * ID
     * @param int $value
     * @return $this
     */
    public function setID(int $value)
    {
        $this->iD = $value;

        return $this;
    }

    /**
     * 宽度
     * @param string $value
     * @return $this
     */
    public function setWidth(string $value): self
    {
        $this->width = $value;

        return $this;
    }

    /**
     * 高度
     * @param string $value
     * @return $this
     */
    public function setHeight(string $value): self
    {
        $this->height = $value;

        return $this;
    }

    /**
     * 类型
     * @param int $value
     * @return $this
     */
    public function setAdType(int $value): self
    {
        $this->adType = $value;

        return $this;
    }

    /**
     * 广告位名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 组
     * @param string $value
     * @return $this
     */
    public function setGroup(string $value): self
    {
        $this->group = $value;

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
     * 创建时间
     * @param string $value
     * @return $this
     */
    public function setDate(string $value): self
    {
        $this->date = $value;

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
     * 单位
     * @param string $value
     * @return $this
     */
    public function setUnit(string $value): self
    {
        $this->unit = $value;

        return $this;
    }

    /**
     * 广告数量
     * @param int $value
     * @return $this
     */
    public function setTotal(int $value): self
    {
        $this->total = $value;

        return $this;
    }

    /**
     * ID
     * @return mixed
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * 宽度
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * 高度
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * 类型
     * @return mixed
     */
    public function getAdType()
    {
        return $this->adType;
    }

    /**
     * 广告位名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 组
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
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
     * 创建时间
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * 价格
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 单位
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * 广告数量
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

}
