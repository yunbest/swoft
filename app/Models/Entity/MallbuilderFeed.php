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
 * 反馈表

 * @Entity()
 * @Table(name="mallbuilder_feed")
 * @uses      MallbuilderFeed
 */
class MallbuilderFeed extends Model
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
     * @var string $company 公司名称
     * @Column(name="company", type="string", length=100)
     */
    private $company;

    /**
     * @var string $contact 联系人
     * @Column(name="contact", type="string", length=30)
     */
    private $contact;

    /**
     * @var string $email 邮箱
     * @Column(name="email", type="string", length=30)
     */
    private $email;

    /**
     * @var string $mes 内容
     * @Column(name="mes", type="text", length=65535)
     */
    private $mes;

    /**
     * @var string $iflook 是否观看
     * @Column(name="iflook", type="char", length=2)
     */
    private $iflook;

    /**
     * @var string $province 省
     * @Column(name="province", type="string", length=30)
     */
    private $province;

    /**
     * @var string $city 市
     * @Column(name="city", type="string", length=30)
     */
    private $city;

    /**
     * @var string $tell 电话
     * @Column(name="tell", type="string", length=30)
     */
    private $tell;

    /**
     * @var string $addr 地址
     * @Column(name="addr", type="string", length=100)
     */
    private $addr;

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
     * 公司名称
     * @param string $value
     * @return $this
     */
    public function setCompany(string $value): self
    {
        $this->company = $value;

        return $this;
    }

    /**
     * 联系人
     * @param string $value
     * @return $this
     */
    public function setContact(string $value): self
    {
        $this->contact = $value;

        return $this;
    }

    /**
     * 邮箱
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * 内容
     * @param string $value
     * @return $this
     */
    public function setMes(string $value): self
    {
        $this->mes = $value;

        return $this;
    }

    /**
     * 是否观看
     * @param string $value
     * @return $this
     */
    public function setIflook(string $value): self
    {
        $this->iflook = $value;

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
     * 电话
     * @param string $value
     * @return $this
     */
    public function setTell(string $value): self
    {
        $this->tell = $value;

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
     * 公司名称
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * 联系人
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * 邮箱
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 内容
     * @return string
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * 是否观看
     * @return string
     */
    public function getIflook()
    {
        return $this->iflook;
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
     * 电话
     * @return string
     */
    public function getTell()
    {
        return $this->tell;
    }

    /**
     * 地址
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }

}
