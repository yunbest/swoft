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
 * 供求信息表

 * @Entity()
 * @Table(name="mallbuilder_offer")
 * @uses      MallbuilderOffer
 */
class MallbuilderOffer extends Model
{
    /**
     * @var int $oid 自动编号
     * @Id()
     * @Column(name="oid", type="integer")
     */
    private $oid;

    /**
     * @var int $userid 会员ID
     * @Column(name="userid", type="integer", default=0)
     */
    private $userid;

    /**
     * @var string $title 标题
     * @Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int $type 类型:1供应 2求购 3试用 4租赁
     * @Column(name="type", type="tinyint", default=1)
     */
    private $type;

    /**
     * @var string $detail 内容
     * @Column(name="detail", type="text", length=65535)
     */
    private $detail;

    /**
     * @var string $pic 主图片
     * @Column(name="pic", type="text", length=65535)
     */
    private $pic;

    /**
     * @var string $tel 手机
     * @Column(name="tel", type="string", length=30)
     */
    private $tel;

    /**
     * @var string $email 电子邮箱
     * @Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string $qq QQ
     * @Column(name="qq", type="string", length=20)
     */
    private $qq;

    /**
     * @var string $wechat 微信
     * @Column(name="wechat", type="string", length=30)
     */
    private $wechat;

    /**
     * @var string $category 商品类型
     * @Column(name="category", type="string", length=50)
     */
    private $category;

    /**
     * @var string $serial 商品编号
     * @Column(name="serial", type="string", length=30)
     */
    private $serial;

    /**
     * @var int $createTime 建立时间
     * @Column(name="create_time", type="integer")
     */
    private $createTime;

    /**
     * @var int $updateTime 更新时间
     * @Column(name="update_time", type="integer")
     */
    private $updateTime;

    /**
     * @var int $status 状态:-1删除 0待审核 1审核 2推荐
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * 自动编号
     * @param int $value
     * @return $this
     */
    public function setOid(int $value)
    {
        $this->oid = $value;

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
     * 标题
     * @param string $value
     * @return $this
     */
    public function setTitle(string $value): self
    {
        $this->title = $value;

        return $this;
    }

    /**
     * 类型:1供应 2求购 3试用 4租赁
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 内容
     * @param string $value
     * @return $this
     */
    public function setDetail(string $value): self
    {
        $this->detail = $value;

        return $this;
    }

    /**
     * 主图片
     * @param string $value
     * @return $this
     */
    public function setPic(string $value): self
    {
        $this->pic = $value;

        return $this;
    }

    /**
     * 手机
     * @param string $value
     * @return $this
     */
    public function setTel(string $value): self
    {
        $this->tel = $value;

        return $this;
    }

    /**
     * 电子邮箱
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * QQ
     * @param string $value
     * @return $this
     */
    public function setQq(string $value): self
    {
        $this->qq = $value;

        return $this;
    }

    /**
     * 微信
     * @param string $value
     * @return $this
     */
    public function setWechat(string $value): self
    {
        $this->wechat = $value;

        return $this;
    }

    /**
     * 商品类型
     * @param string $value
     * @return $this
     */
    public function setCategory(string $value): self
    {
        $this->category = $value;

        return $this;
    }

    /**
     * 商品编号
     * @param string $value
     * @return $this
     */
    public function setSerial(string $value): self
    {
        $this->serial = $value;

        return $this;
    }

    /**
     * 建立时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 更新时间
     * @param int $value
     * @return $this
     */
    public function setUpdateTime(int $value): self
    {
        $this->updateTime = $value;

        return $this;
    }

    /**
     * 状态:-1删除 0待审核 1审核 2推荐
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 自动编号
     * @return mixed
     */
    public function getOid()
    {
        return $this->oid;
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
     * 标题
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 类型:1供应 2求购 3试用 4租赁
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 内容
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * 主图片
     * @return string
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * 手机
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * 电子邮箱
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * QQ
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * 微信
     * @return string
     */
    public function getWechat()
    {
        return $this->wechat;
    }

    /**
     * 商品类型
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * 商品编号
     * @return string
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * 建立时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 更新时间
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * 状态:-1删除 0待审核 1审核 2推荐
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}
