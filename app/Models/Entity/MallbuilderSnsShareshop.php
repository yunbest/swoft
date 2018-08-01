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
 * 共享店铺表

 * @Entity()
 * @Table(name="mallbuilder_sns_shareshop")
 * @uses      MallbuilderSnsShareshop
 */
class MallbuilderSnsShareshop extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $shopid 店铺ID
     * @Column(name="shopid", type="integer")
     * @Required()
     */
    private $shopid;

    /**
     * @var string $shopname 店铺名
     * @Column(name="shopname", type="string", length=100)
     * @Required()
     */
    private $shopname;

    /**
     * @var int $uid 会员ID
     * @Column(name="uid", type="integer")
     * @Required()
     */
    private $uid;

    /**
     * @var string $uname 会员名
     * @Column(name="uname", type="string", length=100)
     * @Required()
     */
    private $uname;

    /**
     * @var string $content 描述内容
     * @Column(name="content", type="string", length=500)
     */
    private $content;

    /**
     * @var int $addtime 添加时间
     * @Column(name="addtime", type="integer")
     * @Required()
     */
    private $addtime;

    /**
     * @var int $privacy 隐私可见度 0所有人可见 1好友可见 2仅自己可见
     * @Column(name="privacy", type="tinyint", default=0)
     */
    private $privacy;

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
     * 店铺ID
     * @param int $value
     * @return $this
     */
    public function setShopid(int $value): self
    {
        $this->shopid = $value;

        return $this;
    }

    /**
     * 店铺名
     * @param string $value
     * @return $this
     */
    public function setShopname(string $value): self
    {
        $this->shopname = $value;

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
     * 会员名
     * @param string $value
     * @return $this
     */
    public function setUname(string $value): self
    {
        $this->uname = $value;

        return $this;
    }

    /**
     * 描述内容
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

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
     * 隐私可见度 0所有人可见 1好友可见 2仅自己可见
     * @param int $value
     * @return $this
     */
    public function setPrivacy(int $value): self
    {
        $this->privacy = $value;

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
     * 店铺ID
     * @return int
     */
    public function getShopid()
    {
        return $this->shopid;
    }

    /**
     * 店铺名
     * @return string
     */
    public function getShopname()
    {
        return $this->shopname;
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
     * 会员名
     * @return string
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * 描述内容
     * @return string
     */
    public function getContent()
    {
        return $this->content;
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
     * 隐私可见度 0所有人可见 1好友可见 2仅自己可见
     * @return int
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

}
