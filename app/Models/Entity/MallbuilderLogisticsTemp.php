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
 * 自定义物流模板表

 * @Entity()
 * @Table(name="mallbuilder_logistics_temp")
 * @uses      MallbuilderLogisticsTemp
 */
class MallbuilderLogisticsTemp extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var string $title 模板名
     * @Column(name="title", type="string", length=50)
     */
    private $title;

    /**
     * @var string $priceType 按件数  按重量  按体积 
     * @Column(name="price_type", type="string", length=50)
     */
    private $priceType;

    /**
     * @var int $type 
     * @Column(name="type", type="tinyint", default=1)
     */
    private $type;

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
     * @var string $area 
     * @Column(name="area", type="string", length=255)
     */
    private $area;

    /**
     * @var int $uptime 最后编辑时间
     * @Column(name="uptime", type="integer")
     * @Required()
     */
    private $uptime;

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
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setUserid(int $value): self
    {
        $this->userid = $value;

        return $this;
    }

    /**
     * 模板名
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 按件数  按重量  按体积 
     * @param string $value
     * @return $this
     */
    public function setPriceType(string $value): self
    {
        $this->priceType = $value;

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
     * @param string $value
     * @return $this
     */
    public function setArea(string $value): self
    {
        $this->area = $value;

        return $this;
    }

    /**
     * 最后编辑时间
     * @param int $value
     * @return $this
     */
    public function setUptime(int $value): self
    {
        $this->uptime = $value;

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
     * 会员ID
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 模板名
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 按件数  按重量  按体积 
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
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
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * 最后编辑时间
     * @return int
     */
    public function getUptime()
    {
        return $this->uptime;
    }

}
