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
 * 公告表

 * @Entity()
 * @Table(name="mallbuilder_announcement")
 * @uses      MallbuilderAnnouncement
 */
class MallbuilderAnnouncement extends Model
{
    /**
     * @var int $id 
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $title 标题
     * @Column(name="title", type="string", length=100)
     * @Required()
     */
    private $title;

    /**
     * @var string $content 内容
     * @Column(name="content", type="text", length=65535)
     * @Required()
     */
    private $content;

    /**
     * @var string $url 跳转链接
     * @Column(name="url", type="string", length=100)
     */
    private $url;

    /**
     * @var int $createTime 发布时间
     * @Column(name="create_time", type="integer")
     * @Required()
     */
    private $createTime;

    /**
     * @var int $status 状态 0 为关闭 1为开启
     * @Column(name="status", type="tinyint", default=0)
     */
    private $status;

    /**
     * @var int $displayorder 排序
     * @Column(name="displayorder", type="smallint", default=255)
     */
    private $displayorder;

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
     * 跳转链接
     * @param string $value
     * @return $this
     */
    public function setUrl(string $value): self
    {
        $this->url = $value;

        return $this;
    }

    /**
     * 发布时间
     * @param int $value
     * @return $this
     */
    public function setCreateTime(int $value): self
    {
        $this->createTime = $value;

        return $this;
    }

    /**
     * 状态 0 为关闭 1为开启
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * 排序
     * @param int $value
     * @return $this
     */
    public function setDisplayorder(int $value): self
    {
        $this->displayorder = $value;

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
     * 跳转链接
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 发布时间
     * @return int
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * 状态 0 为关闭 1为开启
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 排序
     * @return mixed
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

}
