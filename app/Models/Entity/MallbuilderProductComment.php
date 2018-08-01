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
 * 产品评论表

 * @Entity()
 * @Table(name="mallbuilder_product_comment")
 * @uses      MallbuilderProductComment
 */
class MallbuilderProductComment extends Model
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
     * @Required()
     */
    private $userid;

    /**
     * @var string $user 会员名
     * @Column(name="user", type="string", length=100)
     * @Required()
     */
    private $user;

    /**
     * @var int $fromid 发布者ID
     * @Column(name="fromid", type="integer")
     * @Required()
     */
    private $fromid;

    /**
     * @var int $pid 产品ID
     * @Column(name="pid", type="integer")
     * @Required()
     */
    private $pid;

    /**
     * @var int $puid 产品持有者ID
     * @Column(name="puid", type="integer")
     * @Required()
     */
    private $puid;

    /**
     * @var string $pname 产品名
     * @Column(name="pname", type="string", length=100)
     * @Required()
     */
    private $pname;

    /**
     * @var float $price 产品名
     * @Column(name="price", type="float")
     * @Required()
     */
    private $price;

    /**
     * @var string $con 内容
     * @Column(name="con", type="text", length=65535)
     * @Required()
     */
    private $con;

    /**
     * @var int $uptime 创建时间
     * @Column(name="uptime", type="integer")
     * @Required()
     */
    private $uptime;

    /**
     * @var int $goodbad 好坏程度
     * @Column(name="goodbad", type="tinyint", default=0)
     */
    private $goodbad;

    /**
     * @var int $status 评论状态0:未审核1:审核通过
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

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
    public function setUser(string $value): self
    {
        $this->user = $value;

        return $this;
    }

    /**
     * 发布者ID
     * @param int $value
     * @return $this
     */
    public function setFromid(int $value): self
    {
        $this->fromid = $value;

        return $this;
    }

    /**
     * 产品ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 产品持有者ID
     * @param int $value
     * @return $this
     */
    public function setPuid(int $value): self
    {
        $this->puid = $value;

        return $this;
    }

    /**
     * 产品名
     * @param string $value
     * @return $this
     */
    public function setPname(string $value): self
    {
        $this->pname = $value;

        return $this;
    }

    /**
     * 产品名
     * @param float $value
     * @return $this
     */
    public function setPrice(float $value): self
    {
        $this->price = $value;

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
     * 创建时间
     * @param int $value
     * @return $this
     */
    public function setUptime(int $value): self
    {
        $this->uptime = $value;

        return $this;
    }

    /**
     * 好坏程度
     * @param int $value
     * @return $this
     */
    public function setGoodbad(int $value): self
    {
        $this->goodbad = $value;

        return $this;
    }

    /**
     * 评论状态0:未审核1:审核通过
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 发布者ID
     * @return int
     */
    public function getFromid()
    {
        return $this->fromid;
    }

    /**
     * 产品ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 产品持有者ID
     * @return int
     */
    public function getPuid()
    {
        return $this->puid;
    }

    /**
     * 产品名
     * @return string
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * 产品名
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
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
     * 创建时间
     * @return int
     */
    public function getUptime()
    {
        return $this->uptime;
    }

    /**
     * 好坏程度
     * @return int
     */
    public function getGoodbad()
    {
        return $this->goodbad;
    }

    /**
     * 评论状态0:未审核1:审核通过
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
