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
 * 收货地址表

 * @Entity()
 * @Table(name="mallbuilder_delivery_address")
 * @uses      MallbuilderDeliveryAddress
 */
class MallbuilderDeliveryAddress extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer")
     * @Required()
     */
    private $userid;

    /**
     * @var string $name 联系人
     * @Column(name="name", type="string", length=40)
     * @Required()
     */
    private $name;

    /**
     * @var int $provinceid 省ID
     * @Column(name="provinceid", type="integer")
     * @Required()
     */
    private $provinceid;

    /**
     * @var int $cityid 市ID
     * @Column(name="cityid", type="integer")
     * @Required()
     */
    private $cityid;

    /**
     * @var int $areaid 区ID
     * @Column(name="areaid", type="integer")
     * @Required()
     */
    private $areaid;

    /**
     * @var string $area 省市区
     * @Column(name="area", type="string", length=255)
     * @Required()
     */
    private $area;

    /**
     * @var string $address 地址
     * @Column(name="address", type="string", length=50)
     * @Required()
     */
    private $address;

    /**
     * @var string $zip 邮编
     * @Column(name="zip", type="string", length=20)
     */
    private $zip;

    /**
     * @var string $tel 电话
     * @Column(name="tel", type="string", length=30)
     */
    private $tel;

    /**
     * @var string $mobile 手机
     * @Column(name="mobile", type="string", length=20)
     */
    private $mobile;

    /**
     * @var int $default 是否默认
     * @Column(name="default", type="tinyint", default=1)
     */
    private $default;

    /**
     * @var string $idCard 
     * @Column(name="id_card", type="string", length=255)
     * @Required()
     */
    private $idCard;

    /**
     * @var string $idNumber 
     * @Column(name="id_number", type="string", length=255)
     * @Required()
     */
    private $idNumber;

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
     * 联系人
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
    public function setAddress(string $value): self
    {
        $this->address = $value;

        return $this;
    }

    /**
     * 邮编
     * @param string $value
     * @return $this
     */
    public function setZip(string $value): self
    {
        $this->zip = $value;

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
     * 是否默认
     * @param int $value
     * @return $this
     */
    public function setDefault(int $value): self
    {
        $this->default = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIdCard(string $value): self
    {
        $this->idCard = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setIdNumber(string $value): self
    {
        $this->idNumber = $value;

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
     * 会员ID
     * @return int
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 联系人
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 邮编
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
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
     * 是否默认
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * @return string
     */
    public function getIdCard()
    {
        return $this->idCard;
    }

    /**
     * @return string
     */
    public function getIdNumber()
    {
        return $this->idNumber;
    }

}
