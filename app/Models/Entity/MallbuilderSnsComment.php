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
 * 评论表

 * @Entity()
 * @Table(name="mallbuilder_sns_comment")
 * @uses      MallbuilderSnsComment
 */
class MallbuilderSnsComment extends Model
{
    /**
     * @var int $id ID
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

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
     * @var int $originalId 原帖ID
     * @Column(name="original_id", type="integer")
     * @Required()
     */
    private $originalId;

    /**
     * @var string $content 评论内容
     * @Column(name="content", type="string", length=500)
     * @Required()
     */
    private $content;

    /**
     * @var int $addtime 添加时间
     * @Column(name="addtime", type="integer")
     * @Required()
     */
    private $addtime;

    /**
     * @var int $state 状态 0正常 1屏蔽
     * @Column(name="state", type="tinyint", default=0)
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
     * 原帖ID
     * @param int $value
     * @return $this
     */
    public function setOriginalId(int $value): self
    {
        $this->originalId = $value;

        return $this;
    }

    /**
     * 评论内容
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
     * 状态 0正常 1屏蔽
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
     * 原帖ID
     * @return int
     */
    public function getOriginalId()
    {
        return $this->originalId;
    }

    /**
     * 评论内容
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
     * 状态 0正常 1屏蔽
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

}
