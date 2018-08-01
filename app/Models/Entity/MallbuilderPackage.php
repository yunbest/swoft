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
 * @Entity()
 * @Table(name="mallbuilder_package")
 * @uses      MallbuilderPackage
 */
class MallbuilderPackage extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $packageName 
     * @Column(name="package_name", type="string", length=160)
     * @Required()
     */
    private $packageName;

    /**
     * @var string $subhead 
     * @Column(name="subhead", type="string", length=255)
     */
    private $subhead;

    /**
     * @var string $desc 
     * @Column(name="desc", type="string", length=255)
     */
    private $desc;

    /**
     * @var float $price 
     * @Column(name="price", type="decimal")
     * @Required()
     */
    private $price;

    /**
     * @var string $pic 
     * @Column(name="pic", type="string", length=100)
     * @Required()
     */
    private $pic;

    /**
     * @var int $memberId 
     * @Column(name="member_id", type="integer")
     */
    private $memberId;

    /**
     * @var float $emsPrice 
     * @Column(name="ems_price", type="decimal")
     */
    private $emsPrice;

    /**
     * @var float $postPrice 
     * @Column(name="post_price", type="decimal")
     */
    private $postPrice;

    /**
     * @var float $expressPrice 
     * @Column(name="express_price", type="decimal")
     */
    private $expressPrice;

    /**
     * @var int $type 
     * @Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var string $keywords 
     * @Column(name="keywords", type="string", length=255)
     */
    private $keywords;

    /**
     * @var int $freightType 
     * @Column(name="freight_type", type="integer")
     */
    private $freightType;

    /**
     * @var int $freightId 
     * @Column(name="freight_id", type="integer")
     */
    private $freightId;

    /**
     * @var float $marketPrice 
     * @Column(name="market_price", type="decimal")
     */
    private $marketPrice;

    /**
     * @var int $startTimeType 
     * @Column(name="start_time_type", type="integer")
     */
    private $startTimeType;

    /**
     * @var int $startTime 
     * @Column(name="start_time", type="integer")
     */
    private $startTime;

    /**
     * @var int $endTime 
     * @Column(name="end_time", type="integer")
     */
    private $endTime;

    /**
     * @var int $validTime 
     * @Column(name="valid_time", type="integer")
     */
    private $validTime;

    /**
     * @var int $uptime 
     * @Column(name="uptime", type="integer")
     */
    private $uptime;

    /**
     * @var int $status 
     * @Column(name="status", type="integer", default=0)
     */
    private $status;

    /**
     * @var int $isShelves 
     * @Column(name="is_shelves", type="integer", default=0)
     */
    private $isShelves;

    /**
     * @var int $provinceId 
     * @Column(name="province_id", type="integer")
     */
    private $provinceId;

    /**
     * @var int $cityId 
     * @Column(name="city_id", type="integer")
     */
    private $cityId;

    /**
     * @var int $areaId 
     * @Column(name="area_id", type="integer")
     */
    private $areaId;

    /**
     * @var int $streetId 
     * @Column(name="street_id", type="integer")
     */
    private $streetId;

    /**
     * @var int $createTime 
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

    /**
     * @var string $operator 
     * @Column(name="operator", type="string", length=100)
     */
    private $operator;

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
     * @param string $value
     * @return $this
     */
    public function setPackageName(string $value): self
    {
        $this->packageName = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setSubhead(string $value): self
    {
        $this->subhead = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setEmsPrice(float $value): self
    {
        $this->emsPrice = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setPostPrice(float $value): self
    {
        $this->postPrice = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setExpressPrice(float $value): self
    {
        $this->expressPrice = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setKeywords(string $value): self
    {
        $this->keywords = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setFreightType(int $value): self
    {
        $this->freightType = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setFreightId(int $value): self
    {
        $this->freightId = $value;

        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setMarketPrice(float $value): self
    {
        $this->marketPrice = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStartTimeType(int $value): self
    {
        $this->startTimeType = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStartTime(int $value): self
    {
        $this->startTime = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setEndTime(int $value): self
    {
        $this->endTime = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setValidTime(int $value): self
    {
        $this->validTime = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setUptime(int $value): self
    {
        $this->uptime = $value;

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
     * @param int $value
     * @return $this
     */
    public function setIsShelves(int $value): self
    {
        $this->isShelves = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setProvinceId(int $value): self
    {
        $this->provinceId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCityId(int $value): self
    {
        $this->cityId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setAreaId(int $value): self
    {
        $this->areaId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStreetId(int $value): self
    {
        $this->streetId = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setOperator(string $value): self
    {
        $this->operator = $value;

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
     * @return string
     */
    public function getPackageName()
    {
        return $this->packageName;
    }

    /**
     * @return string
     */
    public function getSubhead()
    {
        return $this->subhead;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @return float
     */
    public function getEmsPrice()
    {
        return $this->emsPrice;
    }

    /**
     * @return float
     */
    public function getPostPrice()
    {
        return $this->postPrice;
    }

    /**
     * @return float
     */
    public function getExpressPrice()
    {
        return $this->expressPrice;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @return int
     */
    public function getFreightType()
    {
        return $this->freightType;
    }

    /**
     * @return int
     */
    public function getFreightId()
    {
        return $this->freightId;
    }

    /**
     * @return float
     */
    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    /**
     * @return int
     */
    public function getStartTimeType()
    {
        return $this->startTimeType;
    }

    /**
     * @return int
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @return int
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @return int
     */
    public function getValidTime()
    {
        return $this->validTime;
    }

    /**
     * @return int
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getIsShelves()
    {
        return $this->isShelves;
    }

    /**
     * @return int
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @return int
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * @return int
     */
    public function getStreetId()
    {
        return $this->streetId;
    }

    /**
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

}
