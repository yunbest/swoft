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
 * 好友表

 * @Entity()
 * @Table(name="mallbuilder_sns_friend")
 * @uses      MallbuilderSnsFriend
 */
class MallbuilderSnsFriend extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $uid 会员ID
     * @Column(name="uid", type="integer")
     * @Required()
     */
    private $uid;

    /**
     * @var string $uname 会员名称
     * @Column(name="uname", type="string", length=100)
     */
    private $uname;

    /**
     * @var string $uimg 会员头像
     * @Column(name="uimg", type="string", length=100)
     */
    private $uimg;

    /**
     * @var int $fuid 朋友id
     * @Column(name="fuid", type="integer")
     * @Required()
     */
    private $fuid;

    /**
     * @var string $funame 好友会员名称
     * @Column(name="funame", type="string", length=100)
     * @Required()
     */
    private $funame;

    /**
     * @var string $fuimg 朋友头像
     * @Column(name="fuimg", type="string", length=100)
     */
    private $fuimg;

    /**
     * @var int $addtime 添加时间
     * @Column(name="addtime", type="integer")
     * @Required()
     */
    private $addtime;

    /**
     * @var int $state 关注状态 1为单方关注 2为双方关注
     * @Column(name="state", type="tinyint", default=1)
     */
    private $state;

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
    public function setUid(int $value): self
    {
        $this->uid = $value;

        return $this;
    }

    /**
     * 会员名称
     * @param string $value
     * @return $this
     */
    public function setUname(string $value): self
    {
        $this->uname = $value;

        return $this;
    }

    /**
     * 会员头像
     * @param string $value
     * @return $this
     */
    public function setUimg(string $value): self
    {
        $this->uimg = $value;

        return $this;
    }

    /**
     * 朋友id
     * @param int $value
     * @return $this
     */
    public function setFuid(int $value): self
    {
        $this->fuid = $value;

        return $this;
    }

    /**
     * 好友会员名称
     * @param string $value
     * @return $this
     */
    public function setFuname(string $value): self
    {
        $this->funame = $value;

        return $this;
    }

    /**
     * 朋友头像
     * @param string $value
     * @return $this
     */
    public function setFuimg(string $value): self
    {
        $this->fuimg = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param int $value
     * @return $this
     */
    public function setAddtime(int $value): self
    {
        $this->addtime = $value;

        return $this;
    }

    /**
     * 关注状态 1为单方关注 2为双方关注
     * @param int $value
     * @return $this
     */
    public function setState(int $value): self
    {
        $this->state = $value;

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
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * 会员名称
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * 会员头像
     * @return string
     */
    public function getUimg()
    {
        return $this->uimg;
    }

    /**
     * 朋友id
     * @return int
     */
    public function getFuid()
    {
        return $this->fuid;
    }

    /**
     * 好友会员名称
     * @return string
     */
    public function getFuname()
    {
        return $this->funame;
    }

    /**
     * 朋友头像
     * @return string
     */
    public function getFuimg()
    {
        return $this->fuimg;
    }

    /**
     * 添加时间
     * @return int
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * 关注状态 1为单方关注 2为双方关注
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

}
