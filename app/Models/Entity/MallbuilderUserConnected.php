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
 * 会员绑定表

 * @Entity()
 * @Table(name="mallbuilder_user_connected")
 * @uses      MallbuilderUserConnected
 */
class MallbuilderUserConnected extends Model
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
     * @var string $nickname 名称
     * @Column(name="nickname", type="string", length=100)
     */
    private $nickname;

    /**
     * @var string $figureurl 地址
     * @Column(name="figureurl", type="string", length=100)
     */
    private $figureurl;

    /**
     * @var string $gender 性别
     * @Column(name="gender", type="string", length=10)
     */
    private $gender;

    /**
     * @var int $vip vip
     * @Column(name="vip", type="tinyint", default=0)
     */
    private $vip;

    /**
     * @var int $level level
     * @Column(name="level", type="tinyint", default=0)
     */
    private $level;

    /**
     * @var int $type 类型
     * @Column(name="type", type="tinyint", default=1)
     */
    private $type;

    /**
     * @var string $accessToken 访问命令
     * @Column(name="access_token", type="string", length=80)
     */
    private $accessToken;

    /**
     * @var string $clientId 客户端
     * @Column(name="client_id", type="string", length=80)
     */
    private $clientId;

    /**
     * @var string $openid 访问
     * @Column(name="openid", type="string", length=80)
     */
    private $openid;

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
     * 名称
     * @param string $value
     * @return $this
     */
    public function setNickname(string $value): self
    {
        $this->nickname = $value;

        return $this;
    }

    /**
     * 地址
     * @param string $value
     * @return $this
     */
    public function setFigureurl(string $value): self
    {
        $this->figureurl = $value;

        return $this;
    }

    /**
     * 性别
     * @param string $value
     * @return $this
     */
    public function setGender(string $value): self
    {
        $this->gender = $value;

        return $this;
    }

    /**
     * vip
     * @param int $value
     * @return $this
     */
    public function setVip(int $value): self
    {
        $this->vip = $value;

        return $this;
    }

    /**
     * level
     * @param int $value
     * @return $this
     */
    public function setLevel(int $value): self
    {
        $this->level = $value;

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
     * 访问命令
     * @param string $value
     * @return $this
     */
    public function setAccessToken(string $value): self
    {
        $this->accessToken = $value;

        return $this;
    }

    /**
     * 客户端
     * @param string $value
     * @return $this
     */
    public function setClientId(string $value): self
    {
        $this->clientId = $value;

        return $this;
    }

    /**
     * 访问
     * @param string $value
     * @return $this
     */
    public function setOpenid(string $value): self
    {
        $this->openid = $value;

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
     * 名称
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * 地址
     * @return string
     */
    public function getFigureurl()
    {
        return $this->figureurl;
    }

    /**
     * 性别
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * vip
     * @return int
     */
    public function getVip()
    {
        return $this->vip;
    }

    /**
     * level
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * 类型
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 访问命令
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * 客户端
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * 访问
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

}
