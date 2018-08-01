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
 * 广告表

 * @Entity()
 * @Table(name="mallbuilder_advs_con")
 * @uses      MallbuilderAdvsCon
 */
class MallbuilderAdvsCon extends Model
{
    /**
     * @var int $iD ID
     * @Id()
     * @Column(name="ID", type="integer")
     */
    private $iD;

    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer")
     */
    private $userid;

    /**
     * @var int $groupId 广告位ID
     * @Column(name="group_id", type="integer")
     */
    private $groupId;

    /**
     * @var string $name 广告名
     * @Column(name="name", type="string", length=50)
     * @Required()
     */
    private $name;

    /**
     * @var string $type 类型
     * @Column(name="type", type="string", length=20)
     */
    private $type;

    /**
     * @var string $url 地址
     * @Column(name="url", type="string", length=200)
     */
    private $url;

    /**
     * @var string $con 内容
     * @Column(name="con", type="text", length=16777215)
     */
    private $con;

    /**
     * @var string $picName 图片
     * @Column(name="picName", type="string", length=255)
     * @Required()
     */
    private $picName;

    /**
     * @var int $isopen 是否开启
     * @Column(name="isopen", type="integer", default=0)
     */
    private $isopen;

    /**
     * @var int $ctime 创建时间
     * @Column(name="ctime", type="integer")
     */
    private $ctime;

    /**
     * @var string $province 省
     * @Column(name="province", type="string", length=50)
     */
    private $province;

    /**
     * @var string $city 市
     * @Column(name="city", type="string", length=50)
     */
    private $city;

    /**
     * @var string $area 区
     * @Column(name="area", type="string", length=50)
     */
    private $area;

    /**
     * @var string $street 
     * @Column(name="street", type="string", length=50)
     */
    private $street;

    /**
     * @var string $width 宽度
     * @Column(name="width", type="char", length=4)
     */
    private $width;

    /**
     * @var string $height 高度
     * @Column(name="height", type="char", length=4)
     */
    private $height;

    /**
     * @var int $catid 类别ID
     * @Column(name="catid", type="integer")
     */
    private $catid;

    /**
     * @var string $unit 单位
     * @Column(name="unit", type="string", length=5)
     */
    private $unit;

    /**
     * @var int $showTime 展出时间
     * @Column(name="show_time", type="tinyint", default=0)
     */
    private $showTime;

    /**
     * @var int $statu 0:待支付,1:购买成功,
     * @Column(name="statu", type="tinyint", default=0)
     */
    private $statu;

    /**
     * @var int $shownum 展示次数
     * @Column(name="shownum", type="integer", default=1)
     */
    private $shownum;

    /**
     * @var int $stime 开始时间
     * @Column(name="stime", type="integer")
     */
    private $stime;

    /**
     * @var int $etime 结束时间
     * @Column(name="etime", type="integer")
     */
    private $etime;

    /**
     * @var int $sortNum 排序
     * @Column(name="sort_num", type="tinyint", default=0)
     */
    private $sortNum;

    /**
     * @var int $cid 
     * @Column(name="cid", type="integer", default=0)
     */
    private $cid;

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
     * 广告位ID
     * @param int $value
     * @return $this
     */
    public function setGroupId(int $value): self
    {
        $this->groupId = $value;

        return $this;
    }

    /**
     * 广告名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 类型
     * @param string $value
     * @return $this
     */
    public function setType(string $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 地址
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * 内容
     * @param string $value
     * @return $this
     */
    public function setCon(string $value): self
    {
        $this->con = $value;

        return $this;
    }

    /**
     * 图片
     * @param string $value
     * @return $this
     */
    public function setPicName(string $value): self
    {
        $this->picName = $value;

        return $this;
    }

    /**
     * 是否开启
     * @param int $value
     * @return $this
     */
    public function setIsopen(int $value): self
    {
        $this->isopen = $value;

        return $this;
    }

    /**
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setCtime(int $value): self
    {
        $this->ctime = $value;

        return $this;
    }

    /**
     * 省
     * @param string $value
     * @return $this
     */
    public function setProvince(string $value): self
    {
        $this->province = $value;

        return $this;
    }

    /**
     * 市
     * @param string $value
     * @return $this
     */
    public function setCity(string $value): self
    {
        $this->city = $value;

        return $this;
    }

    /**
     * 区
     * @param string $value
     * @return $this
     */
    public function setArea(string $value): self
    {
        $this->area = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setStreet(string $value): self
    {
        $this->street = $value;

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
     * 类别ID
     * @param int $value
     * @return $this
     */
    public function setCatid(int $value): self
    {
        $this->catid = $value;

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
     * 展出时间
     * @param int $value
     * @return $this
     */
    public function setShowTime(int $value): self
    {
        $this->showTime = $value;

        return $this;
    }

    /**
     * 0:待支付,1:购买成功,
     * @param int $value
     * @return $this
     */
    public function setStatu(int $value): self
    {
        $this->statu = $value;

        return $this;
    }

    /**
     * 展示次数
     * @param int $value
     * @return $this
     */
    public function setShownum(int $value): self
    {
        $this->shownum = $value;

        return $this;
    }

    /**
     * 开始时间
     * @param int $value
     * @return $this
     */
    public function setStime(int $value): self
    {
        $this->stime = $value;

        return $this;
    }

    /**
     * 结束时间
     * @param int $value
     * @return $this
     */
    public function setEtime(int $value): self
    {
        $this->etime = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setSortNum(int $value): self
    {
        $this->sortNum = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCid(int $value): self
    {
        $this->cid = $value;

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
     * 会员ID
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 广告位ID
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * 广告名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 类型
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 地址
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 内容
     * @return string
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * 图片
     * @return string
     */
    public function getPicName()
    {
        return $this->picName;
    }

    /**
     * 是否开启
     * @return int
     */
    public function getIsopen()
    {
        return $this->isopen;
    }

    /**
     * 创建时间
     * @return int
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * 省
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * 市
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * 区
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
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
     * 类别ID
     * @return int
     */
    public function getCatid()
    {
        return $this->catid;
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
     * 展出时间
     * @return int
     */
    public function getShowTime()
    {
        return $this->showTime;
    }

    /**
     * 0:待支付,1:购买成功,
     * @return int
     */
    public function getStatu()
    {
        return $this->statu;
    }

    /**
     * 展示次数
     * @return mixed
     */
    public function getShownum()
    {
        return $this->shownum;
    }

    /**
     * 开始时间
     * @return int
     */
    public function getStime()
    {
        return $this->stime;
    }

    /**
     * 结束时间
     * @return int
     */
    public function getEtime()
    {
        return $this->etime;
    }

    /**
     * 排序
     * @return int
     */
    public function getSortNum()
    {
        return $this->sortNum;
    }

    /**
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

}
