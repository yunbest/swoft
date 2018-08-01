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
 * 共享商品表

 * @Entity()
 * @Table(name="mallbuilder_sns_shareproduct")
 * @uses      MallbuilderSnsShareproduct
 */
class MallbuilderSnsShareproduct extends Model
{
    /**
     * @var int $id D
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $pid 商品ID
     * @Column(name="pid", type="integer")
     * @Required()
     */
    private $pid;

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
     * @var int $addtime 分享操作时间
     * @Column(name="addtime", type="integer")
     * @Required()
     */
    private $addtime;

    /**
     * @var int $likeaddtime 喜欢操作时间
     * @Column(name="likeaddtime", type="integer", default=0)
     */
    private $likeaddtime;

    /**
     * @var int $privacy 隐私可见度 0所有人可见 1好友可见 2仅自己可见
     * @Column(name="privacy", type="tinyint", default=0)
     */
    private $privacy;

    /**
     * @var int $commentcount 评论数
     * @Column(name="commentcount", type="integer", default=0)
     */
    private $commentcount;

    /**
     * @var int $isshare 是否分享 0为未分享 1为分享
     * @Column(name="isshare", type="tinyint", default=0)
     */
    private $isshare;

    /**
     * @var int $islike 是否喜欢 0为未喜欢 1为喜欢
     * @Column(name="islike", type="tinyint", default=0)
     */
    private $islike;

    /**
     * D
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 商品ID
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

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
     * 分享操作时间
     * @param int $value
     * @return $this
     */
    public function setAddtime(int $value): self
    {
        $this->addtime = $value;

        return $this;
    }

    /**
     * 喜欢操作时间
     * @param int $value
     * @return $this
     */
    public function setLikeaddtime(int $value): self
    {
        $this->likeaddtime = $value;

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
     * 评论数
     * @param int $value
     * @return $this
     */
    public function setCommentcount(int $value): self
    {
        $this->commentcount = $value;

        return $this;
    }

    /**
     * 是否分享 0为未分享 1为分享
     * @param int $value
     * @return $this
     */
    public function setIsshare(int $value): self
    {
        $this->isshare = $value;

        return $this;
    }

    /**
     * 是否喜欢 0为未喜欢 1为喜欢
     * @param int $value
     * @return $this
     */
    public function setIslike(int $value): self
    {
        $this->islike = $value;

        return $this;
    }

    /**
     * D
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 商品ID
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
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
     * 分享操作时间
     * @return int
     */
    public function getAddtime()
    {
        return $this->addtime;
    }

    /**
     * 喜欢操作时间
     * @return int
     */
    public function getLikeaddtime()
    {
        return $this->likeaddtime;
    }

    /**
     * 隐私可见度 0所有人可见 1好友可见 2仅自己可见
     * @return int
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * 评论数
     * @return int
     */
    public function getCommentcount()
    {
        return $this->commentcount;
    }

    /**
     * 是否分享 0为未分享 1为分享
     * @return int
     */
    public function getIsshare()
    {
        return $this->isshare;
    }

    /**
     * 是否喜欢 0为未喜欢 1为喜欢
     * @return int
     */
    public function getIslike()
    {
        return $this->islike;
    }

}
