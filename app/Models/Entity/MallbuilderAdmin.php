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
 * 管理员表

 * @Entity()
 * @Table(name="mallbuilder_admin")
 * @uses      MallbuilderAdmin
 */
class MallbuilderAdmin extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $user 帐号
     * @Column(name="user", type="char", length=30)
     * @Required()
     */
    private $user;

    /**
     * @var string $name 用户名
     * @Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string $password 密码
     * @Column(name="password", type="char", length=35)
     * @Required()
     */
    private $password;

    /**
     * @var int $groupId 会员组
     * @Column(name="group_id", type="smallint", default=0)
     */
    private $groupId;

    /**
     * @var string $desc 描述
     * @Column(name="desc", type="text", length=65535)
     */
    private $desc;

    /**
     * @var int $logonums 登录次数
     * @Column(name="logonums", type="integer", default=0)
     */
    private $logonums;

    /**
     * @var int $lastlogotime 最后登录时间
     * @Column(name="lastlogotime", type="integer")
     */
    private $lastlogotime;

    /**
     * @var string $logoip 登录IP
     * @Column(name="logoip", type="string", length=30)
     */
    private $logoip;

    /**
     * @var string $province 省
     * @Column(name="province", type="string", length=60)
     */
    private $province;

    /**
     * @var string $city 市
     * @Column(name="city", type="string", length=60)
     */
    private $city;

    /**
     * @var string $area 区
     * @Column(name="area", type="string", length=60)
     */
    private $area;

    /**
     * @var string $street 
     * @Column(name="street", type="string", length=60)
     */
    private $street;

    /**
     * @var int $type 1manager
     * @Column(name="type", type="smallint")
     */
    private $type;

    /**
     * @var string $lang 语言
     * @Column(name="lang", type="string", length=10)
     */
    private $lang;

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
     * 帐号
     * @param string $value
     * @return $this
     */
    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }

    /**
     * 用户名
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 密码
     * @param string $value
     * @return $this
     */
    public function setPassword(string $value): self
    {
        $this->password = $value;

        return $this;
    }

    /**
     * 会员组
     * @param int $value
     * @return $this
     */
    public function setGroupId(int $value): self
    {
        $this->groupId = $value;

        return $this;
    }

    /**
     * 描述
     * @param string $value
     * @return $this
     */
    public function setDesc(string $value): self
    {
        $this->desc = $value;

        return $this;
    }

    /**
     * 登录次数
     * @param int $value
     * @return $this
     */
    public function setLogonums(int $value): self
    {
        $this->logonums = $value;

        return $this;
    }

    /**
     * 最后登录时间
     * @param int $value
     * @return $this
     */
    public function setLastlogotime(int $value): self
    {
        $this->lastlogotime = $value;

        return $this;
    }

    /**
     * 登录IP
     * @param string $value
     * @return $this
     */
    public function setLogoip(string $value): self
    {
        $this->logoip = $value;

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
     * 1manager
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 语言
     * @param string $value
     * @return $this
     */
    public function setLang(string $value): self
    {
        $this->lang = $value;

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
     * 帐号
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 用户名
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 密码
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 会员组
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * 描述
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * 登录次数
     * @return int
     */
    public function getLogonums()
    {
        return $this->logonums;
    }

    /**
     * 最后登录时间
     * @return int
     */
    public function getLastlogotime()
    {
        return $this->lastlogotime;
    }

    /**
     * 登录IP
     * @return string
     */
    public function getLogoip()
    {
        return $this->logoip;
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
     * 1manager
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 语言
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

}
