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
 * 动态信息表

 * @Entity()
 * @Table(name="mallbuilder_sns")
 * @uses      MallbuilderSns
 */
class MallbuilderSns extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var int $originalId 原ID
     * @Column(name="original_id", type="integer", default=0)
     */
    private $originalId;

    /**
     * @var int $originalMemberId 原会员ID
     * @Column(name="original_member_id", type="integer", default=0)
     */
    private $originalMemberId;

    /**
     * @var int $originalStatus 原状态
     * @Column(name="original_status", type="tinyint", default=0)
     */
    private $originalStatus;

    /**
     * @var int $memberId 会员ID
     * @Column(name="member_id", type="integer")
     * @Required()
     */
    private $memberId;

    /**
     * @var string $memberName 会员名称
     * @Column(name="member_name", type="string", length=100)
     * @Required()
     */
    private $memberName;

    /**
     * @var string $title 标题
     * @Column(name="title", type="string", length=500)
     */
    private $title;

    /**
     * @var string $content 内容
     * @Column(name="content", type="text", length=65535)
     * @Required()
     */
    private $content;

    /**
     * @var string $img 图片
     * @Column(name="img", type="text", length=65535)
     */
    private $img;

    /**
     * @var int $type 2 pic 3pro 4shop 
     * @Column(name="type", type="tinyint", default=1)
     */
    private $type;

    /**
     * @var int $createTime 添加时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $status 状态
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var int $privacy 隐私可见度 0所有人可见 1好友可见 2仅自己可见
     * @Column(name="privacy", type="tinyint", default=0)
     */
    private $privacy;

    /**
     * @var int $commentCount 评论数
     * @Column(name="comment_count", type="integer", default=0)
     */
    private $commentCount;

    /**
     * @var int $copyCount 转发数
     * @Column(name="copy_count", type="integer", default=0)
     */
    private $copyCount;

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
     * 原ID
     * @param int $value
     * @return $this
     */
    public function setOriginalId(int $value): self
    {
        $this->originalId = $value;

        return $this;
    }

    /**
     * 原会员ID
     * @param int $value
     * @return $this
     */
    public function setOriginalMemberId(int $value): self
    {
        $this->originalMemberId = $value;

        return $this;
    }

    /**
     * 原状态
     * @param int $value
     * @return $this
     */
    public function setOriginalStatus(int $value): self
    {
        $this->originalStatus = $value;

        return $this;
    }

    /**
     * 会员ID
     * @param int $value
     * @return $this
     */
    public function setMemberId(int $value): self
    {
        $this->memberId = $value;

        return $this;
    }

    /**
     * 会员名称
     * @param string $value
     * @return $this
     */
    public function setMemberName(string $value): self
    {
        $this->memberName = $value;

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
     * 内容
     * @param string $value
     * @return $this
     */
    public function setContent(string $value): self
    {
        $this->content = $value;

        return $this;
    }

    /**
     * 图片
     * @param string $value
     * @return $this
     */
    public function setImg(string $value): self
    {
        $this->img = $value;

        return $this;
    }

    /**
     * 2 pic 3pro 4shop 
     * @param int $value
     * @return $this
     */
    public function setType(int $value): self
    {
        $this->type = $value;

        return $this;
    }

    /**
     * 添加时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 状态
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

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
    public function setCommentCount(int $value): self
    {
        $this->commentCount = $value;

        return $this;
    }

    /**
     * 转发数
     * @param int $value
     * @return $this
     */
    public function setCopyCount(int $value): self
    {
        $this->copyCount = $value;

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
     * 原ID
     * @return int
     */
    public function getOriginalId()
    {
        return $this->originalId;
    }

    /**
     * 原会员ID
     * @return int
     */
    public function getOriginalMemberId()
    {
        return $this->originalMemberId;
    }

    /**
     * 原状态
     * @return int
     */
    public function getOriginalStatus()
    {
        return $this->originalStatus;
    }

    /**
     * 会员ID
     * @return int
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 会员名称
     * @return string
     */
    public function getMemberName()
    {
        return $this->memberName;
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
     * 内容
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * 图片
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * 2 pic 3pro 4shop 
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 添加时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 状态
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
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
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * 转发数
     * @return int
     */
    public function getCopyCount()
    {
        return $this->copyCount;
    }

}
