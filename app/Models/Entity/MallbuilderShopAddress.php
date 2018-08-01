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
 * 一店多地址表

 * @Entity()
 * @Table(name="mallbuilder_shop_address")
 * @uses      MallbuilderShopAddress
 */
class MallbuilderShopAddress extends Model
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
     * @var string $name 会员名
     * @Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var int $provinceid 省ID
     * @Column(name="provinceid", type="integer")
     */
    private $provinceid;

    /**
     * @var int $cityid 市ID
     * @Column(name="cityid", type="integer")
     */
    private $cityid;

    /**
     * @var int $areaid 区ID
     * @Column(name="areaid", type="integer")
     */
    private $areaid;

    /**
     * @var string $area 省市区
     * @Column(name="area", type="string", length=255)
     */
    private $area;

    /**
     * @var string $addr 地址
     * @Column(name="addr", type="string", length=150)
     */
    private $addr;

    /**
     * @var string $post 邮编
     * @Column(name="post", type="string", length=6)
     */
    private $post;

    /**
     * @var string $tel 电话
     * @Column(name="tel", type="string", length=20)
     */
    private $tel;

    /**
     * @var string $mobile 手机
     * @Column(name="mobile", type="string", length=15)
     */
    private $mobile;

    /**
     * @var string $company 公司名
     * @Column(name="company", type="string", length=50)
     */
    private $company;

    /**
     * @var string $con 描述
     * @Column(name="con", type="string", length=200)
     */
    private $con;

    /**
     * @var float $lng 经度
     * @Column(name="lng", type="float", default=0)
     */
    private $lng;

    /**
     * @var float $lat 纬度
     * @Column(name="lat", type="float", default=0)
     */
    private $lat;

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
     * 会员名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 省ID
     * @param int $value
     * @return $this
     */
    public function setProvinceid(int $value): self
    {
        $this->provinceid = $value;

        return $this;
    }

    /**
     * 市ID
     * @param int $value
     * @return $this
     */
    public function setCityid(int $value): self
    {
        $this->cityid = $value;

        return $this;
    }

    /**
     * 区ID
     * @param int $value
     * @return $this
     */
    public function setAreaid(int $value): self
    {
        $this->areaid = $value;

        return $this;
    }

    /**
     * 省市区
     * @param string $value
     * @return $this
     */
    public function setArea(string $value): self
    {
        $this->area = $value;

        return $this;
    }

    /**
     * 地址
     * @param string $value
     * @return $this
     */
    public function setAddr(string $value): self
    {
        $this->addr = $value;

        return $this;
    }

    /**
     * 邮编
     * @param string $value
     * @return $this
     */
    public function setPost(string $value): self
    {
        $this->post = $value;

        return $this;
    }

    /**
     * 电话
     * @param string $value
     * @return $this
     */
    public function setTel(string $value): self
    {
        $this->tel = $value;

        return $this;
    }

    /**
     * 手机
     * @param string $value
     * @return $this
     */
    public function setMobile(string $value): self
    {
        $this->mobile = $value;

        return $this;
    }

    /**
     * 公司名
     * @param string $value
     * @return $this
     */
    public function setCompany(string $value): self
    {
        $this->company = $value;

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
     * 经度
     * @param float $value
     * @return $this
     */
    public function setLng(float $value): self
    {
        $this->lng = $value;

        return $this;
    }

    /**
     * 纬度
     * @param float $value
     * @return $this
     */
    public function setLat(float $value): self
    {
        $this->lat = $value;

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
     * 会员名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 省ID
     * @return int
     */
    public function getProvinceid()
    {
        return $this->provinceid;
    }

    /**
     * 市ID
     * @return int
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * 区ID
     * @return int
     */
    public function getAreaid()
    {
        return $this->areaid;
    }

    /**
     * 省市区
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * 地址
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * 邮编
     * @return string
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * 电话
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * 手机
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * 公司名
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
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
     * 经度
     * @return mixed
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * 纬度
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

}
