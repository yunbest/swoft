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
 * @Entity()
 * @Table(name="mallbuilder_news_comment")
 * @uses      MallbuilderNewsComment
 */
class MallbuilderNewsComment extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $uid 用户id
     * @Column(name="uid", type="string", length=64)
     * @Required()
     */
    private $uid;

    /**
     * @var int $pid 父id
     * @Column(name="pid", type="integer")
     * @Required()
     */
    private $pid;

    /**
     * @var string $nid 新闻id
     * @Column(name="nid", type="string", length=64)
     * @Required()
     */
    private $nid;

    /**
     * @var string $ctime 评论时间
     * @Column(name="ctime", type="timestamp", default="0000-00-00 00:00:00")
     */
    private $ctime;

    /**
     * @var string $clogo 评论头像
     * @Column(name="clogo", type="string", length=255)
     * @Required()
     */
    private $clogo;

    /**
     * @var string $cname 用户昵称
     * @Column(name="cname", type="string", length=255)
     * @Required()
     */
    private $cname;

    /**
     * @var string $comment 评论内容
     * @Column(name="comment", type="string", length=255)
     * @Required()
     */
    private $comment;

    /**
     * @var int $display 是否显示0：隐藏1：显示
     * @Column(name="display", type="integer")
     * @Required()
     */
    private $display;

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * 用户id
     * @param string $value
     * @return $this
     */
    public function setUid(string $value): self
    {
        $this->uid = $value;

        return $this;
    }

    /**
     * 父id
     * @param int $value
     * @return $this
     */
    public function setPid(int $value): self
    {
        $this->pid = $value;

        return $this;
    }

    /**
     * 新闻id
     * @param string $value
     * @return $this
     */
    public function setNid(string $value): self
    {
        $this->nid = $value;

        return $this;
    }

    /**
     * 评论时间
     * @param string $value
     * @return $this
     */
    public function setCtime(string $value): self
    {
        $this->ctime = $value;

        return $this;
    }

    /**
     * 评论头像
     * @param string $value
     * @return $this
     */
    public function setClogo(string $value): self
    {
        $this->clogo = $value;

        return $this;
    }

    /**
     * 用户昵称
     * @param string $value
     * @return $this
     */
    public function setCname(string $value): self
    {
        $this->cname = $value;

        return $this;
    }

    /**
     * 评论内容
     * @param string $value
     * @return $this
     */
    public function setComment(string $value): self
    {
        $this->comment = $value;

        return $this;
    }

    /**
     * 是否显示0：隐藏1：显示
     * @param int $value
     * @return $this
     */
    public function setDisplay(int $value): self
    {
        $this->display = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 用户id
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * 父id
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * 新闻id
     * @return string
     */
    public function getNid()
    {
        return $this->nid;
    }

    /**
     * 评论时间
     * @return mixed
     */
    public function getCtime()
    {
        return $this->ctime;
    }

    /**
     * 评论头像
     * @return string
     */
    public function getClogo()
    {
        return $this->clogo;
    }

    /**
     * 用户昵称
     * @return string
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * 评论内容
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * 是否显示0：隐藏1：显示
     * @return int
     */
    public function getDisplay()
    {
        return $this->display;
    }

}
